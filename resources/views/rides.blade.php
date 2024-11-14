@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="bg-red-600 text-white px-6 py-4 flex justify-between items-center">
            <h3 class="text-lg font-semibold">Rides</h3>
        </div>
        <div class="p-6">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead>
                    <tr>
                        <th class="py-3 px-4 text-left text-gray-700 font-semibold border-b">Ride ID</th>
                        <th class="py-3 px-4 text-left text-gray-700 font-semibold border-b">Driver</th>
                        <th class="py-3 px-4 text-left text-gray-700 font-semibold border-b">Customer</th>
                        <th class="py-3 px-4 text-left text-gray-700 font-semibold border-b">Status</th>
                        <th class="py-3 px-4 text-left text-gray-700 font-semibold border-b">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($rides as $ride)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $ride->id }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $ride->driver->name }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $ride->customer->name }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $ride->status }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $ride->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-2 px-4 border-b border-gray-200 text-center">No rides found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-4">
                {{ $rides->links() }}
            </div>
        </div>
    </div>
</div>
@endsection