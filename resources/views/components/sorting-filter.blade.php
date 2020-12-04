<div {{ $attributes }}>
    {{ $slot }}
</div>

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

