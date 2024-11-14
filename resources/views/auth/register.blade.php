@extends('layouts.app')

@section('content')
<div class="flex justify-center mt-10">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-blue-600 text-white text-center text-xl font-semibold p-4 rounded-t-lg">
                {{ __('Register') }}
            </div>

            <div class="p-6">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">
                            {{ __('Name') }}
                        </label>
                        <input id="name" type="text" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg @error('name') border-red-500 @enderror" 
                               name="name" value="{{ old('name') }}" required autofocus>
                        
                        @error('name')
                            <span class="text-red-500 text-sm mt-2 block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">
                            {{ __('Email Address') }}
                        </label>
                        <input id="email" type="email" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg @error('email') border-red-500 @enderror" 
                               name="email" value="{{ old('email') }}" required>
                        
                        @error('email')
                            <span class="text-red-500 text-sm mt-2 block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-medium mb-2">
                            {{ __('Password') }}
                        </label>
                        <input id="password" type="password" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg @error('password') border-red-500 @enderror" 
                               name="password" required>
                        
                        @error('password')
                            <span class="text-red-500 text-sm mt-2 block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="block text-gray-700 font-medium mb-2">
                            {{ __('Confirm Password') }}
                        </label>
                        <input id="password-confirm" type="password" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg" 
                               name="password_confirmation" required>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
