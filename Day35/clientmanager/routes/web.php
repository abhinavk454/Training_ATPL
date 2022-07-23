<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    if (session()->has('admin')) {
        return redirect('/dashboard');
    }
    return view('login');
});

Route::post('/login', AdminController::class . '@login');
Route::post('/register', AdminController::class . '@register');

Route::get('/dashboard', function () {
    if (session()->has('admin')) {
        return view('dashboard');
    }
    return view('login');
});
Route::get('/logout', function () {
    session()->forget('admin');
    return redirect('/');
});
