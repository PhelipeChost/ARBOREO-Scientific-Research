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

<section id="about">

        <div class="row about-intro">

            <div class="col-four">
                <h1 class="intro-header" data-aos="fade-up">Apresentação</h1>
            </div>
            <div class="col-eight">
                <p class="lead" data-aos="fade-up">
                    Esse é um projeto que nasceu para expor um antigo trabalho da Unesp de Ilha Solteira, Campus II. Aprecie enquanto é tempo e nos ajude deixar a região institucional dos Herbários mais arborizada!
                </p>
            </div>

        </div>

        <div class="row about-features" style="margin-bottom: 150px">

            <div class="features-list block-1-3 block-m-1-2 block-mob-full group">

                <div class="bgrid feature" data-aos="fade-up">

                    <span class="icon"><i class="icon-window"></i></span>

                    <div class="service-content">

                        <h3>Plataforma Responsiva</h3>

                        <p>Nosso inventário arbóreo é uma plataforma digital acessível e responsiva, 
                            permitindo que os usuários visualizem o mapa e todas as informações de árvores 
                            de forma otimizada em qualquer dispositivo, seja celular, tablet ou computador.</p>

                    </div>

                    </div> <!-- /bgrid -->

                    <div class="bgrid feature" data-aos="fade-up">

                        <span class="icon"><i class="icon-image"></i></span>

                    <div class="service-content">
                        <h3>Dados Precisos</h3>

                        <p>As informações sobre a vegetação da Unesp exibidas no mapa são coletadas
                             e verificadas, garantindo um alto nível de precisão. Todos os dados inseridos 
                             e exibidos passam por um processo de atualização e validação, assegurando 
                             que o usuário possa confiar plenamente nas informações disponíveis. Isso 
                             garante que as visualizações no mapa representem fielmente a realidade da vegetação.
                        </p>


                    </div>

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    <span class="icon"><i class="icon-paint-brush"></i></span>

                    <div class="service-content">
                        <h3>Design Elegante</h3>

                        <p>A plataforma oferece um design elegante, que combina simplicidade e sofisticação. A interface 
                            é intuitiva e limpa, proporcionando uma navegação fluida e agradável. O uso de tons verdes, 
                            reflete a conexão com a vegetação, criando uma experiência visual harmoniosa que une 
                            funcionalidade e estilo. Esse visual moderno não apenas facilita o uso, mas também reforça 
                            o elo com a natureza que a plataforma representa.
                        </p>

                    </div>

            </div> <!-- end features-list -->

        </div> <!-- end about-features -->

    </section> <!-- end about -->

<!-- Testimonials Section
================================================== -->
<section id="testimonials">

<div class="row">
    <div class="col-twelve">
        <h1 class="intro-header" data-aos="fade-up">What They Say About Our App.</h1>
    </div>
</div>

<div class="row owl-wrap">

    <div id="testimonial-slider"  data-aos="fade-up">

        <div class="slides owl-carousel">

            <div>
                <p>
                Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                to do what you believe is great work. And the only way to do great work is to love what you do.
                If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
                </p>

                <div class="testimonial-author">
                        <img src="{{ url('Assets/images/avatars/user-02.jpg')}} " alt="Author image">
                        <div class="author-info">
                            Steve Jobs
                            <span class="position">CEO, Apple.</span>
                        </div>
                </div>
            </div>

            <div>
                <p>
                This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                </p>

                <div class="testimonial-author">
                        <img src="{{ url('Assets/images/avatars/user-03.jpg')}} " alt="Author image">
                        <div class="author-info">
                            John Doe
                            <span>CEO, ABC Corp.</span>
                        </div>
                </div>
            </div>

        </div> <!-- end slides -->

    </div> <!-- end testimonial-slider -->

</div> <!-- end flex-container -->

</section> <!-- end testimonials -->

<!-- download
================================================== -->
<section id="download">

    <div class="row">
        <div class="col-full">
            <h1 class="intro-header"  data-aos="fade-up">Download do Nosso App!</h1>

            <p class="lead" data-aos="fade-up">
                Tenha a experiência da nossa plataforma web no seu dia a dia! Sem internet, poderá navegar pela nossa Unesp
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

            <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">

                <h4>Endereço</h4>

                <p>
                    Rua Monção, 226 - Zona Norte<br>
                    Ilha Solteira - SP<br>
                    CEP 15385-00<br>
                </p>

                <p>
                    Email: andreia.rezende@unesp.br<br>
                    Telefone: (18) 3743-1269<br>
                </p>

            </div> <!-- end footer-contact -->

            <div class="col-four md-1-2 tab-full footer-subscribe">

                <h4>Contato</h4>

                <p style="color: #DAA520">É preciso estar logado para enviar um email!</p>
            </div> <!-- end footer-subscribe -->

        </div> <!-- /row -->
    </div> <!-- end footer-main -->


    <div class="footer-bottom">

        <div class="row">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright ThunderWeb 2020.</span>
                    <span>development by <a href="{{ url('https://www.linkedin.com/in/felipe-costa-20a12b262/') }}">Felipe Costa</a></span>
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
