<!-- FOOTER 3 FONT MONTSERRAT -->
<footer id="footer7" class="page-section pt-50 pb-50 footer-top-gray">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-3 widget">
                <div class="logo-footer-cont">
                    <a href="{{ url(locale()) }}">
                        <img class="logo-footer" src="{{ Theme::url('images/logo/logo.svg') }}" alt="{{ setting('theme::company-name') }}">
                    </a>
                </div>
                <div class="footer2-text-cont">
                    <address>
                        {!! setting('theme::address') !!}
                    </address>
                </div>
                <div class="footer2-text-cont">
                    T {!! setting('theme::phone') !!}<br>
                    F {!! setting('theme::fax') !!}<br>
                    <a class="a-text" href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! setting('theme::email') !!}</a>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 widget">
                @php $menu = app(\Modules\Menu\Repositories\MenuRepository::class)->find(4) @endphp
                @if(isset($menu))
                <h4 class="font-montserrat"><strong>{{ $menu->title }}</strong></h4>
                <ul class="links-list bold a-text-cont">
                    {!! Menu::render($menu->name, Themes\Qbicom\Presenter\FooterMenuPresenter::class) !!}
                </ul>
                @endif
            </div>

            <div class="col-md-3 col-sm-3 widget">
                @php $menu = app(\Modules\Menu\Repositories\MenuRepository::class)->find(3) @endphp
                @if(isset($menu))
                    <h4 class="font-montserrat"><strong>{{ $menu->title }}</strong></h4>
                    <ul class="links-list bold a-text-cont">
                        {!! Menu::render($menu->name, Themes\Qbicom\Presenter\FooterMenuPresenter::class) !!}
                    </ul>
                @endif
            </div>

            <div class="col-md-3 col-sm-3 widget">
                <h4 class="font-montserrat">
                    <strong>Haber Bülteni</strong>
                </h4>
                <div class="relative ">
                    <div id="mc_embed_signup" class="nl-form-container clearfix">
                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform2 validate">
                            <input type="email" value="" name="EMAIL" class="email nl2-email-input" id="mce-EMAIL" placeholder="E-Posta Adresi" required>
                            <div style="position: absolute; left: -5000px;">
                                <input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value="">
                            </div>

                            <button id="mc-embedded-subscribe" class="nl2-btn" type="submit" name="subscribe">
                                <span class="icon icon-arrows-slim-right"></span>
                            </button>

                        </form>
                        <div id="notification_container"></div>
                    </div>
                </div>

            </div>

        </div>

        <!-- SUB FOOTER -->
        <div class="footer2-copy-cont clearfix">
            <!-- Social Links -->
            <div class="footer2-soc-a right">
                @php $socials = ['twitter', 'facebook', 'google', 'instagram', 'linkedin', 'youtube', 'pinterest']; @endphp
                @foreach($socials as $social)
                    @if($link = setting('theme::'.$social))
                        <a href="{{ $link }}" target="_blank"><i class="fa fa-{{ $social }}"></i></a>
                    @endif
                @endforeach
            </div>

            <!-- Copyright -->
            <div class="left">
                <a class="footer2-copy" href="{{ url(locale()) }}" target="_blank">
                    {!! trans('themes::theme.copyrights', [
                    'date'=>Carbon::now()->format('Y'),
                    'name'=>setting('theme::company-name'),
                    'url'=>url(locale()),
                    'powered'=>setting('core::site-name-mini')
                    ]) !!}
                </a>
            </div>

        </div>

    </div>
</footer>