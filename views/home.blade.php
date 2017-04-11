@extends('layouts.master')

@section('header')
    @component('partials.headers.full-width', ['header_class'=>'', 'menu_class'=>''])
    @endcomponent
@endsection

@section('content')

    @include('partials.slider.revo')

    @include('partials.parts.features.1')

    <hr class="mt-0 mb-0">

    @include('partials.parts.features.2')

    <hr class="mt-0 mb-0">

    @include('partials.parts.features.3')

    <hr class="mt-0 mb-0">

    @include('partials.parts.clients.1')

@endsection