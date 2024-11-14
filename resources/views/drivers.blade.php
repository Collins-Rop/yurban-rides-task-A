@extends('layouts.app')

@section('content')
<div class="container mt-8 px-6">
    <div class="bg-white border border-gray-200 rounded-lg shadow-lg">
        <div class="bg-green-600 text-white p-4 rounded-t-lg font-semibold text-xl">
            <h3>Registered Drivers</h3>
        </div>
        <div class="p-6">
            <form method="GET" action="{{ route('drivers') }}" class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="col-span-1">
                        <select name="county" class="form-select block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                            <option value="">Select County</option>
                            @foreach($counties as $county)
                                <option value="{{ $county }}" 
                                    {{ request('county') == $county ? 'selected' : '' }}>
                                    {{ $county }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-1">
                        <select name="sub_county" class="form-select block w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-600">
                            <option value="">Select Sub-County</option>
                            @foreach($subCounties as $subCounty)
                                <option value="{{ $subCounty }}"
                                    {{ request('sub_county') == $subCounty ? 'selected' : '' }}>
                                    {{ $subCounty }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-1 flex items-center justify-center">
                        <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600">
                            Filter
                        </button>
                    </div>
                </div>
            </form>

            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border-collapse bg-white rounded-lg shadow-lg">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700 text-sm font-semibold">
                            <th class="px-4 py-2 border-b">Name</th>
                            <th class="px-4 py-2 border-b">Phone Number</th>
                            <th class="px-4 py-2 border-b">County</th>
                            <th class="px-4 py-2 border-b">Sub-County</th>
                            <th class="px-4 py-2 border-b">Registration Date</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @forelse($drivers as $driver)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border-b">{{ $driver->name }}</td>
                            <td class="px-4 py-2 border-b">{{ $driver->phone_number }}</td>
                            <td class="px-4 py-2 border-b">{{ $driver->county }}</td>
                            <td class="px-4 py-2 border-b">{{ $driver->sub_county }}</td>
                            <td class="px-4 py-2 border-b">{{ $driver->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-4 py-2 text-center text-gray-500">No drivers found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $drivers->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
