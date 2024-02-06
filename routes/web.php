<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PhoneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::redirect('/','/users');
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users',[UserController::class,'store'])->name('users.store');

Route::controller(PhoneController::class)->group(function(){
    Route::get('phones','index');
    Route::get('phones/create','create');
    Route::post('phones','store');
    Route::get('phones/{phone}','show');
    Route::get('phones/{phone}/edit','edit');
    Route::put('phones/{phone}/update','update');
    Route::delete('phones/{phone}','destroy');
});