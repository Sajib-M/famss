<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginFrom()
    {
        return view("backend.layouts.auth.loginFrom");
    }

    public function login(Request $request)
    {
        $validator=Validator::make($request->all(),[ 
            "email"   =>"required", 
            "password"   =>"required", 
        ]);
        if($validator->fails())
        {
            Toastr::error($validator->getMessageBag()->first());
        }

        $credentials=$request->only('email','password');
        // dd($credentials);
        if(auth()->attempt($credentials))
        {
            // dd('success');
            toastr()->success("User successfully login.");
            return redirect()->route('home');
        }else{
            // dd('error');
            toastr()->error("Invalid User.");
            return redirect()->back();
        }
    }  
    
    public function logout()
    {
        auth()->logout();
        toastr()->success("User successfully logout.");
        return redirect()->route('login.form');

    }

}
