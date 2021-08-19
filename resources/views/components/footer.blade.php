<footer class="w-full">
    <div class="bg-light-third dark:bg-dark-secondary">
        <div class="container mx-auto">
            <div class="flex flex-col sm:flex-row">
                <div x-data="{ open: true }" class="relative flex-grow pt-4 sm:py-8  px-4 sm:px-8 border-b sm:border-none">
                    <h2 @click="open = !open" class="text-xl font-semibold mb-4 leading-loose cursor-pointer sm:cursor-text">Explore cuisines</h2>
                    <span :class="open ? '' : 'rotate-180'" class="absolute sm:hidden transform right-0 top-0 mt-6 mr-6">
                        <x-icons.chevron-down-outline-svg class="h-6 w-6" />
                    </span>
                    <div
                        x-cloak
                        x-show="open"
                        class="transition-all duration-500 pb-0 ease-in-out pb-4">
                        <ul>
                            <x-list-anchor-item><a class="cursor-not-allowed">Premium & Gourment</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Pizza</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Burgers</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Mexican</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Sushi</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Chinese</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Indian</a></x-list-anchor-item>
                        </ul>
                    </div>
                </div>
                <div x-data="{ open: true }" class="relative flex-grow pt-4 sm:py-8 px-4 sm:px-8 border-b sm:border-none">
                    <h2  @click="open = !open" class="text-xl font-semibold mb-4 leading-loose cursor-pointer sm:cursor-text">Find your city</h2>
                    <span :class="open ? '' : 'rotate-180'" class="absolute sm:hidden transform right-0 top-0 mt-6 mr-6">
                        <x-icons.chevron-down-outline-svg class="h-6 w-6" />
                    </span>
                    <div
                        x-cloak
                        x-show="open"
                        class="transition-all duration-500 pb-0 ease-in-out pb-4">
                        <ul>
                            <x-list-anchor-item><a class="cursor-not-allowed">Copenhagen</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Roskilde</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Aarhus</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Odense</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Aalborg</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">More cities</a></x-list-anchor-item>
                        </ul>
                    </div>
                </div>
                <div x-data="{ open: true }" class="relative flex-grow pt-4 sm:py-8 px-4 sm:px-8 sm:border-none">
                    <h2
                        @click="open = !open"
                        class="text-xl font-semibold mb-4 leading-loose cursor-pointer sm:cursor-text">About us</h2>
                    <span :class="open ? '' : 'rotate-180'" class="absolute sm:hidden transform right-0 top-0 mt-6 mr-6">
                        <x-icons.chevron-down-outline-svg class="h-6 w-6" />
                    </span>
                    <div
                        x-cloak
                        x-show="open"
                        class="transition-all duration-500 pb-0 ease-in-out pb-4">
                        <ul>
                            <x-list-anchor-item><a class="cursor-not-allowed">Coronavirus</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Buy a Giftcard</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">About Just Uber</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Price promise</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Restuarant sign up</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Partner Center</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Cookie Policy</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Privacy Policy</a></x-list-anchor-item>
                            <x-list-anchor-item><a class="cursor-not-allowed">Terms and Conditions</a></x-list-anchor-item>
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
                        <x-icons.just-eat.app-store-svg class="cursor-not-allowed" />
                        <x-icons.just-eat.google-store-svg class="ml-4 cursor-not-allowed" />
                    </div>
                </div>
                <div>
                    <h2 class="text-xl font-semibold mb-4 leading-loose">Follow Us</h2>
                    <div class="flex flex-row sm:justify-between justify-items-start">
                        <a class="cursor-not-allowed"><x-icons.just-eat.blog-svg class="text-light-important dark:text-dark-important"/></a>
                        <a class="cursor-not-allowed ml-4"><x-icons.just-eat.facebook-svg class="text-light-important dark:text-dark-important"/></a>
                        <a class="cursor-not-allowed ml-4"><x-icons.just-eat.twitter-svg class="text-light-important dark:text-dark-important"/></a>
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
                            <span><x-icons.just-eat.flags.denmark-svg class="h-4" /></span>
                            <div class="flex items-center">
                                <span class="ml-2">Denmark</span>
                                <x-icons.chevron-down-outline-svg class="ml-2 h-4 w-4" />
                            </div>
                        </div>
                    </button>
                </div>
                <div class="p-4 sm:p-0 sm:border-none border-b border-dark-primary">
                    <div class="flex flex-row">
                        <x-icons.just-eat.payment-dk-svg class="h-8" />
                        <x-icons.just-eat.payment-mastercard-svg class="ml-4 h-8" />
                        <x-icons.just-eat.payment-visa-svg class="ml-4 h-8" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
