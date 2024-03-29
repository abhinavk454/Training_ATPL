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
    return view('home');
})->name('home');
Route::get('/auto-search', [HomeController::class, 'autoSearch'])->name('auto-search');
Route::post('/find-train', [HomeController::class, 'findTrain'])->name('find-train');
Route::get('/login', function () {
    return view('login');
})->name('login');
