<div {{ $attributes }}>
    <h2 class="py-3 text-lg text-center bg-dark-secondary">01 Restaurants opens later</h2>
    <div>
        @forelse($restaurants as $restaurant)
            <x-restaurant-card :restaurant="$restaurant" />
        @empty
            <div class="text-2xl text-center">No restaurants - Internal error</div>
        @endforelse
    </div>
</div>
