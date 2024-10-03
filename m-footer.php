<script src="assets/theme/js/bootstrap-popover-x.js"></script>

<script type="text/javascript" src="./plugin/main/js/jquery.min.js"></script>
<script type="text/javascript" src="./plugin/main/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha384-YGnnOBKslPJVs35GG0TtAZ4uO7BHpHlqJhs0XK3k6cuVb6EBtl+8xcvIIOKV5wB+" crossorigin="anonymous"></script>
<script type="text/javascript" src="./plugin/main/js/script.js"></script>
<script type="text/javascript" src="./plugin/main/mapplic/mapplic.js"></script>
<script type="text/javascript" src="./assets/theme/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/theme/js/carrossel.js"></script>
<script type="text/javascript">

	var my_map = "";

	var requestUri = location.pathname + location.search
	var regex = '^(\/)(en|es|fr|)(|.php)$'
	var language = requestUri.match(regex)

	var mapalocal = "./plugin/main/world.json"
	if (language && language[2]) {
		mapalocal = './plugin/main/world_'.concat(language[2]).concat('.json')
	}

	$(function() {

		$('.c_diferencial_card_text').each(function(index, elem) {

			if ($(window).width() < 768) {
				return false;
			}

			if (index % 2 == 0) {
				if ($(this).height() > $('.c_diferencial_card_text').eq(index + 1)) {
					$(this).height($('.c_diferencial_card_text').eq(index + 1).height());
				} else {
					$('.c_diferencial_card_text').eq(index + 1).height($(this).height());
				}
			}

		});

		$('a[href*="#"]')
			// Remove links that don't actually link to anything
			.not('[href="#"]')
			.not('[href="#0"]')
			.click(function(event) {

				event.preventDefault();

				// On-page links
				var offset = 0;
				if ($(this).data('offset')) {
					offset = parseInt($(this).data('offset'));
				}

				if (
					location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
					&&
					location.hostname == this.hostname
				) {
					// Figure out element to scroll to
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					// Does a scroll target exist?
					if (target.length) {
						// Only prevent default if animation is actually gonna happen
						event.preventDefault();
						$('html, body').animate({
							scrollTop: target.offset().top + offset
						}, 1000, function() {
							// Callback after animation
							// Must change focus!
							var $target = $(target);
							$target.focus();
							if ($target.is(":focus")) { // Checking if the target was focused
								return false;
							} else {
								$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
								$target.focus(); // Set focus again
							};
						});
					}
				}
			});	
		


		my_map = $('#mapplic').mapplic({
			source: mapalocal,
			height: 600,
			sidebar: false,
			// marker: 'hidden',
			action: "tooltip",
			zoomoutclose : true,
			developer : false,
			fullscreen: false,
			zoom : true,
			maxscale: 4,

			// UI
			basecolor: 'rgba(255,255,255, 0.6)',
			bgcolor: '#333',
			bgcolor2: '#333',
			headingcolor: '#fff',
			textcolor: '#aaa'
		});

	

		my_map.on('locationopened', function() {
			$('.mapplic-popup-link').attr('target', '_blank');
		});

		$('#c_menu_banner_1').height($(window).height() - 50);
	});

	$(document).ready(function(){
		$('.owl-carousel').owlCarousel({
			items: 1,
			lazyLoad: true,
			loop: true,
			margin: 5,
			dots: true,
			nav: false,
			autoplay: true,
			smartSpeed: 1500,
			autoplayTimeout: 5000,
			stopOnHover: false

		});

		var src = $('.embed-responsive').children('iframe').attr('src');

		$('.btn-video').click(function(e){
			e.preventDefault();
			$('.embed-responsive').children('iframe').attr('src', src);
			$('.modal-content').fadeIn();

		});

		$('.close').click(function(e){
			e.preventDefault();
			$('.embed-responsive').children('iframe').attr('src', '');
			$('.modal-content').fadeOut();
		})
		
		fetch('https://extreme-ip-lookup.com/json/')
			.then( res => res.json())
			.then(response => {
				var country = response.country

				if (country == 'Brazil') {
					$('#link-moovelub').attr('href', '/mobil')
					$('#link-linkedin').attr('href', 'https://www.linkedin.com/company/moovebrasil')
				}
				else if (country == 'United States') {
					$('#link-moovelub').attr('href', 'http://www.metrolube.com/')
					$('#link-linkedin').attr('href', 'https://www.linkedin.com/company/moove-usa/')
				}
				else if (country == 'Argentina') {
					$('#link-moovelub').attr('href', 'https://ar.moovelub.com/mobil/')
					$('#link-linkedin').attr('href', 'https://www.linkedin.com/company/moove-argentina/')
				}
				else if (country == 'Spain') {
					$('#link-moovelub').attr('href', 'https://www.moovelub.es/')
					$('#link-linkedin').attr('href', 'https://www.linkedin.com/company/moove-espa%C3%B1a/')
				}
				else if (country == 'Portugal') {
					$('#link-moovelub').attr('href', 'https://moovelub.pt/')
				}
				else if (country == 'France') {
					$('#link-moovelub').attr('href', 'https://www.tta-lubrifiants.com/')
					$('#link-linkedin').attr('href', 'https://www.linkedin.com/company/tta-lubrifiants/')
				}
				else if (country == 'United Kingdom') {
					$('#link-moovelub').attr('href', 'https://www.moovelub.co.uk/')
					$('#link-linkedin').attr('href', 'https://www.linkedin.com/company/moove-uk/')
				}
				else{
					$('#link-moovelub').attr('href', '/mobil')
					$('#link-linkedin').attr('href', 'https://www.linkedin.com/company/moovebrasil')
				}
			})
			.catch((data, status) => {
				console.log('Request failed to get country.')
		})

		// Cookie Police.
		let cookiePolice = $('.cookies-background'),
		cookieAcceptBtn = $('.agree-button'),
		cookieDesagreeBtn = $('.desagree-button')

		function createCookie(name, value, days) {
			var expires = ""

			if (days) {
				var date = new Date()
				date.setTime(date.getTime() + (days*24*60*60*1000))
				var expires = "; expires=" + date.toGMTString()
			}

			document.cookie = name + "=" + value+expires + "; path=/"
		}

		function readCookie(name) {
			var nameEQ = name + "="
			var ca = document.cookie.split(';')

			for (var i = 0; i < ca.length; i++) {
				var c = ca[i]

				while (c.charAt(0)==' ') {
					c = c.substring(1, c.length)
				}

				if (c.indexOf(nameEQ) == 0) {
					return c.substring(nameEQ.length,c.length)
				}
			}

			return null
		}

		function eraseCookie(name) {
			createCookie(name, "", -1)
		}

		function cookieAccept(){
			createCookie('mobilCP', 'acceptTerm', 30)
			cookiePolice.fadeOut('500')
		}

		function cookieDisagree(){
			createCookie('mobilCP', 'disagreeTerm', 30)
			cookiePolice.fadeOut('500')
		}

		cookieAcceptBtn.on('click', function() {
			cookieAccept()
		})
		cookieDesagreeBtn.on('click', function() {
			cookieDisagree()
		})

		let cookie = readCookie('mobilCP')

		cookiePolice.hide()
		if(cookie == null) {
			cookiePolice.show()
		}
		// /Cookie Police.

	});

</script>
