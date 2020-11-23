@extends('layouts.layout')

@section('title', 'Food delivery & Take-away | Just Uber')

@section('navbar')
    <x-header class="text-light-important dark:text-dark-important" />
@endsection

@section('content')
    <div class="bg-light-secondary dark:bg-dark-primary p-4">
        <div class="container px-4 sm:px-8 mb-8 mx-auto">
            <div class="flex items-baseline mb-4">
                <!-- TODO implement dynamic number of resaurants reference -->
                <h2 class="text-2xl ">99 restaurants in {{ $postcode }} Odense V</h2>
                <a href="{{ '/' }}" class="ml-4 text-blue-500 font-bold">Change location</a>
            </div>
            <div class="flex">
                <div>
                    <form id="restaurant-query-filter" action="{{ route('restaurants.filter', ['postcode' => $postcode]) }}" method="get" class="w-64">
                        {{--<input class="hidden" type="text" name="postcode" value="{{ $postcode }}"/>--}}
                        <div>
                            <x-restaurant-filter :title="$cuisines->title" :group="$cuisines->group" :list="$cuisines->data" />
                        </div>
                        <div>
                            <x-restaurant-filter :title="$refines->title" :group="$refines->group" :list="$refines->data" />
                        </div>
                    </form>
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
