<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('demo2.dashboard');
    }
}