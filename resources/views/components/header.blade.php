<header class="container px-4 mx-auto">
    <div {{ $attributes->merge(['class' => 'flex justify-between w-full p-2 container px-4 mx-auto h-16']) }}>
        <div>
            <a href="{{ url('/') }}">
                <x-justeatsvg />
            </a>
        </div>

        @if (Route::has('login'))

            <div class="px-6 py-4 sm:block">
                @auth
                    <div class="flex flex-row">
                        <a href="#" class="text-sm">Profile</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"  class="ml-4 pb-6 align-middle my-auto text-sm cursor-pointer bg-transparent">Logout</button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm underline">Register</a>
                    @endif
                @endif
            </div>
        @endif

    </div>
</header>
