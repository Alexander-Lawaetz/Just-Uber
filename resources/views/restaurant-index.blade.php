@extends('layouts.layout')

@section('title', 'Food delivery & Take-away | Just Uber')

@section('navbar')
    <x-header class="text-light-important dark:text-dark-important" />
@endsection

@section('content')
    <div class="bg-light-secondary dark:bg-dark-primary p-4">
        <div class="container px-4 sm:px-8 mb-8 mx-auto">
            <div class="flex items-baseline mb-4">
                {{--TODO implement dynamic heading--}}
                <h2 class="text-2xl ">99 restaurants in {{ $postcode }} Odense V</h2>
                <a href="{{ '/' }}" class="ml-4 text-blue-500 font-bold">Change location</a>
            </div>
            <div class="flex-none sm:flex">
                <div>
                    <form id="restaurant-query-filter" action="{{ route('restaurants.filter', ['postcode' => $postcode]) }}" method="get" class="w-64">
                        <x-sorting-filter>
                            <x-sorting-filter.header>
                                <x-icons.just-eat.cuisine-svg class="h-6 w-6 mr-2" />
                                {{ $cuisines->title }}
                                <x-slot name="button">
                                    <button
                                        id="{{ $cuisines->group }}[]"
                                        type="button"
                                        onclick="clearCheckmarks(event)"
                                        class="text-base text-blue-500 font-bold"
                                    > Reset
                                    </button>
                                </x-slot>
                            </x-sorting-filter.header>
                            <x-sorting-filter.filter :list="$cuisines->data" :group="$cuisines->group" class="hidden lg:block"/>
                        </x-sorting-filter>
                        <x-sorting-filter>
                            <x-sorting-filter.header>
                                <x-icons.just-eat.cuisine-svg class="h-6 w-6 mr-2" />
                                {{ $refines->title }}
                                <x-slot name="button">
                                    <button
                                        id="{{ $refines->group }}[]"
                                        type="button"
                                        onclick="clearCheckmarks(event)"
                                        class="text-base text-blue-500 font-bold"
                                    > Reset
                                    </button>
                                </x-slot>
                            </x-sorting-filter.header>
                            <x-sorting-filter.filter :list="$refines->data" :group="$refines->group" class="hidden lg:block"/>
                        </x-sorting-filter>
                    </form>
                </div>
                <div class="sm:ml-6 w-full">
                    <x-restaurant-list :restaurants="$restaurants"/>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection

@push('scripts')
    <script>
        function onSubmit() {
            document.getElementById('restaurant-query-filter').submit();
        }
    </script>
@endpush
