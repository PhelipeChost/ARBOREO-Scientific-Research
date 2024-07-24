<!DOCTYPE HTML>
<html>
	<head>
		<title>Inventário Arbóreo</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ url('Assets/Inventory/Template/css/main.css') }}"/>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">

				<div class="inner">
					<a href="{{ url('/map')}}" class="image avatar"><img src="{{ url('Assets/Inventory/Template/images/avatar.jpg') }}" alt="" /></a>
					<h1>Já Navegou pela nossa Unesp?<br/> 
                        Experimente visualizar a</br>
                        arborização das plantas mais<br/>
					    perto! </br>Clique no Mapa.</h1>

				</div>
			</header>

		<!-- Main -->
			<div id="main">
                <h1>INVENTARIO ARBÓREO</h1>
				<!-- One -->
					<section id="one">
						<header class="major">
							<h2>COORDENADAS E MARCAÇÕES DO MAPA</h2>
                            <p>Esta sessão permite realizar as marcações do Mapa direto pela nossa página</p>
                            <a style="border: 1px solid; padding: 15px;" href="{{ url('/create')}}">Realizar Marcação</a>
						</header>
						
					</section>

				<!-- Two -->
                    <section id="two">
						<h2>CADASTROS</h2>
						<div class="row">
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/thumbs/autores.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/autores.jpg') }}" alt="" /></a>
								<a href="{{ url('/home/inventory/authors') }}">Autores</a>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/fulls/generos.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/generos.jpg') }}" alt="" /></a>
								<h3><a href="{{ url('/home/inventory/genres') }}">Gêneros</a></h3>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/fulls/espécies.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/espécies.jpg') }}" alt="" /></a>
								<h3><a href="{{ url('/home/inventory/species') }}">Espécies</a></h3>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/fulls/epítetos.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/epítetos.jpg') }}" alt="" /></a>
								<h3><a href="{{ url('/home/inventory/epithet') }}">Epíteto</a></h3>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/fulls/familias.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/familias.jpg') }}" alt="" /></a>
								<h3><a href="{{ url('/home/inventory/families') }}">Famílias</a></h3>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/fulls/exoticanativa.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/exoticanativa.jpg') }}" alt="" /></a>
								<h3><a href="{{ url('/home/inventory/exoticnative') }}">Exótica/Nativa</a></h3>
							</article>
						</div>
					</section>
					<section id="two">
						<h2>LISTAS</h2>
						<div class="row">
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/thumbs/autores.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/autores.jpg') }}" alt="" /></a>
								<a href="{{ url('/home/inventory/authors') }}">Autores</a>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/fulls/generos.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/generos.jpg') }}" alt="" /></a>
								<h3><a href="{{ url('/home/inventory/genres') }}">Gêneros</a></h3>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/fulls/espécies.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/espécies.jpg') }}" alt="" /></a>
								<h3><a href="{{ url('/home/inventory/species') }}">Espécies</a></h3>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/fulls/epítetos.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/epítetos.jpg') }}" alt="" /></a>
								<h3><a href="{{ url('/home/inventory/epithet') }}">Epíteto</a></h3>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/fulls/familias.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/familias.jpg') }}" alt="" /></a>
								<h3><a href="{{ url('/home/inventory/families') }}">Famílias</a></h3>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="{{ url('Assets/Inventory/Template/images/fulls/exoticanativa.jpg') }}" class="image fit thumb"><img src="{{ url('Assets/Inventory/Template/images/thumbs/exoticanativa.jpg') }}" alt="" /></a>
								<h3><a href="{{ url('/home/inventory/exoticnative') }}">Exótica/Nativa</a></h3>
							</article>
						</div>
					</section>
                    
				<!-- Three -->
					<section id="three">
						<h2>Mantenha Contato Conosco</h2>
						<div class="row">
							<div class="col-8 col-12-small">
								<form method="post" action="#">
									<div class="row gtr-uniform gtr-50">
										<div class="col-12"><textarea name="message" id="message" placeholder="Mensagem" rows="4"></textarea></div>
									</div>
								</form>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</div>
							<div class="col-4 col-12-small">
								<ul class="labeled-icons">
									<li>
										<h3 class="icon solid fa-home"><span class="label">Endereço</span></h3>
										Rua Monção, 226 - Zona Norte<br/>
										Ilha Solteira - SP<br/>
										CEP 15385-00<br/>
                                        Email: andreia.rezende@unesp.br<br/>

									</li>
									<li>
										<h3 class="icon solid fa-mobile-alt"><span class="label">Telefone</span></h3>
										Telefone: (18) 3743-1269
									</li>
									<li>
										<h3 class="icon solid fa-envelope"><span class="label">Email</span></h3>
										<a href="#">andreia.rezende@unesp.br</a>
									</li>
								</ul>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="https://github.com/PhelipeChost/ARBOREO-Scientific-Research" target="blank" class="icon brands fa-github"><span class="label">Github</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Copyright ThunderWeb 2020.</li><li> development by Felipe Costa</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="{{ url('Assets/Inventory/Template/js/jquery.min.js') }}"></script>
			<script src="{{ url('Assets/Inventory/Template/js/jquery.poptrox.min.js') }}"></script>
			<script src="{{ url('Assets/Inventory/Template/js/browser.min.js') }}"></script>
			<script src="{{ url('Assets/Inventory/Template/js/breakpoints.min.js') }}"></script>
			<script src="{{ url('Assets/Inventory/Template/js/util.js') }}"></script>
			<script src="{{ url('Assets/Inventory/Template/js/main.js') }}"></script>

	</body>
</html>