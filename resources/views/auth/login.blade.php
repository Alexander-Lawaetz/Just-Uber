@extends('layouts.layout')

@section('title', 'Login page')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        <div class="p-12 text-lg leading-7 font-semibold bg-light-secondary dark:bg-dark-secondary border-gray-900 rounded-lg">
            <p class="mb-12 text-2xl">Login into Just Uber</p>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="w-auto">
                    <label for="email">Email:</label><br>
                    <input class="w-full p-3 my-3 bg-light-primary dark:bg-dark-primary border-2 border-gray-900 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Type your email" value="{{ old('name') }}" required>
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
                    <input class="border-2 border-gray-900" id="remember" type="checkbox" name="remember">
                    <label for="remember">Remember me</label><br>
                </div>
                <div clas="w-auto">
                    <input class="w-full p-3 my-3 text-light-primary bg-light-important dark:bg-dark-important border-2 border-gray-900" type="submit" value="Login">
                </div>
            </form>
            <!-- Social media -->
            <a href="{{ route('password.request') }}" class="text-sm">Forgot password?</a>
            <nav class="text-sm">
                <a href="#!">Terms of use.</a>
                <a href="#!">Privacy policy</a>
            </nav>
        </div>
    </div>
@endsection
