@extends('layouts.master')

@section('header')
    @component('partials.headers.full-width', ['header_class'=>'no-transparent', 'menu_class'=>'no-home'])
    @endcomponent
@endsection

@section('breadcrumbs')
    @component('partials.parts.page-title', ['breadcrumbs'=>'page'])
        @slot('title')
            {{ $page->title }}
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="grey-light-bg clearfix"> 
      <!-- COTENT CONTAINER -->
      <div class="container white-bg plr-30 pt-50 pb-20 ">
        <div class="relative"> 
          <!-- PORTFOLIO FILTER -->
          <div class="port-filter "> <a href="#" class="filter active" data-filter="*">HEPSİ</a> <a href="#" class="filter" data-filter=".konut">KONUT/RESIDENCE</a> <a href="#" class="filter"data-filter=".insaat">İNŞAAT/YAPI</a> <a href="#" class="filter"data-filter=".saglik">SAĞLIK/MEDİKAL</a> <a href="#" class="filter"data-filter=".mobilya">MOBİLYA/DEKORASYON</a> <a href="#" class="filter"data-filter=".enerji">ENERJİ/OTOMOTİV</a> <a href="#" class="filter"data-filter=".kurum">KURUM/VAKIF/DERNEK</a> <a href="#" class="filter"data-filter=".sanayi">SANAYİ</a> <a href="#" class="filter"data-filter=".turizm">TURİZM/OTEL</a> <a href="#" class="filter"data-filter=".bilisim">BİLİŞİM/YAZILIM</a> <a href="#" class="filter"data-filter=".egitim">EĞİTİM/OKUL</a> <a href="#" class="filter"data-filter=".gida">GIDA/RESTAURANT</a> <a href="#" class="filter"data-filter=".hizmet">HİZMET SEKTÖRÜ</a> <a href="#" class="filter"data-filter=".finans">FİNANS SEKTÖRÜ</a><a href="#" class="filter"data-filter=".hukuk">HUKUK BÜROSU</a></div>
          
          <!-- ITEMS GRID -->
          <ul class="port-grid port-grid-gut clearfix" id="items-grid">
            
            <!-- Item 1 -->
            <li class="port-item mix saglik"> <a href="https://www.facebook.com/TOBBetuhastanesi/?fref=ts" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-tobbetu-hastane-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/TOBBetuhastanesi/?fref=ts" target="new">TOBB ETÜ HASTANESİ</a></h3>
                  <span><a href="https://www.facebook.com/TOBBetuhastanesi/?fref=ts" target="new">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="https://www.facebook.com/TOBBetuhastanesi/?fref=ts" target="new">YÖNETİMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-tobbetu-hastane-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/TOBBetuhastanesi/?fref=ts" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 2 -->
            
            <li class="port-item mix egitim"> <a href="https://www.facebook.com/tobb.etu.edu/?fref=ts" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-tobbetu-universite-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/tobb.etu.edu/?fref=ts" target="new">TOBB ETÜ ÜNİVERSİTESİ</a></h3>
                  <span><a href="https://www.facebook.com/tobb.etu.edu/?fref=ts" target="new">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">YÖNETİMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-tobbetu-universite-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/tobb.etu.edu/?fref=ts" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 3 -->
            <li class="port-item mix egitim"> <a href="qbicom-gazitto.html">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-gazitto-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="qbicom-gazitto.html">GAZİ TEKNOLOJİ TRANSFERİ OFİSİ</a></h3>
                  <span><a href="qbicom-gazitto.html">FİLM</a><span class="slash-divider">/</span><a href="qbicom-gazitto.html">PRODÜKSİYONLARI</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/Qbicom-EfesPilsen01.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="qbicom-gazitto.html">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 4 -->
            <li class="port-item mix saglik"> <a href="http://www.maximumbrain.com.tr/tr" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-tobbetu-maximumbrain-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/maximumbraintr/?fref=ts" target="new">MAXIMUMBRAIN NEUROFEETBACK</a></h3>
                  <span><a href="https://www.facebook.com/maximumbraintr/?fref=ts" target="new">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="http://www.maximumbrain.com.tr/tr" target="new">LOGO / GRAFİK TASARIM</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/Qbicom-EfesPilsen01.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="http://www.maximumbrain.com.tr/tr" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 5 -->
            <li class="port-item mix hizmet"> <a href="http://www.netgd.com.tr" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-netgd-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="http://www.netgd.com.tr" target="new">NET GAYRİMENKUL DEĞERLEME A.Ş.</a></h3>
                  <span><a href="http://www.netgd.com.tr" target="new">LOGO / BASILI İŞLER</a><span class="slash-divider">/</span><a href="http://www.netgd.com.tr" target="new">WEB TASARIM</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-netgd-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="http://www.netgd.com.tr" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 6 -->
            <li class="port-item mix insaat"> <a href="https://www.facebook.com/workinworkdesign/?fref=ts" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-workinwork-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/workinworkdesign/?fref=ts" target="new">WORK IN WORK</a></h3>
                  <span><a href="https://www.facebook.com/workinworkdesign/?fref=ts" target="new">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">LOGO / GRAFİK TASARIM</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/WorkinWork-Anime1.gif") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/workinworkdesign/?fref=ts" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 7 -->
            <li class="port-item mix saglik"> <a href="https://www.facebook.com/bugra.buyrukcu?fref=ts" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-dr-bugrabuyrukcu-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="http://www.bugrabuyrukcu.com" target="new">DR. BUĞRA BUYRUKÇU</a></h3>
                  <span><a href="https://www.facebook.com/bugra.buyrukcu?fref=ts" target="new">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="http://www.bugrabuyrukcu.com" target="new">WEB / LOGO TASARIM</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-dr-bugrabuyrukcu-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="http://www.bugrabuyrukcu.com" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 8 -->
            <li class="port-item mix egitim"> <a href="https://www.facebook.com/englishfuture.net/?fref=ts" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-englishfuture-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/englishfuture.net/?fref=ts" target="new">ENGLISH FUTURE</a></h3>
                  <span><a href="#">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">YÖNETİMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-englishfuture-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/englishfuture.net/?fref=ts" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 9 -->
            <li class="port-item mix hukuk"> <a href="http://www.avsar.av.tr" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-avsarhukuk-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="http://www.avsar.av.tr" target="new">AVŞAR HUKUK BÜROSU</a></h3>
                  <span><a href="#">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">YÖNETİMİ LOGO / GRAFİK TASARIMI</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-avsarhukuk-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="http://www.avsar.av.tr" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 10 -->
            <li class="port-item mix saglik"> <a href="https://www.map2heal.com" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-map2heal-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/map2heal/?fref=ts" target="new">MAP 2 HEAL</a></h3>
                  <span><a href="#">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">YÖNETİMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-map2heal-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/map2heal/?fref=ts" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 11 -->
            
            <li class="port-item mix turizm"> <a href="qbicom-ayder.html">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-ayder-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="qbicom-ayder.html" >AYDER TURİZM</a></h3>
                  <span><a href="#">MARKA STRATEJİ DANIŞMANLIĞI</a><span class="slash-divider">/</span><a href="#">TANITIM FİLMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-newcity-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="qbicom-ayder.html" >
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 12 -->
            <li class="port-item mix enerji"> <a href="http://www.ykenerji.com.tr" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-ykenerji-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="http://www.ykenerji.com.tr" target="new">YENİKÖY KEMERKÖY ENERJİ</a></h3>
                  <span><a href="#">WEB SİTESİ</a><span class="slash-divider">/</span><a href="#">FOTOĞRAF ÇEKİMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/YK-Enerji.gif") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="http://www.ykenerji.com.tr" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 13 -->
            <li class="port-item mix insaat"> <a href="qbicom-prokar.html">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-prokar-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="qbicom-prokar.html">PROKAR YAPI</a></h3>
                  <span><a href="http://prokaryapi.com" target="new">LOGO / WEB</a><span class="slash-divider">/</span><a href="qbicom-prokar.html">BASILI İŞLER</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-prokar-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="qbicom-prokar.html">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 14 -->
            <li class="port-item mix bilisim"> <a href="#">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-utarit-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="#">UTARİT BİLİŞİM A.Ş.</a></h3>
                  <span><a href="#">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">GRAFİK TASARIMI / BASILI İŞLER</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-utarit-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="#">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 15 -->
            <li class="port-item mix sanayi"> <a href="https://www.facebook.com/www.saygilimakina.com.tr/?fref=ts" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-saygilimakina-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/www.saygilimakina.com.tr/?fref=ts" target="new">SAYGILI KUMLAMA MAKİNASI</a></h3>
                  <span><a href="#">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">YÖNETİMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-saygilimakina-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/www.saygilimakina.com.tr/?fref=ts" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 16 -->
            <li class="port-item mix konut insaat hizmet turizm"> <a href="qbicom-new-city-thermal.html">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-newcity-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="qbicom-new-city-thermal.html" >ANKARA NEWCITY THERMAL REGION</a></h3>
                  <span><a href="#">THERMAL ARAZİ</a><span class="slash-divider">/</span><a href="#">TANITIM FİLMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-newcity-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="qbicom-new-city-thermal.html" >
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 17 -->
            <li class="port-item mix sanayi"> <a href="https://www.facebook.com/OzitechTurkey/?fref=ts" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-ozitech-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/OzitechTurkey/?fref=ts" target="new">OZITECH KUMLAMA EKİPMANLARI</a></h3>
                  <span><a href="#">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">YÖNETİMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-ozitech-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/OzitechTurkey/?fref=ts" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 18 -->
            <li class="port-item mix hizmet"> <a href="https://www.facebook.com/armantesigorta/?fref=ts" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-armante-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/armantesigorta/?fref=ts" target="new">ARMANTE SİGORTA</a></h3>
                  <span><a href="#">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">YÖNETİMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-armante-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/armantesigorta/?fref=ts" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 19 -->
            <li class="port-item mix hizmet insaat"> <a href="https://www.facebook.com/realtyworldacilgayrimenkul/?fref=ts" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-realtyworld-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/realtyworldacilgayrimenkul/?fref=ts" target="new">REALTY WORLD ACİL GAYRİMENKUL</a></h3>
                  <span><a href="https://www.facebook.com/realtyworldacilgayrimenkul/?fref=ts">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">YÖNETİMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-realtyworld-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/realtyworldacilgayrimenkul/?fref=ts" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 20 -->
            <li class="port-item mix saglik"> <a href="https://www.facebook.com/huseyin.cimen.1000?fref=ts" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-dr-huseyincimen-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/huseyin.cimen.1000?fref=ts" target="new">DR. HÜSEYİN ÇİMEN</a></h3>
                  <span><a href="https://www.facebook.com/huseyin.cimen.1000?fref=ts">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">LOGO TASARIMI</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-dr-huseyincimen-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/huseyin.cimen.1000?fref=ts" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 21 -->
            <li class="port-item mix gida"> <a href="qbicom-efespilsen.html">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-efespilsen-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="qbicom-efespilsen.html">EFES PİLSEN</a></h3>
                  <span><a href="#">ANKARA BÖLGESİ İŞLETMELERİ</a><span class="slash-divider">/</span><a href="#">MÖNÜ TASARIM VE BASIMLARI</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/Qbicom-EfesPilsen01.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="qbicom-efespilsen.html">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            <!-- Item 22 -->
            <li class="port-item mix egitim kurum"> <a href="qbicom-ozegep.html">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-ozegep-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="qbicom-ozegep.html" >ÖZEL EĞİTİMİN GÜÇLENDİRİLMESİ PROJESİ </a></h3>
                  <span><a href="#">TV KAMU</a><span class="slash-divider">/</span><a href="#">SPOTU FİLMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-ozegep-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="qbicom-ozegep.html" >
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 23 -->
            <li class="port-item mix hizmet insaat"> <a href="https://www.facebook.com/elektronikkimliklendirme/" target="new">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-kimlikleme-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="https://www.facebook.com/elektronikkimliklendirme/" target="new">ELEKTRONİK KİMLİKLENDİRME PROJESİ</a></h3>
                  <span><a href="https://www.facebook.com/elektronikkimliklendirme/">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="#">YÖNETİMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-kimlikleme-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="https://www.facebook.com/elektronikkimliklendirme/" target="new">
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
            
            <!-- Item 24 -->
            <li class="port-item mix egitim kurum"> <a href="qbicom-gulhan.html">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/portfolio/qbicom-gulhan-logo.jpg") }}" alt="qbicom" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="qbicom-gulhan.html" >GÜLHAN KAUÇUK </a></h3>
                  <span><a href="#">TANITIM</a><span class="slash-divider">/</span><a href="#">FİLMİ</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-gulhan-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a href="qbicom-gulhan.html" >
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
			
            <!-- Item 25 -->
            <li class="port-item mix egitim kurum"> <a href="qbicom-gulhan.html">
              <div class="port-img-overlay"><img class="port-main-img" src="{{ Theme::url("images/referans/babillon-hotel.jpg") }}" alt="babillon" ></div>
              </a>
              <div class="port-overlay-cont">
                <div class="port-title-cont">
                  <h3><a href="qbicom-gulhan.html" >BABİLLON HOTEL</a></h3>
                  <span><a href="https://www.facebook.com/babillonhotel/" target="new">SOSYAL MEDYA</a><span class="slash-divider">/</span><a href="http://babillonhotel.com/" target="new">WEB / LOGO TASARIM</a></span> </div>
                <div class="port-btn-cont"> <a href="{{ Theme::url("images/portfolio/qbicom-gulhan-big.jpg") }}" class="lightbox mr-20" >
                  <div aria-hidden="true" class="icon_search"></div>
                  </a> <a target="_blank" href="http://babillonhotel.com/" >
                  <div aria-hidden="true" class="icon_link"></div>
                  </a> </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
@stop
