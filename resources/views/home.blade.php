@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded-lg">
            <div class="bg-red-600 text-white text-lg font-semibold p-4 rounded-t-lg">
                {{ __('Dashboard') }}
            </div>

            <div class="p-6">
                @if (session('status'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <p class="text-gray-700 text-center">{{ __('You are logged in!') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
