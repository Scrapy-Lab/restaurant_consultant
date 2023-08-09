@extends('layouts.app')
@section('content')
    <!-- Main Section start -->
    <section id="home" class="p-0 no-transition h-100vh">
        <h2 class="d-none">heading</h2>
        <!--Main Slider-->
        <div id="revo_thumbs_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
            <div id="secondary-banner" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>

                    <!-- SLIDE 2 -->
                    <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="">
                        <!-- MAIN IMAGE -->
                        {{-- <img src="consulting/video/thumb.jpg" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="7"
                            data-no-retina> --}}
                        <div class="bg-overlay bg-black opacity-7"></div>
                        <img alt="stats" src="consulting/img/banner.jpg" class="about-img">

                        {{-- <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute"
                            data-videowidth="100%" data-videoheight="100%" data-videowebm="consulting/video/video.mp4"
                            data-videomp4="consulting/video/video.mp4" data-videopreload="auto"
                            data-videoloop="loopandnoslidestop" data-forceCover="1" data-aspectratio="16:9"
                            data-autoplay="true" data-autoplayonlyfirsttime="false"></div> --}}

                        <!--If you need youtube video-->
                        <!--<div class="rs-background-video-layer"
                            data-ytid="hEkiWaEp03k"
                            data-volume="mute"
                            data-forcerewind="on"
                            data-nextslideatend="true"
                            data-autoplay="true"
                            data-autoplayonlyfirsttime="true"
                            data-videoloop="loopandnoslidestop"
                            data-videoattributes="version=3&enablejsapi=1&html5=1&hd=1&autoplay=1&wmode=opaque&showinfo=0&rel=0&
                origin=http://server.local"></div>-->

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-160','-160','-140','-140']" data-fontsize="['60','60','60','45']"
                            data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']"
                            data-type="text" data-textalign="['center','center','center','center']"
                            data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;"
                            data-transform_out="s:300;e:Power3.easeInOut;s:300;e:Power3.easeInOut;" data-start="1000"
                            data-splitin="none" data-splitout="none"
                            style="z-index:1; font-weight: 300; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:capitalize">
                            we provide
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-80','-80','-70','-70']" data-fontsize="['60','60','60','45']"
                            data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']"
                            data-type="text" data-textalign="['center','center','center','center']"
                            data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:300;e:Power2.easeInOut;s:300;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200" data-splitin="none"
                            data-splitout="none"
                            style="z-index:2; font-weight: 500; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:capitalize">
                            most beneficial
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['5','5','0','0']" data-fontsize="['60','60','60','45']" data-whitespace="nowrap"
                            data-responsive_offset="on" data-width="['none','none','none','none']" data-type="text"
                            data-textalign="['center','center','center','center']" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:300;e:Power2.easeInOut;s:300;e:Power2.easeInOut;" data-start="1000"
                            data-splitin="none" data-splitout="none"
                            style="z-index:3; font-weight: 300; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:capitalize">
                            services
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['80','80','70','60']" data-fontsize="['22','22','18','16']"
                            data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']"
                            data-type="text" data-textalign="['center','center','center','center']"
                            data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;"
                            data-transform_out="s:300;e:Power3.easeInOut;s:300;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                            data-splitout="none"
                            style="z-index:4; font-weight: 200; color: #ffffff; line-height:30px; font-family: 'Raleway', sans-serif;text-transform:capitalize">
                            Get Business Solution with TRC
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['160','160','140','140']" data-width="['160','160','160','160']"
                            data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" style="z-index:5; max-width: 960px">
                            {{-- <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn more</a> --}}
                        </div>

                    </li>
                </ul>
            </div>
        </div>
        <!--Main Slider ends -->
    </section>
    <!-- Main Section end -->

    <!-- About start -->
    <section id="aboutus" class="bg-blackDark">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="main-title style-two d-flex justify-content-md-around align-items-center flex-column flex-md-row text-center text-md-left wow fadeIn"
                        data-wow-delay="300ms">
                        <div class="mb-4 mb-md-0">
                            <h5 class="textColor-white"> About company </h5>
                            <h2 class="textColor-white"> Welcome to The Restaurant Consultant! </h2>

                            <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn more</a>
                        </div>
                        <div class="ml-md-4 pl-md-2">
                            <p class="mb-4 textColor-white">We are passionate about the art and science of hospitality. Our
                                mission is to partner with restaurants, cafes, bars, and culinary establishments to elevate
                                their dining experiences, streamline operations, and maximize their potential for success.
                            </p>
                            {{-- <p class="textColor-white">Morbi venenatis dictum consequat. Phasellus eu purus sed arcu
                                posuere consequat euismod ac
                                augue. Morbi venenatis dictum consequat.</p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-12 mb-xs-2rem">
                    <div class="about-box center-block wow zoomIn" data-wow-delay="400ms">
                        <div class="about-opacity-icon"> <i class="fa fa-briefcase" aria-hidden="true"></i> </div>
                        <div class="about-main-icon pb-4">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <h5 class="mb-0">Our Consultants</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 mb-xs-2rem">
                    <div class="about-box active center-block wow zoomIn" data-wow-delay="500ms">
                        <div class="about-opacity-icon"> <i class="fa fa-lightbulb" aria-hidden="true"></i> </div>
                        <div class="about-main-icon pb-4">
                            <i class="fa fa-lightbulb" aria-hidden="true"></i>
                        </div>
                        <h5 class="mb-0">Great Ideas</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 mb-xs-2rem">
                    <div class="about-box center-block wow zoomIn" data-wow-delay="600ms">
                        <div class="about-opacity-icon"> <i class="fa fa-chart-line" aria-hidden="true"></i> </div>
                        <div class="about-main-icon pb-4">
                            <i class="fa fa-chart-line" aria-hidden="true"></i>
                        </div>
                        <h5 class="mb-0">Market Trends</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="about-box center-block wow zoomIn" data-wow-delay="700ms">
                        <div class="about-opacity-icon"> <i class="fa fa-money-bill-wave" aria-hidden="true"></i> </div>
                        <div class="about-main-icon pb-4">
                            <i class="fa fa-money-bill-wave" aria-hidden="true"></i>
                        </div>
                        <h5 class="mb-0">Earn Profits</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About ends -->

    <!-- Stats start -->
    {{-- <section class="half-section p-0 bg-change bg-blue">
        <h2 class="d-none">heading</h2>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 p-0 order-lg-2">
                    <div class="hover-effect">
                        <img alt="stats" src="consulting/img/split-stats.jpg" class="about-img">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-lg-0">
                    <div class="split-container-setting stats style-three">
                        <div class="main-title mb-5 text-lg-left wow fadeIn" data-wow-delay="300ms">
                            <h5 class="font-18"> Check Our Skills </h5>
                            <h2> We can <b>make</b> better <b>things</b> for you </h2>
                        </div>
                        <ul class="text-left">
                            <li class="custom-progress">
                                <h6 class="font-18 mb-0 text-capitalize">business consulting <span class="float-right"><b
                                            class="font-secondary font-weight-500 numscroller">85</b>%</span></h6>

                                <div class="progress">
                                    <div class="progress-bar bg-white" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </li>
                            <li class="custom-progress">
                                <h6 class="font-18 mb-0 text-capitalize">financial advicing<span class="float-right"><b
                                            class="font-secondary font-weight-500 numscroller">65</b>%</span></h6>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-white" role="progressbar"
                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </li>
                            <li class="custom-progress">
                                <h6 class="font-18 mb-0 text-capitalize">brand consulting<span class="float-right"><b
                                            class="font-secondary font-weight-500 numscroller">70</b>%</span></h6>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-white" role="progressbar"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </li>
                            <li class="custom-progress mb-0">
                                <h6 class="font-18 mb-0 text-capitalize">strategic consulting <span class="float-right"><b
                                            class="font-secondary font-weight-500 numscroller">95</b>%</span></h6>

                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-white" role="progressbar"
                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Stats ends -->

    <!-- Team start -->
    <section class="bg-blackDark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title wow fadeIn" data-wow-delay="300ms">
                        <h5 class="textColor-white"> You can try out our </h5>
                        <h2 class="textColor-white"> best <b>consultants</b> team </h2>
                        <p class="textColor-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales
                            lobortis vehicula. Aliquam sodales turpis a neque sagittis, condimentum imperdiet risus luctus.
                            Praesent cursus non risus in tempor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-classic owl-team owl-carousel text-center wow fadeInUp">
                        <div class="item">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="image">
                                    <img src="consulting/img/team1.jpg" alt="team" class="img-responsive"
                                        data-no-retina>
                                    <div class="team-overlay center-block">
                                        <ul class="social_icon d-flex justify-content-center noborder">
                                            <li><a class="facebook" href="javascript:void(0)"><i
                                                        class="fab fa-facebook-f"></i> </a> </li>
                                            <li><a class="twitter" href="javascript:void(0)"><i
                                                        class="fab fa-twitter"></i> </a> </li>
                                            <li><a class="google" href="javascript:void(0)"><i class="fab fa-google"></i>
                                                </a> </li>
                                            <li><a class="insta" href="javascript:void(0)"><i
                                                        class="fab fa-instagram"></i> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-classic-content">
                                    <h5 class="color-black font-weight-600 mb-2 text-capitalize">Mark Wooderberg</h5>
                                    <p class="color-black font-weight-normal font-16 text-capitalize">General manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="image">
                                    <img src="consulting/img/team2.jpg" alt="team" class="img-responsive"
                                        data-no-retina>
                                    <div class="team-overlay center-block">
                                        <ul class="social_icon d-flex justify-content-center noborder">
                                            <li><a class="facebook" href="javascript:void(0)"><i
                                                        class="fab fa-facebook-f"></i> </a> </li>
                                            <li><a class="twitter" href="javascript:void(0)"><i
                                                        class="fab fa-twitter"></i> </a> </li>
                                            <li><a class="google" href="javascript:void(0)"><i class="fab fa-google"></i>
                                                </a> </li>
                                            <li><a class="insta" href="javascript:void(0)"><i
                                                        class="fab fa-instagram"></i> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-classic-content">
                                    <h5 class="color-black font-weight-600 mb-2 text-capitalize">Janey Woods</h5>
                                    <p class="color-black font-weight-normal font-16 text-capitalize">Executive Vice
                                        President</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="image">
                                    <img src="consulting/img/team3.jpg" alt="team" class="img-responsive"
                                        data-no-retina>
                                    <div class="team-overlay center-block">
                                        <ul class="social_icon d-flex justify-content-center noborder">
                                            <li><a class="facebook" href="javascript:void(0)"><i
                                                        class="fab fa-facebook-f"></i> </a> </li>
                                            <li><a class="twitter" href="javascript:void(0)"><i
                                                        class="fab fa-twitter"></i> </a> </li>
                                            <li><a class="google" href="javascript:void(0)"><i class="fab fa-google"></i>
                                                </a> </li>
                                            <li><a class="insta" href="javascript:void(0)"><i
                                                        class="fab fa-instagram"></i> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-classic-content">
                                    <h5 class="color-black font-weight-600 mb-2 text-capitalize">Chris Anderson</h5>
                                    <p class="color-black font-weight-normal font-16 text-capitalize">Marketing Head</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="image">
                                    <img src="consulting/img/team1.jpg" alt="team" class="img-responsive"
                                        data-no-retina>
                                    <div class="team-overlay center-block">
                                        <ul class="social_icon d-flex justify-content-center noborder">
                                            <li><a class="facebook" href="javascript:void(0)"><i
                                                        class="fab fa-facebook-f"></i> </a> </li>
                                            <li><a class="twitter" href="javascript:void(0)"><i
                                                        class="fab fa-twitter"></i> </a> </li>
                                            <li><a class="google" href="javascript:void(0)"><i class="fab fa-google"></i>
                                                </a> </li>
                                            <li><a class="insta" href="javascript:void(0)"><i
                                                        class="fab fa-instagram"></i> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-classic-content">
                                    <h5 class="color-black font-weight-600 mb-2 text-capitalize">Mark Wooderberg</h5>
                                    <p class="color-black font-weight-normal font-16 text-capitalize">General manager</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="image">
                                    <img src="consulting/img/team2.jpg" alt="team" class="img-responsive"
                                        data-no-retina>
                                    <div class="team-overlay center-block">
                                        <ul class="social_icon d-flex justify-content-center noborder">
                                            <li><a class="facebook" href="javascript:void(0)"><i
                                                        class="fab fa-facebook-f"></i> </a> </li>
                                            <li><a class="twitter" href="javascript:void(0)"><i
                                                        class="fab fa-twitter"></i> </a> </li>
                                            <li><a class="google" href="javascript:void(0)"><i class="fab fa-google"></i>
                                                </a> </li>
                                            <li><a class="insta" href="javascript:void(0)"><i
                                                        class="fab fa-instagram"></i> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-classic-content">
                                    <h5 class="color-black font-weight-600 mb-2 text-capitalize">Janey Woods</h5>
                                    <p class="color-black font-weight-normal font-16 text-capitalize">Executive Vice
                                        President</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="image">
                                    <img src="consulting/img/team3.jpg" alt="team" class="img-responsive"
                                        data-no-retina>
                                    <div class="team-overlay center-block">
                                        <ul class="social_icon d-flex justify-content-center noborder">
                                            <li><a class="facebook" href="javascript:void(0)"><i
                                                        class="fab fa-facebook-f"></i> </a> </li>
                                            <li><a class="twitter" href="javascript:void(0)"><i
                                                        class="fab fa-twitter"></i> </a> </li>
                                            <li><a class="google" href="javascript:void(0)"><i class="fab fa-google"></i>
                                                </a> </li>
                                            <li><a class="insta" href="javascript:void(0)"><i
                                                        class="fab fa-instagram"></i> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-classic-content">
                                    <h5 class="color-black font-weight-600 mb-2 text-capitalize">Chris Anderson</h5>
                                    <p class="color-black font-weight-normal font-16 text-capitalize">Marketing Head</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="image">
                                    <img src="consulting/img/team1.jpg" alt="team" class="img-responsive"
                                        data-no-retina>
                                    <div class="team-overlay center-block">
                                        <ul class="social_icon d-flex justify-content-center noborder">
                                            <li><a class="facebook" href="javascript:void(0)"><i
                                                        class="fab fa-facebook-f"></i> </a> </li>
                                            <li><a class="twitter" href="javascript:void(0)"><i
                                                        class="fab fa-twitter"></i> </a> </li>
                                            <li><a class="google" href="javascript:void(0)"><i class="fab fa-google"></i>
                                                </a> </li>
                                            <li><a class="insta" href="javascript:void(0)"><i
                                                        class="fab fa-instagram"></i> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-classic-content">
                                    <h5 class="color-black font-weight-600 mb-2 text-capitalize">Mark Wooderberg</h5>
                                    <p class="color-black font-weight-normal font-16 text-capitalize">General manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="image">
                                    <img src="consulting/img/team2.jpg" alt="team" class="img-responsive"
                                        data-no-retina>
                                    <div class="team-overlay center-block">
                                        <ul class="social_icon d-flex justify-content-center noborder">
                                            <li><a class="facebook" href="javascript:void(0)"><i
                                                        class="fab fa-facebook-f"></i> </a> </li>
                                            <li><a class="twitter" href="javascript:void(0)"><i
                                                        class="fab fa-twitter"></i> </a> </li>
                                            <li><a class="google" href="javascript:void(0)"><i class="fab fa-google"></i>
                                                </a> </li>
                                            <li><a class="insta" href="javascript:void(0)"><i
                                                        class="fab fa-instagram"></i> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-classic-content">
                                    <h5 class="color-black font-weight-600 mb-2 text-capitalize">Janey Woods</h5>
                                    <p class="color-black font-weight-normal font-16 text-capitalize">Executive Vice
                                        President</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team ends -->

    <!-- Service start -->
    <section class="half-section p-0 bg-change bg-green">
        <h2 class="d-none">heading</h2>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 p-lg-0 order-lg-2">
                    <div class="split-container-setting style-three text-center text-lg-left">
                        <div class="main-title mb-5 text-lg-left wow fadeIn" data-wow-delay="300ms">
                            <h5 class="font-18"> What you are looking for </h5>
                            <h2 class="mb-0"> We provide <br> <b>bespoke</b> solutions </h2>
                        </div>
                        <p class="color-white mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales
                            lobortis vehicula. Aliquam sodales turpis a neque sagittis, condimentum imperdiet risus luctus.
                            Praesent cursus non risus in tempor. Phasellus eu purus sed arcu posuere consequat euismod ac
                            augue. </p>

                        <a href="javascript:void(0)" class="btn-setting btn-transparent btn-hvr-blue color-white">learn
                            more</a>

                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="hover-effect">
                        <img alt="stats" src="consulting/img/split-service.jpg" class="about-img">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Service ends -->

    <!-- Cases start -->
    <section id="services" class="bg-blackDark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title wow fadeIn" data-wow-delay="300ms">
                        <h5 class="textColor-white"> Check out !</h5>
                        <h2 class="textColor-white"> Our <b>Services</b> </h2>
                        <p class="textColor-white">Our expertise in given field.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">


                    <div id="js-grid-slider-projects" class="cbp">
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center">CONCEPT CREATION</h6>
                                    <img src="consulting/img/cases1.jpg" alt="">
                                </div>
                                <a href="#js-singlePage-container/project1" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">

                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    business planning</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center">ARCHITECTURAL</h6>
                                    <img src="consulting/img/cases2.jpg" alt="">
                                </div>
                                <a href="#js-singlePage-container/project2" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    strategy buildup</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center">Restaurant Design and Layou</h6>
                                    <img src="consulting/img/cases3.jpg" alt="">
                                </div>

                                <a href="#js-singlePage-container/project3" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    marketing analysis</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center"> CUISINE & FOOD IDENTITY</h6>
                                    <img src="consulting/img/cases4.jpg" alt="">
                                </div>

                                <a href="#js-singlePage-container/project4" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    online consultation</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center"> HIRING & TRAINING</h6>
                                    <img src="consulting/img/cases5.jpg" alt="">
                                </div>
                                <a href="#js-singlePage-container/project5" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    social media marketing</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center">AUDITS & PROGRAMS</h6>
                                    <img src="consulting/img/cases6.jpg" alt="">
                                </div>
                                <a href="#js-singlePage-container/project6" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    financial consultations</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center"> MARKETING & STRATEGY</h6>
                                    <img src="consulting/img/cases7.jpg" alt="">
                                </div>
                                <a href="#js-singlePage-container/project7" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    creative idea generator</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center"> OPERATIONS & MANAGEMENT</h6>
                                    <img src="consulting/img/cases8.jpg" alt="">
                                </div>
                                <a href="#js-singlePage-container/project8" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    build up career</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center"> ADVISORY & STRATEGY</h6>
                                    <img src="consulting/img/cases8.jpg" alt="">
                                </div>
                                <a href="#js-singlePage-container/project8" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    build up career</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center"> Franchise and Expansion Planning</h6>
                                    <img src="consulting/img/cases8.jpg" alt="">
                                </div>
                                <a href="#js-singlePage-container/project8" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    build up career</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center"> Financial Analysis and Budgeting</h6>
                                    <img src="consulting/img/cases8.jpg" alt="">
                                </div>
                                <a href="#js-singlePage-container/project8" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    build up career</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap">
                                    <h6 class="service_title text-center">Waste Management and Sustainability</h6>
                                    <img src="consulting/img/cases8.jpg" alt="">
                                </div>
                                <a href="#js-singlePage-container/project8" class="cbp-caption-activeWrap cbp-singlePage">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cases-image-inner">
                                                <span class="cases-line top"></span>
                                                <span class="cases-line top-right"></span>
                                                <span class="cases-line bottom"></span>
                                                <span class="cases-line bottom-left"></span>
                                                <h6
                                                    class="text-white text-uppercase font-14 font-secondary font-weight-light">
                                                    build up career</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="js-singlePage-container" class="d-none">
                        <!-- PROJECT 1 -->
                        <div>
                            <div class="cbp-l-project-title">business <span class="font-weight-600">planning</span></div>
                            <div class="cbp-l-project-subtitle">We're revolutionising the way businesses are started</div>

                            <div class="cbp-slider">
                                <ul class="cbp-slider-wrap">
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases1.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases2.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases3.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-desc">
                                    <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi
                                        consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur
                                        optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia
                                        repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi
                                        asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita
                                        quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos
                                        magnam!</div>
                                </div>
                                <div class="cbp-l-project-details">
                                    <ul class="cbp-l-project-details-list mb-4">
                                        <li><strong>Client</strong>Will Burk</li>
                                        <li><strong>Date</strong>09/05/19</li>
                                        <li><strong>Categories</strong>Finance, Corporate</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn
                                        more</a>
                                </div>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-related">
                                    <div class="cbp-l-project-desc-title"><span>Related Cases</span></div>

                                    <ul class="cbp-l-project-related-wrap">
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project2"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases2.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Strategy Buildup</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project3"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases3.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Marketing Analysis</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project4"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases4.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Online Consultation</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <br><br><br>
                        </div>

                        <!-- PROJECT 2 -->
                        <div>
                            <div class="cbp-l-project-title">strategy <span class="font-weight-600">buildup</span></div>
                            <div class="cbp-l-project-subtitle">We're revolutionising the way businesses are started</div>

                            <div class="cbp-slider">
                                <ul class="cbp-slider-wrap">
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases2.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases3.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases4.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-desc">
                                    <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi
                                        consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur
                                        optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia
                                        repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi
                                        asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita
                                        quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos
                                        magnam!</div>
                                </div>
                                <div class="cbp-l-project-details">
                                    <ul class="cbp-l-project-details-list mb-4">
                                        <li><strong>Client</strong>Will Burk</li>
                                        <li><strong>Date</strong>22 July 2019</li>
                                        <li><strong>Categories</strong>Logo, Graphic</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn
                                        more</a>
                                </div>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-related">
                                    <div class="cbp-l-project-desc-title"><span>Related Cases</span></div>

                                    <ul class="cbp-l-project-related-wrap">
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project3"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases3.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Marketing Analysis</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project4"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases4.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Online Consultation</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project5"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases5.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Social Media Marketing </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <br><br><br>
                        </div>

                        <!-- PROJECT 3 -->
                        <div>
                            <div class="cbp-l-project-title">marketing <span class="font-weight-600">analysis</span></div>
                            <div class="cbp-l-project-subtitle">We're revolutionising the way businesses are started</div>

                            <div class="cbp-slider">
                                <ul class="cbp-slider-wrap">
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases3.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases4.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases5.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-desc">
                                    <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi
                                        consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur
                                        optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia
                                        repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi
                                        asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita
                                        quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos
                                        magnam!</div>
                                </div>
                                <div class="cbp-l-project-details">
                                    <ul class="cbp-l-project-details-list mb-4">
                                        <li><strong>Client</strong>Will Burk</li>
                                        <li><strong>Date</strong>22 July 2019</li>
                                        <li><strong>Categories</strong>Logo, Graphic</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn
                                        more</a>
                                </div>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-related">
                                    <div class="cbp-l-project-desc-title"><span>Related Cases</span></div>

                                    <ul class="cbp-l-project-related-wrap">
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project4"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases4.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Online Consultation</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project5"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases5.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Social Media Marketing</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project6"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases6.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Financial Consultations</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <br><br><br>
                        </div>

                        <!-- PROJECT 4 -->
                        <div>
                            <div class="cbp-l-project-title">online <span class="font-weight-600">consultation</span>
                            </div>
                            <div class="cbp-l-project-subtitle">We're revolutionising the way businesses are started</div>

                            <div class="cbp-slider">
                                <ul class="cbp-slider-wrap">
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases4.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases5.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases6.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-desc">
                                    <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi
                                        consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur
                                        optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia
                                        repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi
                                        asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita
                                        quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos
                                        magnam!</div>
                                </div>
                                <div class="cbp-l-project-details">
                                    <ul class="cbp-l-project-details-list mb-4">
                                        <li><strong>Client</strong>Will Burk</li>
                                        <li><strong>Date</strong>22 July 2019</li>
                                        <li><strong>Categories</strong>Logo, Graphic</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn
                                        more</a>
                                </div>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-related">
                                    <div class="cbp-l-project-desc-title"><span>Related Cases</span></div>

                                    <ul class="cbp-l-project-related-wrap">
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project5"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases5.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Social Media Marketing</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project6"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases6.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Financial Consultations</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project7"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases7.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Creative Idea Generator</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <br><br><br>
                        </div>

                        <!-- PROJECT 5 -->
                        <div>
                            <div class="cbp-l-project-title">social media <span class="font-weight-600">marketing</span>
                            </div>
                            <div class="cbp-l-project-subtitle">We're revolutionising the way businesses are started</div>

                            <div class="cbp-slider">
                                <ul class="cbp-slider-wrap">
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases5.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases6.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases7.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-desc">
                                    <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi
                                        consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur
                                        optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia
                                        repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi
                                        asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita
                                        quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos
                                        magnam!</div>
                                </div>
                                <div class="cbp-l-project-details">
                                    <ul class="cbp-l-project-details-list mb-4">
                                        <li><strong>Client</strong>Will Burk</li>
                                        <li><strong>Date</strong>22 July 2019</li>
                                        <li><strong>Categories</strong>Logo, Graphic</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn
                                        more</a>
                                </div>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-related">
                                    <div class="cbp-l-project-desc-title"><span>Related Cases</span></div>

                                    <ul class="cbp-l-project-related-wrap">
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project6"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases6.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Financial Consultations</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project7"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases7.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Creative Idea Generator</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project8"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases8.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Build Up Career</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <br><br><br>
                        </div>

                        <!-- PROJECT 6 -->
                        <div>
                            <div class="cbp-l-project-title">financial <span class="font-weight-600">consultations</span>
                            </div>
                            <div class="cbp-l-project-subtitle">We're revolutionising the way businesses are started</div>

                            <div class="cbp-slider">
                                <ul class="cbp-slider-wrap">
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases6.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases7.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases8.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-desc">
                                    <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi
                                        consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur
                                        optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia
                                        repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi
                                        asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita
                                        quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos
                                        magnam!</div>
                                </div>
                                <div class="cbp-l-project-details">
                                    <ul class="cbp-l-project-details-list mb-4">
                                        <li><strong>Client</strong>Will Burk</li>
                                        <li><strong>Date</strong>22 July 2019</li>
                                        <li><strong>Categories</strong>Logo, Graphic</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn
                                        more</a>
                                </div>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-related">
                                    <div class="cbp-l-project-desc-title"><span>Related Cases</span></div>

                                    <ul class="cbp-l-project-related-wrap">
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project7"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases7.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Creative Idea Generator</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project8"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases8.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Build Up Career</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project1"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases1.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Business Planning</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <br><br><br>
                        </div>

                        <!-- PROJECT 7 -->
                        <div>
                            <div class="cbp-l-project-title">creative idea <span class="font-weight-600">generator</span>
                            </div>
                            <div class="cbp-l-project-subtitle">We're revolutionising the way businesses are started</div>

                            <div class="cbp-slider">
                                <ul class="cbp-slider-wrap">
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases7.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases8.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases1.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-desc">
                                    <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi
                                        consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur
                                        optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia
                                        repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi
                                        asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita
                                        quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos
                                        magnam!</div>
                                </div>
                                <div class="cbp-l-project-details">
                                    <ul class="cbp-l-project-details-list mb-4">
                                        <li><strong>Client</strong>Will Burk</li>
                                        <li><strong>Date</strong>22 July 2019</li>
                                        <li><strong>Categories</strong>Logo, Graphic</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn
                                        more</a>
                                </div>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-related">
                                    <div class="cbp-l-project-desc-title"><span>Related Cases</span></div>

                                    <ul class="cbp-l-project-related-wrap">
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project8"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases8.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Build Up Career</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project1"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases1.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Business Planning</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project2"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases2.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Strategy Buildup</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <br><br><br>
                        </div>

                        <!-- PROJECT 8 -->
                        <div>
                            <div class="cbp-l-project-title">build up <span class="font-weight-600">career</span></div>
                            <div class="cbp-l-project-subtitle">We're revolutionising the way businesses are started</div>

                            <div class="cbp-slider">
                                <ul class="cbp-slider-wrap">
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases8.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases1.jpg" alt="">
                                    </li>
                                    <li class="cbp-slider-item">
                                        <img src="consulting/img/cases2.jpg" alt="">
                                    </li>
                                </ul>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-desc">
                                    <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi
                                        consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur
                                        optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia
                                        repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi
                                        asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita
                                        quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos
                                        magnam!</div>
                                </div>
                                <div class="cbp-l-project-details">
                                    <ul class="cbp-l-project-details-list mb-4">
                                        <li><strong>Client</strong>Will Burk</li>
                                        <li><strong>Date</strong>2 July 2019</li>
                                        <li><strong>Categories</strong>Logo, Graphic</li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue text-white">learn
                                        more</a>
                                </div>
                            </div>

                            <div class="cbp-l-project-container">
                                <div class="cbp-l-project-related">
                                    <div class="cbp-l-project-desc-title"><span>Related Cases</span></div>

                                    <ul class="cbp-l-project-related-wrap">
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project1"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases1.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Business Planning</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project2"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases2.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Strategy Buildup</div>
                                            </a>
                                        </li>
                                        <li class="cbp-l-project-related-item">
                                            <a href="#js-singlePage-container/project3"
                                                class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                                                <img src="consulting/img/cases3.jpg" alt="">
                                                <div class="cbp-l-project-related-title">Marketing Analysis</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mt-5" id="sectors" >
            <h2 class="text-center textColor-white">Sector</h2>
            <div class="row custom-thumbnail">
                <div class="col-md-6 small-12 medium-4 large-4 columns services-detail-brdr our-thumb">
                    <!-- serices box start -->
                    <div class="services-box">
                        <div class="services-detail">
                            <p class="service-head mt-4 textColor-white">Cloud Kitchens &amp; Delivery</p>
                            <img class="sector_class_cloud" alt=""
                                src="https://assets.limetray.com/assets/image_manager/uploads/3479/Quick%20Service.png">
                        </div>
                    </div>
                    <!-- serices box end -->
                </div>

                <div class="col-md-6 small-12 medium-4 large-4 columns services-detail-brdr our-thumb">
                    <!-- serices box start -->
                    <div class="services-box">
                        <div class="services-detail">
                            <p class="service-head mt-4 textColor-white"> Casual &amp; Fine dining Restaurants </p>
                            <img class="sector_class_fineDine" alt=""
                                src="https://assets.limetray.com/assets/image_manager/uploads/3479/Casual%20&amp;%20Fine%20Dining.png">
                        </div>
                    </div>
                    <!-- serices box end -->
                </div>

                <div class="col-md-6 small-12 medium-4 large-4 columns services-detail-brdr our-thumb">
                    <!-- serices box start -->
                    <div class="services-box">
                        <div class="services-detail">
                            <p class="service-head mt-4 textColor-white">Quick Service Restaurants</p>
                            <img class="sector_class_quick" alt=""
                                src="https://assets.limetray.com/assets/image_manager/uploads/3479/FMCG.png">
                        </div>
                    </div>
                    <!-- serices box end -->
                </div>
                <div class="col-md-6 small-12 medium-4 large-4 columns services-detail-brdr our-thumb">
                    <!-- serices box start -->
                    <div class="services-box">
                        <div class="services-detail">
                            <p class="service-head mt-4 textColor-white">Clubs </p>
                            <img class="sector_class_clubs" alt=""
                                src="https://assets.limetray.com/assets/image_manager/uploads/3479/mall.png">
                            {{-- <img class="sector_class" alt=""
                                    src="https://assets.limetray.com/assets/image_manager/uploads/3479/Schools.png"> --}}
                        </div>
                    </div>
                    <!-- serices box end -->
                </div>
            </div>
            <!--Second row starts from here-->

            <div class="row custom-thumbnail">

                <!-- serices box start -->

            </div>
        </div>
    </section>
    <!-- Cases ends -->

    <!-- Price start -->
    {{-- <section id="sectors" class="bg-blackDark price-style2"> --}}



        <!-- <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="process-box text-sm-left mb-4 mb-lg-0">
                                    <span class="pro-step d-inline-block"><i class="fa fa-server"></i></span>
                                    <h5 class="font-weight-normal color-black mt-25px mb-15px text-capitalize">setup meeting</h5>
                                    <p class="font-weight-normal">Lorem dapibus, tortor eget turpis auctor, convallis odio ac.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="process-box text-sm-left mb-4 mb-lg-0">
                                    <span class="pro-step d-inline-block"><i class="fa fa-layer-group"></i></span>
                                    <h5 class="font-weight-normal color-black mt-25px mb-15px text-capitalize">consultancy</h5>
                                    <p class="font-weight-normal">Etiam luctus, lacus maximus elementum dapibus felis.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="process-box text-sm-left mb-4 mb-sm-0">
                                    <span class="pro-step d-inline-block"><i class="fa fa-file"></i></span>
                                    <h5 class="font-weight-normal color-black mt-25px mb-15px text-capitalize">execution</h5>
                                    <p class="font-weight-normal">Maecenas fringilla molestie elit, maximus dui eleifend quis.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="process-box text-sm-left mb-0">
                                    <span class="pro-step d-inline-block"><i class="fa fa-award"></i></span>
                                    <h5 class="font-weight-normal color-black mt-25px mb-15px text-capitalize">completion</h5>
                                    <p class="font-weight-normal">Pellentesque habitant morbi tristique senectus et malesuada.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->


        <!-- <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title wow fadeIn" data-wow-delay="300ms">
                            <h5> Effective and economical packages </h5>
                            <h2> choose <b>best price</b> plan</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales lobortis vehicula. Aliquam sodales turpis a neque sagittis.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center pr-lg-0 md-mb-5 wow fadeInLeft">
                        <div class="price-item price-transform basic-plan">
                            <div class="price-box clearfix">
                                <div class="price-package">
                                    <h3 class="mb-2rem">basic</h3>
                                </div>
                                <div class="price-icon">
                                    <i class="fa fa-lightbulb"></i>
                                </div>
                            </div>

                            <div class="price">
                                <h2 class="position-relative"><span class="dollar">$</span><span class="color-green">75</span><span class="month"> /month</span></h2>
                                <p class="price-sub-heading">A budget package for starter</p>
                            </div>
                            <div class="price-features bg-green">
                                <h4 class="mb-0 text-capitalize">basic features</h4>
                            </div>
                            <div class="price-description">
                                <p class="bg-blackDark2">Creative free Web with ads</p>
                                <p class="bg-blackDark">Connect Domain</p>
                            </div>
                            <div class="text-center">
                                <a href="javascript:void(0)" class="btn-setting btn-green btn-hvr-transparent-grey color-black">learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center px-lg-0 md-mb-5 wow fadeInUp">
                        <div class="price-item standard-plan">
                            <div class="price-box clearfix">
                                <div class="price-icon mb-2rem">
                                    <i class="fa fa-laptop"></i>
                                </div>
                                <div class="price-package">
                                    <h3 class="mb-0">standard</h3>
                                </div>
                            </div>

                            <div class="price">
                                <h2 class="position-relative"><span class="dollar">$</span><span class="color-black">99</span><span class="month"> /month</span></h2>
                                <p class="price-sub-heading">A super package for starter</p>
                            </div>
                            <div class="price-features bg-blue">
                                <h4 class="mb-0 text-capitalize">standard features</h4>
                            </div>
                            <div class="price-description">
                                <p class="bg-blackDark2">Creative free Web with ads</p>
                                <p class="bg-blackDark">Connect Domain</p>
                                <p class="bg-blackDark2">Ideal For Small Scale Websites</p>
                                <p class="bg-blackDark">Business & Ecommerce</p>
                            </div>
                            <div class="text-center">
                                <a href="javascript:void(0)" class="btn-setting btn-blue btn-hvr-transparent-grey color-black">learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center pl-lg-0 wow fadeInRight">
                        <div class="price-item price-transform">
                            <div class="price-box clearfix">
                                <div class="price-package">
                                    <h3 class="mb-2rem">advance</h3>
                                </div>
                                <div class="price-icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                            </div>

                            <div class="price">
                                <h2 class="position-relative"><span class="dollar">$</span><span class="color-green">249</span><span class="month"> /month</span></h2>
                                <p class="price-sub-heading">A perfect package for starter</p>
                            </div>
                            <div class="price-features bg-green">
                                <h4 class="mb-0 text-capitalize">advance features</h4>
                            </div>
                            <div class="price-description">
                                <p class="bg-blackDark2">Creative free Web with ads</p>
                                <p class="bg-blackDark">Connect Domain</p>
                                <p class="bg-blackDark2">Ideal For Small Scale Websites</p>
                            </div>
                            <div class="text-center">
                                <a href="javascript:void(0)" class="btn-setting btn-green btn-hvr-transparent-grey color-black">learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section> -->
        <!-- Price ends -->

        <!-- Clients start -->
        <section id="clients" class="bg-blue">
            <h2 class="d-none">heading</h2>
            <div class="container">

                <div class="row align-items-center position-relative">
                    <div class="col-lg-7 col-md-8 col-12 mb-5 m-md-0">
                        <div class="main-title text-center text-md-left mb-4 wow fadeIn" data-wow-delay="300ms">
                            <h5 class="text-white"> What people are saying</h5>
                            <h2 class="text-white ml-0"> our happy <b>customers</b></h2>
                        </div>
                        <div class="testimonial-for testimonial-one wow fadeInLeft" data-wow-delay="400ms">
                            <div class="item testimonial-item">

                                <div class="testimonial-text">
                                    <div class="quote d-flex justify-content-start mb-4"><i
                                            class="fa fa-quote-left"></i>
                                    </div>
                                    <p class="color-white font-16 font-weight-normal mb-4">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse tincidunt egestas nunc, at pellentesque
                                        arcu
                                        sollicitudin et. Aliquam hendrerit diam quis ipsum ultricies, quis ultricies arcu
                                        suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <p class="color-white font-16 font-weight-normal mb-2">Fusce ut diam quis nulla
                                        faucibus
                                        venenatis. Aliquam mollis arcu et lorem ornare, eu ultrices ante vulputate. </p>
                                    <div class="quote d-flex justify-content-end mb-3"><i class="fa fa-quote-right"></i>
                                    </div>

                                    <div class="testimonial-post">
                                        <div class="text-content">
                                            <h4 class="color-white text-capitalize mb-1">David P Warrior</h4>
                                            <p class="color-white font-italic mb-2"> October 25, 2019</p>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item testimonial-item">

                                <div class="testimonial-text">
                                    <div class="quote d-flex justify-content-start mb-4"><i
                                            class="fa fa-quote-left"></i>
                                    </div>
                                    <p class="color-white font-16 font-weight-normal mb-4">Totam rem aperiam, eaque ipsa
                                        quae
                                        ab illo inventore veri tatis et quasi archi. Totam rem aperiam, eaque ipsa quae
                                        abillo.
                                        Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi.</p>
                                    <p class="color-white font-16 font-weight-normal mb-2">Deserunt dolore voluptatem
                                        assumenda quae possimus sunt dignissimos tempora officia. Lorem ipsum dolor sit amet
                                        consectetur adipisicing dolore.</p>

                                    <div class="quote d-flex justify-content-end mb-3"><i class="fa fa-quote-right"></i>
                                    </div>

                                    <div class="testimonial-post">
                                        <div class="text-content">
                                            <h4 class="color-white text-capitalize mb-1">Hoxena Williams</h4>
                                            <p class="color-white font-italic mb-2">September 11, 2019</p>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item testimonial-item">

                                <div class="testimonial-text">
                                    <div class="quote d-flex justify-content-start mb-4"><i
                                            class="fa fa-quote-left"></i>
                                    </div>
                                    <p class="color-white font-16 font-weight-normal mb-2">Demons trave runt lectores
                                        legere
                                        lius quod ii legunt saepius clary tyitas Investig ationes demon trave rungt.
                                        Investig
                                        ationes trave lector ompanies that responsibility in our core business. We work
                                        systematically to integrate corporate responsibility in our core business.</p>
                                    <div class="quote d-flex justify-content-end mb-3"><i class="fa fa-quote-right"></i>
                                    </div>

                                    <div class="testimonial-post">
                                        <div class="text-content">
                                            <h4 class="color-white text-capitalize mb-1">Phil Awazio</h4>
                                            <p class="color-white font-italic mb-2"> February 22, 2019</p>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item testimonial-item">

                                <div class="testimonial-text">
                                    <div class="quote d-flex justify-content-start mb-4"><i
                                            class="fa fa-quote-left"></i>
                                    </div>
                                    <p class="color-white font-16 font-weight-normal mb-4">Etiam nec odio vestibulum est
                                        mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio
                                        vestibul. Etiam nec odio vestibulum est mattis effic iturut. </p>
                                    <p class="color-white font-16 font-weight-normal mb-2">Deos et accusamus et iusto odio
                                        dignissimos qui blanditiis praesentium voluptatum dele corrupti quos dolores et quas
                                        molestias.</p>
                                    <div class="quote d-flex justify-content-end mb-3"><i class="fa fa-quote-right"></i>
                                    </div>

                                    <div class="testimonial-post">
                                        <div class="text-content">
                                            <h4 class="color-white text-capitalize mb-1">Paul Astin</h4>
                                            <p class="color-white font-italic mb-2"> November 06, 2018</p>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item testimonial-item">

                                <div class="testimonial-text">
                                    <div class="quote d-flex justify-content-start mb-4"><i
                                            class="fa fa-quote-left"></i>
                                    </div>
                                    <p class="color-white font-16 font-weight-normal mb-4">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Suspendisse tincidunt egestas nunc, at pellentesque
                                        arcu
                                        sollicitudin et. Aliquam hendrerit diam quis ipsum ultricies, quis ultricies arcu
                                        suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <p class="color-white font-16 font-weight-normal mb-2">Fusce ut diam quis nulla
                                        faucibus
                                        venenatis. Aliquam mollis arcu et lorem ornare, eu ultrices ante vulputate. </p>
                                    <div class="quote d-flex justify-content-end mb-3"><i class="fa fa-quote-right"></i>
                                    </div>

                                    <div class="testimonial-post">
                                        <div class="text-content">
                                            <h4 class="color-white text-capitalize mb-1">Trixly Wanders</h4>
                                            <p class="color-white font-italic mb-2"> September 26, 2018</p>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1 col-md-4 col-12">
                        <div class="testimonial-nav testimonial-one mb-0 wow fadeInRight" data-wow-delay="400ms">
                            <div class="item testimonial-item">
                                <div class="testimonial-person pt-5 d-flex justify-content-center mx-auto">

                                    <div class="testimonial-post">
                                        <div class="post mb-4 mx-auto"><img src="consulting/img/testimonial1.jpg"
                                                alt="image"></div>

                                        <div class="text-content text-center">
                                            <h4 class="color-white text-capitalize mb-1">David P Warrior</h4>
                                            <p class="color-white mb-2rem"> Owner, Company</p>
                                            <div class="testimonial-social-icons d-flex justify-content-around">
                                                <a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-pinterest-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-vimeo"></i></a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item testimonial-item">
                                <div class="testimonial-person pt-5 d-flex justify-content-center mx-auto">

                                    <div class="testimonial-post">
                                        <div class="post mb-4 mx-auto"><img src="consulting/img/testimonial2.jpg"
                                                alt="image"></div>

                                        <div class="text-content text-center">
                                            <h4 class="color-white text-capitalize mb-1">Hoxena Williams</h4>
                                            <p class="color-white mb-2rem"> Customer Relations, Tricon</p>
                                            <div class="testimonial-social-icons d-flex justify-content-around">
                                                <a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-pinterest-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-vimeo"></i></a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item testimonial-item">
                                <div class="testimonial-person pt-5 d-flex justify-content-center mx-auto">

                                    <div class="testimonial-post">
                                        <div class="post mb-4 mx-auto"><img src="consulting/img/testimonial3.jpg"
                                                alt="image"></div>

                                        <div class="text-content text-center">
                                            <h4 class="color-white text-capitalize mb-1">Phil Awazio</h4>
                                            <p class="color-white mb-2rem"> HR, P.Force</p>
                                            <div class="testimonial-social-icons d-flex justify-content-around">
                                                <a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item testimonial-item">
                                <div class="testimonial-person pt-5 d-flex justify-content-center mx-auto">

                                    <div class="testimonial-post">
                                        <div class="post mb-4 mx-auto"><img src="consulting/img/testimonial4.jpg"
                                                alt="image"></div>

                                        <div class="text-content text-center">
                                            <h4 class="color-white text-capitalize mb-1">Paul Astin</h4>
                                            <p class="color-white mb-2rem"> Actor, Entertainment</p>
                                            <div class="testimonial-social-icons d-flex justify-content-around">
                                                <a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-pinterest-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-vimeo"></i></a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item testimonial-item">
                                <div class="testimonial-person pt-5 d-flex justify-content-center mx-auto">

                                    <div class="testimonial-post">
                                        <div class="post mb-4 mx-auto"><img src="consulting/img/testimonial5.jpg"
                                                alt="image"></div>

                                        <div class="text-content text-center">
                                            <h4 class="color-white text-capitalize mb-1">Trixly Wanders</h4>
                                            <p class="color-white mb-2rem"> Athlete, Sports </p>
                                            <div class="testimonial-social-icons d-flex justify-content-around">
                                                <a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a>
                                                <a href="javascript:void(0)"><i class="fab fa-pinterest-square"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients ends -->

        <!-- Request start -->
        <section id="request" class="bg-blackDark half-section p-0">
            <h2 class="d-none">heading</h2>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="owl-carousel owl-theme owl-split">
                            <div class="item">
                                <div class="image split-blog-scale">
                                    <img alt="request" src="consulting/img/split-request.jpg" class="about-img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="image split-blog-scale">
                                    <img alt="request" src="consulting/img/split-request2.jpg" class="about-img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="image split-blog-scale">
                                    <img alt="request" src="consulting/img/split-request3.jpg" class="about-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    @livewire('contact-us')
                </div>
            </div>
        </section>
        <!--Request ends-->

        <!-- Request Boxes start -->
        {{-- <section class="bg-blackDark"> --}}

        {{-- <div class="container">
            <h2 class="text-center textColor-white">Sector</h2>
            <div class="row custom-thumbnail">
                <div class="col-md-4 small-12 medium-4 large-4 columns services-detail-brdr our-thumb">
                    <!-- serices box start -->
                    <div class="services-box">
                        <div class="services-detail">
                            <p class="service-head mt-4">Cloud Kitchens &amp; Delivery</p>
                            <img class="sector_class" alt=""
                                src="https://assets.limetray.com/assets/image_manager/uploads/3479/Quick%20Service.png">
                        </div>
                    </div>
                    <!-- serices box end -->
                </div>

                <div class="col-md-4 small-12 medium-4 large-4 columns services-detail-brdr our-thumb">
                    <!-- serices box start -->
                    <div class="services-box">
                        <div class="services-detail">
                            <p class="service-head mt-4">Quick, Casual &amp; Fine Dining</p>
                            <img class="sector_class" alt=""
                                src="https://assets.limetray.com/assets/image_manager/uploads/3479/Casual%20&amp;%20Fine%20Dining.png">
                        </div>
                    </div>
                    <!-- serices box end -->
                </div>

                <div class="col-md-4 small-12 medium-4 large-4 columns services-detail-brdr our-thumb">
                    <!-- serices box start -->
                    <div class="services-box">
                        <div class="services-detail">
                            <p class="service-head mt-4">FMCG &amp; Retail</p>
                            <img class="sector_class" alt=""
                                src="https://assets.limetray.com/assets/image_manager/uploads/3479/FMCG.png">
                        </div>
                    </div>
                    <!-- serices box end -->
                </div>
            </div>
            <!--Second row starts from here-->

            <div class="row custom-thumbnail">
                <div class="col-md-4 small-12 medium-4 large-4 columns services-detail-brdr our-thumb">
                    <!-- serices box start -->
                    <div class="services-box">
                        <div class="services-detail">
                            <p class="service-head mt-4">School &amp; Universities</p>
                            <img class="sector_class" alt=""
                                src="https://assets.limetray.com/assets/image_manager/uploads/3479/Schools.png">
                        </div>
                    </div>
                    <!-- serices box end -->
                </div>
                <!-- serices box start -->

                <div class="col-md-4 small-12 medium-4 large-4 columns services-detail-brdr our-thumb">
                    <div class="services-box">
                        <div class="services-detail">
                            <p class="service-head mt-4">Malls &amp; Foodcourts</p>
                            <img class="sector_class" alt=""
                                src="https://assets.limetray.com/assets/image_manager/uploads/3479/mall.png">
                        </div>
                    </div>
                </div>
                <!-- serices box end -->

                <div class="col-md-4 small-12 medium-4 large-4 columns services-detail-brdr our-thumb">
                    <!-- serices box start -->
                    <div class="services-box">
                        <div class="services-detail">
                            <p class="service-head mt-4">Hotels &amp; Resorts</p>
                            <img class="sector_class" alt=""
                                src="https://assets.limetray.com/assets/image_manager/uploads/3479/hotel.png">
                        </div>
                    </div>
                    <!-- serices box end -->
                </div>
            </div>
        </div> --}}

        {{--
        <!-- <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="process-box text-sm-left mb-4 mb-lg-0">
                            <span class="pro-step d-inline-block"><i class="fa fa-server"></i></span>
                            <h5 class="font-weight-normal color-black mt-25px mb-15px text-capitalize">setup meeting</h5>
                            <p class="font-weight-normal">Lorem dapibus, tortor eget turpis auctor, convallis odio ac.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="process-box text-sm-left mb-4 mb-lg-0">
                            <span class="pro-step d-inline-block"><i class="fa fa-layer-group"></i></span>
                            <h5 class="font-weight-normal color-black mt-25px mb-15px text-capitalize">consultancy</h5>
                            <p class="font-weight-normal">Etiam luctus, lacus maximus elementum dapibus felis.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="process-box text-sm-left mb-4 mb-sm-0">
                            <span class="pro-step d-inline-block"><i class="fa fa-file"></i></span>
                            <h5 class="font-weight-normal color-black mt-25px mb-15px text-capitalize">execution</h5>
                            <p class="font-weight-normal">Maecenas fringilla molestie elit, maximus dui eleifend quis.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="process-box text-sm-left mb-0">
                            <span class="pro-step d-inline-block"><i class="fa fa-award"></i></span>
                            <h5 class="font-weight-normal color-black mt-25px mb-15px text-capitalize">completion</h5>
                            <p class="font-weight-normal">Pellentesque habitant morbi tristique senectus et malesuada.</p>
                        </div>
                    </div>
                </div>
            </div> --> --}}
        {{-- </section> --}}
        <!-- Request Boxes end -->

        <!-- Blog start -->

        <!-- Blog ends -->

        <!-- Brands starts -->
        <section class="bg-green brand-transform-padding">
            <div class="section-padding">
                <h2 class="d-none">heading</h2>
                <div class="container">
                    <div class="brand-carousel owl-carousel owl-theme">
                        <div class="item">
                            <img src="consulting/img/client-one.png" alt="Logo">
                        </div>
                        <div class="item">
                            <img src="consulting/img/client-two.png" alt="Logo">
                        </div>
                        <div class="item">
                            <img src="consulting/img/client-three.png" alt="Logo">
                        </div>
                        <div class="item">
                            <img src="consulting/img/client-four.png" alt="Logo">
                        </div>
                        <div class="item">
                            <img src="consulting/img/client-five.png" alt="Logo">
                        </div>
                        <div class="item">
                            <img src="consulting/img/client-one.png" alt="Logo">
                        </div>
                        <div class="item">
                            <img src="consulting/img/client-two.png" alt="Logo">
                        </div>
                        <div class="item">
                            <img src="consulting/img/client-three.png" alt="Logo">
                        </div>
                        <div class="item">
                            <img src="consulting/img/client-four.png" alt="Logo">
                        </div>
                        <div class="item">
                            <img src="consulting/img/client-five.png" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brands ends -->

        <!-- Contact & Map starts -->
        <section id="contact" class="p-0 contact-transform position-absolute w-100">
            <div class="container contact-shadow">
                <div class="row mx-lg-0">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                        <div class="contact-box box-shadow-contact">
                            <div class="main-title text-center text-md-left mb-4">
                                <h2 class="font-weight-normal">Contact Us </h2>
                            </div>

                            <div class="text-center text-md-left">

                                <!--Address-->
                                <p class="mb-3">123 Street New York City , United States Of America. </p>

                                <!--Phone-->
                                <p class="mb-3"> Office Telephone : 001 01085379709 <br>
                                    Mobile : 001 63165370895 </p>

                                <!--Email-->
                                <p class="mb-3"> Email: <a href="mailto:email@website.com"
                                        class="color-black">admin@website.com</a> <br>
                                    Inquiries: <a href="mailto:email@website.com"
                                        class="color-black">email@website.com</a>
                                </p>

                                <!--Timing-->
                                <p class="mb-3">Mon-Sat: 9am to 6pm</p>

                                <!--Social Icon-->
                                <div class="address-social black">
                                    <ul class="list-unstyled">
                                        <li><a class="facebook-bg-hvr ml-0" href="javascript:void(0);"><i
                                                    class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a class="twitter-bg-hvr" href="javascript:void(0);"><i
                                                    class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a class="google-bg-hvr" href="javascript:void(0);"><i
                                                    class="fab fa-google" aria-hidden="true"></i></a></li>
                                        <li><a class="linkedin-bg-hvr" href="javascript:void(0);"><i
                                                    class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                        <li><a class="instagram-bg-hvr mr-0" href="javascript:void(0);"><i
                                                    class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0 col-map box-shadow-map">
                        <div id="google-map" class="bg-blackDark map"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact & Map ends -->
    @endsection
