<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index'])->name('start.home');
Route::get('/dane', [HomeController::class,'dane'])->name('dane.home');
Route::post('/home',[HomeController::class,'insertName'])->name('add.name');
Route::get('/usun/{id}',[HomeController::class,'usunUcz'])->name('delete.student');
Route::get('/edit/{id}',[HomeController::class,'editUcz'])->name('edit.student');
Route::post('/update/{id}',[HomeController::class,'updateUcz'])->name('update.student');