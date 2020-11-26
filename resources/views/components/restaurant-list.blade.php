<div {{ $attributes }}>
    <h2 class="py-3 mb-4 text-lg text-center bg-light-third dark:bg-dark-secondary rounded">01 Restaurants opens later</h2>
    <div class="w-full px-4 bg-light-third dark:bg-dark-secondary rounded">
        <div class="flex-col divide-y divide-gray-600">
            @forelse($restaurants as $restaurant)
                <div class="py-4">
                    <div class="flex h-32 w-full">
                        <div class="relative h-full w-52 mr-12">
                            <div class="h-full w-full bg-cover bg-no-repeat bg-center" style="background-image: url({{ asset('/storage/15888.jpg') }})"></div>
                            <img class="absolute h-16 w-16 right-0 inset-y-1/4 content-center -mr-8 border-4 border-light-third dark:border-dark-secondary" src="{{ asset('storage/crispy-house-pizza.gif') }}" alt="{{ $restaurant->name }}" />
                        </div>
                        <div class="flex w-full h-full justify-between divide-x divide-gray-600">
                            <div class="w-full text-left my-auto">
                                <h2 class="pb-1 font-bold">{{ $restaurant->name }}</h2>
                                <div class="flex items-center pb-1">
                                    @for($i = 0; $i < 6; $i++)
                                        <x-icons.star-solid-svg class="h-4 w-4 {{ $i <= round($restaurant->reputation->avg_stars) ? 'text-light-important dark:text-dark-important' : 'text-gray-400'}}" />
                                    @endfor
                                    <span class="ml-2 text-xs">({{ $restaurant->reputation->ratings }})</span>
                                </div>
                                <p class="text-sm font-bold">{{ implode(', ', $restaurant->main_dishes) }}</p>
                            </div>
                            <div class="w-full pl-2">
                                <div class="flex flex-col justify-between h-full text-left my-auto text-sm">
                                    <div class="flex items-center mt-6">
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
                                    <p>Opening hours: </br> {{ implode(' - ', $restaurant->details->opening_hours) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-2xl text-center">No restaurants - Internal error</div>
            @endforelse
        </div>
    </div>
</div>
