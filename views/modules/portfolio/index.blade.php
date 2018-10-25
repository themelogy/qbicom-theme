@extends('layouts.master')

@section('header')
    @component('partials.headers.full-width', ['header_class'=>'no-transparent', 'menu_class'=>'no-home'])
    @endcomponent
@endsection

@section('breadcrumbs')
    @component('partials.parts.page-title', ['breadcrumbs'=>'portfolio.index'])
        @slot('title')
            {{ trans('themes::portfolio.title.portfolios') }}
        @endslot
    @endcomponent
@endsection

@section('content')

    <div class="grey-light-bg clearfix">
        <!-- COTENT CONTAINER -->
        <div class="container white-bg plr-30 pt-50 pb-20 ">
            <div class="relative">
                <!-- PORTFOLIO FILTER -->
                <div class="port-filter ">
                    <a href="#" class="filter active" data-filter="*">HEPSİ</a>
                    @foreach($categories as $category)
                    <a href="#" class="filter" data-filter=".{{ $category->slug }}">{{ $category->title }}</a>
                    @endforeach

                <!-- ITEMS GRID -->
                <ul class="port-grid port-grid-gut clearfix" id="items-grid">
                    @foreach($portfolios as $portfolio)
                    <!-- Item 1 -->
                    <li class="port-item mix @foreach($portfolio->categories as $cat) {{ $cat->slug }} @endforeach">
                        <a class="bg" href="{{ $portfolio->website }}" target="_blank">
                            <div class="port-img-overlay">
                                <img class="port-main-img" src="{{ $portfolio->present()->brandImage(null,100,'resize',80) }}" alt="{{ $portfolio->title }}">
                            </div>
                        </a>
                        <div class="port-overlay-cont">
                            <div class="port-title-cont">
                                <h3><a href="{{ $portfolio->website }}" target="_blank">{{ $portfolio->title }}</a></h3>
                                <div>
                                    {!! $portfolio->description !!}
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection