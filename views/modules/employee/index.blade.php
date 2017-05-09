@extends('layouts.master')

@section('header')
    @component('partials.headers.full-width', ['header_class'=>'no-transparent', 'menu_class'=>'no-home'])
    @endcomponent
@endsection

@section('breadcrumbs')
    @component('partials.parts.page-title', ['breadcrumbs'=>'employee.index'])
    @slot('title')
    {{ trans('themes::employee.title') }}
    @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container p-50-cont">
        <div class="row">
            <div class="col-md-12">
                @foreach($employees as $employee)
                    <div class="member col-md-4 col-sm-4">
                    @include('employee::partials._employee')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
