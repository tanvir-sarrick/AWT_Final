<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class ManageDoctorController extends Controller
{
    public function managedoctorPage()
    {
        return view('Admin.manageDoctor');
    }
    public function addDoctorPage()
    {
        return view('Admin.addDoctor');
    }

    public function addDoctorSubmit(Request $request)
    {
        $validate = $request->validate(
            [
                'name'=>'required|min:5|max:20',
                'username'=>'required|min:5|max:10',
                'email'=>'email',
                'password'=>'required'

             ],
            [
                'username.required'=>'Please Input Username',
                'password.required'=>'Please Input Password'
            ]
        );
        $var = new Doctor();
            $var->id    = $request->id;
            $var->name  = $request->name;
            $var->username  = $request->username;
            $var->email = $request->email;
            $var->password=$request->password;
            $var->save();
    
            return redirect()->route('managedoctor');
           
    }
    public function viewDoctor()
    {
        $doctors = Doctor::all();
       
        return view('Admin.viewDoctor')->with('doctors',$doctors);
    }
    public function Doctordelete(Request $request)
        {
            $var = Doctor::where('id',$request->id)->first();
            $var->delete();
            return redirect()->route('viewdoctor');
          
        }
        public function editDoctorPage(Request $request){
            $id = $request->id;
            $doctor = Doctor::where('id',$id)->first();
            return view('Admin.editDoctor')->with('doctor',$doctor);
    
        }
        public function editDoctorSubmit(Request $request){
            $validate = $request->validate(
                [
                    'name'=>'required|min:5|max:30',
                    'username'=>'required|min:5|max:30',
                    'email'=>'email'
    
                 ],
                [
                    'username.required'=>'Please Input Username'
                    
                ]
            );
    
            
            $var = Doctor::where('id',$request->id)->first();
            $var->id= $request->id;
            $var->name= $request->name;
            $var->username = $request->username;
            $var->email = $request->email;
            
            
            $var->save();
            return redirect()->route('viewdoctor');
    
        }
}
