<div class="container" >
    <div class="row" >
        <div class="col-md-12" >
            <div id="owl-clients" class="owl-carousel our-clients-cont" >
                <div class="item"><img src="{{ Theme::url('images/musteriler/EfesPilsen.png') }}" alt="EFES PİLSEN"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/NETLOGO.png') }}" alt="NET KURUMSAL DEĞERLEME"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/GaziTTO.png') }}" alt="GAZİ TEKNOLOJİ TRANSFERİ OFİSİ"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/OzegepLogo.png') }}" alt="ÖZEGEP PROJESİ"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/RonesansLogo.png') }}" alt="RÖNESANS TÜRKMEN"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/AbantLogo.png') }}" alt="BÜYÜK ABANT OTELİ"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/SenfoniLogo.png') }}" alt="SENFONİ MOBİLYA"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/MertTasarim.png') }}" alt="MERT TASARIM"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/HeritageTurkLogo.png') }}" alt="HERITAGETURK FINANCE"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/OliviumBodrum.png') }}" alt="OLIVIUM BODRUM PROJECT"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/MedikalNetwork.png') }}" alt="MEDİKAL NETWORK"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/WorkinWork.png') }}" alt="WORK IN WORK"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/GBBrokers.png') }}" alt="GLOBAL BROKERS"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/NoyaLogo.png') }}" alt="NOYA OZON"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/MediCare.png') }}" alt="MEDICARE EVDE BAKIM"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/TeknoKonutLogo.png') }}" alt="TEKNOKONUT"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/HMilkLogo.png') }}" alt="HEALTHY MILK"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/ImpromiaLogo.png') }}" alt="IMPROMIA PROJECT"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/MecFuture.png') }}" alt="MECFUTURE PROJECT"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/TaumaLogo.png') }}" alt="TAUMA PROJECT"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/SOYProjesi.png') }}" alt="SOY PROJECT"></div>
                <div class="item"><img src="{{ Theme::url('images/musteriler/ReavidLogo.png') }}" alt="REAVİD DANIŞMANLIK"></div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
{!! Theme::script('js/owl.carousel.min.js') !!}
@endpush

@push('js_inline')
<script>
    (function () {
        $("#owl-clients").owlCarousel({
            //Set AutoPlay to 3 seconds
            autoPlay : 6000,
            items : 5,
            itemsDesktop : [1199, 4], //5 items between 1000px and 901px
            itemsDesktopSmall : [768, 3], // betweem 900px and 601px
            itemsTablet: [480, 2], //2 items between 600 and 0
            itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
            pagination : false,
            paginationNumbers: false,
        });
    })(jQuery);
</script>
@endpush

@push('styles')
{!! Theme::script('css/owl-carousel/owl.carousel.css') !!}
@endpush