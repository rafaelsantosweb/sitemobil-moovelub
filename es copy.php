<!DOCTYPE html>
<html lang='pt-br'>
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1.0,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="icon" type="image/png" href="assets/images/logos/favicon.png">
		<meta name="robots" content="index, follow">
		<meta name="reply-to" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- OPENGRAPH  -->
		<meta property="og:url" content="">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Moove">
		<meta property="og:description" content=""/>
		<meta property="og:image" content="">
		<meta property="article:author" content="">
		<meta property="article:section" content="">
		<meta property="article:tag" content=",,">
		<meta property="article:published_time" content="">

		<?php require("m-head.php"); ?>

		<style>
		<?php echo file_get_contents('assets/theme/css/moove.css'); ?>
		</style>

		<!-- <link rel="stylesheet" type="text/css" href="./plugin/main/css/style.css"> -->
		<link rel="stylesheet" type="text/css" href="./plugin/main/mapplic/mapplic.css">

		<title>Moove</title>

                <!-- Facebook Pixel Code -->
                <script>
                    !function(f,b,e,v,n,t,s){
                        if(f.fbq)return;
                        n=f.fbq=function(){n.callMethod?
                        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                        if(!f._fbq)f._fbq=n;
                        n.push=n;
                        n.loaded=!0;
                        n.version='2.0';
                        n.queue=[];
                        t=b.createElement(e);
                        t.async=!0;
                        t.src=v;
                        s=b.getElementsByTagName(e)[0];
                        s.parentNode.insertBefore(t,s)
                    }(window,document,'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                    fbq('init', '1014453676567710');
                    fbq('track', 'PageView');
                </script>
                <noscript>
                    <img height="1" width="1"
                    src="https://www.facebook.com/tr?id=1014453676567710&ev=PageView&noscript=1"/>
                </noscript>
                <!-- End Facebook Pixel Code -->
	</head>

	<body>

		<div id='preloader'><div class='inner'></div></div>

		<header>
			<?php require("m-header.php"); ?>
		</header>

		<!-- MENU / BANNER 1 -->
		<section id="c_menu_banner_1">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
			
						<a href="#"><img class="c_menu_logo_mobile" src="assets/images/logos/logo-moove.png"></img></a>
						<nav class="navbar navbar-expand-md navbar-dark static-top justify-content-between">
							<a class="nav-link nav-link-logo" href="#">
								<img class="c_menu_logo" src="assets/images/logos/logo-moove.png" width="200"></img>
							</a>

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#c_navbar">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="c_navbar">
								<ul class="navbar-nav mx-auto justify-content-center w-100">

									<li class="nav-item">
										<a class="nav-link" href="#c_menu_banner_1">Inicio</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#c_quem_somos" data-offset="-80">Qué hacemos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#c_mapa">Dónde estamos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/sustentabilidade/es/">Sustentabilidad</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#c_moove">Trabaja con nosotros</a>
									</li>
								</ul>
							</div>

							<span class="float-right c_language">
								<a href="#" title="PT">PT</a>
								<a href="en.php" title="EN">EN</a>
								<a href="es.php" title="ES">ES</a>
								<a href="fr.php" title="FR">FR</a>
							</span>

						</nav>

					</div>

				</div>
			</div>

			<div class="container c_container_text">
				<div id="c_menu_banner_1_text">
					<h2>Referentes globlales en el mercado de lubricantes</h2>
					<h3>Trabajamos con foco en 3 prioridades: equipos de alto desempeño, cultura de eficiencia y expansión de nuestros negocios.</h3>
				</div>
			</div>

		</section>

		<!-- QUEM SOMOS -->
		<section id="c_quem_somos">
			<div class="container">
				<div class="row">

					<div class="col-md-6">
						<div class="owl-carousel">
							<div class="item owl-lazy" data-src="assets/images/home/carrousel00.png"></div>
							<div class="item owl-lazy" data-src="assets/images/home/carrousel01.png"></div>
						</div>
					</div>

					<div class="col-md-6">
						<div id="c_quem_somos_text">
							<h2>Somos Moove</h2>
							<h3>
								Producimos, vendemos y distribuimos lubricantes y grasas para los segmentos automotriz, agrícola, aéreo, naval e industrial asegurando productividad, eficiencia y desempeño.
								<br><br>

								Somos parte del Grupo Cosan. De origen brasileño y con operaciones internacionales, somos uno de los mayores productores y distribuidores de lubricantes y aceites básicos en Sudamérica, Europa y Estados Unidos.
							</h3>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- VÍDEO MOOVE -->

		<section id="c_video">
			<div class="video-wrapper">
				<video autoplay muted loop>
					<source src="assets/video/video_move.mp4" type="video/mp4">
				</video>
				<button type="button" class="btn-video" data-toggle="modal" data-target="#modal-video">
					<img src="assets/images/home/right-arrow.png">
				</button>
			</div>
		</section>

		<!-- DIFERENCIAL -->
		<section id="c_diferencial">
			<div class="container c_diferencial_container">

				<div class="row">
					<div class="col-12 c_diferencial_title">
						<h2>Crecimiento constante<br>en grandes mercados</h2>
					</div>
				</div>

				<div class="c_diferencial_card_container row">

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img1.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text">
									<h2>LÍDER EN LUBRICANTES <br> DE ALTO RENDIMIENTO</h2>
									<h3>Desde nuestra planta en Río de Janeiro, producimos y distribuimos lubricantes Mobil ™ en todo el territorio brasileño.</h3>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img2.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text">
									<h2>HUELLA EN LOS MERCADOS <br>LATINOAMERICANOS</h2>
									<h3>Con oficina en Buenos Aires, atendemos los mercados de Argentina, Bolivia, Paraguay y Uruguay.</h3>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img3.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text">
									<h2>EN EUROPA Y MÁS <br> DE 40 PAÍSES</h2>
									<h3>Desde nuestra fábrica en Inglaterra, con Pro-Brands, vendemos a más de 40 países, llegando a Asia. Y distribuimos lubricantes Mobil ™ al Reino Unido, España, Francia y Portugal.</h3>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img4.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text">
									<h2>UNO DE LOS MAYORES DISTRIBUIDORES DE <br> LUBRICANTES DE ESTADOS UNIDOS</h2>
									<h3>Desde nuestras plantas y con más de 50 centros de distribución en todo el país, producimos y comercializamos lubricantes para más de las dos terceras partes de todo el territorio americano.</h3>
								</div>
							</div>
						</div>

				</div>

			</div>
		</section>

		<!-- MAPA (ENDEREÇOS) -->
		<section id="c_mapa">
			<div class="container">
				<h2>Dónde estamos</h2>
			</div>
			<div id="mapplic"></div>
		</section>

		<!-- O QUE TE MOOVE -->
		<section id="c_moove">
			<div class="container-fluid">
				<div class="row">

					<div class="col-12 col-md-6 px-0">
						<img class="c_img_responsive c_img_100" src="assets/images/home/o-que-te-moove.png">
					</div>

					<div class="col-12 col-md-6 c_moove_background px-0">
						<div class="half-container">
							<div id="c_moove_text">
								<h2>¿Qué es lo que te mueve?</h2>
								<h3>Buscamos un profesional que siempre juegue en equipo y sepa que <b>ESTAMOS JUNTOS</b> en cualquier desafío, al fin y al cabo, no se puede llegar a ningún lado solo. Tu haces hincapié en tener una <b>MENTE ABIERTA</b> para lo nuevo y crees que las mejores ideas se crean en un entorno de pluralidad, por lo que discutes lo que es importante, relevante y no tienes miedo del <b>REAL TALK</b>. Sea lo que sea, <b>SIEMPRE</b> estás <b>SEGURO</b>, haces lo correcto en todas las situaciones, enfocándote en los resultados y siempre buscando <b>PENSAR EN GRANDE</b> y <b>REALIZAR SIMPLE</b>.</h3>
								
								<a href="https://www.linkedin.com/company/moovelub/jobs/" target="_blank" class="btn btn-success">SER UN MOOVER</a>
								<h3 class="c_moove_vagas">Consulta las oportunidades laborales disponibles<br>y únete al equipo de Moove</h3>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- LINKS ÚTEIS -->
		<section id="c_links_uteis">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 c_links_uteis_pt1">
						<h2>Enlaces útiles</h2>
						<ul class="ul-links">
							<li>
								<a href="https://www.cosan.com.br/" target="_blank">Grupo Cosan</a>
							</li>
							<li>
								<a href="https://ri.cosan.com.br/" target="_blank">Relación con inversores</a>
							</li>
							<li>
								<a id="link-moovelub" href="/mobil" target="_blank">Mobil™</a>
							</li>
						</ul>
					</div>

					<div class="col-12 col-md-6 c_links_uteis_pt2">
						<h3 class="h3-link"><a href="politica_es.php" target="_blank">Política de privacidad</a></h3>
						<ul class="social-media">
							<li>
								<a id="link-linkedin" href="" target="_blank">
									<img src="assets/images/logos/logo-linkedin.png"/>
								</a>
							</li>
							<li>
								<a href="https://www.glassdoor.com/Reviews/Moove-Lubrificantes-Reviews-E2878407.htm?countryRedirect=true" target="_blank">
									<img src="assets/images/logos/logo-instagram.png"/>
								</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</section>

		<!-- COPYRIGHT -->
		<section id="c_copyright">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h4>© <?php echo date('Y'); ?>. Todos os direitos reservados a Cosan Lubrificantes e Especialidades S.A. Proibida reprodução ou distribuição sem autorização.Todas as marcas Mobil utilizadas neste site são marcas ou marcas registradas da Exxon Mobil Corporation ou uma de suas subsidiárias, utilizadas pela Cosan Lubrificantes e Especialidades S.A., ou uma de suas subsidiárias, sob licença. A Moove (Cosan Lubrificantes e Especialidades S.A.) é a distribuidora autorizada dos lubrificantes Mobil no Brasil.</h4>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<?php require("m-footer.php"); ?>			
		</footer>

		<section class="cookies-background">		
			<div class="cookies">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-md-8 col-sm-12">
							<p class="text-white" style="
    padding-right: 14px;
    padding-left: 15px;
">
							Almacenamos cookies en su dispositivo para brindar una mejor experiencia. Al utilizar este sitio, estas aceptando nuestra política de privacidad. <a href="politica.php">política de privacidad</a> 
							</p>
						</div>
						<div class="col-xl-4 col-md-4 col-sm-12">
							<div class="button-wrapper">
								<button class="agree-button" type="button">acepto</button>
								<button class="desagree-button text-light" type="button">no acepto</button>
							</div>
						</div>
					</div> 
				</div>
			</div>  		     
		</section>

		<div class="modal fade" id="modal-video">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<div class="modal-body">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5U5uIPJImnU" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
					</div>

				</div>
			</div>
		</div>

	</body>

</html>
