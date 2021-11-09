<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\AboutController;
use  App\Http\Controllers\ContactController;
use  App\Http\Controllers\FeedbackController;
use  App\Http\Controllers\SigninController;
use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\DoctorController;
use  App\Http\Controllers\VisitorController;
use  App\Http\Controllers\ManageAdminController;
use  App\Http\Controllers\ManageDoctorController;
use  App\Http\Controllers\ManagePharmacistController;
use  App\Http\Controllers\ChartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------|
*/    
Route::get('/', [HomeController::class,'HomeIndex'])->name('home');
Route::get('/about', [AboutController::class,'AboutPage'])->name('about');
Route::get('/contact', [ContactController::class,'ContactPage'])->name('contact');
Route::post('/contact', [ContactController::class, 'ContactSubmit'])->name('contact');
Route::get('/teams', [ContactController::class,'TeamsPage'])->name('teams');
Route::get('/feedback', [FeedbackController::class, 'FeedbackPage'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'FeedbackSubmit'])->name('feedback');

/*Sign in & Sign up Route */
Route::get('/signin', [SigninController::class,'SigninPage'])->name('signin');
Route::post('/signin', [SigninController::class,'SigninSubmit'])->name('signin');
Route::get('/logout', [SigninController::class,'logout'])->name('logout');

/*Admin Dashboard Route */
Route::get('/admindashboard', [AdminController::class,'HomePage'])->middleware('Admindashboard')->name('admindashboard');
Route::get('/admindashboard/visitor', [VisitorController::class,'VisitorPage'])->middleware('Admindashboard')->name('visitor');
Route::get('/admindashboard/contact', [ContactController::class,'ContactView'])->middleware('Admindashboard')->name('contactview');
Route::get('/admindashboard/contact/delete/{id}/{name}', [ContactController::class,'Contactdelete']);
Route::get('/admindashboard/chart', [ChartController::class,'ChartPage'])->middleware('Admindashboard')->name('chart');
Route::get('/admindashboard/profile', [AdminController::class,'profile'])->middleware('Admindashboard')->name('profile');
Route::get('/admindashboard/profile/edit/{id}', [AdminController::class,'editprofile'])->middleware('Admindashboard')->name('editprofile');
Route::post('/admindashboard/profile/update', [AdminController::class,'updateprofile'])->middleware('Admindashboard')->name('updateprofile');

/*Manage Admin Route */
Route::get('/admindashboard/manageadmin', [ManageAdminController::class,'manageadminPage'])->middleware('Admindashboard')->name('manageadmin');
Route::get('/admindashboard/manageadmin/addadmin', [ManageAdminController::class, 'addAdminPage'])->middleware('Admindashboard')->name('addadmin');
Route::post('/admindashboard/manageadmin/addadmin', [ManageAdminController::class, 'addAdminSubmit'])->name('addadmin');
Route::get('/admindashboard/manageadmin/viewdmin', [ManageAdminController::class, 'viewAdmin'])->middleware('Admindashboard')->name('viewadmin');
Route::get('/admindashboard/manageadmin/viewadmin/delete/{id}/{name}', [ManageAdminController::class,'Admindelete']);
Route::get('/admindashboard/manageadmin/editadmin/edit/{id}', [ManageAdminController::class, 'editAdminPage'])->middleware('Admindashboard')->name('editadmin');
Route::post('/admindashboard/manageadmin/editadmin', [ManageAdminController::class, 'editAdminSubmit'])->name('editadmin');

/*Manage Doctor Route */
Route::get('/admindashboard/managedoctor', [ManageDoctorController::class,'managedoctorPage'])->middleware('Admindashboard')->name('managedoctor');
Route::get('/admindashboard/managedoctor/adddoctor', [ManageDoctorController::class, 'addDoctorPage'])->middleware('Admindashboard')->name('adddoctor');
Route::post('/admindashboard/managedoctor/adddoctor', [ManageDoctorController::class, 'addDoctorSubmit'])->name('adddoctor');
Route::get('/admindashboard/managedoctor/viewdoctor', [ManageDoctorController::class, 'viewDoctor'])->middleware('Admindashboard')->name('viewdoctor');
Route::get('/admindashboard/managedoctor/viewdoctor/delete/{id}', [ManageDoctorController::class,'Doctordelete']);
Route::get('/admindashboard/managedoctor/editdoctor/edit/{id}', [ManageDoctorController::class, 'editDoctorPage'])->middleware('Admindashboard')->name('editadmin');
Route::post('/admindashboard/managedoctor/editadoctor', [ManageDoctorController::class, 'editDoctorSubmit'])->name('editdoctor');

/*Manage Pharmacist Route */
Route::get('/admindashboard/managepharmacist', [ManagePharmacistController::class,'managepharmacistPage'])->middleware('Admindashboard')->name('managepharmacist');
Route::get('/admindashboard/managepharmacist/addpharmacist', [ManagePharmacistController::class, 'addPharmacistPage'])->middleware('Admindashboard')->name('addpharmacist');
Route::post('/admindashboard/managepharmacist/addpharmacist', [ManagePharmacistController::class, 'addPharmacistSubmit'])->name('addpharmacist');
Route::get('/admindashboard/managepharmacist/viewpharmacist', [ManagePharmacistController::class, 'viewPharmacist'])->middleware('Admindashboard')->name('viewpharmacist');
Route::get('/admindashboard/managepharmacist/viewpharmacist/delete/{id}', [ManagePharmacistController::class,'Pharmacistdelete']);

/*Admin Dashboard Route */
Route::get('/doctordashboard', [DoctorController::class,'HomePage'])->name('doctordashboard');