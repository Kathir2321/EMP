<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->user_type;

            if($usertype== 'admin'){
                return view('admin.admin');
            }
          
            elseif($usertype == 'user'){
                return view('dashboard');
            }
            else{
                return redirect()->back();
            }

        }
       
       
    }
}
