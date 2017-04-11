@extends('layouts.master')

@section('header')
    @component('partials.headers.full-width', ['header_class'=>'no-transparent', 'menu_class'=>'no-home'])
    @endcomponent
@endsection

@section('breadcrumbs')
    @component('partials.parts.page-title', ['breadcrumbs'=>'contact'])
        @slot('title')
            {{ trans('contact::contacts.title.contacts') }}
        @endslot
    @endcomponent
@endsection

@section('content')

    <!-- GOOGLE MAP & CONTACT FORM -->
    <div class="page-section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6">
                    <div class="row row-sm-fix">
                        <div id="google-map">
                            @gmap('300px', '16', 'images/marker.png')
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-form-cont">
                        <!-- TITLE -->
                        <div class="mb-40">
                            <h3>İletişim Formu</h3>
                        </div>

                        <!-- CONTACT FORM -->
                        <div>
                            @include('contact::form')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- CONTACT INFO SECTION 1  -->
    <div id="contact-link" class="page-section p-50-cont bg-gray">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="cis-cont">
                        <div class="cis-icon">
                            <div class="icon icon-basic-map"></div>
                        </div>
                        <div class="cis-text">
                            <h3>{{ trans('themes::contact.address') }}</h3>
                            <p>{!! setting('theme::address') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="cis-cont">
                        <div class="cis-icon">
                            <div class="icon icon-basic-mail"></div>
                        </div>
                        <div class="cis-text">
                            <h3>{{ trans('themes::contact.email') }}</h3>
                            <p><a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! setting('theme::email') !!}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="cis-cont">
                        <div class="cis-icon">
                            <div class="icon icon-basic-smartphone"></div>
                        </div>
                        <div class="cis-text">
                            <h3>{{ trans('themes::contact.contact us') }}</h3>
                            <p>T {!! setting('theme::phone') !!} <br/>F {!! setting('theme::fax') !!}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection