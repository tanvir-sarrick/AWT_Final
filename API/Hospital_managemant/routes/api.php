<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AdminApiController;
use  App\Http\Controllers\DoctorApiController;
/*
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/admin/list',[AdminApiController::class,'list']);
Route::post('/admin/add',[AdminApiController::class,'add']);
Route::get('/doctor/list',[DoctorApiController::class,'list']);