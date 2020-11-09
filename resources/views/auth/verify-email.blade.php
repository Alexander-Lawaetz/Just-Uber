@extends('layouts.layout')

@section('title', 'Verify your email')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        <div class="p-12 text-lg leading-7 font-semibold bg-light-secondary dark:bg-dark-secondary border-gray-900 rounded-lg">
            <p class="mb-8 text-2xl">Email verification is required in order to order take away, please check your email for a verification link.</p>
            @if(session('status'))
                <div>{{ session('status') }}</div>
            @endif
            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <div clas="w-10">
                    <input class="w-full p-3 my-3 text-light-secondary bg-light-important dark:bg-dark-important border-2 border-gray-900" type="submit" value="Resend email">
                </div>
            </form>
            <!-- Social media -->
        </div>
    </div>
@endsection
