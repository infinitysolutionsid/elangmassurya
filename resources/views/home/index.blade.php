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

            <a href="#"><img src="{!!asset('webpage/demos/elangmas/assets/4.png')!!}" alt="Slider"></a>
            <a href="#"><img src="{!!asset('webpage/demos/elangmas/assets/2.png')!!}" alt="Slider"></a>
            <a href="#"><img src="{!!asset('webpage/demos/elangmas/assets/3.png')!!}" alt="Slider"></a>

        </div>


    </div>

</section>

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row clearfix">

                <div class="col-lg-4 center bottommargin">
                    <i class="i-plain color i-large icon-line2-screen-desktop inline-block"
                        style="margin-bottom: 20px;"></i>
                    <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                        <span class="before-heading">Scalable on any Business.</span>
                        <h4>Kelebihan</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae aut inventore velit
                        corporis tempore accusantium voluptatem, cumque, ullam et, maiores sapiente placeat alias?
                        Eligendi quidem quis tenetur natus minus..</p>
                </div>

                <div class="col-lg-4 center bottommargin">
                    <i class="i-plain color i-large icon-line2-energy inline-block" style="margin-bottom: 20px;"></i>
                    <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                        <span class="before-heading">Smartly Maintained.</span>
                        <h4>Kelebihan</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae aut inventore velit
                        corporis tempore accusantium voluptatem, cumque, ullam et, maiores sapiente placeat alias?
                        Eligendi quidem quis tenetur natus minus..</p>
                </div>

                <div class="col-lg-4 center bottommargin">
                    <i class="i-plain color i-large icon-line2-equalizer inline-block" style="margin-bottom: 20px;"></i>
                    <div class="heading-block border-bottom-0" style="margin-bottom: 15px;">
                        <span class="before-heading">Flexible &amp; Customizable.</span>
                        <h4>Kelebihan</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae aut inventore velit
                        corporis tempore accusantium voluptatem, cumque, ullam et, maiores sapiente placeat alias?
                        Eligendi quidem quis tenetur natus minus..</p>
                </div>

            </div>

            <div class="line mt-0"></div>

            <h3 class="center">Some of our <span>Latest</span> Works</h3>

            <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="1"
                data-loop="true" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3"
                data-items-lg="4" data-items-xl="4">

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/demos/elangmas/assets/1.png')!!}" alt="Spesialisasi untuk proyek
pabrik pemecah batu">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                <a href="images/portfolio/full/1.png')!!}"
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
                        <h3><a href="#">Spesialisasi untuk proyek
                                pabrik pemecah batu</a></h3>
                        <span><a href="#">Pabrik</a></span>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/demos/elangmas/assets/2.png')!!}" alt="Locked Steel Gate">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                <a href="images/portfolio/full/2.png')!!}"
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
                        <h3><a href="#">Spesialisasi untuk proyek
                                pabrik kelapa sawit</a></h3>
                        <span><a href="#">Kelapa Sawit</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/demos/elangmas/assets/3.png')!!}" alt="Mac Sunglasses">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall"
                                    data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall"
                                    data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Spesialisasi untuk proyek
                                pabrik kelapa sawit</a></h3>
                        <span><a href="#">Kelapa Sawit</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/demos/elangmas/assets/4.png')!!}" alt="Morning Dew">
                        </a>
                        <div class="bg-overlay" data-lightbox="gallery">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="images/portfolio/full/4.png')!!}"
                                    class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall"
                                    data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"
                                    data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="images/portfolio/full/4-1.jpg')!!}" class="d-none"
                                    data-lightbox="gallery-item"></a>
                                <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                    data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall"
                                    data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="#">Spesialisasi untuk proyek
                                pabrik kelapa sawit</a></h3>
                        <span><a href="#">Kelapa Sawit</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{!!asset('webpage/demos/elangmas/assets/5.png')!!}" alt="Console Activity">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="images/portfolio/full/5.png')!!}"
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
                        <h3><a href="#">Spesialisasi untuk proyek
                                pabrik kelapa sawit</a></h3>
                        <span><a href="#">Kelapa Sawit</a></span>
                    </div>
                </div>

            </div>

            <div class="line"></div>

            <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="100" data-loop="true"
                data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3"
                data-items-md="4" data-items-lg="5" data-items-xl="6">

                <div class="oc-item"><a href="#"><img src="{!!asset('webpage/images/clients/1.png')!!}"
                            alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{!!asset('webpage/images/clients/2.png')!!}"
                            alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{!!asset('webpage/images/clients/3.png')!!}"
                            alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{!!asset('webpage/images/clients/4.png')!!}"
                            alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{!!asset('webpage/images/clients/5.png')!!}"
                            alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{!!asset('webpage/images/clients/6.png')!!}"
                            alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{!!asset('webpage/images/clients/7.png')!!}"
                            alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{!!asset('webpage/images/clients/8.png')!!}"
                            alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{!!asset('webpage/images/clients/9.png')!!}"
                            alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{!!asset('webpage/images/clients/10.png')!!}"
                            alt="Clients"></a></div>

            </div>


        </div>
    </div>
</section><!-- #content end -->
@endsection
