<div {{ $attributes->merge(['class' => 'flex justify-between w-full p-2']) }}>
    <div>
        <a href="/home">
            <x-justeatsvg class="text-light-important dark:text-dark-important" />
        </a>
    </div>

    @if (Route::has('login'))

        <div class="px-6 py-4 sm:block">
            @auth
                <div class="flex flex-row">
                    <a href="{{ url('/home') }}" class="text-sm text-dark-primary underline">Home</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"  class="ml-4 pb-6 align-middle my-auto text-sm text-dark-primary cursor-pointer bg-transparent">Logout</button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="text-sm text-dark-primary underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-dark-primary underline">Register</a>
                @endif
            @endif
        </div>
    @endif

</div>
