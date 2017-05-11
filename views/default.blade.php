@extends('layouts.master')

@section('header')
    @component('partials.headers.full-width', ['header_class'=>'no-transparent', 'menu_class'=>'no-home'])
    @endcomponent
@endsection

@section('breadcrumbs')
    @component('partials.parts.page-title', ['breadcrumbs'=>'page'])
        @slot('title')
            {{ $page->title }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container p-50-cont">
        <div class="row">
            <div class="col-md-12">
                @if($image = $page->present()->firstImage(null, 250, 'resize', 80))
                <div class="pull-right m-lft-20 m-bot-20">
                    {!! Html::image($image, $page->title, ['class'=>'img-thumbnail']) !!}
                </div>
                @endif
                {!! $page->body !!}
            </div>
        </div>
    </div>
@stop
