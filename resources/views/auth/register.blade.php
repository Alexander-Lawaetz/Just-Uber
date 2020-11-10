
@extends('layouts.layout')

@section('title', 'Register page')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        <div class="p-12 text-lg leading-7 font-semibold bg-light-secondary dark:bg-dark-secondary border-gray-900 rounded-lg">
            <p class="mb-12 text-2xl">Register your Just Uber account</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="w-auto">
                    <label for="name">Name:</label><br>
                    <input class="w-full p-3 my-3 bg-light-primary dark:bg-dark-primary border-2 border-gray-900 @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Type your name" value="{{ old('name') }}" autofocus autocomplete="off" required>
                </div>
                @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="email">Email:</label><br>
                    <input class="w-full p-3 my-3 bg-light-primary dark:bg-dark-primary border-2 border-gray-900 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Type your email" value="{{ old('email') }}" autocomplete="off" required>
                </div>
                @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="password">Password:</label><br>
                    <input class="w-full p-3 my-3 bg-light-primary dark:bg-dark-primary border-2 border-gray-900 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="New Password" required>
                </div>
                @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="password_confirmation">Confirm password:</label><br>
                    <input class="w-full p-3 my-3 bg-light-primary dark:bg-dark-primary border-2 border-gray-900" id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm password" required>
                </div>
                <div clas="w-auto">
                    <input class="w-full p-3 my-3 bg-light-important text-light-secondary dark:bg-dark-important border-2 border-gray-900" type="submit" value="Register account">
                </div>
            </form>
            <a href="{{ route('password.request') }}" class="text-sm">Forgot password?</a>
            <p class="text-sm">Already have an account? <a href="{{ route('login') }}" class="text-light-important dark:text-dark-important">Login here</a></p>
            <nav class="text-sm">
                <a href="#!">Terms of use.</a>
                <a href="#!">Privacy policy</a>
            </nav>
            <!-- Social media -->
        </div>
    </div>
@endsection

