@extends('master')
@section('content')

<div class="flex justify-center items-center min-h-[500px] pt-10">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8 border border-gray-200">
        <h2 class="text-2xl font-semibold text-center text-indigo-600 mb-6">Login to Your Account</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="email" id="email" name="email"
                       class="mt-1 p-2 block w-full rounded-md border border-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                       placeholder="Enter your Email">
                <p class="text-xs text-gray-500 mt-1">We'll never share your email with anyone else.</p>
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                       class="mt-1 block p-2 w-full rounded-md border border-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                       placeholder="Enter your password">
            </div>

            <!-- Forgot password -->
            <div class="mb-4 text-right">
                <a href="#" class="text-sm text-indigo-600 hover:underline">Forgot Password?</a>
            </div>

            <!-- Submit -->
            <button type="submit"
                    class="w-full py-2 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                Submit
            </button>
        </form>
    </div>
</div>

@endsection
