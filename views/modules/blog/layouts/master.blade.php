@extends('layouts.master')

@section('header')
    @component('partials.headers.full-width', ['header_class'=>'no-transparent', 'menu_class'=>'no-home'])
    @endcomponent
@endsection

@section('content')
    <div class="container p-50-cont">
        <div class="row">
            <!-- CONTENT -->
            <div class="col-sm-8 blog-main-posts">
                {!! $slot !!}
            </div>
            @include('blog::partials.sidebar')
        </div>
    </div>
@stop
