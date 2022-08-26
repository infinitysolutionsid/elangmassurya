@extends('welcome')
@section('title', 'About Us')
@section('page_description', 'PT. Elang Mas Surya ( EMS ) didirikan oleh Bapak Binsar Ho pada akhir tahun 1990-an, sejak
keberadaan perusahaan itu telah memegang reputasi besar pada fabrikasi baja untuk pemrosesan pabrik kelapa sawit
peralatan, pabrik pemecah batu dan industri umum.')
@section('page_keywords', '')
@section('content')
<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row col-mb-50 mb-0">
                <div class="col-12">

                    <div class="heading-block center border-bottom-0">
                        <h2>{{__('about_us')}}</h2>
                        {{-- <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span> --}}
                    </div>

                    <div class="fslider" data-pagi="false" data-animation="fade">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide"><a href="#"><img
                                            src="{!!asset('webpage/images/ems/aboutus-1.jpg')!!}" alt="About Image"></a>
                                </div>
                                <div class="slide"><a href="#"><img
                                            src="{!!asset('webpage/images/ems/aboutus-2.jpg')!!}" alt="About Image"></a>
                                </div>
                                <div class="slide"><a href="#"><img
                                            src="{!!asset('webpage/images/ems/aboutus-3.jpg')!!}" alt="About Image"></a>
                                </div>
                                <div class="slide"><a href="#"><img
                                            src="{!!asset('webpage/images/ems/aboutus-4.jpg')!!}" alt="About Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-12">

                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>{{__('our_story')}}</h4>
                    </div>

                    <p>{{__('about_text_1')}}
                        <br><br>
                        {{__('about_text_2')}}
                        <br><br>
                        {{__('about_text_3')}}
                    </p>

                </div>

                <div class="col-lg-6 text-left">

                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>{{__('mission')}}</h4>
                    </div>

                    <ol type="disc">
                        <li>{{__('mission_one')}}</li>
                        <li>{{__('mission_two')}}</li>
                        <li>{{__('mission_three')}}</li>
                        <li>{{__('mission_four')}}</li>
                    </ol>

                </div>

                <div class="col-lg-4 offset-2 text-center">

                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>{{__('vision')}}</h4>
                    </div>

                    <p>{{__('vision_text')}}</p>

                </div>

            </div>

        </div>

        <div class="section m-0">
            <div class="container clearfix">

                <div class="row col-mb-50">

                    <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge mx-auto icon-line2-directions"></i>
                        <div class="counter counter-lined"><span data-from="100" data-to="846"
                                data-refresh-interval="50" data-speed="2000"></span>K+</div>
                        <h5>Clients</h5>
                    </div>

                    <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="200">
                        <i class="i-plain i-xlarge mx-auto mb-0 icon-line2-graph"></i>
                        <div class="counter counter-lined"><span data-from="3000" data-to="15360"
                                data-refresh-interval="100" data-speed="2500"></span>+</div>
                        <h5>Lorem Ipsum</h5>
                    </div>

                    <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="400">
                        <i class="i-plain i-xlarge mx-auto mb-0 icon-line2-layers"></i>
                        <div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25"
                                data-speed="3500"></span>*</div>
                        <h5>No. of materials</h5>
                    </div>

                    <div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="600">
                        <i class="i-plain i-xlarge mx-auto mb-0 icon-line2-clock"></i>
                        <div class="counter counter-lined"><span data-from="60" data-to="1200"
                                data-refresh-interval="30" data-speed="2700"></span>+</div>
                        <h5>Hours of Sharing Materials</h5>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section><!-- #content end -->

@endsection
