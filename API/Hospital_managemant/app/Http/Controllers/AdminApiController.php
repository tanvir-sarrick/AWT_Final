<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminApiController extends Controller
{
    public function list(){
        $admins = Admin::all();
        return $admins;
    }

    public function add(Request $request){
        $admin= new Admin();
       // $admin ->id = $request->id;
        $admin ->name = $request->name;
        $admin ->username = $request->username;
        $admin ->email = $request->email;
        $admin ->phone = $request->phone;
        $admin ->password = $request->password;
        $admin ->save();
    }
}
