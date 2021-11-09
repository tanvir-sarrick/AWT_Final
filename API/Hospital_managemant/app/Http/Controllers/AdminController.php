<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\Contact;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Pharmacist;

class AdminController extends Controller
{   
    public function HomePage(){
        /* Session Add Start*/
        // if(!session()->has('admin'))
        // {
        //     return redirect()->route('signin');
        // }
        //$admin_name = session()->get('admin');
        /* Session Add End*/
        $admin_name  = session('admin');
        $TotalVisitor    = Visitor::count();
        $TotalAdmin      = Admin::count();
        $TotalContact    = Contact::count();
        $TotalDoctor     = Doctor::count();
        $TotalPharmacist = Pharmacist::count();

        return view('Admin.dashboard',[
            'TotalVisitor'      => $TotalVisitor,
            'TotalAdmin'        => $TotalAdmin,
            'TotalContact'      => $TotalContact,
            'TotalDoctor'       => $TotalDoctor,
            'TotalPharmacist'   => $TotalPharmacist
        ])->with('admin', $admin_name);
    }

    public function profile()
    {
        $p= session('admin');
        $pc = Admin::where('id', $p->id)->first();
      
        
        return view('Admin.Profile')->with('profile',$pc);
    }

    public function editprofile(Request $request)
    {
        $id= $request->id;
        $p= Admin::Where('id', $id)->first();

        return view('Admin.editProfile')->with('editprofile',$p);
    }

    public function updateprofile(Request $request)
    {
        $var= Admin::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->username = $request->username;
        $var->email = $request->email;
        $var->phone=$request->phone;
        
        $var->save();
        return redirect()->route('profile');

    }
}
