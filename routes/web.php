<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home',['css'=>'css/Home.css']);
})->middleware('nonlogin');

Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category',[App\Http\Controllers\ProfileController::class,'index'])->name('category');

Route::get('/new_profile',[\App\Http\Controllers\ProfileController::class,'create'])->name('create_profile');
Route::post('/new_profile',[\App\Http\Controllers\ProfileController::class,'make_profile'])->name('c_profile');
Route::get('/update_profile',[\App\Http\Controllers\ProfileController::class,'update_profile'])->name('update_profile');