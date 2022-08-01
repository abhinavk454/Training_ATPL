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
            session()->flash('error', 'No Station Found');
            return response()->redirectToRoute('home')->with('error', 'Station not found');
        } else {
            $route = RouteModel::where('src_id', $stationFrom->id)->where('dest_id', $stationTo->id)->first();
            if ($route == null) {
                session()->flash('error', 'No route found');
                return response()->redirectToRoute('home')->with('error', 'Route not found');
            } else {
                //dd($route);
                $trains = TrainModel::where('route_id', $route->id)->where('date', $date)->get();
                if ($trains->count() == 0) {
                    session()->flash('error', 'No train found');
                    return response()->redirectToRoute('home')->with('error', 'No train found');
                } else {
                    // FIXED: Change it to flash
                    session()->flash('trains', $trains);
                    return redirect()->route('home', ['trains' => $trains]);
                }
            }
        }
    }
}
