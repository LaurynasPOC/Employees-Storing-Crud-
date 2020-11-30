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
$route_prefix = '/empCrud';
Route::get($route_prefix, function () {
    return view('home');
});


Route::resource($route_prefix.'/'.'positions', App\Http\Controllers\PositionsController::class);
Route::resource($route_prefix.'/'.'employees', App\Http\Controllers\EmployeesController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
