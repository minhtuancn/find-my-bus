@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6"><strong>Welcome {{ Auth::user()->name }}!</strong></div>
                        <div class="col-sm-6 text-right">
                            Nearest Stop: <strong>{{ $getNearStop->stop_name }}</strong> | {{ round($getNearStop->distance/3, 2) }} Mins. <i class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="left" title="Walking distance at 3 KPH"></i>
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            
                            <p data-toggle="tooltip" data-placement="left" title="To change IP: Config > constants.php"><strong>Your Current IP</strong> <i class="glyphicon glyphicon-info-sign"></i></p>

                            <p>{{ $location->ip }}</p>

                            <ul class="list-group">
                                <li class="list-group-item"><strong>Your Current Location</strong></li>
                                <li class="list-group-item">{{ $location->cityName }}</li>
                                <li class="list-group-item">{{ $location->regionName .' - '. $location->postalCode }}</li>
                                <li class="list-group-item">{{ $location->countryName }}</li>
                            </ul>

                        </div>

                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Nearest Bus Stop</strong></li>
                                <li class="list-group-item">{{ $getNearStop->stop_name }}</li>
                                <li class="list-group-item">Next bus arrival to stop in: {{ round($getTime, 2) }} Mins. @ {{ $busSpeed }} KPH</li>
                                <li class="list-group-item">Bus distance to reach the stop: {{ round($nextBus, 2) }} km</li>
                                <li class="list-group-item">You will reach the bus stop in: {{ round($getNearStop->distance/3, 2) }} Mins @ 3 KPH</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            @if(count($getStopList) > 0)
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>Nearest 5 Bus Stops</strong></li>
                                    @foreach($getStopList as $stops_key => $stops_val)
                                        <li class="list-group-item">{{ $stops_val->stop_name .' - '. round($stops_val->distance, 2) .' km' }}</li>
                                    @endforeach
                                </ul>
                            @else
                                No nearest bus stops available!!
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection