<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ParentController;
use Illuminate\Support\Facades\DB;

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
    return view('welcome', ['students' => DB::table('students')->get(), 'parents' => DB::table('parents')->get()]);
});

Route::post('/insert', StudentController::class . '@insert');
Route::post('/insert-parent', ParentController::class . '@insert');
Route::post('/delete', StudentController::class . '@delete');
Route::post('/delete-parent', ParentController::class . '@delete');
Route::post('/update', StudentController::class . '@update');
Route::post('/update-parent', ParentController::class . '@update');
