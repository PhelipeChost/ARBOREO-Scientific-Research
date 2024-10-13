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
				<li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                <li><a href="{{ url('home/inventory') }}" title="Features">Inventário</a></li>
                <li><a class="smoothscroll"  href="#download" title="download">Download</a></li>
			</ul>
            <div class="button button-primary cta">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" style="text-decoration: none; color: white;">
                    Logout
                </a>
                <form id="frm-logout" action="{{ __('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
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
            </div>
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
        </div> <!-- end home-content -->



        <div class="home-scrolldown">
            <a href="#about" class="scroll-icon smoothscroll">
                <span>Scroll Down</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section> <!-- end home -->


    <!-- about
    ================================================== -->
    

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

<div class="row about-features">

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

    <div class="row about-how" style="margin-top: 50px;">
    <center><h3 class="intro-header" data-aos="fade-up" style="opacity: 30%">How The App Works?</h3></center>
    <h1 class="intro-header" data-aos="fade-up">Como usar o aplicativo?</h1>

    <div class="about-how-content" data-aos="fade-up">
        <div class="about-how-steps block-1-2 block-tab-full group">

            <div class="bgrid step" data-item="1">
                <h3>Sign-Up</h3>
                <p> Ao realizar Login, você tem acesso ao Inventário para realizar os devidos 
                    cadastros de plantas ou manipular as informações já existentes.
                </p>

                <a class="button button-primary large" href="{{ url('/home/inventory')}}">Inventário Arbóreo</a>
            </div>

            <div class="bgrid step" data-item="2">
                <h3>Cadastros</h3>
                <p>Basta acessar o Inventário, e na sessão de cadastros é possível registrar 
                    opções taxonômicas específicas ou realizar um cadastro geral da Planta.
                </p>
            </div>

            <div class="bgrid step" data-item="3">
                <h3>Listas</h3>
                <p>Subsequente à um cadastro qualquer, é possível verificar na sessão de 
                    Listagem no Inventário. Assim, poderá saber em que posição cada um se 
                    encontra e quais as atualizações futuras provavelmente deverá fazer
                </p>
            </div>

            <div class="bgrid step" data-item="4">
                <h3>Upload de Imagem</h3>
                <p>Assim que o cadastro de uma planta for sucedido, entregando as coordenadas reais
                    corretas, o próximo passo é cadastrar a sua imagem. O registro pede que o usuário
                    forneça o código cadastrado da planta, que pode ser visto nas listas de plantas 
                    pelo próprio inventário. Se correta as informações, elas aparecerão no mapa.
                </p>
            </div>

        </div>
   </div> <!-- end about-how-content -->

</div> <!-- end about-how -->

</section> <!-- end about -->


<!-- pricing
================================================== -->
<section id="pricing">
<div class="row pricing-content">

    <div class="col-four pricing-intro">
        <h1 class="intro-header" data-aos="fade-up">Our Pricing Options</h1>

        <p data-aos="fade-up">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
        </p>
    </div>

    <div class="col-eight pricing-table">
        <div class="row">

            <div class="col-six plan-wrap">
                <div class="plan-block" data-aos="fade-up">

                    <div class="plan-top-part">
                        <h3 class="plan-block-title">Lite Plan</h3>
                        <p class="plan-block-price"><sup>$</sup>25</p>
                        <p class="plan-block-per">Per Month</p>
                    </div>

                    <div class="plan-bottom-part">
                        <ul class="plan-block-features">
                            <li><span>3GB</span> Storage</li>
                            <li><span>10GB</span> Bandwidth</li>
                            <li><span>5</span> Databases</li>
                            <li><span>30</span> Email Accounts</li>
                        </ul>

                        <a class="button button-primary large" href="">Get Started</a>
                    </div>

                </div>
            </div> <!-- end plan-wrap -->

            <div class="col-six plan-wrap">
                <div class="plan-block primary" data-aos="fade-up">

                    <div class="plan-top-part">
                        <h3 class="plan-block-title">Pro Plan</h3>
                        <p class="plan-block-price"><sup>$</sup>50</p>
                        <p class="plan-block-per">Per Month</p>
                    </div>

                    <div class="plan-bottom-part">
                        <ul class="plan-block-features">
                            <li><span>5GB</span> Storage</li>
                            <li><span>20GB</span> Bandwidth</li>
                            <li><span>15</span> Databases</li>
                            <li><span>70</span> Email Accounts</li>
                        </ul>

                        <a class="button button-primary large" href="">Get Started</a>
                    </div>

                </div>
            </div> <!-- end plan-wrap -->

        </div>
    </div> <!-- end pricing-table -->

</div> <!-- end pricing-content -->
</section> <!-- end pricing -->

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
    
                    <p>Adicione aqui a sua mensagem!</p>
    
                    <div class="subscribe-form">
    
                        <form method="post" action="{{ url('/enviar-email') }}" class="group">
                            @csrf
                            <style>
                                .inputemail {
                                    width: 100%;
                                }
                            </style>
                            <input class="inputemail" type="text" name="email" id="mc-email" placeholder="Email" required>
                            <textarea class="inputemail" type="text" name="message" id="mc-email" placeholder="Mensagem" required></textarea>
                            <input type="submit" value="Enviar">
                        </form>
    
                    </div>
    
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
