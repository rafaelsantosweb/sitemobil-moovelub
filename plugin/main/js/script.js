/* Landing page scripts */
$(document).ready(function() {
	$('.usage').click(function(e) {
		e.preventDefault();
		$('.editor-window').slideToggle(200);
	});

	$(document).on('mousemove', '.mapplic-layer', function(e) {
		var map = $('.mapplic-map'),
			x = (e.pageX - map.offset().left) / map.width(),
			y = (e.pageY - map.offset().top) / map.height();
		$('.mapplic-coordinates-x').text(parseFloat(x).toFixed(4));
		$('.mapplic-coordinates-y').text(parseFloat(y).toFixed(4));
	});

	$('.editor-window .window-mockup').click(function() {
		$('.editor-window').slideUp(200);
	});
});

// Obtém a URL atual
const currentUrl = window.location.pathname; // Obtém o caminho completo

// Seleciona todos os links dentro de .c_language
const links = document.querySelectorAll('.c_language a');

// Itera sobre os links
links.forEach(link => {
    // Verifica se o href do link corresponde à URL atual ou se é '#'
    if (link.getAttribute('href') === currentUrl || link.getAttribute('href') === '#') {
        link.classList.add('active'); // Adiciona a classe active
    }
});