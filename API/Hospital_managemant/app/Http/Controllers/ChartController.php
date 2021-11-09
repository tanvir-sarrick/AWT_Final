<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function ChartPage()
    {
       $result=DB::select(DB::raw("SELECT COUNT(*) AS total_ambiance,ambiance FROM feedbacks GROUP BY ambiance"));
       $chartAmbiance="";
       foreach($result as $list)
       {
        $chartAmbiance.="['".$list->ambiance."', ".$list->total_ambiance."]";
       }
        $data = $chartAmbiance;
        return view('Admin.chart',compact('data'));
    }
}
