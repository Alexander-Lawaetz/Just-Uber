@extends('layouts.layout')

@section('title', 'Food delivery & Take-away | Just Uber')

@section('navbar')
    <div class="fixed z-50 top-0 h-16 w-full ">
        <x-header class="text-light-important dark:text-dark-important bg-light-secondary dark:bg-dark-primary" />
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
        <div class="bg-light-secondary dark:bg-dark-primary">
            <div class="container px-4 sm:px-8 mx-auto pb-4">
                <div class="flex flex-col items-center md:flex-row md:items-start">
                    <img class="-mt-7 h-14 w-14 md:mt-7 md:h-20 md:w-20 border border-dark-primary" src="{{ asset('storage/crispy-house-pizza.gif') }}" />
                    <div class="p-4 flex flex-col xl:flex-row xl:justify-between xl:items-center w-full">
                        <div class="text-center md:text-left">
                            <h2 class="pb-1 text-2xl tracking-wide">{{ $restaurant->name }}</h2>
                            <div class="flex items-center justify-center md:justify-start p-1">
                                @for($i = 0; $i < 6; $i++)
                                    <x-icons.star-solid-svg class="h-4 w-4 {{ $i <= round($restaurant->reputation->avg_stars) ? 'text-light-important dark:text-dark-important' : 'text-gray-400'}}" />
                                @endfor
                                <span class="ml-2 text-sm font-bold">({{ $restaurant->reputation->ratings . ' Ratings'}})</span>
                            </div>
                            <p class="text-sm font-bold p-1">{{ implode(', ', $restaurant->main_dishes) }}</p>
                        </div>
                        <div class="flex flex-col xl:flex-row xl:justify-between">
                            {{-- TODO add address field --}}
                            <div class="flex items-center mb-1">
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
                            <div class="flex justify-around md:justify-between md:w-44 xl:ml-10">
                                <div class="flex items-center">
                                    <x-icons.just-eat.recieve-cash-payment-svg class="h-7 w-7"/>
                                    <span class="ml-2">Cash</span>
                                </div>
                                <div class="flex items-center">
                                    <x-icons.just-eat.recieve-card-payment-svg class="h-7 w-7"/>
                                    <span class="ml-2">Card</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <section>
                        <div class="flex justify-around w-full">
                            <button id="tab-header:tab-menu" class="px-6 py-4 text-xl font-bold block">Menu</button>
                            <button id="tab-header:tab-ratings" class="px-6 py-4 text-xl font-bold block">Ratings</button>
                            <button id="tab-header:tab-info" class="px-6 py-4 text-xl font-bold block">Info</button>
                        </div>
                        <div class="dark:bg-dark-secondary">
                            <div id="tab-menu">
                                <div class="p-4 divide-y divide-gray-200 divide-solid">
                                    <div>
                                        <div class="flex justify-between items-center p-4 sticky z-10 top-16 bg-light-secondary dark:bg-dark-secondary cursor-pointer">
                                            <h2 class="text-xl leading-5 tracking-wide font-bold">Drinks</h2>
                                            <x-icons.chevron-down-outline-svg class="h-6 w-6"/>
                                        </div>
                                        <div class="px-4 divide-y divide-gray-200 divide-dotted">
                                            <div class="py-4">
                                                <div class="block cursor-pointer">
                                                    <div class="inline-block">
                                                        <p class="capitalize font-bold z-0">Soda 0.33 L</p>
                                                        <p>Coco cola</p>
                                                    </div>
                                                    <div class="flex items-center float-right">
                                                        <span class="p-2">18,00 kr</span>
                                                        <button class="p-2 dark:bg-dark-important">
                                                            <svg class="w-6 h-6 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-4">
                                                <div class="block cursor-pointer">
                                                    <div class="inline-block">
                                                        <p class="capitalize font-bold">Soda 0.33 L</p>
                                                        <p>Coco cola</p>
                                                    </div>
                                                    <div class="flex items-center float-right">
                                                        <span class="p-2">18,00 kr</span>
                                                        <button class="p-2 dark:bg-dark-important">
                                                            <svg class="w-6 h-6 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between items-center p-4 sticky sticky top-16 z-10 bg-light-secondary dark:bg-dark-secondary cursor-pointer">
                                            <h2 class="text-xl leading-5 tracking-wide font-bold">Drinks</h2>
                                            <x-icons.chevron-down-outline-svg class="h-6 w-6"/>
                                        </div>
                                        <div class="px-4 divide-y divide-gray-200 divide-dotted">
                                            <div class="py-4">
                                                <div class="block cursor-pointer">
                                                    <div class="inline-block">
                                                        <p class="capitalize font-bold">Soda 0.33 L</p>
                                                        <p>Coco cola</p>
                                                    </div>
                                                    <div class="flex items-center float-right">
                                                        <span class="p-2">18,00 kr</span>
                                                        <button class="p-2 dark:bg-dark-important">
                                                            <svg class="w-6 h-6 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-4">
                                                <div class="block cursor-pointer">
                                                    <div class="inline-block">
                                                        <p class="capitalize font-bold">Soda 0.33 L</p>
                                                        <p>Coco cola</p>
                                                    </div>
                                                    <div class="flex items-center float-right">
                                                        <span class="p-2">18,00 kr</span>
                                                        <button class="p-2 dark:bg-dark-important">
                                                            <svg class="w-6 h-6 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection
