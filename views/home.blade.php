@extends('layouts.master')

@section('header')
    @component('partials.headers.full-width', ['header_class'=>'', 'menu_class'=>''])
    @endcomponent
@endsection

@section('content')

    @include('partials.slider.revo')

    @if($block1 = Block::get('home-feature-1'))
        {!! $block1 !!}
    @else
    @include('partials.parts.features.1')
    @endif

    <hr class="mt-0 mb-0">

    @if($block2 = Block::get('home-feature-2'))
        {!! $block2 !!}
    @else
        @include('partials.parts.features.2')
    @endif

    <hr class="mt-0 mb-0">

    @if($block3 = Block::get('home-feature-3'))
        {!! $block3 !!}
    @else
        @include('partials.parts.features.3')
    @endif

    <hr class="mt-0 mb-0">

    @include('partials.parts.clients.1')

@endsection