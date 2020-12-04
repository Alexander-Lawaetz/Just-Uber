<div {{ $attributes->merge(['class' => 'flex justify-between mb-4 min-w-full text-xl my-1 font-light']) }}>
    <h2 class="flex capitalize">
        {{ $slot }}
    </h2>
    {{ $button }}
</div>
