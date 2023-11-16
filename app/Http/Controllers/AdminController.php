<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    function adminLogin(Request $request){
        return view('demo2.pages.auth.login');
    }

    function adminLoginProcess(Request $request){
        $email =  $request['userEmail'];
        $password = $request['userPassword'];

        return "success";
    }

    function adminRegister(Request $request){
        return view('demo2.pages.auth.register');
    }

    function adminRegistrationProcess(Request $request){

    }

    function adminDashboard(Request $request){

        $customersCount = DB::table('customers')->count('id');
        $OrderCount = DB::table('orders')->count('id');
        $OrderAmount = DB::table('orders')->sum('packagePrice');
        $lastOrderAmount = DB::table('orders')->orderBy('id','desc')->first();
        $orders = DB::table('orders')->limit(10)->orderBy('id','desc')->get();
        $customers = DB::table('customers')->limit(10)->orderBy('id','desc')->get();

        $ordersForSum = DB::table('orders')->get();
        
        $ordersByMonth = $ordersForSum->groupBy(function ($order) {
            return Carbon::createFromFormat('d-m-Y', $order->orderDate)->format('M');
        });
       
        $chartJS = [];
        foreach($ordersByMonth as $order => $key){
            array_push($chartJS,$order);
        }

        $sumByMonth = [];
        foreach ($chartJS as $month) {
            // Filter orders for the current month
            $filteredOrders = $ordersForSum->filter(function ($order) use ($month) {
                $orderDate = Carbon::createFromFormat('d-m-Y', $order->orderDate);
                return $orderDate->format('M') == $month;
            });
        
            // Calculate the total packagePrice for the current month
            $totalAmount = $filteredOrders->sum('packagePrice');
        
            // Add the sum to the associative array
            $sumByMonth[$month] = $totalAmount;
        }
        uksort($sumByMonth, function ($a, $b) {
            $monthOrder = ['Jan' => 1, 'Feb' => 2, 'Mar' => 3, 'Apr' => 4, 'May' => 5, 'Jun' => 6, 'Jul' => 7, 'Aug' => 8, 'Sep' => 9, 'Oct' => 10, 'Nov' => 11, 'Dec' => 12];
            return $monthOrder[$a] - $monthOrder[$b];
        });
        

       
        
        return view('demo2.dashboard',['sumByMonth'=>$sumByMonth,'AllCustomers'=>$customers,'AllOrders'=>$orders,'customerCount' => $customersCount,'ordersCount'=>$OrderCount,'OrderAmount'=>$OrderAmount,'lastOrderAmount'=>$lastOrderAmount]);
    }
    function adminReports(Request $request){
        return view('demo2.reports');
    }
    function adminRequest(Request $request){
        return view('demo2.request');
    }
    function adminAllUser(Request $request){
        return view('demo2.allUser');
    }
    function adminallBrands(Request $request){
        return view('demo2.allbrands');
    }
    function adminAddUser(Request $request){
        return view('demo2.adduser');
    }
    function adminProfile(Request $request){
        return view('demo2.profile');
    }
}
