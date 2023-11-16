<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\OrderCreated;
use App\Mail\ClientMailSender;
use Illuminate\Support\Facades\Mail;
use Stripe;

class OrderController extends Controller
{
    function order(Request $req){
        $planIdByClient = $req['plainID'];
        $searchPlan = DB::table('plans')
            ->join('plancategory','plancategory.id','=','plans.planCategoryId')
            ->select('plans.id as id','plans.*','plancategory.id as PLCID','plancategory.title as PLCTITLE')
            ->where('plans.id',$planIdByClient)
            ->get();

        $getPlanItems = DB::table('planitems')   
            ->where('planId',$searchPlan[0]->id)
            ->select('itemsDescriptions')
            ->get();

        
        

        return view('welcome',[
            'name' => $req['name'],
            'email' => $req['email'],
            'phone' => $req['phone'],
            'plan' => $searchPlan,
            'planItems' => $getPlanItems
        ]);
    }

    function orderProcess(Request $req){
        $orderNumber = "CLD-".random_int(1000, 9999)."DIR";     
        $imagePaths = [];
        if ($req->hasFile('website_imge')) {
            $imagePaths = [];
            foreach ($req->file('website_imge') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads'), $imageName);
                $imagestoUpload = 'uploads/' . $imageName;
                array_push($imagePaths,$imagestoUpload);
            }  
        }
        
      
        
        
        $customerInDB = DB::table('customers')->insert([
            'email' => $req->input('customer_email'),
            'name' => $req->input('customer_name'),
            'phone' => $req->input('customer_phone'),
            'stripeid' => "Not Added Under Payment Process"
        ]);


      


       $PName =  $req->input('package_name');
       $PFeatures = $req->input('features');

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $product = Stripe\product::create([
            'name' => $req->input('package_name'),
            'images' => ['https://www.creativelogodesigns.io/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo.8080cd64.png&w=256&q=75'],
            'description' => "Package Name : " .$PName . "Package Details :". json_encode( $PFeatures) ,
            
        ]);

        $total = $req->input('package_price') * 100;
        $price = Stripe\price::create([
            'unit_amount' => $total,
            'currency' => 'usd',
            'product' => $product->id,
        ]);

        $checkout = Stripe\checkout\session::create([
            'success_url' => 'http://127.0.0.1:8000/order-complete/{CHECKOUT_SESSION_ID}',
            'line_items' => [
                [
                'price' => $price->id,
                'quantity' => 1,
                ],
            ],
            'billing_address_collection' => 'required',
            'mode' => 'payment',
            "invoice_creation" => [
                "enabled" => true
            ],
            'customer_email' => $req->input('customer_email'),
            "customer_creation" => "always",
            "phone_number_collection" => [
                "enabled" => true
            ],
            "metadata" => [
                'ORDID' => $orderNumber
            ],
        ]);


        $order = DB::table('orders')->insert([
            'orderNumber' => $orderNumber,
            'orderDate' => date('d-m-Y'),
            'orderFrom' => "Create Logo Design",
            'packageName' => $req->input('package_name'),
            'packagePrice' => $req->input('package_price'),
            'stripeCustomerID' => "NUll",
            'stripePaymentID' => "Null",
            'stripeInvoiceLink' => "Null",
            'orderStatus' => 'Payment Not Paid',
            'orderPaymentStatus' => 'UnPaid'
        ]);

        $IMGupload = DB::table('orderbreif')->insert([
            "ORDID" => $orderNumber,
            "reDesign" => $req->input('re-design'),
            "logoTitle" => $req->input('logoname'),
            "tagline" => $req->input('tagline'),
            "businessDescription" => $req->input('description'),
            "dislikes" => $req->input('avoid-description'),
            "existingWebsites" => $req->input('existing-website'),
            "images" => json_encode($imagePaths)
        ]);
        
        $data = [
            'email' => $req->input('customer_email'),
            'name' => $req->input('customer_name'),
            'phone' => $req->input('customer_phone'),
            "ORDID" => $orderNumber,
            'packageName' => $req->input('package_name'),
            'packagePrice' => $req->input('package_price'),
            'orderStatus' => 'Payment Not Paid',
            'StripePaymentLink' => $checkout->url,
            "reDesign" => $req->input('re-design'),
            "logoTitle" => $req->input('logoname'),
            "tagline" => ($req->input('tagline') != "") ? $req->input('tagline') : "Client Did Not Fill",
            "businessDescription" => ($req->input('description') != "") ? $req->input('description') : "Client Did Not Fill",
            "dislikes" => ($req->input('avoid-description') != "") ? $req->input('avoid-description') : "Client Did Not Fill",
            "existingWebsites" => ($req->input('existing-website') != "") ? $req->input('existing-website') : "Client Did Not Fill",
            "images" => (count($imagePaths) > 0 ) ? $imagePaths : "Client Did Not Fill"
        ];
        try {
            Mail::to('harrykennedy.cs@gmail.com')->send(new OrderCreated($data));
            return redirect($checkout->url);
        } catch (\Exception $e) {
            // Handle the exception
            return "Error sending email: " . $e->getMessage();
        }
        
        
        
    }

    function orderComplete(Request $req,$stripepaymentID){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $confrimation = Stripe\checkout\session::retrieve($stripepaymentID);
        $customerEmail = $confrimation['customer_details']->email;
        $customerStripeID = $confrimation->customer;
        $ORDERID = $confrimation['metadata']->ORDID;
        $INVID = $confrimation->invoice;
        $updateCustomer = DB::table('customers')->where('email',$customerEmail)->update([
            'email' => $customerStripeID
        ]);

        $invoice = Stripe\invoice::retrieve($INVID);

        $updateOrderTable = DB::table('orders')->where('orderNumber',$ORDERID)->update([
            'stripeCustomerID'  =>  $customerStripeID,
            'stripePaymentID'   =>  $stripepaymentID,
            'stripeInvoiceLink' =>  $invoice->hosted_invoice_url,
            'orderStatus'       =>  "Order Proccessing",
            'orderPaymentStatus' => 'Paid'
        ]);

        $data = [
            'ORDERID' => $ORDERID,
            'stripeCustomerID'  =>  $customerStripeID,
            'stripePaymentID'   =>  $stripepaymentID,
            'stripeInvoiceLink' =>  $invoice->hosted_invoice_url,
            'orderStatus'       =>  "Order Proccessing",
            'orderPaymentStatus' => 'Paid'
            // other data you want to pass to the email view
        ];

        
        try {
            Mail::to('harrykennedy.cs@gmail.com')->send(new ClientMailSender($data));
            return view('succeeded');
        } catch (\Exception $e) {
            // Handle the exception
            return "Error sending email: " . $e->getMessage();
        }
      
        
    }

    function customOrder(Request $req){
      
            $websiteBase =  $req['website'];
            $industry =  $req['industry'];
            $pages =  $req['pages'];
            $theme =  $req['theme'];
            $content =  $req['content'];
            $logo =  $req['logo'];
            
      

        $orderitemsforDB = array(
            "websiteBase" => $req['website'],
            "websiteBasePrice" => $req['website_price'],
            "industry" => $req['industry'],
            "industryPrice" => $req['industry_price'],
            "pages" => $req['pages'],
            "pagesPrice" => $req['pages_price'],
            "theme" => $req['theme'],
            "theme_price" => $req['theme_price'],
            "content" => $req['content'],
            "content_price" => $req['content_price'],
            "logo" => $req['logo'],
            "logo_price" =>$req['logo_price'],
        );
        

        $orderNumber = "CLD-".random_int(1000, 9999)."DIR";
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $product = Stripe\product::create([
            'name' => "Custom Package $orderNumber",
            "description" => "Webstie Type: $websiteBase, \n Industry: $industry",
        ]);

        $total = $req['total'] * 100;
        $price = Stripe\price::create([
            'unit_amount' => $total,
            'currency' => 'usd',
            'product' => $product->id,
        ]);

        $checkout = Stripe\checkout\session::create([
            'success_url' => 'https://example.com/success',
            'line_items' => [
                [
                'price' => $price->id,
                'quantity' => 1,
                ],
            ],
            'billing_address_collection' => 'required',
            'mode' => 'payment',
            "invoice_creation" => [
                "enabled" => true
            ],
            "customer_creation" => "always",
            "phone_number_collection" => [
                "enabled" => true
            ],
        ]);
        
        $CustomOrder = DB::table('customorder')->insert([
            'orderNumber' => $orderNumber,
            'orderDate' => date('d-m-Y'),
            'orderTime' => date('h-i-s'),
            'orderFrom' => "Create Logo Design Customized Packaged",
            'packageName' => "Custom Package $orderNumber",
            'packagePrice' => $total,
            'stripeCustomerID' => null,
            'stripePaymentID' => null,
            'stripeInvoiceLink' => null,
            'orderStatus' => 'Order Proccessing',
            'stripePaymentLink' => $checkout->url,
            'orderPaymentStatus' => 'UnPaid',
            'status' => 'Unpaid'

        ]);

        $itemsOrder = DB::table('customerorderitems')->insert([
            'orderId' => $orderNumber,
            'orderFrom' => json_encode( $orderitemsforDB ),
        ]);


        return $checkout->url;
    }
}


