<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Auth;
use App\Models\FindNearestBusStops as FindStop;
use App\Models\BusStops;
use App\Models\Bus;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        # get User IP
        # commenting the below line to use static IP
        // $userIp = $request->ip();

        # defined static IP in Constant file
        $userIp = config('constants.static_ip');

        # define the location driver
        $geoDriver = config('constants.geoDriver');
        app('config')->set('location.selected_driver', $geoDriver);
        $location = Location::get($userIp);

        # to list 5 nearest bus stops
        $stopList = new BusStops();
        $getStopList = $stopList->getDistance($location->latitude, $location->longitude)->take(5)->get();
        $getNearStop = $stopList->getDistance($location->latitude, $location->longitude)->first();

        # find bus location
        $busLocation = Bus::first();

        # to get next bus arrival at the nearest bus stop
        $findBus = new FindStop();
        $nextBus = $findBus->getBusDistance($getNearStop->stop_lat, $getNearStop->stop_lon, $busLocation->bus_lat, $busLocation->bus_lon, "K");

        # to get bus arrival time
        $busSpeed = $busLocation->bus_speed;
        $getTime = $findBus->getBusTime($nextBus, $busSpeed);

        return view('home', compact('location', 'getStopList', 'getNearStop', 'nextBus', 'busSpeed', 'getTime'));
    }
}