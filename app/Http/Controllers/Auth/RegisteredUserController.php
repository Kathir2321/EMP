<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)//: RedirectResponse
    {
       // dd($request->all());
        // $request->validate([
        //     'first_name'=>'required',
        //     'last_name' =>'required' ,
        //     'email' =>'required',
        //     'password' => 'required',
        //     'confirm_password	' => 'required',
        //     'address'=> 'required',
        //     'Phone_number'=>'required',
        //     'Status'=>'required',
        //     'profile_image'=>'required',
        // ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'=> $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'confirm_password'=>Hash::make($request->password_confirmation),
            'address'=>$request->address,
            'phone'=>$request->Phone_number,
            'Status'=>$request->Status,
            'profile_image'=>$request->Image,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
