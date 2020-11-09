@extends('layouts.layout')

@section('title', 'Just Uber - Your taste, your choose')

@section('navbar')
    <header class="container px-4 mx-auto">
        <x-navbar class="relative h-16 z-10 bg-transparent"/>
    </header>
@endsection

@section('content')
    <div class="w-full -mt-16 -mb-8">
        <div class="relative w-full max-h-(screen-phone) sm:max-h-full h-40 sm:h-64 md:h-104">
            <div class="absolute overflow-hidden top-0 h-full w-full bg-cover bg-center" style="background-image: url({{ asset('/storage/DK_1920x420_Generic.jpg') }})"></div>
        </div>
        <div class="container mt-32 sm:mt-20 md:mt-10 lg:mt-0 px-4 mx-auto">
            <div class="relative dark:bg-dark-secondary bg-white shadow-md mx-auto max-w-3xl rounded-lg text-center p-4 md:py-8 -mt-40">
                <h1 class="lg:text-5xl md:text-4xl text-3xl pb-1 sm:leading-loose tracking-wider font-bold text-light-important dark:text-dark-important">Denmark's largest menu</h1>
                <h2 class="lg:text-xl text-base pb-1 mb-2 font-light">Find restaurants delivery right now, near you</h2>
                <div class="text-center">
                    <form class="flex flex-row relative w-full lg:max-w-xl mx-auto border dark:border-dark-hover overflow-hidden rounded">
                        @csrf
                        <label class="w-full min-h-full">
                            <input id="zipSearch" class="w-full min-h-full px-4 pt-6 pb-2 text-bold dark:bg-dark-primary dark:text-dark-primary" onkeydown="return checkPhoneKey(event.key)" style="" id="search-input" type="text" autocomplete="false" pattern="\d{1,4}"  maxlength="4" title="Four digit zip code" required>
                            <span class="absolute top-1/4 left-0 ml-4 mt-1 transition-all duration-500 ease-in-out ">Enter your postcode</span>
                        </label>
                        <input class="lg:text-xl text-base leading-relaxed tracking-wide font-bold px-4 py-2 cursor-pointer text-light-secondary bg-light-important dark:bg-dark-important" type="submit" value="Find restaurants">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-4 sm:px-8 mt-16 mb-6 mx-auto">
        <h1 class="lg:text-4xl md:text-3xl text-2xl pb-1 font-bold text-light-important dark:text-dark-important">Popular Cuisines</h1>
        <p class="mb-4">Explore your favorites and order takeaway or pick up yourself</p>
        <div class="sm:flex sm:flex-row sm:justify-between w-full m-auto">
            <div class="sm:w-1/3 text-center h-40 relative">
                <a href="#">
                    <img class="object-cover h-full w-full" loading="lazy" src="https://via.placeholder.com/387x150.png/2b2b35/eeeeee?text=https://placeholder.com/">
                    <span class="lg:text-2xl absolute bottom-0 inset-x-0 mb-3">Italian</span></a>
            </div>
            <div class="sm:w-1/3 my-4 sm:my-0 sm:ml-6 text-center h-40 relative">
                <a href="#">
                    <img class="object-cover h-full w-full" loading="lazy" src="https://via.placeholder.com/387x150.png/2b2b35/eeeeee?text=https://placeholder.com/">
                    <span class="lg:text-2xl absolute bottom-0 inset-x-0 mb-3">American</span></a>
            </div>
            <div class=" sm:w-1/3 sm:ml-6 text-center h-40 relative">
                <a href="#">
                    <img class="object-cover h-full w-full" loading="lazy" src="https://via.placeholder.com/387x150.png/2b2b35/eeeeee?text=https://placeholder.com/">
                    <span class="lg:text-2xl absolute bottom-0 inset-x-0 mb-3">Japanese</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container px-4 sm:px-8 mb-8 mx-auto">
        <div class="dark:bg-dark-secondary p-6 sm:p-10">
            <div class="flex flex-col lg:flex-row lg:justify-around">
                <div class="lg:w-1/2 h-full">
                    <img class="object-center mx-auto" src="{{ asset('storage/Artboard2x.png') }}">
                </div>
                <div class="flex flex-col justify-around my-auto lg:w-1/2 text-center h-full ">
                    <h2 class="text-2xl md:text-3xl my-4 font-semibold">Find your flavor even faster</h2>
                    <p class="my-4">Download the Just Uber app for faster ordering and more personalised recommendations</p>
                    <div class="flex flex-row justify-between sm:justify-center p-2">
                        <a href="#"><img class="" src="{{ asset('storage/DK-app-store-icon.svg') }}"></a>
                        <a href="#" class="sm:ml-4"><img src="{{ asset('storage/DK-google-play-icon.svg') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection

@push('styles')
    <style>
        input[type=text]:focus + span, input[type=text]:valid + span {
            top: 0;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function checkPhoneKey(key) {
            return (key >= '0' && key <= '9') ||
                key == 'ArrowLeft' || key == 'ArrowRight' || key == 'Delete' || key == 'Backspace';
        }
    </script>
@endpush
