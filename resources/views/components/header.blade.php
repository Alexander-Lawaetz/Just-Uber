<header {{ $attributes->merge(['class' => 'w-full px-4 mx-auto']) }}>
    <div class="flex justify-between items-center w-full p-2 container px-4 mx-auto h-16">
        <div>
            <a href="{{ url('/') }}">
                <x-icons.just-eat.logo-svg />
            </a>
        </div>

        @if (Route::has('login'))
            <div class="flex text-lg font-bold">
                <a class="flex flex-row items-center cursor-not-allowed hover:underline">
                    <x-icons.gift-solid-svg class="h-6" />
                    <span class="ml-1">For you</span>
                </a>
                @auth
                    <div x-data="{ open: false }" class="relative group flex flex-row items-end">
                        <button  @click="open = !open" class="flex flex-row items-center ml-6 hover:underline">
                            <x-icons.user-circle-solid-svg class="h-6" />
                            <span class="ml-1">{{ Auth::user()->name }}</span>
                        </button>
                        <!--suppress XmlUnboundNsPrefix -->
                        <div
                            x-show="open"
                            x-transition:enter="transition ease-out origin-top-right duration-300"
                            x-transition:enter-start="opacity-0 transform scale-0"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 origin-top-right transform scale-0"
                            class="absolute z-10 top-0 right-0 pt-4 mt-6">
                            <div class="relative px-6 whitespace-nowrap bg-light-primary shadow-md text-light-primary dark:bg-dark-primary dark:text-dark-primary">
                                <a class="block px-4 py-2 border-t-0 border-light-primary-third dark:border-dark-secondary cursor-not-allowed">Your account</a>
                                <a class="block px-4 py-2 border-t border-light-primary-third dark:border-dark-secondary cursor-not-allowed">Your orders</a>
                                <a class="block px-4 py-2 border-t border-light-primary-third dark:border-dark-secondary cursor-not-allowed">Your saved cards</a>
                                <a class="block px-4 py-2 border-t border-light-primary-third dark:border-dark-secondary cursor-not-allowed">Your address book</a>
                                <a class="block px-4 py-2 border-t border-light-primary-third dark:border-dark-secondary cursor-not-allowed">Redeem a voucher</a>
                                <a class="block px-4 py-2 border-t border-light-primary-third dark:border-dark-secondary cursor-not-allowed">Redeem a gift card</a>
                                <a class="block px-4 py-2 border-t border-light-primary-third dark:border-dark-secondary cursor-not-allowed">Contact preferences</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"  class="block px-4 py-2 border-t border-light-primary-third dark:border-dark-secondary font-bold w-full text-left cursor-pointer bg-transparent">Log out</button>
                                </form>
                                <div class="absolute h-4 w-4 dark:bg-dark-primary top-0 right-0 transform rotate-45 mr-2 -mt-2"></div>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="ml-6 hover:underline flex flex-row items-center">
                        <x-icons.user-circle-solid-svg class="h-6" />
                        <span class="ml-1">Login</span>
                    </a>
                @endif
                <a class="ml-6 cursor-not-allowed hover:underline">Help</a>
            </div>
        @endif
    </div>
</header>
