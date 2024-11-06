@extends('layouts.app')
@section('content')
@push('styles')
<style>
    /* Container for the main dashboard */
    .dashboard-container {
        margin-top: 20px;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 10px;
    }

    /* Styling for cards */
    .card {
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for a cleaner look */
        padding: 15px;
    }

    /* Card colors */
    .card.bg-primary {
        background-color: #ff4d4d; /* Bright red for primary */
        color: white;
    }
    .card.bg-success {
        background-color: #28a745;
        color: white;
    }
    .card.bg-warning {
        background-color: #ffc107;
        color: white;
    }

    /* Card title styling */
    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    /* Card body with enlarged main text */
    .card-body h2 {
        font-size: 2.25rem;
        font-weight: bold;
        margin: 0;
    }

    /* List styling within the dashboard */
    .list-group-item {
        font-size: 1rem;
        padding: 12px 20px;
        color: #333;
        background-color: #fff;
        transition: background-color 0.2s ease;
        border: none;
        border-radius: 5px;
    }

    /* Hover effect for list items */
    .list-group-item:hover {
        background-color: #f1f1f1;
    }

    /* Chart container to control sizing */
    .chart-container {
        position: relative;
        height: 40vh;
        width: 80vw;
        margin: 0 auto;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    /* Centered content container */
    .centered {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    /* General body styling for consistency */
    body {
        font-family: Arial, sans-serif;
        color: #333;
    }
</style>

@endpush
<div class="container dashboard-container">
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Registered Customers</h5>
                    <h2>{{ $stats['customers'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success">
                <div class="card-body">
                    <h5 class="card-title">Registered Drivers</h5>
                    <h2>{{ $stats['drivers'] }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning">
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
