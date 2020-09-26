<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Blog site</title>

    <!--========================== Bootstrap css ==========================-->
    <link href="{{asset('asset/public/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--========================== font-awesome css ==========================-->
    <link href="{{asset('asset/public/css/font-awesome.min.css')}}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/png" href="img/fev-icon.ico">
    <!--========================== responsive css ==========================-->
    <link href="{{asset('asset/public/style.css')}}" rel="stylesheet">
    <link href="{{asset('asset/public/css/responsive.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="index-one">
<div id="preloader"></div>
<section class="top-area">
    <div class="container">
        <div class="row">
            <div class="top-area-content">
                <div class="col-md-6 col-sm-6 col-xs-5">
                    <div class="logo text-left">
                        <a href="index-1.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-7">
                    <div class="social-icon text-right">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-rss"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========================== menu-area-start ==========================-->
<section class="menu-area">
    <div class="container">
        <div class="row">
            <div class="menu-area-content clearfix">
                <div class="col-md-7 col-sm-9 col-xs-12">
                    <div class="main-menu text-left">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="about-me.html">About me</a></li>
                                <li><a href="category.html">Categories</a></li>
                                <li><a href="single-posts.html">Video posts</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-3 col-xs-12">
                    <div class="search-btn text-right">
                        <form>
                            <input type="search" placeholder="Type to search here"/>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========================== slider-area-start ==========================-->
<section class="slider-area">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="slider-content">
                    <div class="col-md-5 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12">
                        <div class="slide-text-border-content">
                            <div class="slide-text">
                                <h2>Welcome To My Blog!</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi
                                    dunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua</p>
                                <a href="category.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-content-2">
                    <div class="col-md-5 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12">
                        <div class="slide-text-border-content">
                            <div class="slide-text">
                                <h2>Welcome To My Blog!</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi
                                    dunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur adipiscing
                                    elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua</p>
                                <a href="single-posts.html">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left slide-control arrow" href="#carousel-example-generic" role="button" data-slide="prev"><i
                class="fa fa-angle-right"></i>
        </a>
        <a class="right slide-control arrow" href="#carousel-example-generic" role="button" data-slide="next"><i
                class="fa fa-angle-left"></i>
        </a>
    </div>
</section>
<!--========================== categories-area-start ==========================-->
<section class="categories-area" id="app">
    <div class="container">
        <div class="row">
            <public-main></public-main>
        </div>
    </div>
</section>

<!--========================== footer-top-area-start ==========================-->
<section class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="footer-logo">
                    <a href="index-1.html"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="footer-content">
                    <p>get in touch</p>
                    <div class="footer-social-icon">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-rss"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-0">
                <div class="subscription-input">
                    <h4 class="footer-title">subscription</h4>
                    <form action="#">
                        <input type="email" placeholder="Email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-0">
                <div class="recent-post-content">
                    <h4 class="footer-title">recent post</h4>
                    <div class="recent-post-single">
                        <div class="recent-post-img">
                            <a href=""><img src="img/recent-1.jpg" alt=""></a>
                        </div>
                        <div class="recent-post-text">
                            <span>01 jan, 2016</span>
                            <a href=""><p>celebration of new year</p></a>
                        </div>
                    </div>
                    <div class="recent-post-single">
                        <div class="recent-post-img">
                            <a href=""><img src="img/recent-2.jpg" alt=""></a>
                        </div>
                        <div class="recent-post-text">
                            <span>01 jan, 2016</span>
                            <a href=""><p>color in nature</p></a>
                        </div>
                    </div>
                    <div class="recent-post-single">
                        <div class="recent-post-img">
                            <a href=""><img src="img/recent-3.jpg" alt=""></a>
                        </div>
                        <div class="recent-post-text">
                            <span>01 jan, 2016</span>
                            <a href=""><p>yummy burgers</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="footer-category">
                    <h4 class="footer-title">category</h4>
                    <ul>
                        <li><a href="">Art/lifestyle</a></li>
                        <li><a href="">Music</a></li>
                        <li><a href="">Travel/journey</a></li>
                        <li><a href="">Food</a></li>
                        <li><a href="">Photography</a></li>
                        <li><a href="">video</a></li>
                        <li><a href="">Movie</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========================== footer-top-area-start ==========================-->
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-bottom-text text-center">
                    <p>Blog Design 2016 &copy;All Rights reserved</p>
                    <p>Designed by <span><a href="#">BootstrapCafe</a></span></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--========================== Main jQuery ==========================-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--========================== Bootstrap js ==========================-->
<script src="{{asset('asset/public/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/public/js/jquery.sticky.js')}}"></script>
<script src="{{asset('asset/public/js/instafeed.min.js')}}"></script>
<script src="{{asset('asset/public/js/active.js')}}"></script>

<script>
    jQuery(document).ready(function ($) {
        // site preloader -- also uncomment the div in the header and the css style for #preloader
        $(window).load(function () {
            $('#preloader').fadeOut('slow', function () {
                $(this).remove();
            });
        });
    });
</script>
</body>
</html>












