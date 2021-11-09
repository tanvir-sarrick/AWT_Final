<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacist;

class ManagePharmacistController extends Controller
{
    public function managepharmacistPage()
    {
        return view('Admin.managePharmacist');
    }
    public function addPharmacistPage()
    {
        return view('Admin.addPharmacist');
    }
    public function addPharmacistSubmit(Request $request)
    {
        $validate = $request->validate(
            [
                'name'=>'required|min:5|max:10',
                'username'=>'required|min:5|max:10',
                'email'=>'email',
                'phone' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'password'=>'required'

             ],
            [
                'username.required'=>'Please Input Username',
                'password.required'=>'Please Input Password'
            ]
        );
        $password = md5($request->password); 
        $var = new Pharmacist();
            $var->id    = $request->id;
            $var->name  = $request->name;
            $var->username  = $request->username;
            $var->email = $request->email;
            $var->phone = $request->phone;
            $var->password= $password;
            $var->save();
    
            return redirect()->route('managepharmacist');
           
    }
    public function viewPharmacist()
    {
        $pharmacists = Pharmacist::all();
       
        return view('Admin.viewPharmacist')->with('pharmacists',$pharmacists);
    }
    public function Pharmacistdelete(Request $request)
        {
            $var = Pharmacist::where('id',$request->id)->first();
            $var->delete();
            return redirect()->route('viewpharmacist');
          
        }
}

