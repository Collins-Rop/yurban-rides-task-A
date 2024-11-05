<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Driver;
use App\Models\Ride;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'customers' => Customer::count(),
            'drivers' => Driver::count(),
            'completed_rides' => Ride::where('status', 'completed')->count(),
        ];

        return view('dashboard', compact('stats'));
    }

    public function customers(Request $request)
    {
        $customers = Customer::query()
            ->when($request->date_from, function($query) use ($request) {
                return $query->whereDate('created_at', '>=', $request->date_from);
            })
            ->when($request->date_to, function($query) use ($request) {
                return $query->whereDate('created_at', '<=', $request->date_to);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('customers', compact('customers'));
    }

    public function drivers(Request $request)
    {
        $drivers = Driver::query()
            ->when($request->county, function($query) use ($request) {
                return $query->where('county', $request->county);
            })
            ->when($request->sub_county, function($query) use ($request) {
                return $query->where('sub_county', $request->sub_county);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('drivers', compact('drivers', 'counties', 'sub_counties'));
    }

    public function rides()
    {
        $rides = Ride::orderBy('created_at', 'desc')->paginate(10);
        return view('rides', compact('rides'));
    }
}