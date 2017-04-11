{!! seo_helper()->render() !!}
<meta id="token" name="csrf-token" content="{{ csrf_token() }}">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->

<!-- FAVICONS -->
<link rel="shortcut icon" href="{{ Theme::url('images/favicon/favicon.png') }}">
<link rel="apple-touch-icon" href="{{ Theme::url('images/favicon/apple-touch-icon.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ Theme::url('images/favicon/apple-touch-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ Theme::url('images/favicon/apple-touch-icon-114x114.png') }}">
<link rel="icon" sizes="192x192" href="{{ Theme::url('images/favicon/icon-192x192.png') }}">

{!! Theme::style('css/bootstrap.min.css') !!}
{!! Theme::style('css/icons-fonts.css') !!}
{!! Theme::style('css/style.min.css') !!}
{!! Theme::style('css/animate.min.css') !!}

<!--[if lte IE 8]>{!! Theme::style('css/ie-warning.css') !!}<![endif]-->
<!--[if lte IE 8]>{!! Theme::style('css/ie8-fix.css') !!}<![endif]-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
