
@extends('layouts.layout')

@section('title', 'Register page')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-dark-primary sm:items-center sm:pt-0">
        <div class="text-lg leading-7 font-semibold dark:text-dark-primary dark:bg-dark-secondary text-white border-gray-900 rounded-lg overflow-hidden dark:bg-dark-secondary p-12">
            <p class="mb-12 text-2xl">Register your Just Uber account</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="w-auto">
                    <label for="name">Name:</label><br>
                    <input class="w-full p-3 my-3 dark:bg-dark-primary border-2 border-gray-900 @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Type your name" autofocus autocomplete="off" required>
                </div>
                @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="email">Email:</label><br>
                    <input class="w-full p-3 my-3 dark:bg-dark-primary border-2 border-gray-900 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Type your email" autocomplete="off" required>
                </div>
                @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="password">Password:</label><br>
                    <input class="w-full p-3 my-3 dark:bg-dark-primary border-2 border-gray-900 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="New Password" required>
                </div>
                @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="password_confirmation">Confirm password:</label><br>
                    <input class="w-full p-3 my-3 dark:bg-dark-primary border-2 border-gray-900" id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm password" required>
                </div>
                <div clas="w-auto">
                    <input class="w-full p-3 my-3 dark:bg-dark-important border-2 border-gray-900" type="submit" value="Register account">
                </div>
            </form>
            <p class="text-sm">Alredy have an account? <a href="{{ route('login') }}" class="dark:text-dark-important">Login here</a></p>
            <nav class="text-sm">
                <a href="#!">Terms of use.</a>
                <a href="#!">Privacy policy</a>
            </nav>
            <!-- Social media -->
        </div>
    </div>
@endsection

