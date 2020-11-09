@extends('layouts.layout')

@section('title', 'Password reset')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        <div class="p-12 text-lg leading-7 font-semibold bg-light-secondary dark:bg-dark-secondary border-gray-900 rounded-lg">
            <p class="mb-12 text-2xl text-center">Reset password</p>
            @if(session('status'))
                <div>{{ session('status') }}</div>
            @endif
            <form action="{{ route('password.request') }}" method="POST">
                @csrf
                <div class="w-auto">
                    <label for="email">Email:</label><br>
                    <input class="w-full p-3 my-3 bg-light-primary dark:dark-bg-primary border-2 border-gray-900 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Type your email" required>
                </div>
                @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <input class="w-full p-3 my-3 text-light-secondary bg-light-important dark:bg-dark-important border-2 border-gray-900" type="submit" value="Reset">
                </div>
            </form>
            <!-- Social media -->
        </div>
    </div>
@endsection
