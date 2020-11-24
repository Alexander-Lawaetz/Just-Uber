<h2 class="flex justify-between mb-4 min-w-full text-xl my-1 font-light">
    <div class="flex capitalize">
        <x-icons.just-eat.cuisine-svg class="h-6 w-6 mr-2" />
        {{ $title }}
    </div>
    <button id="{{ $group }}[]" type="button" onclick="clearCheckmarks(event)" class="text-base text-blue-500 font-bold">Reset</button>
</h2>

<div {{ $attributes }}>
    @forelse ($list as $items)
        <div class="{{ $loop->iteration > 8 ? $explodeUUID(). ' hidden' : '' }} my-2 bg-light-primary dark:bg-dark-secondary dark:hover:text-dark-important dark:text-light-secondary rounded-lg">
            <label class="relative flex items-end p-2 capitalize">
                <input
                    class="form-tick appearance-none h-6 w-6 mr-2 border border-gray-300 rounded-md checked:bg-light-important dark:bg-light-primary dark:checked:bg-dark-important dark:checked:border-transparent focus:outline-none"
                    type="checkbox"
                    name="{{ $group }}[]"
                    value="{{ $items["value"] }}"
                    {{ isset($_GET[$group]) && strpos(implode(',', $_GET[$group]), $items["value"]) !== false  ? 'checked' : '' }}
                    onchange="onSubmit(event)"
                />
                {{ $items["description"] }}
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

@push('scripts')
    <script>
        function clearCheckmarks(event) {
            let groupTarget = event.target.id;

            Array.from(document.querySelectorAll('input[type=checkbox]:checked')).forEach(
                checkbox => {
                    if (checkbox.name == groupTarget) checkbox.checked = false;
                }
            );

            setTimeout(function() {
                onSubmit();
            }, 50);
        }

        function expandCheckmarks(id) {
            let className = id.split(':')[1];

            Array.from(document.getElementsByClassName(className)).forEach(
                element => {
                    if (element.classList.contains('hidden')) {
                        element.classList.remove('hidden');
                    } else {
                        element.classList.add('hidden');
                    }
                }
            )

            let button = document.getElementById(id);
            let span = document.getElementById(id).firstElementChild;

            if(span.classList.contains('rotate-180')) {
                span.classList.remove('rotate-180');
                button.firstChild.data = 'View more';
            } else {
                span.classList.add('rotate-180');
                button.firstChild.data = 'View less';
            }

        }
    </script>
@endpush
