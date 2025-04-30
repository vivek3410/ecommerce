@extends('master')
@section('content')

<div class="flex justify-center items-center min-h-screen px-4 py-12">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8 border border-gray-200">
        <h2 class="text-2xl font-semibold text-center text-indigo-600 mb-6">Create Your Account</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4">
                <div class="text-sm font-medium text-gray-700">Name</div>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    autocomplete="name" />
                @error('name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <div class="text-sm font-medium text-gray-700">Email</div>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    autocomplete="username" />
                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mt-4">
                <div class="text-sm font-medium text-gray-700">Password</div>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    autocomplete="new-password" />
                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <div class="text-sm font-medium text-gray-700">Confirm Password</div>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    autocomplete="new-password" />
                @error('password_confirmation')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                <!-- Already registered? -->
                <a class="text-sm text-indigo-600 hover:underline" href="{{ route('view.login') }}">
                    {{ __('Already registered?') }}
                </a>

                <!-- Register Button -->
                <button type="submit"
                    class="ml-4 py-2 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
