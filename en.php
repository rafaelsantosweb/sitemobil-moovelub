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
										<a class="nav-link" href="#c_menu_banner_1">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#c_quem_somos" data-offset="-80">What do we do</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#c_mapa">Where are we</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="/sustentabilidade/en/">Sustainability</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#c_moove">Work with us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#c_moove">Investors Relation</a>
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
					<h2>A global reference in the lubricant market</h2>
					<h3>We work with a focus on 3 priorities: high performance teams, culture of efficiency and business expansion.</h3>
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
							<h2>We are Moove</h2>
							<h3>
								We produce, sell and distribute lubricants and greases for the automotive, agricultural, aerial, naval, and industrial segments ensuring productivity, efficiency, and performance.
								<br><br>

								We are part of the Cosan Group. Brazilian’s origins and International operations, we are one of the largest producers and distributors of lubricants and basic oils in South America, Europe and United States.
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
						<h2>Consistent growth<br>in large markets</h2>
					</div>
				</div>

				<div class="c_diferencial_card_container row">

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img1.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text">
									<h2>LEADER IN HIGH PERFORMANCE <br> LUBRICANTS</h2>
									<h3>From our plant in Rio de Janeiro, we produce and distribute Mobil ™ lubricants throughout the Brazilian territory.</h3>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img2.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text">
									<h2>FOOTPRINT IN LATIN AMERICAN <br>MARKETS</h2>
									<h3>With an office in Buenos Aires, we serve the markets of Argentina, Bolivia, Paraguay and Uruguay.</h3>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img3.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text">
									<h2>IN EUROPE AND OVER <br> 40 COUNTRIES</h2>
									<h3>From our factory in England, with Pro-Brands, we sell to over 40 countries, reaching Asia. And we distribute Mobil ™ lubricants to the UK, Spain, France and Portugal.</h3>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="c_diferencial_card">
								<img src="assets/images/home/img4.png" class="c_img_responsive"></img>
								<div class="c_diferencial_card_text">
									<h2>ONE OF THE LARGEST LUBRICANTS <br> DISTIBUTORS OF UNITED STATES</h2>
									<h3>
										From our plants and more than 50 distribution centers around the country, 
										we produce and sell Lubricants to more than two thirds of all american territory.
									</h3>
								</div>
							</div>
						</div>

				</div>

			</div>
		</section>

		<!-- MAPA (ENDEREÇOS) -->
		<section id="c_mapa">
			<div class="container">
				<h2>Where are we</h2>
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
								<h2>What mooves you?</h2>
								<h3>We are looking for a professional who always plays as a team and knows that <b>WE ARE TOGETHER</b> in any challenge, after all, you can't get anywhere alone. You make a point on having an <b>OPEN MIND</b> MIND for the new and believe that the best ideas are created in an plurality environment, so you discuss what is important, relevant and are not afraid of <b>REAL TALK</b>. Whatever it is, you are <b>ALWAYS SAFE</b>, you do the right thing in all situations, focusing on results and always seeking to <b>THINK BIG</b> and <b>PERFORM SIMPLE</b>.</h3>
								
								<a href="https://www.linkedin.com/company/moovelub/jobs/" target="_blank" class="btn btn-success">BE A MOOVER</a>
								<h3 class="c_moove_vagas">Check the job opportunities available<br>and join the Moove team</h3>
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
						<h2>Useful links</h2>
						<ul class="ul-links">
							<li>
								<a href="https://www.cosan.com.br/" target="_blank">Cosan Group</a>
							</li>
							<li>
								<a href="https://ri.cosan.com.br/" target="_blank">Relationship with investors</a>
							</li>
							<li>
								<a id="link-moovelub" href="/mobil" target="_blank">Mobil™</a>
							</li>
						</ul>
					</div>

					<div class="col-12 col-md-6 c_links_uteis_pt2">
						<h3 class="h3-link"><a href="politics_en.php" target="_blank">Privacy Policy</a></h3>
						<ul class="social-media">
							<li>
								<a id="link-linkedin" href="" target="_blank">
									<img src="assets/images/logos/logo-linkedin.png"/>
								</a>
							</li>
							<li>
								<a href="https://www.glassdoor.co.uk/Overview/Working-at-Moove-Lubrificantes-EI_IE2878407.11,30.htm" target="_blank">
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
							We collect cookies on your device to provide a better experience. By using this site, you agree to our privacy policy <a href="politica.php">privacy policy</a> 
							</p>
						</div>
						<div class="col-xl-4 col-md-4 col-sm-12">
							<div class="button-wrapper">
								<button class="agree-button" type="button">I accept</button>
								<button class="desagree-button text-light" type="button">I do not accept</button>
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
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/P1gv4qi_ZcA" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
					</div>

				</div>
			</div>
		</div>

	</body>

</html>



