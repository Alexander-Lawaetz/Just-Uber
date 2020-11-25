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
                            <div class="text-left my-auto">
                                <h2 class="pb-1 font-bold">{{ $restaurant->name }}</h2>
                                <div class="flex items-center pb-1">
                                    @for($i = 0; $i < 6; $i++)
                                        <x-icons.star-solid-svg class="h-4 w-4 {{ $i <= round($restaurant->reputation->avg_stars) ? 'text-light-important dark:text-dark-important' : 'text-gray-400'}}" />
                                    @endfor
                                    <span class="ml-2 text-xs">({{ $restaurant->reputation->ratings }})</span>
                                </div>
                                <p class="text-sm font-bold">{{ implode(', ', $restaurant->main_dishes) }}</p>
                            </div>
                            <div class="w-52 pl-2">
                                <div class="text-left text-sm">

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
