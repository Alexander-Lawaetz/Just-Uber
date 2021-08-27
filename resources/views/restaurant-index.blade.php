@extends('layouts.layout')

@section('title', 'Food delivery & Take-away | Just Uber')

@section('navbar')
    <x-header class="text-light-important dark:text-dark-important" />
@endsection

@section('content')
    @livewire('restaurant-list', ['postcode' => $postcode])
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
