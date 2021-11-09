<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
   public function VisitorPage()
   {
        /* Session Add Start*/
        // if(!session()->has('admin'))
        // {
        //     return redirect()->route('signin');
        // }
        // $admin_id = session()->get('admin');
        /* Session Add End*/
       $visitors = Visitor::orderBy('id','desc')->take(10)->get();
       return view('Admin.visitor')->with('visitors', $visitors);
   }
}
