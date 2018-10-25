@stack('styles')
{!! Asset::css() !!}
@stack('css_inline')

<script type="text/javascript">
    WebFontConfig = {
        google: {
            families: [
                'Open Sans:300,400,600,700:latin-ext',
                'Lato:300,400,700,900:latin-ext',
                'Montserrat:400,700:latin-ext',
                'Poppins:400',
                'Raleway:300,400,500,600:latin-ext'
            ]
        }
    };
    (function () {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

{!! Theme::script('js/jquery.min.js') !!}
{!! Theme::script('js/bootstrap.min.js') !!}

{!! Theme::script('js/jquery.magnific-popup.min.js') !!}

{!! Theme::script('js/isotope.pkgd.min.js') !!}
{!! Theme::script('js/imagesloaded.pkgd.min.js') !!}
{!! Theme::script('js/masonry.pkgd.min.js') !!}

{!! Theme::script('js/jquery.appear.js') !!}

{!! Theme::script('js/owl.carousel.min.js') !!}

{!! Theme::script('js/jquery.stellar.min.js') !!}

@stack('scripts')
{!! Asset::js() !!}

<!-- MAIN SCRIPT -->
{!! Theme::script('js/main.js') !!}

@stack('js_inline')

@include('partials.analytics')