@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <p>This is a Sample Application to find your nearest bus stop.</p>
                    <p><a href="{{ url('login') }}">Login</a> to the system to find your nearest bust stop & next bus arrival timings</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
