@extends('layouts.app')

@section('content')
<div class="container mt-6 px-4 py-6 bg-gray-100 rounded-lg">
    <div class="row">
        <div class="col-md-4 mb-6">
            <div class="bg-blue-600 text-white rounded-lg shadow-lg transition transform hover:scale-105 p-6">
                <h5 class="text-xl font-semibold mb-4">Registered Customers</h5>
                <h2 class="text-4xl font-bold">{{ $stats['customers'] }}</h2>
            </div>
        </div>

        <div class="col-md-4 mb-6">
            <div class="bg-green-600 text-white rounded-lg shadow-lg transition transform hover:scale-105 p-6">
                <h5 class="text-xl font-semibold mb-4">Registered Drivers</h5>
                <h2 class="text-4xl font-bold">{{ $stats['drivers'] }}</h2>
            </div>
        </div>

        <div class="col-md-4 mb-6">
            <div class="bg-yellow-500 text-gray-800 rounded-lg shadow-lg transition transform hover:scale-105 p-6">
                <h5 class="text-xl font-semibold mb-4">Completed Rides</h5>
                <h2 class="text-4xl font-bold">{{ $stats['completed_rides'] }}</h2>
            </div>
        </div>
    </div>

    <div class="row mt-6">
        <div class="col-md-12">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h5 class="text-xl font-semibold mb-4">Quick Links</h5>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <a href="{{ route('customers') }}" class="flex items-center p-4 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition transform hover:scale-105">
                        <svg class="w-6 h-6 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        </svg>
                        <span>View Registered Customers</span>
                    </a>
                    
                    <a href="{{ route('drivers') }}" class="flex items-center p-4 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 transition transform hover:scale-105">
                        <svg class="w-6 h-6 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 2m0 0l2 2m-2-2h7m1-7H3c-1.105 0-2 0.895-2 2v14c0 1.105 0.895 2 2 2h18c1.105 0 2-0.895 2-2V5c0-1.105-0.895-2-2-2z"></path>
                        </svg>
                        <span>View Registered Drivers</span>
                    </a>

                    <a href="{{ route('rides') }}" class="flex items-center p-4 bg-yellow-500 text-gray-800 rounded-lg shadow-md hover:bg-yellow-600 transition transform hover:scale-105">
                        <svg class="w-6 h-6 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15l9-5-9-5-9 5 9 5z"></path>
                        </svg>
                        <span>View Ride Requests</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
