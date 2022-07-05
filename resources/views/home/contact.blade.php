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

                    <h3>Send us an Email</h3>

                    <div class="form-widget">

                        <div class="form-result"></div>

                        <form class="row mb-0" id="template-contactform" name="template-contactform"
                            action="include/form.php" method="post">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="template-contactform-name" name="template-contactform-name"
                                    value="" class="sm-form-control required" />
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="template-contactform-email"
                                    value="" class="required email sm-form-control" />
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-phone">Phone</label>
                                <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                    value="" class="sm-form-control" />
                            </div>

                            <div class="w-100"></div>

                            <div class="col-md-8 form-group">
                                <label for="template-contactform-subject">Subject <small>*</small></label>
                                <input type="text" id="template-contactform-subject" name="subject" value=""
                                    class="required sm-form-control" />
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="template-contactform-service">Services</label>
                                <select id="template-contactform-service" name="template-contactform-service"
                                    class="sm-form-control">
                                    <option value="">-- Select One --</option>
                                    <option value="Palm Oil Mill">Palm Oil Mill</option>
                                    <option value="Stone Crusher">Stone Crusher</option>
                                    <option value="Mining">Mining</option>
                                    <option value="Oil & Gas">Oil & Gas</option>
                                    <option value="Cement Mill">Cement Mill</option>
                                </select>
                            </div>

                            <div class="w-100"></div>

                            <div class="col-12 form-group">
                                <label for="template-contactform-message">Message <small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message"
                                    name="template-contactform-message" rows="6" cols="30"></textarea>
                            </div>

                            <div class="col-12 form-group d-none">
                                <input type="text" id="template-contactform-botcheck"
                                    name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col-12 form-group">

                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <div class="g-recaptcha" data-sitekey="6LfIKJEbAAAAAJ8KjFzHalPot6USRkl8hwbHWMAi"></div>

                            </div>

                            <div class="col-12 form-group">
                                <button class="button button-3d m-0" type="submit" id="template-contactform-submit"
                                    name="template-contactform-submit" value="submit">Send Message</button>
                            </div>

                            <input type="hidden" name="prefix" value="template-contactform-">

                        </form>

                    </div>

                </div><!-- .postcontent end -->

                <!-- Sidebar
						============================================= -->
                <div class="sidebar col-lg-3">

                    <address>
                        <strong>Kantor kami:</strong><br>
                        Jl Samarinda No.12-14, <br>
                        Medan - Sumatera Utara
                        20213 - Indonesia
                    </address>
                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> +62 8116548999<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@elangmassurya.co.id

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
