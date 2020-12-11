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
        <div class="bg-light-primary dark:bg-dark-primary">
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
                <div class="grid grid-cols-5 gap-4">
                    {{-- Category section --}}
                    <section class="hidden md:block">
                        <div class="sticky top-16">
                            <h2 class="px-6 py-4 text-xl font-bold block">Categories</h2>
                            <div id="#menu-navigation" class="relative bg-light-secondary dark:bg-dark-secondary">
                                <div class="absolute h-4 w-4 bg-light-secondary dark:bg-dark-secondary top-0 transform rotate-45 ml-2 -mt-2"></div>
                                <ul class="p-2">
                                    <li><a id="navigation-link:drinks" href="#drinks" class="navigation-link block w-full p-2 my-1 capitalize hover:underline font-extrabold text-light-important dark:text-dark-important">Drinks</a></li>
                                    <li><a id="navigation-link:food" href="#food" class="navigation-link block w-full p-2 my-1 capitalize hover:underline">Food</a></li>
                                    <li><a id="navigation-link:panini" href="#panini" class="navigation-link block w-full p-2 my-1 capitalize hover:underline">Panini</a></li>
                                    <li><a id="navigation-link:burger" href="#burger" class="navigation-link block w-full p-2 my-1 capitalize hover:underline">Burger</a></li>
                                    <li><a id="navigation-link:pizza" href="#pizza" class="navigation-link block w-full p-2 my-1 capitalize hover:underline">Pizza</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    {{-- Menu section --}}
                    <section class="col-span-full md:col-span-4 xl:col-span-3">
                        <div class="flex justify-start w-full">
                            <button id="tab-header:tab-menu" class="px-6 py-4 text-xl font-bold block">Menu</button>
                            <button id="tab-header:tab-ratings" class="px-6 py-4 text-xl font-bold block">Ratings</button>
                            <button id="tab-header:tab-info" class="px-6 py-4 text-xl font-bold block">Info</button>
                        </div>
                        <div class="bg-light-secondary dark:bg-dark-secondary">
                            <div id="tab-menu">
                                <div class="p-4 divide-y divide-gray-200 divide-solid">
                                    <section id="drinks" class="navigation-menu">
                                        <div class="flex justify-between items-center p-4 bg-light-secondary dark:bg-dark-secondary cursor-pointer">
                                            <h2 class="navigation-header text-xl leading-5 tracking-wide font-bold">Drinks</h2>
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
                                                        <button class="p-2 bg-light-important dark:bg-dark-important">
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
                                                        <button class="p-2 bg-light-important dark:bg-dark-important">
                                                            <svg class="w-6 h-6 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section id="food" class="navigation-menu">
                                        <div class="flex justify-between items-center p-4 bg-light-secondary dark:bg-dark-secondary cursor-pointer">
                                            <h2 class="navigation-header text-xl leading-5 tracking-wide font-bold">Food</h2>
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
                                                        <button class="p-2 bg-light-important dark:bg-dark-important">
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
                                                        <button class="p-2 bg-light-important dark:bg-dark-important">
                                                            <svg class="w-6 h-6 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section id="panini" class="navigation-menu">
                                        <div class="flex justify-between items-center p-4 bg-light-secondary dark:bg-dark-secondary cursor-pointer">
                                            <h2 class="navigation-header text-xl leading-5 tracking-wide font-bold">Panini</h2>
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
                                                        <button class="p-2 bg-light-important dark:bg-dark-important">
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
                                                        <button class="p-2 bg-light-important dark:bg-dark-important">
                                                            <svg class="w-6 h-6 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section id="burger" class="navigation-menu">
                                        <div class="flex justify-between items-center p-4 bg-light-secondary dark:bg-dark-secondary cursor-pointer">
                                            <h2 class="navigation-header text-xl leading-5 tracking-wide font-bold">Burger</h2>
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
                                                        <button class="p-2 bg-light-important dark:bg-dark-important">
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
                                                        <button class="p-2 bg-light-important dark:bg-dark-important">
                                                            <svg class="w-6 h-6 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section id="pizza" class="navigation-menu">
                                        <div class="flex justify-between items-center p-4 bg-light-secondary dark:bg-dark-secondary cursor-pointer">
                                            <h2 class="navigation-header text-xl leading-5 tracking-wide font-bold">Pizza</h2>
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
                                                        <button class="p-2 bg-light-important dark:bg-dark-important">
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
                                                        <button class="p-2 bg-light-important dark:bg-dark-important">
                                                            <svg class="w-6 h-6 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{-- Order section --}}
                    <section class="hidden xl:block">
                        <div class="sticky top-16">
                            <div class="flex flex-row items-center px-6 py-4">
                                <x-icons.shopping-cart-svg class="h-6 w-6" />
                                <h2 class="text-xl font-bold block ml-2">Your order</h2>
                            </div>
                            <div class="relative bg-light-secondary dark:bg-dark-secondary">
                                <div class="absolute h-4 w-4 bg-light-secondary dark:bg-dark-secondary top-0 transform rotate-45 ml-2 -mt-2"></div>
                                <ul class="p-2">
                                    <li><a href="#" class="block w-full p-2 my-1 hover:underline">Drinks</a></li>
                                </ul>
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

@push('styles')
    <style>
        .navigation-menu {
            scroll-margin-top: 4rem;
        }
    </style>
@endpush

@push('scripts')
    <script>
        let throttle = false;
        let navigationLinks = document.querySelectorAll(".navigation-link");

        window.addEventListener("scroll", function (e) {
            if (throttle) return;

            throttle = true;

            let fromTop = window.scrollY;

            navigationLinks.forEach((link, index, array) => {
                let section = document.querySelector(link.hash);

                let highlighter = ['font-extrabold', 'text-light-important', 'dark:text-dark-important'];

                if (
                    (section.offsetTop <= fromTop + 64 || index == 0) &&
                    section.offsetTop + section.offsetHeight > fromTop + 64
                ) {
                    highlighter.forEach(style => {
                        link.classList.add(style);
                    })
                } else {
                    highlighter.forEach(style => {
                        link.classList.remove(style);
                    })
                }
            });
            setTimeout( function() { throttle = false; }, 100)
        })
    </script>
@endpush
