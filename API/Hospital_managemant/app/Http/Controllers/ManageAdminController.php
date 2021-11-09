<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class ManageAdminController extends Controller
{
    public function manageadminPage()
    {
        return view('Admin.manageAdmin');
    }

    public function addAdminPage()
    {
        return view('Admin.addAdmin');
    }

    public function addAdminSubmit(Request $request)
    {
        $validate = $request->validate(
            [
                'name'=>'required|min:5|max:15',
                'username'=>'required|min:5|max:10',
                'email'=>'email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'password'=>'required'

             ],
            [
                'username.required'=>'Please Input Username',
                'password.required'=>'Please Input Password'
            ]
        );
        $password = md5($request->password); 
        $var = new Admin();
            $var->id    = $request->id;
            $var->name  = $request->name;
            $var->username  = $request->username;
            $var->email = $request->email;
            $var->phone = $request->phone;
            $var->password= $password;
            $var->save();
            // if($request->hasFile('image')){
            //     //return $request->file('image')->getClientOriginalName();
            //     $name = time()."_".$request->file('image')->getClientOriginalName();
            //     $request->file('image')->storeAs('uploads',$name,'public');}
           
            return redirect()->route('manageadmin');
           
    }
    public function viewAdmin()
    {
        $admins = Admin::all();
       
        return view('Admin.viewAdmin')->with('admins',$admins);
    }
    public function Admindelete(Request $request)
        {
            $var = Admin::where('id',$request->id)->first();
            $var->name= $request->name;
            $var->delete();
            return redirect()->route('viewadmin');
          
    }
    public function editAdminPage(Request $request){
        $id = $request->id;
        $admin = Admin::where('id',$id)->first();
        return view('Admin.editAdmin')->with('admin',$admin);

    }
    public function editAdminSubmit(Request $request){
        $validate = $request->validate(
            [
                'name'=>'required|min:5|max:15',
                'username'=>'required|min:5|max:10',
                'email'=>'email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'

             ],
            [
                'username.required'=>'Please Input Username'
                
            ]
        );

        
        $var = Admin::where('id',$request->id)->first();
        $var->id= $request->id;
        $var->name= $request->name;
        $var->username = $request->username;
        $var->email = $request->email;
        $var->phone=$request->phone;
        
        $var->save();
        return redirect()->route('viewadmin');

    }

}
