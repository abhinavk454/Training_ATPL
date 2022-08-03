<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StationModel;
use App\Models\RouteModel;
use App\Models\TicketModel;
use App\Models\PassengerModel;
use App\Models\UserModel;
use App\Models\TrainModel;

class HomeController extends Controller
{
    public function autoSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResults = StationModel::where('name', 'like', '%' . $query . '%')->get();
        return response()->json($filterResults);
    }
    public function findTrain(Request $request)
    {
        $from = $request->get('from');
        $to = $request->get('to');
        $date = $request->get('date');
        // dd($from, $to, $date);
        // join stations table to get station id
        $stationFrom = StationModel::where('name', $from)->first();
        $stationTo = StationModel::where('name', $to)->first();
        if ($stationTo == null || $stationFrom == null) {
            session()->put('error', 'No Station Found');
            return response()->redirectToRoute('home')->with('error', 'Station not found');
        } else {
            $route = RouteModel::where('src_id', $stationFrom->id)->where('dest_id', $stationTo->id)->first();
            if ($route == null) {
                session()->put('error', 'No route found');
                return response()->redirectToRoute('home')->with('error', 'Route not found');
            } else {
                //dd($route);
                $trains = TrainModel::where('route_id', $route->id)->where('date', $date)->get();
                if ($trains->count() == 0) {
                    session()->put('error', 'No train found');
                    return response()->redirectToRoute('home')->with('error', 'No train found');
                } else {
                    // FIXED: Change it to flash
                    session()->put('trains', $trains);
                    return redirect()->route('home', ['trains' => $trains]);
                }
            }
        }
    }
    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $user = UserModel::where('email', $email)->where('password', $password)->first();
        if ($user == null) {
            session()->flush('error', 'Invalid email or password');
            return response()->redirectToRoute('login')->with('error', 'Invalid email or password');
        } else {
            if ($user->role == 'admin') {
                session()->put('user', $user);
                return redirect()->route('adminDashboard');
            } else
                session()->put('user', $user);
            return response()->redirectToRoute('userDashboard');
        }
    }
    public function adminDashboard()
    {
        $users = UserModel::all();
        $stations = StationModel::all();
        $routes = RouteModel::all();
        $trains = TrainModel::all();
        $tickets = TicketModel::all();
        $passengers = PassengerModel::all();
        // dd($users, $stations, $routes, $trains, $tickets, $passengers);
        session()->put('users', $users);
        session()->put('stations', $stations);
        session()->put('routes', $routes);
        session()->put('trains', $trains);
        session()->put('tickets', $tickets);
        session()->put('passengers', $passengers);
        return view('adminDashboard');
    }
    public function userDashboard()
    {
        $user = session()->get('user');
        $passengers = PassengerModel::where('user_id', $user->id)->get();
        $tickets = TicketModel::where('user_id', $user->id)->get();
        return view('userDashboard', ['passengers' => $passengers, 'tickets' => $tickets]);
    }
    public function bookTickets(Request $request)
    {
        $user = session()->get('user');
        $train = session()->get('train');
        // dd($train);
        $passenger = new PassengerModel();
        $passenger->user_id = $user->id;
        $passenger->name = $request->name1;
        $passenger->age = $request->age1;
        $passenger->gender = $request->gender1;
        $passenger->email = $request->email1;
        $passenger->save();
        $seat_no = $train->seat_count + random_int(1, 100);
        $ticket = new TicketModel();
        $ticket->user_id = $user->id;
        $ticket->seat_number = $seat_no;
        $ticket->train_id = $train->id;
        $ticket->price = 200;
        $ticket->journey_date = $train->date;
        $ticket->passenger_id = $passenger->id;
        $ticket->save();
        TrainModel::where('id', $train->id)->update(['seat_count' => $seat_no - 1]);
        session()->flash('error', 'Ticket booked successfully');
        return response()->redirectToRoute('userDashboard', ['passengers' => $passenger, 'tickets' => $ticket]);
    }
    public function logout()
    {
        session()->flush();
        return response()->redirectToRoute('home');
    }
    public function register()
    {
        return view('register');
    }
}
