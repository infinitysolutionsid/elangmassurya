@extends('welcome')
@section('title', 'Home')
@section('page_description', 'PT. Elang Mas Surya ( EMS ) didirikan oleh Bapak Binsar Ho pada akhir tahun 1990-an, sejak
keberadaan perusahaan itu telah memegang reputasi besar pada fabrikasi baja untuk pemrosesan pabrik kelapa sawit
peralatan, pabrik pemecah batu dan industri umum.')
@section('page_keywords', '')
@section('content')
<section id="slider" class="slider-element boxed-slider">
    <div class="container clearfix">
        <div id="oc-slider" class="owl-carousel carousel-widget" data-items="1" data-loop="true" data-nav="true"
            data-autoplay="5000" data-animate-in="fadeIn" data-animate-out="fadeOut" data-speed="800">
            <a href="#"><img src="{!!asset('webpage/images/ems/home-1.jpg')!!}" alt="Slider"></a>
            <a href="#"><img src="{!!asset('webpage/images/ems/home-2.jpg')!!}" alt="Slider"></a>
            <a href="#"><img src="{!!asset('webpage/images/ems/home-4.jpg')!!}" alt="Slider"></a>
            <a href="#"><img src="{!!asset('webpage/images/ems/home-5.jpg')!!}" alt="Slider"></a>
        </div>
    </div>
</section>

<section id="content">
    <div class="content-wrap" style="padding: 50px 0px !important;">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-lg-6 offset-3 text-center">
                    <h2 class="left" style="text-transform: uppercase;">PT. Elang Mas Surya</h2>
                    <p>{{__('summary')}}</p>
                </div>
            </div>
            <div class="row clearfix">

                <div class="col-lg-4 offset-lg-1 center bottommargin">
                    <i class="i-plain color i-large icon-line2-screen-desktop inline-block"
                        style="margin-bottom: 20px;"></i>
                    <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                        <h2>{{__('vision')}}</h2>
                    </div>
                    <p>{{__('vision_text')}}</p>
                </div>

                <div class="col-lg-4 offset-lg-1 bottommargin" style="text-align: center;">
                    <i class="i-plain color i-large icon-line2-energy inline-block" style="margin-bottom: 20px;"></i>
                    <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                        <h2>{{__('mission')}}</h2>
                    </div>
                    <p>
                        <ol type="disc" style="text-align: left;">
                            <li>{{__('mission_one')}}</li>
                            <li>{{__('mission_two')}}</li>
                            <li>{{__('mission_three')}}</li>
                            <li>{{__('mission_four')}}</li>
                        </ol>
                    </p>
                </div>

            </div>
            <div class="row clearfix justify-content-center">

                <div class="col-lg-10 bottommargin">
                    <div class="heading-block border-bottom-0" style="margin-bottom: 1.5rem;">
                        <h2>{{__('company_culture')}}</h2>
                        <hr>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-3 text-left">
                            <h3 style="margin-bottom:0;">{{__('integrity')}}</h3>
                            <p>{{__('integrity_text')}}</p>
                        </div>
                        <div class="col-lg-3 text-left">
                            <h3 style="margin-bottom:0;">{{__('commitment')}}</h3>
                            <p>{{__('commitment_text')}}</p>
                        </div>
                        <div class="col-lg-3 text-left">
                            <h3 style="margin-bottom:0;">{{__('teamwork')}}</h3>
                            <p>{{__('teamwork_text')}}</p>
                        </div>
                        <div class="col-lg-3 text-left">
                            <h3 style="margin-bottom:0;">{{__('responsibility')}}</h3>
                            <p>{{__('responsibility_text')}}</p>
                        </div>
                        <div class="col-lg-3 text-left">
                            <h3 style="margin-bottom:0;">{{__('loyalty')}}</h3>
                            <p>{{__('loyalty_text')}}</p>
                        </div>
                        <div class="col-lg-3 text-left">
                            <h3 style="margin-bottom:0;">{{__('innovation')}}</h3>
                            <p>{{__('innovation_text')}}</p>
                        </div>
                        <div class="col-lg-3 text-left">
                            <h3 style="margin-bottom:0;">{{__('efficiency')}}</h3>
                            <p>{{__('efficiency_text')}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap" style="padding-top: 0px;">
        <div class="container clearfix">

            <div class="line mt-0"></div>

            <h3 class="left">{{__('our_projects')}}</h3>

            <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="1"
                data-loop="true" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
                data-items-lg="4" data-items-xl="4">

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/images/ems/stone-crusher-plans/14-min.jpg')!!}" alt="Spesialisasi untuk proyek
pabrik pemecah batu">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                <a href="{!!asset('webpage/images/ems/stone-crusher-plans/14-min.jpg')!!}"
                                    class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall"
                                    data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                    data-lightbox="image"><i class="icon-line-plus"></i></a>
                                <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall"
                                    data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Stone crusher plant</a></h3>
                        <span><a href="#">Proyek Stone Crusher</a></span>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/demos/elangmas/assets/2.png')!!}" alt="Locked Steel Gate">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                <a href="{!!asset('webpage/demos/elangmas/assets/2.png')!!}"
                                    class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall"
                                    data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                    data-lightbox="image"><i class="icon-line-plus"></i></a>
                                <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall"
                                    data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Rebusan / Sterilizer</a></h3>
                        <span><a href="#">Proyek Kelapa Sawit</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/demos/elangmas/assets/3.png')!!}" alt="Mac Sunglasses">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                <a href="{!!asset('webpage/demos/elangmas/assets/3.png')!!}"
                                    class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall"
                                    data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"
                                    data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall"
                                    data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Storage tank</a></h3>
                        <span><a href="#">Proyek Kelapa Sawit</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/images/ems/palm-oil-mills/9-min.jpg')!!}"
                                alt="Console Activity">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{!!asset('webpage/images/ems/palm-oil-mills/9-min.jpg')!!}"
                                    class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall"
                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"
                                    title="Image"><i class="icon-line-plus"></i></a>
                                <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Palm Oil Mills</a></h3>
                        <span><a href="#">Proyek Palm Oil Mills</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/images/ems/stone-crusher-plans/15-min.jpg')!!}"
                                alt="Console Activity">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{!!asset('webpage/images/ems/stone-crusher-plans/15-min.jpg')!!}"
                                    class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall"
                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"
                                    title="Image"><i class="icon-line-plus"></i></a>
                                <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Scrapper</a></h3>
                        <span><a href="#">Proyek Stone Crusher</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/images/ems/stone-crusher-plans/new-1.jpg')!!}"
                                alt="Console Activity">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{!!asset('webpage/images/ems/stone-crusher-plans/new-1.jpg')!!}"
                                    class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall"
                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"
                                    title="Image"><i class="icon-line-plus"></i></a>
                                <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Scrapper</a></h3>
                        <span><a href="#">Proyek Stone Crusher</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/images/ems/stone-crusher-plans/new-2.jpg')!!}"
                                alt="Console Activity">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="{!!asset('webpage/images/ems/stone-crusher-plans/new-2.jpg')!!}"
                                    class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall"
                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"
                                    title="Image"><i class="icon-line-plus"></i></a>
                                <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Scrapper</a></h3>
                        <span><a href="#">Proyek Stone Crusher</a></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- #content end -->
@endsection
