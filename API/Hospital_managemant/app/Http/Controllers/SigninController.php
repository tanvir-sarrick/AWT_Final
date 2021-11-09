<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Doctor;

class SigninController extends Controller
{
    public function SigninPage(){

        return view('Signin');
    }

    public function SigninSubmit( Request $req ){
        /* Admin Login System*/
        $a = Admin::where('username',$req->username) 
                    ->where('password',md5($req->password))
                    ->first();
        /* Doctor Login System*/
        // $d = Doctor::where('username',$req->username) 
        //     ->where('password',$req->password)
        //     ->first();
            
        if($a)
        {
            session()->put('admin',$a);
            
            return redirect()->route('admindashboard');
        }

        // else if($d)
        // {
        //     session()->put('doctor',$d->username);
        //     return redirect()->route('doctordashboard');
        // }

        $validate = $req->validate(
            [
                'username'=>'required',
                'password'=>'required'
             ],
            [
                'username.required'=>'Please Input Username',
                'password.required'=>'Please Input Password'
            ]

        );

        return redirect()->route('signin');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('signin');
    }

}
