<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>im Event</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="/assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

    <link href="/assets/plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/assets/plugins/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">

    <link href="/assets/css/theme.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/assets/plugins/iesupport/html5shiv.js"></script>
    <script src="/assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="wide body-light multipage">
<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>
<!-- Wrap all content -->
<div class="wrapper">

@yield('content')

    <div class="to-top"><i class="fa fa-angle-up"></i></div>
</div>
        <!-- Popup: Login -->
<div class="modal fade login-register" id="popup-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" id="main-slider">
        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="form-background">
            <div class="col-sm-6 popup-form">
                <div class="form-header color">
                    <h1 class="section-title">
                        <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                        <span class="title-inner">Login</span>
                    </h1>
                </div>
                <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                    <div class="row">
                        <div class="col-sm-12 form-alert"></div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text"  placeholder="Password"  title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-center">
                                <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Log in <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="form-footer color">
                    <a href="#" class="popup-password"> Lost your password?</a>
                </div>
            </div>

            <div class="popup-form col-sm-6">
                <div class="form-header color">
                    <h1 class="section-title">
                        <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
                        <span class="title-inner">Register</span>
                    </h1>
                </div>
                <form method="post" action="#" class="registration-form alt" name="registration-form-alt" id="registration-form-alt">
                    <div class="row">
                        <div class="col-sm-12 form-alert"></div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="User Name" title="" data-toggle="tooltip" class="form-control input-name" data-original-title="Name is required">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text"  placeholder="E-mail"  title="" data-toggle="tooltip" class="form-control input-password" data-original-title="Password">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-center">
                                <button type="submit" class="btn btn-theme btn-block submit-button" data-animation-delay="100" data-animation="flipInY"> Register Now <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
<!-- /Popup: Login -->

<!-- /Wrap all content -->

<!-- JS Global -->

<!--[if lt IE 9]>
<script src="/assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->

<script src="/assets/plugins/jquery/jquery-2.1.1.min.js"></script>
<script src="/assets/plugins/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
<script src="/assets/plugins/modernizr.custom.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="/assets/plugins/superfish/js/superfish.js"></script>
<script src="/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<script src="/assets/plugins/placeholdem.min.js"></script>
<script src="/assets/plugins/jquery.smoothscroll.min.js"></script>
<script src="/assets/plugins/jquery.easing.min.js"></script>
<script src="/assets/plugins/smooth-scrollbar.min.js"></script>

<!-- JS Page Level -->
<script src="/assets/plugins/owlcarousel2/owl.carousel.min.js"></script>
<script src="/assets/plugins/waypoints/waypoints.min.js"></script>
<script src="/assets/plugins/countdown/jquery.plugin.min.js"></script>
<script src="/assets/plugins/countdown/jquery.countdown.min.js"></script>
<script src="/assets/plugins/isotope/jquery.isotope.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<!--<script src="assets/js/theme-ajax-mail.js"></script>-->
<script src="/assets/js/theme.js"></script>



<script type="text/javascript">
    "use strict";
    jQuery(document).ready(function () {
        theme.init();
        theme.initMainSlider();
        theme.initCountDown();
        theme.initPartnerSlider();
        theme.initTestimonials();
        theme.initCorouselSlider4();
        theme.initCorouselSlider3();
        theme.initGoogleMap();
    });
    jQuery(window).load(function () {
        theme.initAnimation();
    });

    jQuery(window).load(function () {
        jQuery('body').scrollspy({offset: 100, target: '.navigation'});
    });
    jQuery(window).load(function () {
        jQuery('body').scrollspy('refresh');
    });
    jQuery(window).resize(function () {
        jQuery('body').scrollspy('refresh');
    });

    jQuery(document).ready(function () {
        theme.onResize();
    });
    jQuery(window).load(function () {
        theme.onResize();
    });
    jQuery(window).resize(function () {
        theme.onResize();
    });

    jQuery(window).load(function () {
        if (location.hash != '') {
            var hash = '#' + window.location.hash.substr(1);
            if (hash.length) {
                jQuery('html,body').delay(0).animate({
                    scrollTop: jQuery(hash).offset().top - 44 + 'px'
                }, {
                    duration: 1200,
                    easing: "easeInOutExpo"
                });
            }
        }
    });

</script>

</body>
</html>