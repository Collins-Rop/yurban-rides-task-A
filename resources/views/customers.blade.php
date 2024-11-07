@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Registered Customers</h3>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('customers') }}" class="mb-4">
                <div class="row">
                    <div class="col-md-4">
                        <input type="date" name="date_from" class="form-control" 
                            value="{{ request('date_from') }}" placeholder="From Date">
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="date_to" class="form-control" 
                            value="{{ request('date_to') }}" placeholder="To Date">
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
                        <th>Registration Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->phone_number }}</td>
                        <td>{{ $customer->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $customers->links() }}
        </div>
    </div>
</div>
@endsection