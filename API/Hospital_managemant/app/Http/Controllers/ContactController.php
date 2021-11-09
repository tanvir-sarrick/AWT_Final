<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function ContactPage(){

        return view('Contact');
    }

    public function ContactSubmit(Request $request)
    {
        $validate = $request->validate(
            [
                'name'=>'required|min:5|max:10',
                'phone'=>'required',
                'email'=>'email',
                'message'=>'required'
             ],
            [
                'name.required'=>'Please Input Your Name',
                'phone.required'=>'Please Input Phone Number',
                'message.required'=>'Please Input Message'
            ]

        );

        $var = new Contact();
            $var->id    = $request->id;
            $var->name  = $request->name;
            $var->phone = $request->phone;
            $var->email = $request->email;
            $var->message=$request->message;
            $var->save();

            return redirect()->route('contact');
    }

    public function contactview()
    {
        

        $contacts = Contact::all();
       
        return view('Admin.contact')->with('contacts',$contacts);
    }

    public function Contactdelete(Request $request)
        {
            $var = Contact::where('id',$request->id)->first();
            $var->name= $request->name;
            $var->delete();
            return redirect()->route('contactview');
          
        }
    

    public function TeamsPage(){

        return view('Teams');
    }
}
