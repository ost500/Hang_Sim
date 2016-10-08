@extends('layouts.head')
@section('content')

    @include('layouts.header')
    <!-- Content area -->
    <div class="content-area">

        <section class="page-section image breadcrumbs overlay">
            <div class="container">
                <h1><b>{{ $article_single->title }}</b></h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li class="active">Event Detail Page</li>
                </ul>
            </div>
        </section>


        <!-- PAGE -->
        <section class="page-section with-sidebar sidebar-right first-section light">
            <div class="container">

                <!-- Content -->
                <section id="content" class="content col-sm-12 col-md-8 col-lg-9">

                    <div class="owl-carousel img-carousel">
                        <div class="item"><img class="img-responsive" src="../assets/img/preview/img-slider-1.jpg"
                                               alt=""/></div>
                        <div class="item"><img class="img-responsive" src="../assets/img/preview/img-slider-1.jpg"
                                               alt=""/></div>
                        <div class="item"><img class="img-responsive" src="../assets/img/preview/img-slider-1.jpg"
                                               alt=""/></div>
                        <div class="item"><img class="img-responsive" src="../assets/img/preview/img-slider-1.jpg"
                                               alt=""/></div>
                    </div>

                    <!-- -->
                    <hr class="page-divider transparent half"/>
                    <!-- -->

                    <h1 class="section-title">
                        <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                        class="fa fa-star fa-stack-1x"></i></span></span>
                        <span class="title-inner">What's about event <small>/ {{ $article_single->title }}</small></span>
                    </h1>
                    <p class="font_roboto font_size16">{{ $article_single->content }}</p>
                    <p class="font_roboto font_size16">{{ $article_single->user->name }}</p>
                    <p class="font_roboto font_size16">{{ $article_single->created_at }}</p>
                    <p class="font_roboto font_size16">{{ $article_single->updated_at }}</p>


                {{--<p class="btn-row">--}}
                        {{--<a href="#" class="btn btn-theme btn-theme-xl scroll-to">Register <i--}}
                                    {{--class="fa fa-arrow-circle-right"></i></a><!----}}
                                {{----><a href="#" class="btn btn-theme btn-theme-xl btn-theme-transparent">Watch video</a>--}}
                    {{--</p>--}}






                    <!-- -->
                    <hr class="page-divider transparent"/>
                    <!-- -->

                    <!-- Schedule -->
                    <div class="schedule-wrapper schedule-alt clear">
                        <div class="schedule-tabs lv1">
                            <ul id="tabs-lv1" class="nav nav-justified"><!--
                                        -->
                                <li class="active"><a href="#tab-first" data-toggle="tab">
                                        <span class="line1">January</span>
                                        <span class="line2">15</span>
                                        <span class="line3">Event Day 01</span>
                                    </a></li><!--
                                        -->
                                <li><a href="#tab-second" data-toggle="tab">
                                        <span class="line1">January</span>
                                        <span class="line2">16</span>
                                        <span class="line3">Event Day 02</span>
                                    </a></li><!--
                                        -->
                                <li><a href="#tab-third" data-toggle="tab">
                                        <span class="line1">January</span>
                                        <span class="line2">17</span>
                                        <span class="line3">Event Day 03</span>
                                    </a></li><!--
                                        -->
                                <li><a href="#tab-last" data-toggle="tab">
                                        <span class="line1">January</span>
                                        <span class="line2">18</span>
                                        <span class="line3">Event Day 04</span>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="tab-content lv1">
                            <!-- tab1 -->
                            <div id="tab-first" class="tab-pane fade in active">
                                <div class="schedule-tabs lv2">
                                    <ul id="tabs-lv21" class="nav nav-justified">
                                        <li class="active"><a href="#tab-lv21-first" data-toggle="tab">HAll A</a></li>
                                        <li><a href="#tab-lv21-second" data-toggle="tab">HAll B</a></li>
                                        <li><a href="#tab-lv21-third" data-toggle="tab">HAll C</a></li>
                                        <li><a href="#tab-lv21-last" data-toggle="tab">HAll D</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content lv2">
                                    <div id="tab-lv21-first" class="tab-pane fade in active">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-1.jpg" alt=""
                                                             class="media-object"/>
                                                        <span class="about"><strong>John Doe</strong></span>
                                                        <span class="about">CEO at Crown.io</span>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. </p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> <strong>Speakers:</strong> John Doe, Staven Mane; Andy Garcia &nbsp;
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media without-img pull-left"></div>
                                                    <!-- -->
                                                    <div class="media-body without-img">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 12:00am - 13:45pm</span>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Resting and Lunch Break
                                                                    Time</a></h2>
                                                        </div>
                                                        <div class="post-footer"></div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                        <span class="about"><strong>John Doe</strong></span>
                                                        <span class="about">CEO at Crown.io</span>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. </p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> <strong>Speakers:</strong> John Doe, Staven Mane; Andy Garcia &nbsp;
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv21-second" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-4.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv21-third" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-4.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv21-last" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab2 -->
                            <div id="tab-second" class="tab-pane fade">
                                <div class="schedule-tabs lv2">
                                    <ul id="tabs-lv22" class="nav nav-justified">
                                        <li class="active"><a href="#tab-lv22-first" data-toggle="tab">HAll A</a></li>
                                        <li><a href="#tab-lv22-second" data-toggle="tab">HAll B</a></li>
                                        <li><a href="#tab-lv22-third" data-toggle="tab">HAll C</a></li>
                                        <li><a href="#tab-lv22-last" data-toggle="tab">HAll D</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content lv2">
                                    <div id="tab-lv22-first" class="tab-pane fade in active">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-1.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> <strong>John Doe</strong> / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-4.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv22-second" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-4.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv22-third" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-4.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv22-last" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab3 -->
                            <div id="tab-third" class="tab-pane fade">
                                <div class="schedule-tabs lv2">
                                    <ul id="tabs-lv23" class="nav nav-justified">
                                        <li class="active"><a href="#tab-lv23-first" data-toggle="tab">HAll A</a></li>
                                        <li><a href="#tab-lv23-second" data-toggle="tab">HAll B</a></li>
                                        <li><a href="#tab-lv23-third" data-toggle="tab">HAll C</a></li>
                                        <li><a href="#tab-lv23-last" data-toggle="tab">HAll D</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content lv2">
                                    <div id="tab-lv23-first" class="tab-pane fade in active">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-4.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv23-second" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-4.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv23-third" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv23-last" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-1.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> <strong>John Doe</strong> / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-4.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab4 -->
                            <div id="tab-last" class="tab-pane fade">
                                <div class="schedule-tabs lv2">
                                    <ul id="tabs-lv24" class="nav nav-justified">
                                        <li class="active"><a href="#tab-lv24-first" data-toggle="tab">HAll A</a></li>
                                        <li><a href="#tab-lv24-second" data-toggle="tab">HAll B</a></li>
                                        <li><a href="#tab-lv24-third" data-toggle="tab">HAll C</a></li>
                                        <li><a href="#tab-lv24-last" data-toggle="tab">HAll D</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content lv2">
                                    <div id="tab-lv24-first" class="tab-pane fade in active">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv24-second" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-4.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv24-third" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                    <div id="tab-lv24-last" class="tab-pane fade">
                                        <div class="timeline">

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-1.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> <strong>John Doe</strong> / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-2.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-3.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                            <article class="post-wrap">
                                                <div class="media">
                                                    <!-- -->
                                                    <div class="post-media pull-left">
                                                        <img src="../assets/img/preview/avatar-v2-4.jpg" alt=""
                                                             class="media-object"/>
                                                    </div>
                                                    <!-- -->
                                                    <div class="media-body">
                                                        <div class="post-header">
                                                            <div class="post-meta">
                                                                <span class="post-date"><i class="fa fa-clock-o"></i> 08:00 - 08:45</span>
                                                                <a href="#" class="pull-right">
                                                                            <span class="fa-stack fa-lg">
                                                                                <i class="fa fa-stack-2x fa-circle-thin"></i>
                                                                                <i class="fa fa-stack-1x fa-share-alt"></i>
                                                                            </span>
                                                                </a>
                                                            </div>
                                                            <h2 class="post-title"><a href="#">Speaker Content Header Is
                                                                    Header</a></h2>
                                                        </div>
                                                        <div class="post-body">
                                                            <div class="post-excerpt">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Sed vitae diam metus. Donec cursus magna eget
                                                                    sem convallis facilisis. Vestibulum dictum nibh at
                                                                    ullamcorper tincidunt. Phasellus scelerisque nisl
                                                                    non ullamcorper pellentesque. Nunc sagittis, felis
                                                                    in feugiat mollis, libero eros consectetur elit non
                                                                    cursus lacus nisl at dolor.</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-footer">
                                                                    <span class="post-readmore">
                                                                        <i class="fa fa-microphone"></i> John Doe / CEO at Crown.io
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- -->
                                                </div>
                                            </article>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Schedule -->

                    <!-- -->
                    <hr class="page-divider transparent half2"/>
                    <!-- -->

                    <h1 class="section-title">
                        <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                        class="fa fa-thumbs-up fa-stack-1x"></i></span></span>
                        <span class="title-inner">Event Sponsors <small> / dont forget it</small></span>
                    </h1>
                    <div class="partners-carousel-2">
                        <div class="owl-carousel">
                            <div><a href="#"><img src="../assets/img/partner/light/partner-1.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-2.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-3.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-4.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-5.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-6.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-1.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-2.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-3.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-4.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-5.png" alt=""/></a></div>
                            <div><a href="#"><img src="../assets/img/partner/light/partner-6.png" alt=""/></a></div>
                        </div>
                    </div>
                    <div class="text-center margin-top">
                        <a href="#" class="btn btn-theme"><i class="fa fa-thumbs-up"></i> Become a sponsor</a>
                    </div>

                    <!-- -->
                    <hr class="page-divider line large"/>
                    <!-- -->

                    <h1 class="section-title">
                        <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                        class="fa fa-user fa-stack-1x"></i></span></span>
                        <span class="title-inner">Event Speakers <small> / meet with greaters</small></span>
                    </h1>

                    <!-- Speakers row -->
                    <div class="thumbnails clear">
                        <div class="carousel-slider">
                            <div class="owl-carousel slide-3">
                                <div>
                                    <div class="thumbnail no-border no-padding text-center">
                                        <div class="rehex speaker-avatar">
                                            <div class="rehex-deg">
                                                <div class="rehex-deg">
                                                    <div class="rehex-inner">
                                                        <div class="media">
                                                            <img src="../assets/img/preview/speaker-1.jpg" alt="">
                                                            <div class="caption hovered">
                                                                <div class="caption-wrapper div-table">
                                                                    <div class="caption-inner div-cell">
                                                                        <p class="caption-buttons"><a href="#"
                                                                                                      class="btn caption-link"><i
                                                                                        class="fa fa-link"></i></a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption before-media">
                                            <h3 class="caption-title">Speaker name here</h3>
                                            <p class="caption-category">Co Founder</p>
                                        </div>
                                        <div class="caption">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel
                                                velit</p>
                                            <ul class="social-line list-inline text-center">
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- -->
                                <div>
                                    <div class="thumbnail no-border no-padding text-center">
                                        <div class="rehex speaker-avatar">
                                            <div class="rehex-deg">
                                                <div class="rehex-deg">
                                                    <div class="rehex-inner">
                                                        <div class="media">
                                                            <img src="../assets/img/preview/speaker-2.jpg" alt="">
                                                            <div class="caption hovered">
                                                                <div class="caption-wrapper div-table">
                                                                    <div class="caption-inner div-cell">
                                                                        <p class="caption-buttons"><a href="#"
                                                                                                      class="btn caption-link"><i
                                                                                        class="fa fa-link"></i></a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption before-media">
                                            <h3 class="caption-title">Speaker name here</h3>
                                            <p class="caption-category">Co Founder</p>
                                        </div>
                                        <div class="caption">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel
                                                velit</p>
                                            <ul class="social-line list-inline text-center">
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- -->
                                <div>
                                    <div class="thumbnail no-border no-padding text-center">
                                        <div class="rehex speaker-avatar">
                                            <div class="rehex-deg">
                                                <div class="rehex-deg">
                                                    <div class="rehex-inner">
                                                        <div class="media">
                                                            <img src="../assets/img/preview/speaker-3.jpg" alt="">
                                                            <div class="caption hovered">
                                                                <div class="caption-wrapper div-table">
                                                                    <div class="caption-inner div-cell">
                                                                        <p class="caption-buttons"><a href="#"
                                                                                                      class="btn caption-link"><i
                                                                                        class="fa fa-link"></i></a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption before-media">
                                            <h3 class="caption-title">Speaker name here</h3>
                                            <p class="caption-category">Co Founder</p>
                                        </div>
                                        <div class="caption">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed vel
                                                velit</p>
                                            <ul class="social-line list-inline text-center">
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Speakers row -->

                    <div class="text-center margin-top">
                        <a href="#" class="btn btn-theme btn-theme-grey-dark"><i class="fa fa-user"></i> See all
                            speakers</a>
                    </div>

                    <!-- -->
                    <hr class="page-divider line"/>
                    <!-- -->

                    <h1 class="section-title clearfix">
                        <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                        class="fa fa-user fa-stack-1x"></i></span></span>
                        <span class="title-inner">Event Price list <small> / perfect price for event</small></span>
                    </h1>
                    <div class="row price-tables">
                        <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="price-table">
                                <div class="price-table-header">
                                    <div class="price-label">
                                        <h2 class="price-label-title">Personal</h2>
                                    </div>
                                    <div class="price-value">
                                        <span class="price-number">111</span><span class="price-unit">$</span><span
                                                class="price-per"></span>
                                    </div>
                                </div>
                                <div class="price-table-rows">
                                    <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor
                                        sit amet
                                    </div>
                                    <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur
                                        adipiscing elit
                                    </div>
                                    <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam
                                        metus
                                    </div>
                                    <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus
                                        magna
                                    </div>
                                    <div class="price-table-row-bottom">
                                        <a class="btn btn-theme scroll-to" href="#">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="price-table featured">
                                <div class="price-table-header">
                                    <div class="price-label">
                                        <h2 class="price-label-title">Company</h2>
                                    </div>
                                    <div class="price-value">
                                        <span class="price-number">124</span><span class="price-unit">$</span><span
                                                class="price-per"></span>
                                    </div>
                                </div>
                                <div class="price-table-rows">
                                    <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor
                                        sit amet
                                    </div>
                                    <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur
                                        adipiscing elit
                                    </div>
                                    <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam
                                        metus
                                    </div>
                                    <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus
                                        magna
                                    </div>
                                    <div class="price-table-row-bottom">
                                        <a class="btn btn-theme scroll-to" href="#">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xsp-6 col-sm-6 col-md-6 col-lg-4">
                            <div class="price-table">
                                <div class="price-table-header">
                                    <div class="price-label">
                                        <h2 class="price-label-title">Business</h2>
                                    </div>
                                    <div class="price-value">
                                        <span class="price-number">175</span><span class="price-unit">$</span><span
                                                class="price-per"></span>
                                    </div>
                                </div>
                                <div class="price-table-rows">
                                    <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Lorem ipsum dolor
                                        sit amet
                                    </div>
                                    <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Consectetur
                                        adipiscing elit
                                    </div>
                                    <div class="price-table-row"><i class="fa fa-check-circle-o"></i> Sed vitae diam
                                        metus
                                    </div>
                                    <div class="price-table-row odd"><i class="fa fa-check-circle-o"></i> Donec cursus
                                        magna
                                    </div>
                                    <div class="price-table-row-bottom">
                                        <a class="btn btn-theme scroll-to" href="#">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- -->
                    <hr class="page-divider line large"/>
                    <!-- -->

                    <div class="row">
                        <div class="col-md-8 pull-left">
                            <h1 class="section-title">
                                <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                                class="fa fa-question fa-stack-1x"></i></span></span>
                                <span class="title-inner">Event FAQS <small> / find your answers</small></span>
                            </h1>
                        </div>
                        <div class="col-md-4 text-right-md pull-right">
                            <a href="#" class="btn btn-theme btn-theme-lg btn-theme-transparent-grey pull-right"><i
                                        class="fa fa-pencil"></i> Open a ticket</a>
                        </div>
                    </div>

                    <div class="row faq-alt">
                        <div class="col-md-6">

                            <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne1">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"
                                               aria-expanded="true" aria-controls="collapseOne1">
                                                How to make New Event ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne1" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingOne1">
                                        <div class="panel-body">
                                            Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam
                                            a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et.
                                            Hac habitasse platea dictumst.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo1">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion1"
                                               href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                                How to make New Event ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo1" class="panel-collapse collapse in" role="tabpanel"
                                         aria-labelledby="headingTwo1">
                                        <div class="panel-body">
                                            Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam
                                            a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et.
                                            Hac habitasse platea dictumst.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree1">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion1"
                                               href="#collapseThree1" aria-expanded="false"
                                               aria-controls="collapseThree1">
                                                How to make New Event ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree1">
                                        <div class="panel-body">
                                            Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam
                                            a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et.
                                            Hac habitasse platea dictumst.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne2">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2"
                                               aria-expanded="true" aria-controls="collapseOne2">
                                                How to make New Event ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne2" class="panel-collapse collapse in" role="tabpanel"
                                         aria-labelledby="headingOne2">
                                        <div class="panel-body">
                                            Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam
                                            a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et.
                                            Hac habitasse platea dictumst.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo2">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion2"
                                               href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                                How to make New Event ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingTwo2">
                                        <div class="panel-body">
                                            Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam
                                            a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et.
                                            Hac habitasse platea dictumst.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree2">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion2"
                                               href="#collapseThree2" aria-expanded="false"
                                               aria-controls="collapseThree2">
                                                How to make New Event ?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree2">
                                        <div class="panel-body">
                                            Praesent ac sem in neque venenatis tristique. Morbi et ligula velit. Nullam
                                            a augue vel mi porta vestibulum non ac elit. Vivamus convallis tortor et.
                                            Hac habitasse platea dictumst.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- -->
                    <hr class="page-divider line large"/>
                    <!-- -->

                    <h1 class="section-title">
                        <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                        class="fa fa-ticket fa-stack-1x"></i></span></span>
                        <span class="title-inner">Register now <small> / dont mıss event!</small></span>
                    </h1>

                    <form id="registration-form" name="registration-form"
                          class="registration-form registration-form-alt" action="#" method="post">
                        <div class="row">
                            <div class="col-sm-12 form-alert"></div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group with-icon">
                                    <i class="fa fa-user"></i>
                                    <input
                                            type="text" class="form-control input-name"
                                            data-toggle="tooltip" title="Name is required"
                                            placeholder="Name and Surname"/>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group with-icon">
                                    <i class="fa fa-globe"></i>
                                    <input
                                            type="text" class="form-control input-email"
                                            data-toggle="tooltip" title="Mail is required"
                                            placeholder="Your Mail Here"/>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group selectpicker-wrapper">
                                    <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Select Your Price Tab">
                                        <option>Select Your Price Tab</option>
                                        <option>$100</option>
                                        <option>$200</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 overflowed">
                                <div class="text-center margin-top">
                                    <button
                                            class="btn btn-theme btn-theme-xl submit-button" type="submit"
                                    > Register Now <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- -->
                    <hr class="page-divider line large"/>
                    <!-- -->

                    <h1 class="section-title">
                        <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                        class="fa fa-star fa-stack-1x"></i></span></span>
                        <span class="title-inner">You May Like</span>
                    </h1>

                    <div class="thumbnails events">
                        <div class="carousel-slider">
                            <div class="owl-carousel slide-3">
                                <div class="isotope-item festival">
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                            <div class="date">
                                                <span>25</span>
                                                <span>Jan</span>
                                            </div>
                                            <img src="../assets/img/preview/hotel-1.jpg" alt="">
                                            <div class="caption hovered"></div>
                                        </div>
                                        <div class="caption">
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i
                                                        class="fa fa-map-marker"></i> Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas.
                                                Pellentesque habitant morbi. </p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp;
                                                    details</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="isotope-item festival">
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                            <div class="date">
                                                <span>25</span>
                                                <span>Jan</span>
                                            </div>
                                            <img src="../assets/img/preview/hotel-1.jpg" alt="">
                                            <div class="caption hovered"></div>
                                        </div>
                                        <div class="caption">
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i
                                                        class="fa fa-map-marker"></i> Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas.
                                                Pellentesque habitant morbi. </p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp;
                                                    details</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="isotope-item festival">
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <a href="#" class="like"><i class="fa fa-heart"></i></a>
                                            <div class="date">
                                                <span>25</span>
                                                <span>Jan</span>
                                            </div>
                                            <img src="../assets/img/preview/hotel-1.jpg" alt="">
                                            <div class="caption hovered"></div>
                                        </div>
                                        <div class="caption">
                                            <h3 class="caption-title"><a href="#">Standart Event Name Here</a></h3>
                                            <p class="caption-category"><i class="fa fa-file-text-o"></i> 15 October <i
                                                        class="fa fa-map-marker"></i> Manhattan / New York</p>
                                            <p class="caption-price">Tickets from $49,99</p>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas.
                                                Pellentesque habitant morbi. </p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Tickets &amp;
                                                    details</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- -->
                    <hr class="page-divider transparent small"/>
                    <!-- -->

                    <h1 class="section-title">
                        <span class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i
                                        class="fa fa-h-square fa-stack-1x"></i></span></span>
                        <span class="title-inner">HOTELS <small> / dont forget book your room</small></span>
                    </h1>

                    <div class="thumbnails hotels">
                        <div class="carousel-slider">
                            <div class="owl-carousel slide-3">
                                <div>
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <img src="../assets/img/preview/hotel-1.jpg" alt="">
                                            <div class="caption hovered">
                                                <div class="caption-wrapper div-table">
                                                    <div class="caption-inner div-cell">
                                                        <p class="caption-buttons"><a href="#"
                                                                                      class="btn btn-theme caption-link"><i
                                                                        class="fa fa-file-text"></i> Details</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                            <div class="caption-rating rating">
                                                <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                            </div>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas.
                                                Pellentesque habitant morbi.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <img src="../assets/img/preview/hotel-1.jpg" alt="">
                                            <div class="caption hovered">
                                                <div class="caption-wrapper div-table">
                                                    <div class="caption-inner div-cell">
                                                        <p class="caption-buttons"><a href="#"
                                                                                      class="btn btn-theme caption-link"><i
                                                                        class="fa fa-file-text"></i> Details</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                            <div class="caption-rating rating">
                                                <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                            </div>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas.
                                                Pellentesque habitant morbi.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="thumbnail no-border no-padding">
                                        <div class="media">
                                            <img src="../assets/img/preview/hotel-1.jpg" alt="">
                                            <div class="caption hovered">
                                                <div class="caption-wrapper div-table">
                                                    <div class="caption-inner div-cell">
                                                        <p class="caption-buttons"><a href="#"
                                                                                      class="btn btn-theme caption-link"><i
                                                                        class="fa fa-file-text"></i> Details</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3 class="caption-title"><a href="#">Standard Hotel Name Here</a></h3>
                                            <div class="caption-rating rating">
                                                <span class="star"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span><!--
                                                        --><span class="star active"></span>
                                            </div>
                                            <p class="caption-text">Fusce pellentesque velvitae tincidunt egestas.
                                                Pellentesque habitant morbi.</p>
                                            <p class="caption-more"><a href="#" class="btn btn-theme">Book</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- /Content -->

                <hr class="page-divider transparent visible-xs"/>

                <!-- Sidebar -->
                <aside id="sidebar" class="sidebar col-sm-12 col-md-4 col-lg-3">

                    <div class="widget google-map-widget">
                        <!-- Google map -->
                        <div class="google-map">
                            <div id="map-canvas"></div>
                        </div>
                        <!-- /Google map -->
                        <a href="#" class="link"><i class="fa fa-map-marker"></i> Go to LOCATION</a>
                    </div>

                    <div class="widget">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                           aria-expanded="true" aria-controls="collapseOne">
                                            When & Where
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">NYC - Financial Freedom Investor</a></li>
                                            <li>Madison Ave</li>
                                            <li>New York, NY 10010</li>
                                            <li>Thursday, January 8, 2015</li>
                                            <li>from 6:30 PM to 8:30 PM (EST)</li>
                                        </ul>
                                        <a href="#"><i class="fa fa-calendar"></i> Add to My Calendar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Organizer
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>Fusce pellentesque velvitae tincidunt egestas. Pellentesque habitant
                                            morbi.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                            lorem quis <a href="#">more...</a></p>
                                        <ul>
                                            <li><i class="fa fa-facebook"></i> facebook.com/imorganiser</li>
                                            <li><i class="fa fa-twitter"></i> @imorganiser</li>
                                            <li><i class="fa fa-globe"></i> http://www.organiserweb.com</li>
                                        </ul>
                                        <a href="#" class="btn btn-theme btn-theme-grey-dark btn-theme-md">Send Message
                                            <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
                <!-- /Sidebar -->

            </div>
        </section>
        <!-- /PAGE -->

    </div>
    <!-- /Content area -->


    @include('layouts.singFooter')


@endsection