<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
@include('partials.metadata')
</head>
<body>

@include('partials.loader')

<div id="wrap" class="boxed">
    <div class="grey-bg">

        @include('partials.ie-fix')

        @yield('header')

        @yield('breadcrumbs')

        @yield('content')

        @include('partials.footers.1')

        @include('partials.parts.back-to-top')

    </div>
</div>

@include('partials.scripts')

</body>
</html>