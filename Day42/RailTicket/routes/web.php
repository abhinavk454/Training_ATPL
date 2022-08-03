<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\TrainModel;
use App\Models\TicketModel;
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
    if (session()->has('user')) {
        if (session()->get('user')->role == 'admin') {
            return redirect()->route('adminDashboard');
        } else {
            return redirect()->route('userDashboard');
        }
    } else {
        return view('home');
    }
})->name('home');
Route::get('/auto-search', [HomeController::class, 'autoSearch'])->name('auto-search');
Route::post('/find-train', [HomeController::class, 'findTrain'])->name('find-train');
Route::get('/login', function () {
    if (session()->has('user')) {
        if (session()->get('user')->role == 'admin') {
            return redirect()->route('adminDashboard');
        } else {
            return redirect()->route('userDashboard');
        }
    } else {
        return view('login');
    }
})->name('login');
Route::get('/userDashboard', function () {
    if (session()->has('user')) {
        if (session()->get('user')->role == 'admin') {
            return redirect()->route('adminDashboard');
        } else {
            return redirect()->route('userDashboard');
        }
    } else {
        return redirect()->route('login');
    }
})->name('userDashboard');
// Route to book tickets by train id
Route::get('/book-tickets/{train_id}', function ($train_id) {
    if (session()->has('user')) {
        $train = TrainModel::find($train_id);
        session()->put('train', $train);
        return view('bookTickets', ['train' => $train]);
    } else {
        return redirect()->route('login');
    }
})->name('book-tickets');
// View all tickets of a user
Route::get('/view-tickets', function () {
    if (session()->has('user')) {
        $tickets = TicketModel::where('user_id', session()->get('user')->id)->get();
        session()->put('tickets', $tickets);
        return view('viewTickets', ['tickets' => $tickets]);
    } else {
        return redirect()->route('login');
    }
})->name('view-tickets');
Route::post('/book-tickets', [HomeController::class, 'bookTickets'])->name('book-tickets');
Route::post('/login', [HomeController::class, 'login'])->name('login');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/adminDashboard', [HomeController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/admin-stations', function () {
    if (session()->has('user')) {
        if (session()->get('user')->role == 'admin') {
            return view('stations');
        } else {
            return redirect()->route('userDashboard');
        }
    } else {
        return redirect()->route('login');
    }
})->name('admin-stations');
Route::get('/admin-passengers', function () {
    if (session()->has('user')) {
        if (session()->get('user')->role == 'admin') {
            return view('passengers');
        } else {
            return redirect()->route('userDashboard');
        }
    } else {
        return redirect()->route('login');
    }
})->name('admin-passengers');
