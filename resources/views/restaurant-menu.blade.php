@extends('layouts.layout')

@section('title', 'Food delivery & Take-away | Just Uber')

@section('navbar')
    <div class="z-10 fixed top-0 h-16 w-full dark:bg-dark-primary">
        <x-header class="text-light-important dark:text-dark-important" />
    </div>
@endsection

@section('content')
    <div class="fixed mt-16 h-56 w-full overflow-hidden" style="z-index: -1;">
        <picture class="h-full w-full">
            <source media="(min-width: 860px)" srcset="{{ asset('storage/15888-1440w.webp') }}">
            <source media="(min-width: 500px)" srcset="{{ asset('storage/15888-860w.webp') }}">
            <img class="h-auto w-full" src="{{ asset('storage/15888-500w.jpg') }}" alt="restaurant image">
        </picture>
    </div>
    <div class="pt-72">
        <div class="dark:bg-dark-primary">
            <div class="container px-4 sm:px-8 mx-auto">
                <div class="flex flex-col items-center">
                    <img class="-mt-7 h-14 w-14 border border-dark-primary" src="{{ asset('storage/crispy-house-pizza.gif') }}" />
                    <div class="text-center p-4">
                        <h2 class="pb-1 text-2xl tracking-wide">{{ $restaurant->name }}</h2>
                        <div class="flex justify-center p-1">
                            @for($i = 0; $i < 6; $i++)
                                <x-icons.star-solid-svg class="h-4 w-4 {{ $i <= round($restaurant->reputation->avg_stars) ? 'text-light-important dark:text-dark-important' : 'text-gray-400'}}" />
                            @endfor
                            <span class="ml-2 text-xs">({{ $restaurant->reputation->ratings . ' '}})</span>
                        </div>
                        <p class="text-sm font-bold p-1">{{ implode(', ', $restaurant->main_dishes) }}</p>
                        <div class="flex items-center">
                            @if(empty($restaurant->details->take_away))
                                <x-icons.just-eat.self-pickup-svg class="h-6 w-6" />
                                <p class="ml-2">Only self pickup</p>
                            @else
                                <x-icons.just-eat.money-svg class="h-6 w-6" />
                                {{-- TODO fix shorten this statement --}}
                                <p class="ml-2">
                                    Delivery {{ !empty($restaurant->details->take_away->deliver_fee) ? $restaurant->details->take_away->deliver_fee . ' ' . $restaurant->details->take_away->currency_sign . '.' : 'FREE' }}
                                    - {{ !empty($restaurant->details->take_away->min_order) ? 'Min. order ' . $restaurant->details->take_away->min_order . ' ' . $restaurant->details->take_away->currency_sign : 'No min. order' }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="">
                    asdasd <br/>
                    asdasd <br/>asdasd <br/>asdasd <br/>asdasd <br/>asdasd <br/>asdasd <br/>asdasd <br/>asdasd <br/>asdasd <br/>asdasd <br/>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection
