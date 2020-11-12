@extends('layouts.layout')

@section('title', 'Food delivery & Take-away | Just Uber')

@section('navbar')
    <x-header class="text-light-important dark:text-dark-important"/>
@endsection

@section('content')
    <?php echo $postcode; ?>
@endsection

@section('footer')
    <x-footer />
@endsection
