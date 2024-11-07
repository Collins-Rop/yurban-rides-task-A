@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Registered Drivers</h3>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('drivers') }}" class="mb-4">
                <div class="row">
                    <div class="col-md-4">
                        <select name="county" class="form-control">
                            <option value="">Select County</option>
                            @foreach($counties as $county)
                                <option value="{{ $county }}" 
                                    {{ request('county') == $county ? 'selected' : '' }}>
                                    {{ $county }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="sub_county" class="form-control">
                            <option value="">Select Sub-County</option>
                            @foreach($subCounties as $subCounty)
                                <option value="{{ $subCounty }}"
                                    {{ request('sub_county') == $subCounty ? 'selected' : '' }}>
                                    {{ $subCounty }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>County</th>
                        <th>Sub-County</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($drivers as $driver)
                    <tr>
                        <td>{{ $driver->name }}</td>
                        <td>{{ $driver->phone_number }}</td>
                        <!-- <td>{{ $driver->county }}</td> -->
                        <td>{{ $driver->sub_county }}</td>
                        <td>{{ $driver->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $drivers->links() }}
        </div>
    </div>
</div>
@endsection