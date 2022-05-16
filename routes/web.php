<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('main',[ViewController::class,'mainview'])->name('main');
Route::get('/',[LoginController::class,'index'])->name('/');
Route::post('checklog',[LoginController::class,'checklog'])->name('checklog');
Route::get('out',[LoginController::class,'out'])->name('out');
//Route::get('check',[UnitController::class,'index'])->name('check');
Route::get('search',[UnitController::class,'search'])->name('search');
Route::get('allunit',[UnitController::class,'index'])->name('allunit');
Route::get('allstaff',[StaffController::class,'index'])->name('allstaff');
Route::get('allconsultation',[ConsultationController::class,'index'])->name('allconsultation');
Route::get('allclass',[ClassesController::class,'index'])->name('allclass');
Route::get('allclass',[ClassesController::class,'index'])->name('allclass');
Route::get('searchclass',[ViewController::class,'searchClass'])->name('searchClass');
Route::get('searchconsultation',[ViewController::class,'searchConsultation'])->name('searchconsultation');
Route::get('profile',[ViewController::class,'viewprofile'])->name('profile');
Route::post('updateprofile',[ViewController::class,'updateprofile'])->name('updateprofile');

Route::get('staffdetails/{id}',[ViewController::class,'staffdetails'])->name('staffdetails');
Route::get('unitdetails/{id}',[ViewController::class,'unitdetails'])->name('unitdetails');
Route::get('classdetails/{id}/{campus}/{day}',[ViewController::class,'classdetails'])->name('classdetails');
Route::get('consultationdetails/{id}/{day}',[ViewController::class,'consultationdetails'])->name('consultationdetails');



