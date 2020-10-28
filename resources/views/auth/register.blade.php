
@extends('layouts.layout')

@section('title', 'Register page')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="text-lg leading-7 font-semibold dark:text-gray-900 text-white border-gray-900 p-12 bg-center" style="background-image: url(/storage/oi_hero-wide-uk_v2.jpg)">
            <p class="mb-8 text-2xl">Register your Just Uber account</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="w-auto">
                    <label for="name">Name:</label><br>
                    <input class="w-full p-3 my-3 dark:bg-gray-100 bg-gray-900 border-2 border-gray-900 @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Type your name" autofocus required>
                </div>
                @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="email">Email:</label><br>
                    <input class="w-full p-3 my-3 dark:bg-gray-100 bg-gray-900 border-2 border-gray-900 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Type your email" required>
                </div>
                @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="password">Password:</label><br>
                    <input class="w-full p-3 my-3 dark:bg-gray-100 bg-gray-900 border-2 border-gray-900 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="New Password" required>
                </div>
                @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="password_confirmation">Confirm password:</label><br>
                    <input class="w-full p-3 my-3 dark:bg-gray-100 bg-gray-900 border-2 border-gray-900" id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm password" required>
                </div>
                <div class="w-auto">
                    <input class="dark:bg-gray-100 bg-gray-900 border-2 border-gray-900"  id="remember" type="checkbox" name="remember">
                    <label for="remember">Remember me</label><br>
                </div>
                <div clas="w-auto">
                    <input class="w-full p-3 my-3 dark:bg-gray-100 bg-gray-900 border-2 border-gray-900" type="submit" value="Register account">
                </div>
            </form>
            <!-- Social media -->
        </div>
    </div>
@endsection

