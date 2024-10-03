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
				<div class="row content-menu">
					<div class="col-auto content-logo">
						<a class="nav-link nav-link-logo" href="#">
							<img class="c_menu_logo" src="assets/images/logos/logo-moove.png" width="200"></img>
						</a>
					</div>
					<div class="col-md-8 content-nav">
						<!-- <a href="#"><img class="c_menu_logo_mobile" src="assets/images/logos/logo-moove.png"></img></a> -->
						<nav class="navbar navbar-expand-md navbar-light static-top justify-content-between">
							
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#c_navbar">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="c_navbar">
								<ul class="navbar-nav mx-auto justify-content-center w-100">

									<li class="nav-item">
										<a class="nav-link" href="#c_menu_banner_1">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#c_quem_somos" data-offset="-80">O que fazemos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#c_mapa">Onde estamos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/sustentabilidade">Sustentabilidade</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#c_moove">Trabalhe conosco</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="https://www.cosan.com.br/" target="_blank">Relação com investidores</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
					<div class="content-language">
						<span class="c_language">
							<a href="#" title="PT">PT</a>
							<a href="en.php" title="EN">EN</a>
							<a href="es.php" title="ES">ES</a>
							<a href="fr.php" title="FR">FR</a>
						</span>
					</div>
				</div>
			</div>

			<div class="container c_container_text">
				<div id="c_menu_banner_1_text">
					<h2>Referência global no mercado de lubrificantes</h2>
					<span>
						<img class="img-icon-gota" src="/assets/images/icon/gota-icon-verde.png" alt="">
					</span>
					<h3>Trabalhamos com foco em 3 prioridades: times de alta performance, expansão dos negócios e cultura de eficiência.</h3>
					<span><img class="logo-nyse" src="/assets/images/logos/logo NSE.png" alt=""></span>
				</div>
			</div>

		</section>

		<!-- QUEM SOMOS -->
		<section id="c_quem_somos">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-galery">
						<div id="c_quem_somos_text">
							<h2>Somos a <img class="logo-text" src="assets/images/logos/logo-moove.png" alt=""> </h2>
						</div>
					</div>
					<div class="col-md-4">
						<h3>
							Produzimos, vendemos e distribuímos lubrificantes e graxas para os segmentos automotivo, agrícola, aéreo, naval e industrial, garantindo produtividade, eficiência e performance.
						</h3>
					</div>
					<div class="col">
						<h3>Somos parte do Grupo Cosan. Com origem brasileira e atuação internacional, somos uma das maiores produtoras e distribuidoras de lubrificantes e óleos básicos da América do Sul, também presente na Europa e Estados Unidos.</h3>
					</div>
				</div>
			</div>
			<div class="carrossel-galery">
				<div calss="card-1"><img src="/assets/images/slide-itens/slide-item-01.png" alt=""></div>
				<div class="card-2"> 
					<div class="text-slide-item">
						<h2>
							Nossos lubrificantes estão por toda parte
						</h2>
					</div> 
				</div>
				<div class="card-3">
					<img src="/assets/images/slide-itens/BrasilComS_00050.jpg" alt="">
				</div>
				<!-- <div class="card-4"></div> -->
			</div>

		</section>

		<!-- VÍDEO MOOVE -->

		<section id="c_video">
			<div class="container">
				<div class="video-wrapper">
					<video autoplay muted loop>
						<source src="assets/video/video_move.mp4" type="video/mp4">
					</video>
					<button type="button" class="btn-video" data-toggle="modal" data-target="#modal-video">
						<img src="assets/images/home/right-arrow.png">
					</button>
				</div>
			</div>
		</section>

		<!-- DIFERENCIAL -->
		<section id="c_diferencial">
			<div class="container c_diferencial_container">

				<div class="row">
					<div class="col-12 c_diferencial_title">
						<h2>Consistente crescimento<br>em grandes mercados</h2>
					</div>
				</div>

				<div class="c_diferencial_card_container row">

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img1.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text card-1">
									<h2>Líder em lubrificantes <br> de alta performance</h2>
									<h3>Em nossa planta no Rio de Janeiro, temos a licença para produzir e distribuir lubrificantes Mobil™ para todo o território brasileiro.</h3>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img2.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text card-2">
									<h2>Presente em <br> mercados da <br> américa latina</h2>
									<h3>Com escritório na Argentina, atendemos também os mercados de Bolívia, Paraguai e Uruguai.</h3>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img3.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text card-3">
									<h2>Na Europa <br> e em mais <br> de 40 países</h2>
									<h3>Distribuímos lubrificantes em todo o Reino Unido, Espanha, França e Portugal. E a partir de nossa fábrica na Inglaterra, produzimos e comercializamos lubrificantes para mais de 40 países, chegando até a Ásia.</h3>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img4.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text card-4">
									<h2>Uma das maiores <br> distribuidoras <br> de lubrificantes <br> dos EUA</h2>
									<h3>A partir de nossas plantas e mais de 50 centros de distribuição espalhados pelo país, produzimos e comercializamos lubrificantes para mais de dois terços de todo território americano.</h3>
								</div>
							</div>
						</div>

				</div>
			</div>
		</section>

		<!-- MAPA (ENDEREÇOS) -->
		<section id="c_mapa">
			<div class="container map-container">
				<div id="mapplic"></div>
				<h2>Onde estamos</h2>
			</div>
			
		</section>

		<!-- O QUE TE MOOVE -->
		<section id="c_moove">
			<div class="container">
				<div class="row box-content">
					<div class="col-sm-8">
						<h2>seja um <br> moover</h2>
					</div>
					<div class="col-sm-4 col-num-2">
						<p class="text-resume">
							Buscamos um profissional que valorize
							o trabalho em equipe e a colaboração
							("TAMO JUNTO"). Alguém com mente
							aberta, que valoriza a diversidade de
							ideias e não tem medo de PAPO RETO.
							É essencial ser íntegro e SEGURO
							SEMPRE, focando em resultados e
							agindo da forma correta. Se você
							PENSE GRANDE e REALIZA SIMPLES,
							queremos você no nosso time!
						</p>
						<a href="https://grupocosan.csod.com/ux/ats/careersite/4/home?c=grupocosan" target="_blank" class="button_vaga"> 
							<span>Veja as vagas</span>
							<img src="/assets/images/icon/gota-icon-verde.png" alt="">
						</a>
					</div>		
				</div>
				<div class="row image-content">
					<img src="/assets/images/home/image-person.jpg" alt="">
				</div>
			</div>
		</section>

		<!-- LINKS ÚTEIS -->
		<section id="c_links_uteis">
			<div class="container">
				<div class="row">

					<div class="col-12 col-md-6 c_links_uteis_pt1">
						<h2>Links Úteis</h2>
						<ul class="ul-links">
							<li>
								<a href="https://www.cosan.com.br/" target="_blank">Grupo Cosan</a>
							</li>
							<li>
								<a href="https://ri.cosan.com.br/" target="_blank">Relações com investidores</a>
							</li>
							<li>
								<a id="link-moovelub" href="/mobil" target="_blank">Mobil™</a>
							</li>
						</ul>
					</div>

					<div class="col-12 col-md-6 c_links_uteis_pt2">
						<h3 class="h3-link"><a href="politica.php" target="_blank">Política de Privacidade</a></h3>
						<ul class="social-media">
							<li>
								<a id="link-linkedin" href="" target="_blank">
									<img src="assets/images/icon/icon-linke.png"/>
								</a>
							</li>
							<li>
								<a href="https://www.glassdoor.com.br/Vis%C3%A3o-geral/Trabalhar-na-Moove-Lubrificantes-EI_IE2878407.13,32.htm" target="_blank">
									<img src="assets/images/icon/icon-glass.png"/>
								</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</section>

		<!-- COPYRIGHT -->

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
							Armazenamos cookies em seu dispositivo para proporcionar uma melhor experiência. Ao utilizar esse site, você concorda com nossa <a href="politica.php">política de privacidade</a> 
							</p>
						</div>
						<div class="col-xl-4 col-md-4 col-sm-12">
							<div class="button-wrapper">
								<button class="agree-button" type="button">aceito</button>
								<button class="desagree-button text-light" type="button">não aceito</button>
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
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ie6h-h7_6sQ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>

	</body>

</html>

