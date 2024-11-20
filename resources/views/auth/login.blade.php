@extends('layouts.app')

@section('content')
<div class="flex justify-center mt-10">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-blue-600 text-white text-center text-xl font-semibold p-4 rounded-t-lg">
                {{ __('Login Form') }}
            </div>

            <div class="p-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="phone_number" class="block text-gray-700 font-medium mb-2">
                            {{ __('Phone Number') }}
                        </label>
                        <input id="phone_number" type="text" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg @error('phone_number') border-red-500 @enderror" 
                               name="phone_number" value="{{ old('phone_number') }}" required>
                        
                        @error('phone_number')
                            <span class="text-red-500 text-sm mt-2 block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="pin" class="block text-gray-700 font-medium mb-2">
                            {{ __('PIN') }}
                        </label>
                        <input id="pin" type="password" maxlength="4" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg @error('pin') border-red-500 @enderror" 
                               name="pin" required>
                        
                        @error('pin')
                            <span class="text-red-500 text-sm mt-2 block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div>
                    @if (Route::has('register'))
                        <div class="mt-4 text-center">
                            <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-700 font-medium text-sm">
                                {{ __('Not registered? Sign up here') }}
                            </a>
                            <a href="{{ route('password.request') }}" class="text-blue-600 hover:text-blue-700 font-medium text-sm">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                    @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
