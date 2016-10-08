@extends('layouts.head')
@section('content')


@include('layouts.header')

        <!-- Content area -->
<div class="content-area">

    <div id="main">
        <!-- SLIDER -->
        <section class="page-section no-padding background-img-slider">
            <div class="container">

                <div id="main-slider" class="owl-carousel owl-theme">
                    <!-- Slide -->
                    <div class="item page text-center slide5">
                        <div class="caption">
                            <div class="container">
                                <div class="div-table">
                                    <div class="div-cell">
                                        <p class="text-center avatar"><img src="/assets/img/preview/slider-4-avatar.png"
                                                                           style="width: auto;" alt=""/></p>
                                        <h2 data-animation="fadeInDown" data-animation-delay="100"><span>15 October at 20:00 - 22:00</span>
                                        </h2>
                                        <h3 class="caption-subtitle" data-animation="fadeInUp"
                                            data-animation-delay="300">PHP Conference ın Manhattan</h3>
                                        <div class="countdown-wrapper">
                                            <div id="defaultCountdown" class="defaultCountdown clearfix"></div>
                                        </div>
                                        <p class="caption-text">
                                            <a class="btn btn-theme btn-theme scroll-to" href="#"
                                               data-animation="flipInY" data-animation-delay="600">Register</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide -->
                    <div class="item page text-center slide4">
                        <div class="caption">
                            <div class="container">
                                <div class="div-table">
                                    <div class="div-cell">
                                        <h3 class="caption-subtitle">We are Event professionals</h3>
                                        <h4><span>You Can Find "<a href="#">Festivals</a>, <a href="#">Parties</a>, <a
                                                        href="#">Conference</a>, <a href="#">Fairs</a>, <a href="#">Exhibitions</a>, <a
                                                        href="#">Speakers</a> and more</span></h4>
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <form action="#" class="location-search">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control text"
                                                                   placeholder="FIND EXPERIENCES"/>
                                                            <select class="selectpicker">
                                                                <option>LOCATION</option>
                                                                <option>LOCATION</option>
                                                                <option>LOCATION</option>
                                                            </select>
                                                            <button class="form-control button-search"><i
                                                                        class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <p class="caption-text">
                                            <a class="btn btn-theme btn-theme btn-theme-dark scroll-to" href="#"
                                               data-animation="flipInY" data-animation-delay="600">Popular Events</a><!--
                                                        --><a
                                                    class="btn btn-theme btn-theme btn-theme-transparent-white"
                                                    href="http://www.youtube.com/watch?v=O-zpOMYRi0w" rel="prettyPhoto"
                                                    data-animation="flipInY" data-animation-delay="900">Latest
                                                Events</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- /SLIDER -->
    </div>

    <!-- Featured Event -->
    {{--<section class="page-section light featured-line xs-padding">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<h1 class="section-title two-lines">--}}
    {{--<span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex dark fa-stack-2x"></i><i class="fa fa-calendar fa-stack-1x"></i></span></span>--}}
    {{--<span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><span class="theme-color"> Featured Event </span><small>Dont Miss The Event. PHP Conference In ISTANBUL</small></span>--}}
    {{--</h1>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="countdown-wrapper countdown-featured">--}}
    {{--<div id="defaultCountdown2" class="defaultCountdown clearfix"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-2">--}}
    {{--<a href="#" class="btn btn-theme btn-details">Tickets &amp; Details <i class="fa fa-arrow-circle-right"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
            <!-- /Featured Event -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">

            <div class="clear clearfix overflowed">
                <div class="section-title pull-left" style="width: auto;">
                    <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                    class="fa fa-star fa-stack-1x"></i></span></span>
                </div>
                <ul id="filtrable-events" class="filtrable clearfix">
                    <li class="all"><a href="#" data-filter="*">All</a></li>
                    <li class="festival current"><a href="#" data-filter=".festival">Festival</a></li>
                    <li class="playground"><a href="#" data-filter=".playground">Playground</a></li>
                    <li class="conferance"><a href="#" data-filter=".conference">Conference</a></li>
                </ul>
            </div>

            <div class="row thumbnails events vertical isotope isotope-items">

                <div class="col-md-6 col-sm-6 isotope-item festival">
                    <div class="thumbnail no-border no-padding">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media">
                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                    <img src="/assets/img/preview/event-1.jpg" alt="">
                                    <div class="caption hovered"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="caption">
                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 -
                                        22:00 on Manhattan / New York</p>
                                    <p class="caption-price">Tickets from $49,99</p>
                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque
                                        habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                        lorem quis.</p>
                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 isotope-item conference">
                    <div class="thumbnail no-border no-padding">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media">
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                    <img src="/assets/img/preview/event-1.jpg" alt="">
                                    <div class="caption hovered"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="caption">
                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 -
                                        22:00 on Manhattan / New York</p>
                                    <p class="caption-price">Tickets from $49,99</p>
                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque
                                        habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                        lorem quis.</p>
                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-6 isotope-item miscellaneous">
                    <div class="thumbnail no-border no-padding">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media">
                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                    <img src="/assets/img/preview/event-1.jpg" alt="">
                                    <div class="caption hovered"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="caption">
                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 -
                                        22:00 on Manhattan / New York</p>
                                    <p class="caption-price">Tickets from $49,99</p>
                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque
                                        habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                        lorem quis.</p>
                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 isotope-item festival playground">
                    <div class="thumbnail no-border no-padding">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media">
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                    <img src="/assets/img/preview/event-1.jpg" alt="">
                                    <div class="caption hovered"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="caption">
                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 -
                                        22:00 on Manhattan / New York</p>
                                    <p class="caption-price">Tickets from $49,99</p>
                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque
                                        habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                        lorem quis.</p>
                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 isotope-item festival conference">
                    <div class="thumbnail no-border no-padding">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media">
                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                    <img src="/assets/img/preview/event-1.jpg" alt="">
                                    <div class="caption hovered"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="caption">
                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 -
                                        22:00 on Manhattan / New York</p>
                                    <p class="caption-price">Tickets from $49,99</p>
                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque
                                        habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                        lorem quis.</p>
                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 isotope-item conference playground">
                    <div class="thumbnail no-border no-padding">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media">
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                    <img src="/assets/img/preview/event-1.jpg" alt="">
                                    <div class="caption hovered"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="caption">
                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 -
                                        22:00 on Manhattan / New York</p>
                                    <p class="caption-price">Tickets from $49,99</p>
                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque
                                        habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                        lorem quis.</p>
                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 isotope-item festival conference">
                    <div class="thumbnail no-border no-padding">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media">
                                    <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                    <img src="/assets/img/preview/event-1.jpg" alt="">
                                    <div class="caption hovered"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="caption">
                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 -
                                        22:00 on Manhattan / New York</p>
                                    <p class="caption-price">Tickets from $49,99</p>
                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque
                                        habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                        lorem quis.</p>
                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 isotope-item playground">
                    <div class="thumbnail no-border no-padding">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media">
                                    <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                                    <img src="/assets/img/preview/event-1.jpg" alt="">
                                    <div class="caption hovered"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="caption">
                                    <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                    <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October at 20:00 -
                                        22:00 on Manhattan / New York</p>
                                    <p class="caption-price">Tickets from $49,99</p>
                                    <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque
                                        habitant morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                        lorem quis.</p>
                                    <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp; details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center margin-top">
                <a data-animation="fadeInUp" data-animation-delay="100" href="#"
                   class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-file-text-o"></i> See all
                    events</a>
            </div>

        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    {{--<section class="page-section light">--}}
    {{--<div class="container">--}}

    {{--<div class="row thumbnails info-thumbs clear">--}}
    {{--<div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="100">--}}
    {{--<div class="thumbnail no-border no-padding text-center">--}}
    {{--<div class="rehex">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-calendar"></i></a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title">7/24 Event avaliable</h3>--}}
    {{--<p class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- -->--}}
    {{--<div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="300">--}}
    {{--<div class="thumbnail no-border no-padding text-center">--}}
    {{--<div class="rehex">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-map-marker"></i></a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title">Great Locations</h3>--}}
    {{--<p class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- -->--}}
    {{--<div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="500">--}}
    {{--<div class="thumbnail no-border no-padding text-center">--}}
    {{--<div class="rehex">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-users"></i></a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title">More Then 200 Speakers</h3>--}}
    {{--<p class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- -->--}}
    {{--<div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="700">--}}
    {{--<div class="thumbnail no-border no-padding text-center">--}}
    {{--<div class="rehex">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-music"></i></a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title">Lets Party After Event</h3>--}}
    {{--<p class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- /PAGE -->--}}

    {{--<!-- PAGE -->--}}
    {{--<section class="page-section">--}}
    {{--<div class="container">--}}

    {{--<h1 class="section-title">--}}
    {{--<span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-h-square fa-stack-1x"></i></span></span>--}}
    {{--<span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">HOTELS <small> / dont forget book your room</small></span>--}}
    {{--</h1>--}}

    {{--<div class=" thumbnails hotels">--}}
    {{--<div class="carousel-slider">--}}
    {{--<div class="owl-carousel slide-4">--}}
    {{--<div>--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/hotel-1.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>--}}
    {{--<div class="caption-rating rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div>--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/hotel-1.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>--}}
    {{--<div class="caption-rating rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div>--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/hotel-1.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>--}}
    {{--<div class="caption-rating rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div>--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/hotel-1.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>--}}
    {{--<div class="caption-rating rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div>--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/hotel-1.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>--}}
    {{--<div class="caption-rating rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div>--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/hotel-1.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>--}}
    {{--<div class="caption-rating rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div>--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/hotel-1.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn btn-theme caption-link"><i class="fa fa-file-text"></i> Details</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>--}}
    {{--<div class="caption-rating rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<p class="caption-text">Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi.</p>--}}
    {{--<p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="text-center margin-top">--}}
    {{--<a data-animation="fadeInUp" data-animation-delay="100" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-h-square"></i> See all hotels</a>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- /PAGE -->--}}

    {{--<!-- PAGE -->--}}
    {{--<section class="page-section color">--}}
    {{--<div class="container">--}}
    {{--<h1 class="section-title">--}}
    {{--<span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-comments-o fa-stack-1x"></i></span></span>--}}
    {{--<span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Testimonials <small> / See What People Say About Us</small></span>--}}
    {{--</h1>--}}

    {{--<!-- Testimonials -->--}}
    {{--<div id="testimonials" class="owl-carousel testimonials" data-animation="fadeInUp" data-animation-delay="100">--}}

    {{--<div class="media testimonial">--}}
    {{--<div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">--}}
    {{--<div class="rehex testimonial-avatar">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<img class="img-responsive" src="/assets/img/preview/avatar-1.jpg" alt=""/>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="media-body">--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec--}}
    {{--cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper--}}
    {{--tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis--}}
    {{--in feugiat mollis, libero eros</p>--}}
    {{--<h4 class="media-heading">by jThemes Studio</h4>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="media testimonial">--}}
    {{--<div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">--}}
    {{--<div class="rehex testimonial-avatar">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<img class="img-responsive" src="/assets/img/preview/avatar-2.jpg" alt=""/>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="media-body">--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec--}}
    {{--cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper--}}
    {{--tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis--}}
    {{--in feugiat mollis, libero eros</p>--}}
    {{--<h4 class="media-heading">by jThemes Studio</h4>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="media testimonial">--}}
    {{--<div class="media-object pull-right" data-animation="flipInY" data-animation-delay="300">--}}
    {{--<div class="rehex testimonial-avatar">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<img class="img-responsive" src="/assets/img/preview/avatar-3.jpg" alt=""/>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="media-body">--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae diam metus. Donec--}}
    {{--cursus magna eget sem convallis facilisis. Vestibulum dictum nibh at ullamcorper--}}
    {{--tincidunt. Phasellus scelerisque nisl non ullamcorper pellentesque. Nunc sagittis, felis--}}
    {{--in feugiat mollis, libero eros</p>--}}
    {{--<h4 class="media-heading">by jThemes Studio</h4>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<!-- Testimonials -->--}}

    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- /PAGE -->--}}

    {{--<!-- PAGE -->--}}
    {{--<section class="page-section no-padding-bottom">--}}
    {{--<div class="container">--}}
    {{--<div class="section-title pull-left" style="width: auto;">--}}
    {{--<span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-picture-o fa-stack-1x"></i></span></span>--}}
    {{--</div>--}}
    {{--<ul id="filtrable-gallery" class="filtrable clearfix">--}}
    {{--<li class="all current"><a href="#" data-filter="*">All</a></li>--}}
    {{--<li class="photos"><a href="#" data-filter=".photos">Photos</a></li>--}}
    {{--<li class="videos"><a href="#" data-filter=".videos">Videos</a></li>--}}
    {{--<li class="gallery"><a href="#" data-filter=".gallery">Gallery</a></li>--}}
    {{--</ul>--}}
    {{--<div class="clear clearfix overflowed"></div>--}}
    {{--</div>--}}
    {{--</section>--}}

    {{--<section class="page-section no-padding-top light">--}}
    {{--<div class="container full-width">--}}

    {{--<div class="row thumbnails no-padding gallery isotope isotope-items">--}}

    {{--<div class="col-md-3 col-sm-6 col-xs-12 isotope-item photos ">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/latest-1a.jpg" alt="" >--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons">--}}
    {{--<a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>--}}
    {{--<a href="/assets/img/preview/latest-1.jpg" rel="prettyPhoto[gallery2]" title="CONFERENCE PARTY" class="btn caption-link"><i class="fa fa-plus"></i></a>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption hovered back">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<h3 class="caption-title">CONFERENCE PARTY</h3>--}}
    {{--<p class="caption-category">in Istanbul</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-3 col-sm-6 col-xs-12 isotope-item videos">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/latest-2a.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons">--}}
    {{--<a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>--}}
    {{--<a href="/assets/img/preview/latest-2.jpg" rel="prettyPhoto[gallery2]" title="CONFERENCE PARTY" class="btn caption-link"><i class="fa fa-plus"></i></a>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption hovered back">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<h3 class="caption-title">FINDING NEW WAY EVENT</h3>--}}
    {{--<p class="caption-category">in Tokyo</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-3 col-sm-6 col-xs-12 isotope-item gallery">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/latest-3a.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons">--}}
    {{--<a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>--}}
    {{--<a href="/assets/img/preview/latest-3.jpg" rel="prettyPhoto[gallery2]" title="CONFERENCE PARTY" class="btn caption-link"><i class="fa fa-plus"></i></a>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption hovered back">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<h3 class="caption-title">PHP MEETING</h3>--}}
    {{--<p class="caption-category">in Foshan</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-3 col-sm-6 col-xs-12 isotope-item photos gallery">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/latest-4a.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons">--}}
    {{--<a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>--}}
    {{--<a href="/assets/img/preview/latest-4.jpg" rel="prettyPhoto[gallery2]" title="CONFERENCE PARTY" class="btn caption-link"><i class="fa fa-plus"></i></a>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption hovered back">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<h3 class="caption-title">CONFERENCE PARTY</h3>--}}
    {{--<p class="caption-category">in Manhattan</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-3 col-sm-6 col-xs-12 isotope-item photos videos">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/latest-5a.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons">--}}
    {{--<a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>--}}
    {{--<a href="/assets/img/preview/latest-5.jpg" rel="prettyPhoto[gallery2]" title="CONFERENCE PARTY" class="btn caption-link"><i class="fa fa-plus"></i></a>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption hovered back">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<h3 class="caption-title">WINNING AWARDS MEETING</h3>--}}
    {{--<p class="caption-category">in Istanbul</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-3 col-sm-6 col-xs-12 isotope-item videos gallery">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/latest-6a.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons">--}}
    {{--<a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>--}}
    {{--<a href="/assets/img/preview/latest-6.jpg" rel="prettyPhoto[gallery2]" title="CONFERENCE PARTY" class="btn caption-link"><i class="fa fa-plus"></i></a>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption hovered back">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<h3 class="caption-title">GALLERY IMAGE NAME</h3>--}}
    {{--<p class="caption-category">in Tokyo</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-3 col-sm-6 col-xs-12 isotope-item photos videos">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/latest-7a.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons">--}}
    {{--<a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>--}}
    {{--<a href="/assets/img/preview/latest-7.jpg" rel="prettyPhoto[gallery2]" title="CONFERENCE PARTY" class="btn caption-link"><i class="fa fa-plus"></i></a>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption hovered back">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<h3 class="caption-title">EVERYBODY HERE EVENT</h3>--}}
    {{--<p class="caption-category">in Foshan</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-3 col-sm-6 col-xs-12 isotope-item gallery">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/latest-8a.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons">--}}
    {{--<a href="#" class="btn caption-zoom"><i class="fa fa-heart"></i></a>--}}
    {{--<a href="/assets/img/preview/latest-8.jpg" rel="prettyPhoto[gallery2]" title="CONFERENCE PARTY" class="btn caption-link"><i class="fa fa-plus"></i></a>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption hovered back">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<h3 class="caption-title">YOGA CLASS MET AT AUGUST</h3>--}}
    {{--<p class="caption-category">in Manhattan</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<div class="text-center margin-top">--}}
    {{--<a data-animation="flipInY" data-animation-delay="500" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-photo"></i> See All Gallery</a>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- /PAGE -->--}}

    {{--<!-- PAGE SPONSORS -->--}}
    {{--<section class="page-section" id="sponsors">--}}
    {{--<div class="container">--}}
    {{--<h1 class="section-title">--}}
    {{--<span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-thumbs-up fa-stack-1x"></i></span></span>--}}
    {{--<span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Event Sponsors <small> / dont forget it</small></span>--}}
    {{--</h1>--}}
    {{--<div class="partners-carousel" data-animation="fadeInUp" data-animation-delay="300">--}}
    {{--<div class="owl-carousel">--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-1.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-2.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-3.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-4.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-5.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-6.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-1.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-2.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-3.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-4.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-5.png" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="/assets/img/partner/light/partner-6.png" alt=""/></a></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="text-center margin-top">--}}
    {{--<a data-animation="flipInY" data-animation-delay="500" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-thumbs-up"></i> Become a sponsor</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- /PAGE SPONSORS -->--}}

    {{--<!-- PAGE SPEAKERS -->--}}
    {{--<section class="page-section light" id="speakers">--}}
    {{--<div class="container">--}}
    {{--<h1 class="section-title">--}}
    {{--<span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>--}}
    {{--<span data-animation="fadeInUp" data-animation-delay="500" class="title-inner">Event Speakers <small> / meet with greaters</small></span>--}}
    {{--</h1>--}}

    {{--<!-- Speakers row -->--}}
    {{--<div class="thumbnails clear">--}}
    {{--<div class="carousel-slider">--}}
    {{--<div class="owl-carousel slide-4">--}}
    {{--<div data-animation="fadeInUp" data-animation-delay="100">--}}
    {{--<div class="thumbnail no-border no-padding text-center">--}}
    {{--<div class="rehex speaker-avatar">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/speaker-1.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption before-media">--}}
    {{--<h3 class="caption-title">Speaker name here</h3>--}}
    {{--<p class="caption-category">Co Founder</p>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>--}}
    {{--<ul class="social-line list-inline text-center">--}}
    {{--<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
    {{--<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
    {{--<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>--}}
    {{--<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>--}}
    {{--<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- -->--}}
    {{--<div  data-animation="fadeInUp" data-animation-delay="300">--}}
    {{--<div class="thumbnail no-border no-padding text-center">--}}
    {{--<div class="rehex speaker-avatar">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/speaker-2.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption before-media">--}}
    {{--<h3 class="caption-title">Speaker name here</h3>--}}
    {{--<p class="caption-category">Developer</p>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>--}}
    {{--<ul class="social-line list-inline text-center">--}}
    {{--<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
    {{--<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
    {{--<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>--}}
    {{--<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>--}}
    {{--<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- -->--}}
    {{--<div data-animation="fadeInUp" data-animation-delay="500">--}}
    {{--<div class="thumbnail no-border no-padding text-center">--}}
    {{--<div class="rehex speaker-avatar">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/speaker-3.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption before-media">--}}
    {{--<h3 class="caption-title">Speaker name here</h3>--}}
    {{--<p class="caption-category">Designer</p>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>--}}
    {{--<ul class="social-line list-inline text-center">--}}
    {{--<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
    {{--<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
    {{--<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>--}}
    {{--<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>--}}
    {{--<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- -->--}}
    {{--<div data-animation="fadeInUp" data-animation-delay="700">--}}
    {{--<div class="thumbnail no-border no-padding text-center">--}}
    {{--<div class="rehex speaker-avatar">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-deg">--}}
    {{--<div class="rehex-inner">--}}
    {{--<div class="media">--}}
    {{--<img src="/assets/img/preview/speaker-4.jpg" alt="">--}}
    {{--<div class="caption hovered">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<p class="caption-buttons"><a href="#" class="btn caption-link"><i class="fa fa-link"></i></a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="caption before-media">--}}
    {{--<h3 class="caption-title">Speaker name here</h3>--}}
    {{--<p class="caption-category">Animator</p>--}}
    {{--</div>--}}
    {{--<div class="caption">--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel velit</p>--}}
    {{--<ul class="social-line list-inline text-center">--}}
    {{--<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
    {{--<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
    {{--<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>--}}
    {{--<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>--}}
    {{--<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /Speakers row -->--}}

    {{--<div class="text-center margin-top">--}}
    {{--<a data-animation="fadeInUp" data-animation-delay="100" href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-user"></i> See all speakers</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- /PAGE SPEAKERS -->--}}

    {{--<!-- PAGE -->--}}
    {{--<section class="page-section color">--}}
    {{--<div class="container">--}}
    {{--<h1 class="section-title">--}}
    {{--<span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>--}}
    {{--<span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">im Event  <small> / Landing Page</small></span>--}}
    {{--</h1>--}}
    {{--<p>One Page Event and Conference Theme is a very clean, modern and outstanding designed HTML template for multi purpose for any business events, conference, party etc.</p>--}}
    {{--<p>--}}
    {{--<a class="btn btn-theme" target="_blank" href="http://themeforest.net/item/im-event-one-page-event-conference-landing-page/8334416">Purchase template</a>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- /PAGE -->--}}

    {{--<!-- PAGE -->--}}
    {{--<section class="page-section">--}}
    {{--<div class="container">--}}
    {{--<h1 class="section-title">--}}
    {{--<span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-file-text-o fa-stack-1x"></i></span></span>--}}
    {{--<span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Recent Blog Posts <small> / get news!</small></span>--}}
    {{--</h1>--}}
    {{--<div class="post-row">--}}
    {{--<div class="carousel-slider">--}}
    {{--<div class="owl-carousel slide-3">--}}
    {{--<!-- -->--}}
    {{--<div>--}}
    {{--<article class="post-wrap" data-animation="fadeInUp" data-animation-delay="100">--}}
    {{--<div class="post-media">--}}
    {{--<div class="post-type">--}}
    {{--<i class="fa fa-video-camera"></i>--}}
    {{--</div>--}}
    {{--<img src="/assets/img/preview/recent-post-1.jpg" alt=""/>--}}
    {{--</div>--}}
    {{--<div class="post-header">--}}
    {{--<h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>--}}
    {{--<div class="post-meta">--}}
    {{--<span class="post-date">--}}
    {{--Posted on--}}
    {{--<span class="day">17th</span>--}}
    {{--<span class="month">May</span>--}}
    {{--<span class="year">2015</span>--}}
    {{--</span>--}}
    {{--<span class="pull-right">--}}
    {{--<i class="fa fa-comment"></i> <a href="#">12</a>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-body">--}}
    {{--<div class="post-excerpt">--}}
    {{--<p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-footer"></div>--}}
    {{--</article>--}}
    {{--</div>--}}

    {{--<!-- -->--}}
    {{--<div>--}}
    {{--<article class="post-wrap" data-animation="fadeInUp" data-animation-delay="300">--}}
    {{--<div class="post-media">--}}
    {{--<div class="post-type">--}}
    {{--<i class="fa fa-photo"></i>--}}
    {{--</div>--}}
    {{--<img src="/assets/img/preview/recent-post-2.jpg" alt=""/>--}}
    {{--</div>--}}
    {{--<div class="post-header">--}}
    {{--<h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>--}}
    {{--<div class="post-meta">--}}
    {{--<span class="post-date">--}}
    {{--Posted on--}}
    {{--<span class="day">17th</span>--}}
    {{--<span class="month">May</span>--}}
    {{--<span class="year">2015</span>--}}
    {{--</span>--}}
    {{--<span class="pull-right">--}}
    {{--<i class="fa fa-comment"></i> <a href="#">12</a>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-body">--}}
    {{--<div class="post-excerpt">--}}
    {{--<p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-footer"></div>--}}
    {{--</article>--}}
    {{--</div>--}}

    {{--<!-- -->--}}
    {{--<div>--}}
    {{--<article class="post-wrap" data-animation="fadeInUp" data-animation-delay="500">--}}
    {{--<div class="post-media">--}}
    {{--<div class="post-type">--}}
    {{--<i class="fa fa-music"></i>--}}
    {{--</div>--}}
    {{--<img src="/assets/img/preview/recent-post-3.jpg" alt=""/>--}}
    {{--</div>--}}
    {{--<div class="post-header">--}}
    {{--<h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>--}}
    {{--<div class="post-meta">--}}
    {{--<span class="post-date">--}}
    {{--Posted on--}}
    {{--<span class="day">17th</span>--}}
    {{--<span class="month">May</span>--}}
    {{--<span class="year">2015</span>--}}
    {{--</span>--}}
    {{--<span class="pull-right">--}}
    {{--<i class="fa fa-comment"></i> <a href="#">12</a>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-body">--}}
    {{--<div class="post-excerpt">--}}
    {{--<p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-footer"></div>--}}
    {{--</article>--}}
    {{--</div>--}}

    {{--<!-- -->--}}
    {{--<div>--}}
    {{--<article class="post-wrap" data-animation="fadeInUp" data-animation-delay="500">--}}
    {{--<div class="post-media">--}}
    {{--<div class="post-type">--}}
    {{--<i class="fa fa-music"></i>--}}
    {{--</div>--}}
    {{--<img src="/assets/img/preview/recent-post-1.jpg" alt=""/>--}}
    {{--</div>--}}
    {{--<div class="post-header">--}}
    {{--<h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>--}}
    {{--<div class="post-meta">--}}
    {{--<span class="post-date">--}}
    {{--Posted on--}}
    {{--<span class="day">17th</span>--}}
    {{--<span class="month">May</span>--}}
    {{--<span class="year">2015</span>--}}
    {{--</span>--}}
    {{--<span class="pull-right">--}}
    {{--<i class="fa fa-comment"></i> <a href="#">12</a>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-body">--}}
    {{--<div class="post-excerpt">--}}
    {{--<p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-footer"></div>--}}
    {{--</article>--}}
    {{--</div>--}}

    {{--<!-- -->--}}
    {{--<div>--}}
    {{--<article class="post-wrap" data-animation="fadeInUp" data-animation-delay="500">--}}
    {{--<div class="post-media">--}}
    {{--<div class="post-type">--}}
    {{--<i class="fa fa-music"></i>--}}
    {{--</div>--}}
    {{--<img src="/assets/img/preview/recent-post-2.jpg" alt=""/>--}}
    {{--</div>--}}
    {{--<div class="post-header">--}}
    {{--<h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>--}}
    {{--<div class="post-meta">--}}
    {{--<span class="post-date">--}}
    {{--Posted on--}}
    {{--<span class="day">17th</span>--}}
    {{--<span class="month">May</span>--}}
    {{--<span class="year">2015</span>--}}
    {{--</span>--}}
    {{--<span class="pull-right">--}}
    {{--<i class="fa fa-comment"></i> <a href="#">12</a>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-body">--}}
    {{--<div class="post-excerpt">--}}
    {{--<p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-footer"></div>--}}
    {{--</article>--}}
    {{--</div>--}}

    {{--<!-- -->--}}
    {{--<div>--}}
    {{--<article class="post-wrap" data-animation="fadeInUp" data-animation-delay="500">--}}
    {{--<div class="post-media">--}}
    {{--<div class="post-type">--}}
    {{--<i class="fa fa-music"></i>--}}
    {{--</div>--}}
    {{--<img src="/assets/img/preview/recent-post-3.jpg" alt=""/>--}}
    {{--</div>--}}
    {{--<div class="post-header">--}}
    {{--<h2 class="post-title"><a href="#">Standart Blog Post Header Here</a></h2>--}}
    {{--<div class="post-meta">--}}
    {{--<span class="post-date">--}}
    {{--Posted on--}}
    {{--<span class="day">17th</span>--}}
    {{--<span class="month">May</span>--}}
    {{--<span class="year">2015</span>--}}
    {{--</span>--}}
    {{--<span class="pull-right">--}}
    {{--<i class="fa fa-comment"></i> <a href="#">12</a>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-body">--}}
    {{--<div class="post-excerpt">--}}
    {{--<p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant morbi tristiquetus et senectus et netus et malesuada ac turpis.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-footer"></div>--}}
    {{--</article>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="text-center margin-top">--}}
    {{--<a data-animation="flipInY" data-animation-delay="100" href="/imevent-multipage/blog.html" class="btn btn-theme btn-theme-grey-dark btn-theme-md"><i class="fa fa-file-text-o"></i> &nbsp;See all news</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- /PAGE -->--}}

    {{--<!-- PAGE -->--}}
    {{--<section class="page-section light create-new-event">--}}
    {{--<div class="container text-center">--}}
    {{--<h1 class="section-title">Create Your Own New Event</h1>--}}
    {{--<p>Bring people together, or turn your passion into a business. Eventbrite gives you everything you need to host your best event yet.</p>--}}
    {{--<div><a href="#" class="btn btn-theme btn-theme-md">SUBMIT EVENT</a></div>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- /PAGE -->--}}

    {{--<!-- PAGE LOCATION -->--}}
    {{--<section class="page-section" id="location">--}}
    {{--<div class="container full-width gmap-background">--}}

    {{--<div class="container">--}}
    {{--<div class="on-gmap color">--}}
    {{--<h1 class="section-title">--}}
    {{--<span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-map-marker fa-stack-1x"></i></span></span>--}}
    {{--<span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Event Location</span>--}}
    {{--</h1>--}}
    {{--<p data-animation="fadeInUp" data-animation-delay="200" class="text-uppercase">Apple Store SOHO‎ <br/>--}}
    {{--103 Prince St New York, <br/>--}}
    {{--NY 10012, United States <br/>--}}
    {{--+1 212-226-3126</p>--}}
    {{--<p><a href="mailto:youremail@domain.com">hello@imevent.com</a></p>--}}
    {{--<a href="#" class="btn btn-theme"--}}
    {{--data-animation="flipInY" data-animation-delay="300">Get Direction <i class="fa fa-arrow-circle-right"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- Google map -->--}}
    {{--<div class="google-map">--}}
    {{--<div id="map-canvas"></div>--}}
    {{--</div>--}}
    {{--<!-- /Google map -->--}}

    {{--</div>--}}
    {{--</section>--}}
    {{--<!-- /PAGE LOCATION -->--}}


</div>
<!-- /Content area -->


@include('layouts.footer')

@endsection
