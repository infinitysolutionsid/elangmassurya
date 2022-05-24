<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="PT. Boxity Central Indonesia" />

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,700&display=swap" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/bootstrap.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/style.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/dark.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/font-icons.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/animate.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/magnific-popup.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/css/custom.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('webpage/demos/agency/agency.css')!!}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{!!asset('webpage/css/colors.php')!!}?color=E1C671" type="text/css" />
    <link rel="shortcut icon" href="{!!asset('webpage/demos/elangmas/logo.ico')!!}" type="image/x-icon">
    <link rel="stylesheet" href="{!!asset('webpage/css/components/bs-rating.css')!!}" type="text/css" />
    <script src="https://kit.fontawesome.com/98c197c895.js" crossorigin="anonymous"></script>

    <!-- Document Description
	============================================= -->
    <title>Elang Mas Surya - @yield('title')</title>
    <meta name="description" content="@yield('page_description')" />
    <meta name="keywords" content="elangmassurya, @yield('page_keywords')" />

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" data-sticky-shrink="false" class="header-size-md border-bottom-0">
            <div class="container">
                <div class="header-row flex-column flex-lg-row justify-content-center justify-content-lg-start"
                    style="padding-left: 13rem;">

                    <!-- Logo
					============================================= -->
                    <div id="logo" class="me-0 mx-lg-auto my-4">
                        <a href="/" class="standard-logo"><img src="{!!asset('webpage/demos/elangmas/logo_long.png')!!}"
                                alt="Canvas Logo"></a>
                        <a href="/" class="retina-logo"><img src="{!!asset('webpage/demos/elangmas/logo_long.png')!!}"
                                alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                </div>
            </div>

            <div id="header-wrap">
                <div class="container">
                    <div class="header-row justify-content-between">

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu flex-lg-grow-1">

                            <ul class="menu-container justify-content-lg-center">
                                <li class="menu-item">
                                    <a class="menu-link" href="/">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="/about-us">
                                        <div>About Us</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="/services">
                                        <div>Services</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="/gallery">
                                        <div>Gallery</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="/contact-us">
                                        <div>Contact Us</div>
                                    </a>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>

                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->


        @yield('content')

        <!-- Footer
		============================================= -->
        <footer id="footer">
            <!-- Copyrights
			============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row justify-content-between col-mb-30">
                        <div class="col-12 col-md-auto text-center text-md-start">
                            <?php $y = date('Y'); ?>
                            Copyrights &copy; {{$y}} Elang Mas Surya. All Rights Reserved by Infinity Solutions.<br>
                            <div class="copyright-links"><a href="/terms-conditions">Terms of Use</a> / <a
                                    href="/privacy-policy">Privacy Policy</a>
                            </div>
                        </div>

                        <div class="col-12 col-md-auto text-center text-md-end">
                            <a href="/facebook"
                                class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="/instagram"
                                class="social-icon inline-block si-small si-light si-rounded si-instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>

                            <a href="tel:628116548999"
                                class="social-icon inline-block si-small si-light si-rounded si-phone">
                                <i class="icon-phone"></i>
                                <i class="icon-phone"></i>
                            </a>

                            <a href="mailto:info@elangmassurya.co.id"
                                class="social-icon inline-block si-small si-light si-rounded si-mail">
                                <i class="icon-mail"></i>
                                <i class="icon-mail"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->


    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="{!!asset('webpage/js/jquery.js')!!}"></script>
    <script src="{!!asset('webpage/js/plugins.min.js')!!}"></script>
    <!-- Star Rating Plugin -->
    <script src="{!!asset('webpage/js/components/star-rating.js')!!}"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="{!!asset('webpage/js/functions.js')!!}"></script>
    <script>
        $("#input-7").rating({
            containerClass: 'is-heart',
            filledStar: '<i class="icon-heart3"></i>',
            emptyStar: '<i class="icon-heart-empty"></i>',
            starCaptions: {
                0: "Not Rated",
                1: "Very Poor",
                2: "Poor",
                3: "Ok",
                4: "Good",
                5: "Very Good"
            },
            starCaptionClasses: {
                0: "text-danger",
                1: "text-danger",
                2: "text-warning",
                3: "text-info",
                4: "text-primary",
                5: "text-success"
            },
        });

        $("#input-8").rating({
            containerClass: '',
            filledStar: '<i class="icon-flag21"></i>',
            emptyStar: '<i class="icon-flag-alt"></i>',
            starCaptions: {
                0: "Not Rated",
                1: "1 Flags",
                2: "2 Flags",
                3: "3 Flags",
                4: "4 Flags",
                5: "5 Flags"
            },
            starCaptionClasses: {
                0: "text-danger",
                1: "text-danger",
                2: "text-warning",
                3: "text-info",
                4: "text-primary",
                5: "text-success"
            },
        });

        $("#input-11").rating({
            starCaptions: {
                0: "Not Rated",
                1: "Very Poor",
                2: "Poor",
                3: "Ok",
                4: "Good",
                5: "Very Good"
            },
            starCaptionClasses: {
                0: "text-danger",
                1: "text-danger",
                2: "text-warning",
                3: "text-info",
                4: "text-primary",
                5: "text-success"
            },
        });

        $("#input-13").on("rating.clear", function (event) {
            $('#rating-notification-message').attr('data-notify-type', 'error').attr('data-notify-msg',
                'Your rating is reset');
            SEMICOLON.widget.notifications({
                el: jQuery('#rating-notification-message')
            });
        });
        $("#input-13").on("rating.change", function (event, value, caption) {
            $('#rating-notification-message').attr('data-notify-msg', 'You rated: ' + value + ' Stars');
            SEMICOLON.widget.notifications({
                el: jQuery('#rating-notification-message')
            });
        });

        $("#input-14").on("rating.change", function (event, value, caption) {
            $("#input-14").rating("refresh", {
                disabled: true,
                showClear: false
            });
        });

    </script>
</body>

</html>
