<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function FeedbackPage()
    {
        return view('Feedback');
    }

    public function FeedbackSubmit(Request $request)
    {
        $validate = $request->validate(
            [
                'name'=>'required',
                
             ],
            [
                'name.required'=>'Please Input Your Name',
            ]

        );
        $var = new Feedback();
        $var->id    = $request->id;
        $var->name  = $request->name;
        $var->ambiance=$request->ambiance;
        $var->CustomerCareService    = $request->CustomerCareService;
        $var->doctorService    = $request->doctorService;
        $var->nurseService    = $request->nurseService;
        $var->billing    = $request->billing;
        $var->cleaning    = $request->cleaning;
        $var->save();
        return redirect()->route('feedback');
    }
}
