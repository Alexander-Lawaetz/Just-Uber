<div {{ $attributes }}>
    @forelse ($list as $item)
        <div class="{{ $loop->iteration > 8 && !$checked($item->group, $item->value) ? $explodeUUID(). ' hidden' : '' }} my-2 bg-light-primary dark:bg-dark-secondary dark:hover:text-dark-important dark:text-light-secondary rounded-lg">
            <label class="relative flex items-end p-2 capitalize">
                <input
                    class="form-tick appearance-none h-6 w-6 mr-2 border border-gray-300 rounded-md checked:bg-light-important dark:bg-light-primary dark:checked:bg-dark-important dark:checked:border-transparent focus:outline-none"
                    type="checkbox"
                    name="{{ $item->group }}[]"
                    value="{{ $item->value }}"
                    {{ $checked($item->group, $item->value) ? 'checked' : '' }}
                    onchange="onSubmit(event)"
                />
                {{ $item->description }}
            </label>
        </div>
        @if ($loop->iteration > 8 && $loop->last)
            <button
                id="{{ $getUUID() }}"
                name="expand-button"
                type="button"
                class="flex items-center"
                onclick="expandCheckmarks(this.id)"
            >View more<span class="transform"><x-icons.chevron-down-outline-svg class="h-4 w-4" /></span></button>
        @endif
    @empty
        <p>No data</p>
    @endforelse
</div>

@push('styles')
    <style>
        .form-tick:checked {
            background-image:url("{{ asset('storage/check-solid.svg') }}");
            border-color:transparent;
            background-size:100% 100%;
            background-position:50%;
            background-repeat:no-repeat
        }
    </style>
@endpush
