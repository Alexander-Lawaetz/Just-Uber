@extends('layouts.layout')

@section('title', 'Verify your email')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-dark-primary sm:items-center sm:pt-0">
        <div class="text-lg leading-7 font-semibold dark:text-dark-primary dark:bg-dark-secondary text-white border-gray-900 rounded-lg overflow-hidden dark:bg-dark-secondary p-12">
            <p class="mb-8 text-2xl">Email verification is required in order to order take away, please check your email for a verification link.</p>
            @if(session('status'))
                <div>{{ session('status') }}</div>
            @endif
            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <div clas="w-10">
                    <input class="w-full p-3 my-3 dark:bg-gray-100 bg-gray-900 border-2 border-gray-900" type="submit" value="Resend email">
                </div>
            </form>
            <!-- Social media -->
        </div>
    </div>
@endsection
