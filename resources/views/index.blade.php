<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="pt-br"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="pt-br"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="pt-br">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>HOME - Arbório</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="{{ url ('Assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ url ('Assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ url ('Assets/css/main.css') }}">

    <!-- script
   ================================================== -->
    <script src="{{ url ('Assets/js/modernizr.js') }}"></script>
    <script src="{{ url ('Assets/js/pace.min.js') }}"></script>

    <!-- favicons
	================================================== -->
    <link rel="shortcut icon" href="{{ url('images/icons/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{ url('images/icons/favicon.ico')}}" type="image/x-icon">

</head>

<body id="top">

<!-- header
================================================== -->
<header id="header" class="row">

    <div class="header-logo">
        <img src="{{ url('Assets/images/UNESP-logo.png') }}" alt="" width="40">
    </div>

    <nav id="header-nav-wrap">
        <ul class="header-main-nav">
            <li class="current" style="color: lightgreen">Home</li>
            <li><a class="smoothscroll"  href="#download" title="download">Download</a></li>
        </ul>

        <a href="{{ url('authenticate') }}" title="sign-up" class="button button-primary cta">Sign Up</a>
    </nav>

    <a class="header-menu-toggle" href="#"><span>Menu</span></a>

</header> <!-- /header -->


<!-- home
================================================== -->
<section id="home" data-parallax="scroll" style="background-image: url({{ url('Assets/images/hero-bg2.jpg')}})" data-natural-width=3000 data-natural-height=2000>

    <div class="overlay"></div>
    <div class="home-content">

        <div class="row contents">
            <div class="home-content-left">

                <h3 data-aos="fade-up">Welcome to Arbóreo</h3>

                <h1 data-aos="fade-up">
                    Navegue pela nossa Unesp sem sair de casa!
                </h1>

                <div class="buttons" data-aos="fade-up">
                    <a href="#download" class="smoothscroll button stroke">
                        <span class="icon-circle-down" aria-hidden="true"></span>
                        Download App
                    </a>

                    <a href="{{ url('map') }}" data-lity class="button stroke">
                        <span class="icon-play" aria-hidden="true"></span>
                        Mapa Unesp
                    </a>

                    <div class="btn btn-info" style="color: white">
                        <img src="{{ url('Assets/images/icons/exclamation.png')}}" alt="" width="20">
                        Faça login para acessar nosso inventário!
                    </div>
                </div>

            </div>

            <div class="home-image-right">
                <img src="{{ url('Assets/images/iphone-app-470.png') }}"
                     srcset="{{ url('Assets/images/iphone-app-940-mapbox.png') }}"
                     data-aos="fade-up" alt="">
            </div>
        </div>

    </div> <!-- end home-content -->

    <ul class="home-social-list">
        <li>
            <a href="#"><i class="fa fa-facebook-square"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
        </li>
    </ul>
    <!-- end home-social-list -->

</section> <!-- end home -->

<!-- download
================================================== -->
<section id="download">

    <div class="row">
        <div class="col-full">
            <h1 class="intro-header"  data-aos="fade-up">Download Our App Today!</h1>

            <p class="lead" data-aos="fade-up">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p>

            <ul class="download-badges">
                <li><a href="#" title="" class="badge-appstore"  data-aos="fade-up">App Store</a></li>
                <li><a href="#" title="" class="badge-googleplay" data-aos="fade-up">Play Store</a></li>
            </ul>

        </div>
    </div>

</section> <!-- end download -->


<!-- footer
================================================== -->
<footer>

    <div class="footer-main">
        <div class="row">

            <div class="col-three md-1-3 tab-full footer-info">

                <div class="footer-logo"></div>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </p>

                <ul class="footer-social-list">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>


            </div> <!-- end footer-info -->

            <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">

                <h4>Contact</h4>

                <p>
                    1600 Amphitheatre Parkway<br>
                    Mountain View, CA <br>
                    94043 US<br>
                </p>

                <p>
                    someone@dazzlesite.com <br>
                    Phone: (+63) 555 1212 <br>
                    Fax: (+63) 555 0100
                </p>

            </div> <!-- end footer-contact -->

            <div class="col-four md-1-2 tab-full footer-subscribe">

                <h4>Our Newsletter</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <div class="subscribe-form">

                    <form id="mc-form" class="group" novalidate="novalidate">

                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">

                        <input type="submit" name="subscribe" value="Send">

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>

                </div>

            </div> <!-- end footer-subscribe -->

        </div> <!-- /row -->
    </div> <!-- end footer-main -->


    <div class="footer-bottom">

        <div class="row">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Dazzle 2017.</span>
                    <span>Design by <a href="{{ url('https://www.styleshout.com/') }}">styleshout</a></span>
                </div>

                <div id="go-top">
                    <a class="smooth scroll" title="Back to Top" href="#top"><i class="icon-arrow-up"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </div>

</footer>

<div id="preloader">
    <div id="loader"></div>
</div>

<!-- Java Script
================================================== -->
<script src="{{ url('Assets/js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ url('Assets/js/plugins.js') }}"></script>
<script src="{{ url('Assets/js/main.js') }}"></script>

</body>

</html>
