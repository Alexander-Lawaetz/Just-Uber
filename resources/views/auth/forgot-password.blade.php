@extends('layouts.layout')

@section('title', 'Password reset')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="text-lg leading-7 font-semibold dark:text-gray-900 text-white border-gray-900 p-12 bg-center" style="background-image: url(/storage/oi_hero-wide-uk_v2.jpg)">
            <p class="mb-8 text-2xl">Reset password</p>
            @if(session('status'))
                <div>{{ session('status') }}</div>
            @endif
            <form action="{{ route('password.request') }}" method="POST">
                @csrf
                <div class="w-auto">
                    <label for="email">Email:</label><br>
                    <input class="w-full p-3 my-3 dark:bg-gray-100 bg-gray-900 border-2 border-gray-900 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Type your email" required>
                </div>
                @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div clas="w-auto">
                    <input class="w-full p-3 my-3 dark:bg-gray-100 bg-gray-900 border-2 border-gray-900" type="submit" value="Reset">
                </div>
            </form>
            <!-- Social media -->
        </div>
    </div>
@endsection
