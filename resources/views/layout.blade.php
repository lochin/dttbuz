<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Denov tumani tibbiyot birlashmasi veb sayti">
    <meta name="keywords" content="Tibbiyot, birlashma, surxondaryo, denov, poliklinika" />
    <meta name="author" content="Lochinbek Boboyev">
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico">
    <title>@yield('title', 'Denov tumani tibbiyot birlashmasi')</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- preloader css -->
    <link rel="stylesheet" href="css/introLoader.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <!-- owl carousel styles -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" />
    <!-- date picker css -->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- main style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300,500' rel='stylesheet' type='text/css'>
    <!-- modernizr -->
    <script src="js/modernizr.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Document Wrapper
============================================= -->
<main id="wrapper">

    <!-- // Preloader markup -->
    <div id="element" class="introLoading"></div>

    <!-- Header
    ============================================= -->
    <header id="header" class="navbar-fixed-top">
        <div id="header-wrap">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Logo ============================================= -->
                            <div id="logo">
                                <a href="{{ route('home') }}" class="medihere-logo"><img src="images/logo.jpg" alt="medihere Logo" title="medihere"></a>
                            </div>
                            <!-- #logo end -->
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!-- unordered list starts here -->
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="{{ Request::is('/')? 'active':'' }}" href="{{ route('home') }}">home</a></li>
                                <li><a class="{{ Request::is('about')? 'active':'' }}" href="{{ route('about') }}">about us</a></li>
                                <li><a class="{{ Request::is('services')? 'active':'' }}" href="{{ route('services') }}">Our services</a></li>
                                <li><a class="{{ Request::is('blog')? 'active':'' }}" href="{{ route('blog') }}">our Blog</a></li>
                                <li><a class="{{ Request::is('contact')? 'active':'' }}" href="{{ route('contact') }}">contact us</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </header>
    <!-- #header end -->

@yield('content')

<!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="newsletter-contents">
                    <div class="col-md-6 clearfix">
                        <form action="?">
                            <input class="col-md-9 col-sm-9 col-xs-9" type="email" placeholder="Put Your Email">
                            <input class="col-md-3 col-sm-3 col-xs-3" type="submit" value="Submit">
                        </form>
                    </div>
                    <div class="col-md-6 clearfix">
                        <h3>Subscribe our Newsletter, Stay Updated!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter ends -->
    <!-- footer starts -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-widget1">
                        <h3>Popular Posts</h3>
                        <ul class="popular-posts">
                            <li>
                                <a href="blog-single.html">
                                    <img src="images/news4.jpg" alt="#">
                                </a>
                                <h4><a href="blog-single.html">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</a></h4>
                                <span><i class="fa fa-calendar"></i> 5 January 2016</span>
                            </li>
                            <li>
                                <a href="blog-single.html">
                                    <img src="images/news5.jpg" alt="#">
                                </a>
                                <h4><a href="blog-single.html">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</a></h4>
                                <span><i class="fa fa-calendar"></i> 5 January 2016</span>
                            </li>
                            <li>
                                <a href="blog-single.html">
                                    <img src="images/news3.jpg" alt="#">
                                </a>
                                <h4><a href="blog-single.html">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</a></h4>
                                <span><i class="fa fa-calendar"></i> 5 January 2016</span>
                            </li>
                            <li>
                                <a href="blog-single.html">
                                    <img src="images/news6.jpg" alt="#">
                                </a>
                                <h4><a href="blog-single.html">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit.</a></h4>
                                <span><i class="fa fa-calendar"></i> 5 January 2016</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 footer-widget2">
                        <h3>Contact Information</h3>
                        <span>153 panam Street, New York gulistan 420 </span>
                        <br>
                        <span>United States</span>
                        <br>
                        <span>mail@medihere.com</span>
                        <br>
                        <span>+52890588934</span>

                        <div class="footer-socials">
                            <h4>Get in touch</h4>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="col-md-4 footer-widget3">
                        <h3>Latest Tweets</h3>
                        <div class="single-tweet">
                            <div class="col-xs-1 no-padding">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <div class="tweet-content col-xs-11">
                                <p><a href="#">@Jorbadan</a> Please see our support forum <a href="#">koitamna.co.bd</a></p>
                                <span>3 days ago</span>
                            </div>
                        </div>
                        <div class="single-tweet">
                            <div class="col-xs-1 no-padding">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <div class="tweet-content col-xs-11">
                                <p><a href="#">@Jorbadan</a> Please see our support forum <a href="#">koitamna.co.bd</a></p>
                                <span>3 days ago</span>
                            </div>
                        </div>
                        <div class="single-tweet">
                            <div class="col-xs-1 no-padding">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <div class="tweet-content col-xs-11">
                                <p><a href="#">@Jorbadan</a> Please see our support forum <a href="#">koitamna.co.bd</a></p>
                                <span>3 days ago</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="back-top">
            <a class="back-top" href="#slider"><i class="fa fa-angle-up"></i></a>
        </div>
        <div class="footer-bottom text-center">
            <p>Copyright &copy; 2016 Medihere. All rights Reserved</p>
        </div>
    </footer>
</main>
<!-- main page ends -->


<!-- Jquery and javascript files -->
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<!-- date picker js -->
<script type="text/javascript" src="js/datepicker.js"></script>
<!-- bootstrap 3.3.6 js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- owl carousel js-->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<!-- smooth scroll js -->
<script type="text/javascript" src="js/smoothscroll.js"></script>
<!-- preloader js -->
<script type="text/javascript" src="js/jquery.introLoader.pack.min.js"></script>
<!-- custom scripts -->
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
