@extends('layouts.layout')

@section('title', 'Food delivery & Take-away | Just Uber')

@section('navbar')
    <header class="container px-4 mx-auto">
        <x-navbar class="h-16"/>
    </header>
@endsection

@section('content')
    <?php echo $postcode; ?>
@endsection

@section('footer')
    <x-footer />
@endsection
