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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/computer/all', [App\Http\Controllers\ComputerController::class, 'index'])->name('computer');
Route::get('/staff/all', [App\Http\Controllers\StaffController::class, 'index'])->name('staff');
Route::post('/staff/add', [App\Http\Controllers\StaffController::class, 'store'])->name('addStaff');
Route::get('/staff/edit/{id}', [App\Http\Controllers\StaffController::class, 'edit'])->name('RoleForm');



