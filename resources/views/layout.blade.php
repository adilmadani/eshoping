<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('img/fav-icon.png')}}" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fancy</title>

    <!-- Icon css link -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/elegant-icon/style.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/themify-icon/themify-icons.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{asset('vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/animate-css/animate.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--================Search Area =================-->
<section class="search_area">
    <div class="search_inner">
        <input type="text" placeholder="Enter Your Search...">
        <i class="ti-close"></i>
    </div>
</section>
<!--================End Search Area =================-->

<!--================Header Menu Area =================-->
<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
                <li class="nav-item"><a  href="static.html">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact</a></li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li><a href="#"><i class="icon_search"></i></a></li>
                <li><a href="#"><i class="icon_bag_alt"></i></a></li>
            </ul>
        </div>
    </nav>
</header>
<!--================End Header Menu Area =================-->

<!--================Slider Area =================-->
<section class="main_slider_area">
    <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
        <ul>
            <li data-index="rs-2946" data-transition="slidevertical" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->

                <video id="myVideo" muted="" landing-version-check="" style="object-fit: fill" class="rev-slidebg" autoplay="autoplay" loop=""  src="{{asset('media/header.mp4')}}">
                </video>
                <script>
                    var vid = document.getElementById("myVideo");

                    function getPlaySpeed() {
                        alert(vid.playbackRate);
                    }

                    function setPlaySpeed() {
                        vid.playbackRate = 0.6;
                    }
                </script>

            </li>
           </ul>
    </div>
</section>
<!--================End Slider Area =================-->


@yield('content')




<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widgets_area">
        <div class="container">
            <div class="f_widgets_inner row">
                <div class="col-lg-3 col-md-6">
                    <aside class="f_widget subscribe_widget">
                        <div class="f_w_title">
                            <h3>Our Newsletter</h3>
                        </div>
                        <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                            <span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6">
                    <aside class="f_widget twitter_widget">
                        <div class="f_w_title">
                            <h3>Twitter Feed</h3>
                        </div>
                        <div class="tweets_feed"></div>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6">
                    <aside class="f_widget categories_widget">
                        <div class="f_w_title">
                            <h3>Link Categories</h3>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Agency</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Studio</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Blogs</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Shop</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Services</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Work</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6">
                    <aside class="f_widget contact_widget">
                        <div class="f_w_title">
                            <h3>Contact Us</h3>
                        </div>
                        <a href="#">1 (800) 686-6688</a>
                        <a href="#">info.deercreative@gmail.com</a>
                        <p>40 Baria Sreet 133/2 <br />NewYork City, US</p>
                        <h6>Open hours: 8.00-18.00 Mon-Fri</h6>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="copy_right_area">
        <div class="container">
            <div class="float-md-left">
                <h5>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></h5>
            </div>
            <div class="float-md-right">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Disclaimer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Advertisement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Rev slider js -->
<script src="{{asset('vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<!-- Extra plugin css -->
<script src="{{asset('vendors/counterup/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendors/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('vendors/counterup/apear.js')}}"></script>
<script src="{{asset('vendors/counterup/countto.js')}}"></script>
<script src="{{asset('vendors/owl-carousel/owl.theme.default.min.css')}}"></script>
<script src="{{asset('vendors/parallaxer/jquery.parallax-1.1.3.js')}}"></script>
<!--Tweets-->
<script src="{{asset('vendors/tweet/tweetie.min.js')}}"></script>
<script src="{{asset('vendors/tweet/script.js')}}"></script>

<script src="{{asset('js/theme.js')}}"></script>
</body>
</html>