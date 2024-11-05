@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registered Customers</h5>
                    <h2>{{ $stats['customers'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registered Drivers</h5>
                    <h2>{{ $stats['drivers'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Completed Rides</h5>
                    <h2>{{ $stats['completed_rides'] }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Quick Links</h5>
                    <div class="list-group">
                        <a href="{{ route('customers') }}" class="list-group-item">
                            View Registered Customers
                        </a>
                        <a href="{{ route('drivers') }}" class="list-group-item">
                            View Registered Drivers
                        </a>
                        <a href="{{ route('rides') }}" class="list-group-item">
                            View Ride Requests
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
