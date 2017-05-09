@extends('layouts.master')

@section('header')
    @component('partials.headers.full-width', ['header_class'=>'no-transparent', 'menu_class'=>'no-home'])
    @endcomponent
@endsection

@section('breadcrumbs')
    @component('partials.parts.page-title', ['breadcrumbs'=>'employee.view'])
    @slot('title')
    {{ $employee->fullname }}
    @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container p-50-cont">
        <div class="row">
            <div class="col-md-4">
                <div class="member col-md-12">
                @include('employee::partials._employee')
                </div>
            </div>
            <div class="col-md-8">
                {!! $employee->biography !!}
            </div>
        </div>
    </div>
@stop
