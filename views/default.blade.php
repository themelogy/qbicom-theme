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
                <h4>{{ $page->title }}</h4>
                {!! $page->body !!}
            </div>
        </div>
    </div>
@stop
