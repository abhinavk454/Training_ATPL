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

/**
 * POST Routes
 *
 */

Route::post('/login', AdminController::class . '@login');
Route::post('/register', AdminController::class . '@register');

/**
 * GET Routes
 */

Route::get('/', function () {
    if (session()->has('admin')) {
        return redirect('/dashboard');
    }
    return view('login');
});

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

Route::get('/client', function () {
    if (session()->has('admin')) {
        $all_clients = \App\Models\ClientModel::all();
        return view('client', ['clients' => $all_clients]);
    }
    return view('login', ['error' => 'You are not logged in']);
});
Route::get('/projects', function () {
    if (session()->has('admin')) {
        $all_projects = \App\Models\ProjectModel::all();
        //TODO: add client from that company only
        $all_clients = \App\Models\ClientModel::all();
        return view('projects', ['projects' => $all_projects, 'clients' => $all_clients]);
    }
    return view('login', ['error' => 'You are not logged in']);
});
Route::get('/tasks', function () {
    if (session()->has('admin')) {
        $all_tasks = \App\Models\TaskModel::all();
        // TODO : get leads from that company only
        $all_leads = \App\Models\LeadModel::all();
        return view('tasks', ['tasks' => $all_tasks, 'leads' => $all_leads]);
    }
    return view('login', ['error' => 'You are not logged in']);
});
