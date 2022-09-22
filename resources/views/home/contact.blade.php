@extends('welcome')
@section('title', 'Contact')
@section('page_description', 'PT. Elang Mas Surya ( EMS ) didirikan oleh Bapak Binsar Ho pada akhir tahun 1990-an, sejak
keberadaan perusahaan itu telah memegang reputasi besar pada fabrikasi baja untuk pemrosesan pabrik kelapa sawit
peralatan, pabrik pemecah batu dan industri umum.')
@section('page_keywords', '')
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Postcontent
						============================================= -->
                <div class="postcontent col-lg-9">

                    <h3>{{__('send_us_an_email')}}</h3>

                    <div class="form-widget">

                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            <span>You have successfully send the appointment to Dr. Shindy Je. Please wait for the
                                replies
                                max. 24 hours from you sent us this appointment.</span>
                        </div>
                        @endif

                        <form class="row mb-0" action="/contact" method="post">
                            @csrf
                            <div class="col-md-4 form-group">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" name="name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" name="email" value="" class="required email sm-form-control" />
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" name="phone" value="" class="sm-form-control" />
                            </div>


                            <div class="col-md-8 form-group">
                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                <input type="text" name="subject" value="" class="required sm-form-control" />
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-service">Services</label>
                                <select name="services" class="sm-form-control">
                                    <option value="">-- Select One --</option>
                                    <option value="Palm Oil Mill">Palm Oil Mill</option>
                                    <option value="Stone Crusher">Stone Crusher</option>
                                    <option value="Mining">Mining</option>
                                    <option value="Oil & Gas">Oil & Gas</option>
                                    <option value="Cement Mill">Cement Mill</option>
                                </select>
                            </div>

                            <div class="col-12 form-group">
                                <label for="template-contactform-message">Message <small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message"
                                    name="message" rows="6" cols="30"></textarea>
                            </div>

                            <div class="col-12 form-group">

                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <div class="g-recaptcha" data-sitekey="6LfIKJEbAAAAAJ8KjFzHalPot6USRkl8hwbHWMAi"></div>

                            </div>

                            <div class="col-12 form-group">
                                <button class="button button-3d m-0" type="submit">{{__('send_message')}}</button>
                            </div>

                        </form>

                    </div>

                </div><!-- .postcontent end -->

                <!-- Sidebar
						============================================= -->
                <div class="sidebar col-lg-3">

                    <address>
                        <strong>{{__('our_office')}}:</strong><br>
                        Jl Samarinda No.12-14, <br>
                        Medan - Sumatera Utara
                        20213 - Indonesia
                    </address>
                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> +62 8116548999<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> marketing@elangmassurya.co.id

                    <div class="widget border-0 pt-0">

                        <a href="/facebook" class="social-icon si-small si-dark si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="instagram" class="social-icon si-small si-dark si-instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>

                    </div>

                </div><!-- .sidebar end -->
            </div>

        </div>
    </div>
</section><!-- #content end -->

@endsection
