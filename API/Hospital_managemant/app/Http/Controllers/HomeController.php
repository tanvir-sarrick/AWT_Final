<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class HomeController extends Controller
{
    public function HomeIndex()
    {
        $UserIP = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("Y-m-d h:i:sa");

        Visitor::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);
        return view('Home');
    }

}