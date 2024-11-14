@extends('layouts.app')

@section('content')
<div class="container mt-8">
    <div class="card border border-gray-300 rounded-lg shadow-lg">
        <div class="card-header bg-blue-500 text-white p-4 rounded-t-lg font-semibold text-xl">
            <h3>Registered Customers</h3>
        </div>
        <div class="card-body p-6">
            <form method="GET" action="{{ route('customers') }}" class="mb-4">
                <div class="flex space-x-4">
                    <div class="w-full md:w-1/3">
                        <input type="date" name="date_from" class="form-control p-3 border border-gray-300 rounded-md w-full" 
                            value="{{ request('date_from') }}" placeholder="From Date">
                    </div>
                    <div class="w-full md:w-1/3">
                        <input type="date" name="date_to" class="form-control p-3 border border-gray-300 rounded-md w-full" 
                            value="{{ request('date_to') }}" placeholder="To Date">
                    </div>
                    <div class="w-full md:w-1/3 flex items-center justify-center">
                        <button type="submit" class="btn btn-primary bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition">
                            Filter
                        </button>
                    </div>
                </div>
            </form>

            <table class="table w-full bg-white rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="p-4 text-left">Name</th>
                        <th class="p-4 text-left">Phone Number</th>
                        <th class="p-4 text-left">Registration Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="p-4">{{ $customer->name }}</td>
                        <td class="p-4">{{ $customer->phone_number }}</td>
                        <td class="p-4">{{ $customer->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4 flex justify-center">
                {{ $customers->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
