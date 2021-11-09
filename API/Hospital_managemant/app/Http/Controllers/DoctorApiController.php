<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorApiController extends Controller
{
    public function list(){
        $doctors = Doctor::all();
        return $doctors;
    }
}
