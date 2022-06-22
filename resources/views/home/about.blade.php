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
                        <h2>About Us</h2>
                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span>
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
                        <h4>Our Story</h4>
                    </div>

                    <p>PT. Elang Mas Surya ( EMS ) didirikan oleh Bapak Binsar Ho pada akhir tahun 1990-an, sejak
                        keberadaan perusahaan itu telah memegang reputasi besar pada fabrikasi baja untuk pemrosesan
                        pabrik kelapa sawit peralatan, pabrik pemecah batu dan industri umum.
                        <br><br>
                        EMS dengan pengalaman bertahun-tahun keahlian adalah spesialisasi dalam Desain, Pasokan, Layanan
                        & Optimalisasi peralatan proses dan komponen aus untuk industri pabrik kelapa sawit, pabrik
                        pemecah batu dan industri umum.
                        <br><br>
                        Filosofi EMS adalah menyediakan solusi yang dioptimalkan kepada pelanggan melalui setelan
                        dukungan teknis kepada pelanggan, persyaratan, sehingga memberikan solusi yang dirancang khusus
                        secara ideal untuk aplikasi, dan menawarkan layanan untuk pengoptimalan proses di seluruh dunia.
                    </p>

                </div>

                <div class="col-lg-6 text-left">

                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>Our <span>Mission</span>.</h4>
                    </div>

                    <ol type="disc">
                        <li>Menjadi Perusahaan yang profitable</li>
                        <li>Memperluas Pasar Sasaran secara berkesinambungan</li>
                        <li>Memberikan pelayanan tepat waktu kepada pelanggan</li>
                        <li>Menempatkan SDM yang kompeten untuk jabatan yang tepat </li>
                    </ol>

                </div>

                <div class="col-lg-4 offset-2 text-center">

                    <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                        <h4>OUR <span>VISION</span>.</h4>
                    </div>

                    <p>Menjadi perusahaan kontraktor dan supplier untuk Palm oil Mill, Stone Crusher, Mining dan Oil &
                        Gas yang terbaik di Indonesia.</p>

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
