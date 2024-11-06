@extends('layouts.app')

@section('content')
@push('styles')
<style>
    /* Primary Color Styling */
    .primary-color {
        color: #ff0000; /* Bright red */
        font-size: 1.2rem;
        font-weight: 500;
    }

    /* Container Styling */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 20vh;
        padding: 20px;
        background-color: #f8f9fa; /* Light grey background for contrast */
    }

    /* Card Styling */
    .card {
        width: 100%;
        max-width: 500px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Soft shadow for depth */
        overflow: hidden; /* Ensures rounded corners work correctly */
        background-color: #ffffff; /* White card background */
    }

    /* Card Header Styling */
    .card-header {
        background-color: #ff0000; /* Bright red */
        color: #ffffff; /* White text color for readability */
        font-size: 2.2rem;
        font-weight: 600;
        padding: 15px 20px;
        text-align: center;
    }

    /* Card Body Styling */
    .card-body {
        padding: 20px;
        font-size: 1rem;
        color: #333333; /* Dark grey for readability */
        line-height: 1.6;
    }

    /* Responsive Adjustments */
    @media (max-width: 576px) {
        .card {
            max-width: 90%;
        }
        .card-header {
            font-size: 1.8rem;
        }
        .primary-color {
            font-size: 1rem;
        }
    }
</style>
@endpush

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header primary-color">{{ __('Login Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right primary-color">
                                {{ __('Phone Number') }}
                            </label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" 
                                    class="form-control @error('phone_number') is-invalid @enderror" 
                                    name="phone_number" value="{{ old('phone_number') }}" required>
                                
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pin" class="col-md-4 col-form-label text-md-right primary-color">
                                {{ __('PIN') }}
                            </label>

                            <div class="col-md-6">
                                <input id="pin" type="password" maxlength="4"
                                    class="form-control @error('pin') is-invalid @enderror" 
                                    name="pin" required>
                                
                                @error('pin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary primary-color">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection