<div class="w-full">
    <div class="bg-light-third dark:bg-dark-secondary">
        <div class="container mx-auto">
            <div class="flex flex-col sm:flex-row">
                <div class="relative flex-grow pt-4 sm:py-8  px-4 sm:px-8 border-b sm:border-none">
                    <h2 id="footer-0" class="text-xl font-semibold mb-4 leading-loose cursor-pointer sm:cursor-text" onclick="toggleVisibility(event)">Explore cuisines</h2>
                    <span class="absolute sm:hidden transform right-0 top-0 mt-6 mr-6"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
                    <div class="list-dropdown hidden sm:block transition-all duration-500 ease-in-out pb-4">
                        <ul>
                            <x-list-anchor-item><a href="#">Premium & Gourment</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Pizza</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Burgers</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Mexican</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Sushi</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Chinese</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Indian</a></x-list-anchor-item>
                        </ul>
                    </div>
                </div>
                <div class="relative flex-grow pt-4 sm:py-8 px-4 sm:px-8 border-b sm:border-none">
                    <h2  id="footer-1" class="text-xl font-semibold mb-4 leading-loose cursor-pointer sm:cursor-text" onclick="toggleVisibility(event)">Find your city</h2>
                    <span class="absolute sm:hidden transform right-0 top-0 mt-6 mr-6"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
                    <div class="list-dropdown hidden sm:block transition-all duration-500 ease-in-out pb-4">
                        <ul>
                            <x-list-anchor-item><a href="#">Copenhagen</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Roskilde</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Aarhus</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Odense</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Aalborg</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">More cities</a></x-list-anchor-item>
                        </ul>
                    </div>
                </div>
                <div class="relative flex-grow pt-4 sm:py-8 px-4 sm:px-8 sm:border-none">
                    <h2 id="footer-2" class="text-xl font-semibold mb-4 leading-loose cursor-pointer sm:cursor-text" onclick="toggleVisibility(event)">About us</h2>
                    <span class="absolute sm:hidden transform right-0 top-0 mt-6 mr-6"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
                    <div class="list-dropdown hidden sm:block transition-all duration-500 pb-0 ease-in-out pb-4">
                        <ul>
                            <x-list-anchor-item><a href="#">Coronavirus</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Buy a Giftcard</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">About Just Uber</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Price promise</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Restuarant sign up</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Partner Center</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Cookie Policy</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Privacy Policy</a></x-list-anchor-item>
                            <x-list-anchor-item><a href="#">Terms and Conditions</a></x-list-anchor-item>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4 sm:py-8 dark:bg-dark-primary">
        <div class="container px-4 sm:px-8 mx-auto">
            <div class="sm:flex sm:justify-between">
                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-4 leading-loose">Download our app</h2>
                    <div class="flex flex-row sm:justify-between justify-items-start">
                        <a href="#"><img src="{{ asset('storage/DK-app-store-icon.svg') }}"></a>
                        <a href="#" class="ml-4"><img src="{{ asset('storage/DK-google-play-icon.svg') }}"></a>
                    </div>
                </div>
                <div>
                    <h2 class="text-xl font-semibold mb-4 leading-loose">Follow Us</h2>
                    <div class="flex flex-row sm:justify-between justify-items-start">
                        <a href="#"><x-blogsvg class="text-light-important dark:text-dark-important"/></a>
                        <a href="#" class="ml-4"><x-facebooksvg class="text-light-important dark:text-dark-important"/></a>
                        <a href="#" class="ml-4"><x-twittersvg class="text-light-important dark:text-dark-important"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sm:py-4 sm:py-8 bg-light-third dark:bg-dark-secondary">
        <div class="sm:container sm:px-4 sm:px-8 sm:mx-auto">
            <div class="flex flex-col sm:flex-row sm:justify-between">
                <div class="py-4 pl-6 sm:p-0 order-last sm:order-first">
                    <button class="hover:underline h-full">
                        <div class="flex">
                            <span><img class="h-4" src="{{ asset('storage/flag-icons/denmark.svg') }}" /></span>
                            <div class="flex items-center">
                                <span class="ml-2">Denmark</span>
                                <span class="ml-2 w-4 h-4"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="p-4 sm:p-0 sm:border-none border-b border-dark-primary">
                    <div class="flex flex-row h-8">
                        <img class="h-full" src="{{ asset('storage/dk-payment.svg') }}" />
                        <img class="ml-4 h-full" src="{{ asset('storage/je-payment-logos-mastercard.svg') }}" />
                        <img class="ml-4 h-full" src="{{ asset('storage/je-payment-logos-visa.svg') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function toggleVisibility(event) {
            let id = event.target.id.split('-')[1];
            let span = event.target.nextElementSibling;

            let div = document.getElementsByClassName('list-dropdown')[id];
            if (div.classList.contains('hidden')) {
                div.classList.remove('hidden');
                span.classList.add('rotate-180');
            } else {
                div.classList.add('hidden');
                span.classList.remove('rotate-180');
            }
        }
    </script>
@endpush
