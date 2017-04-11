@if($slide = Slide::findBySlug('anasayfa'))
    @if(count($slide)>0)
        <div class="relative">
            <div class="rev_slider_wrapper fullscreen-container" id="rev_slider_wrapper" style="background-color:#fff;padding:0px;">
                <div class="rev_slider fullscreenbanner" id="rev_slider">
                    <ul>
                    @foreach($slide->sliders()->where('status', 1)->orderBy('ordering', 'asc')->get() as $slider)
                        <li data-description=""
                            data-easein="Power2.easeInOut"
                            data-easeout="default"
                            data-masterspeed="1500"
                            data-saveperformance="on"
                            data-slotamount="default"
                            data-title="{{ $slider->title }}"
                            data-thumb="{{ $slider->present()->firstImage(180, 110, 'fit', 75) }}"
                            data-transition="fade">
                            <img alt="img"
                                 data-bgposition="center top"
                                 data-bgfit="cover"
                                 data-bgrepeat="no-repeat"
                                 src="{{ $slider->present()->firstImage(1280, 600, 'fit', 75) }}">
                            {!! $slider->content !!}
                        </li>
                        @endforeach
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->

            <!-- SCROLL ICON -->
            <div class="local-scroll-cont">
                <a href="#about" class="scroll-down smooth-scroll">
                    <div class="icon icon-arrows-down"></div>
                </a>
            </div>

        </div>


        @push('styles')
        {!! Theme::style('vendor/revo-slider/css/settings.css') !!}
        {!! Theme::style('vendor/revo-slider/css/navigation-skins/hermes-custom.css') !!}
        @endpush

        @push('scripts')
        {!! Theme::script('js/revolution-slider.min.js') !!}
        @endpush

        @push('js_inline')
        <!-- SLIDER REVOLUTION INITIALIZATION  -->
        <script type="text/javascript">
            jQuery(document).ready(function() {

                jQuery("#rev_slider").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revo-slider/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 50,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "hermes",
                            enable: true,
                            hide_onmobile: true,
                            hide_onleave: true,
                            tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">@{{title}}</div>	</div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            }
                        },
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        type: "off",
                        origo: "slidercenter",
                        speed: 1000,
                        levels: [0],
                        type: "scroll",
                        disable_onmobile: "on"
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: 1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });

            }); /*ready*/
        </script>

        @endpush

    @endif
@endif