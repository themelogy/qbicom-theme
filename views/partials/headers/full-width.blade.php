<div class="header-light-bg"></div>
<header id="nav" class="header header-1 header-boxed @if(isset($header_class)){{ $header_class }} @endif">
    <div class="top-bar top-bar-black">
        <div class="container relative">

            <!-- LEFT SECTION -->
            <ul class="top-bar-section left display-xxs-no">
                @php $socials = ['twitter', 'facebook', 'google', 'instagram', 'linkedin', 'youtube', 'pinterest']; @endphp
                @foreach($socials as $social)
                    @if($link = setting('theme::'.$social))
                        <li><a href="{{ $link }}" target="_blank"><i class="fa fa-{{ $social }}"></i></a></li>
                    @endif
                @endforeach
            </ul>

            <!-- RIGHT SECTION -->
            <ul class="top-bar-section right">
                <li><a href="tel:138376628"><i class="fa fa-phone mr-5"></i> {{ setting('theme::phone') }}</a></li>
                <li class="display-xxs-no">
                    <a href="mailto:{{ Html::email(setting('theme::email')) }}" title="E-mail">
                        <i class="fa fa-envelope mr-7"></i> {{ setting('theme::email') }}
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <div class="header-wrapper">
        <div class="container relative">
            <div class="clearfix">
                <div class="logo-row">
                    <!-- LOGO -->
                    <div class="logo-container-2">
                        <div class="logo-2">
                            <a href="{{ url(locale()) }}" class="clearfix">
                                <img src="{{ Theme::url('images/logo/logo.svg') }}" class="logo-img" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- BUTTON -->
                    <div class="menu-btn-respons-container">
                        <button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                            <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- MAIN MENU CONTAINER -->
            <div class="main-menu-container">

                <div class="clearfix">

                    <!-- MAIN MENU -->
                    <div id="main-menu" class="@if(isset($menu_class)){{ $menu_class }} @endif">
                        <div class="navbar navbar-default" role="navigation">
                            <!-- MAIN MENU LIST -->
                            <nav class="collapse collapsing navbar-collapse right-1024">
                                {!! Menu::render('header', Themes\Qbicom\Presenter\HeaderMenuPresenter::class) !!}

                            </nav>

                        </div>
                    </div>
                    <!-- END main-menu -->

                </div>
                <!-- END container-m-30 -->

            </div>
            <!-- END main-menu-container -->
            <!-- SEARCH READ DOCUMENTATION -->
            <ul class="cd-header-buttons">
                <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
            </ul> <!-- cd-header-buttons -->
            <div id="cd-search" class="cd-search">
                <form class="form-search" id="searchForm" action="#" method="get">
                    <input type="text" value="" name="q" id="q" placeholder="Ara...">
                </form>
            </div>
        </div>

    </div>
    <!-- END header-wrapper -->

</header>