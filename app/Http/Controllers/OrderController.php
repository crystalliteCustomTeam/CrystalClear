<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Stripe;

class OrderController extends Controller
{
    function order(Request $req){
        return view('welcome',['name' => $req['name'],'email' => $req['email'],'phone' => $req['phone']]);
    }

    function orderProcess(Request $req){

        $orderNumber = "CLD-".random_int(1000, 9999)."DIR";

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = Stripe\Customer::create([
            "email" => $req->input('customer_email'),
            "name" => $req->input('customer_name'),
            "phone" => $req->input('customer_phone'),
        ]);

        $source = \Stripe\Customer::createSource(
            $customer->id,
            ["source" => $req['stripe_token']]
        );

        $charge = Stripe\Charge::create ([
            "amount" => $req->input('package_price')*100,
            "customer" => $customer->id,
            "currency" => "USD",
            "description" => "Payment For Order Number $orderNumber --  Package Name : $req->input('package_name') ",
         ]);

        $order = DB::table('orders')->insert([
            'orderNumber' => $orderNumber,
            'orderDate' => date('d-m-Y'),
            'orderFrom' => "Create Logo Design",
            'packageName' => $req->input('package_name'),
            'packagePrice' => $req->input('package_price'),
            'stripeCustomerID' => $customer->id,
            'stripePaymentID' => $charge->id,
            'stripeInvoiceLink' => $charge->receipt_url,
            'orderStatus' => 'Order Proccessing',
            'orderPaymentStatus' => 'Paid'
        ]);

        if($order){
            $customerInDB = DB::table('customers')->insert([
                'email' => $req->input('customer_email'),
                'name' => $req->input('customer_name'),
                'phone' => $req->input('customer_phone'),
                'stripeid' => $customer->id
            ]);
        }
        
        if($charge->status == "succeeded"){
            return redirect('/order-complete');
        }
    }

    function orderComplete(Request $req){
        return view('succeeded');
    }
}


