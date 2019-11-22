$(document).ready(function() {

	// --------------------------------------------------
	// Check if browser JS is enabled
	// --------------------------------------------------
	$('html').removeClass('no-js').addClass('js');

	// --------------------------------------------------
	// If JS is enabled - run page transitions
	// --------------------------------------------------
	$(".js #container").animsition({
		inClass: 'overlay-slide-in-bottom',
	    outClass: 'overlay-slide-out-bottom',
		inDuration: 500,
		outDuration: 500,
		linkElement: '.al',
		loading: true,
		loadingParentElement: 'body',
		loadingClass: 'animsition-loading',
		timeout: false,
		timeoutCountdown: 5000,
		onLoadEvent: true,
		browser: [ 'animation-duration', '-webkit-animation-duration'],
		overlay : true,
		transition: function(url){ window.location.href = url; }
	}).one('animsition.inStart',function(){
		 $('body').removeClass('bg-init');
		 kollapseInit();
    });

}); // document.ready


function kollapseInit() {

	// --------------------------------------------------
	// Mobile Check
	// --------------------------------------------------
	var isMobile = $('#isMobile');

	if( isMobile.css("display") == "block" ) {
		isMobile = true;
	} else {
		isMobile = false;
	}


	// --------------------------------------------------
	// Glidejs Slider
	// --------------------------------------------------
	if( $('.slider').length != 0 ) {
		$('.slider').glide({
        	type: 'carousel',
			autoplay: 0
    	});
	}
	if( $('.carousel').length != 0 ) {
		$('.carousel').glide({
        	type: 'carousel',
			autoplay: 0,
			keyboard: false
    	});
	}


	// --------------------------------------------------
	// Standard Navigation
	// --------------------------------------------------
	if( isMobile && $('body').hasClass('navstandard') ) {
		$('body').removeClass('navstandard');
	}


	// --------------------------------------------------
	// Hamburger on Mobile
	// --------------------------------------------------
	$('.hamburger-container').on('click', function() {
		if( $('.menu').hasClass('animate') ) {
			$('.menu, .bar').removeClass('animate');
			$('.hamburger-container').removeClass('animate');
			if( isMobile ) {
				$('#canvas').css('overflow-y','initial');
			}
		} else {
			$('.menu, .bar').addClass('animate');
			$('.hamburger-container').addClass('animate');
			if( isMobile ) {
				$('#canvas').css('overflow-y','hidden');
			}
		}
	});


	// --------------------------------------------------
	// Offcanvas Navigation
	// --------------------------------------------------
	$('.hamburger-menu').on('click', function(e){
		e.preventDefault();
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		$('html').toggleClass('nav-open');
	});


	// --------------------------------------------------
	// fitVids
	// --------------------------------------------------
	$('.video').fitVids();


	// --------------------------------------------------
	// FeatherLight Lightbox
	// --------------------------------------------------
	$('.gallery a, .lightbox a').featherlightGallery({
		targetAttr: 'href'
	});


	// --------------------------------------------------
	// Table of Contents
	// --------------------------------------------------
	if( $('.toc').length != 0 ) {
		var ToC =
			"<nav role='navigation' class='table-of-contents'>" +
				"<h3>Table of Contents</h3>" +
				"<ul>";

		var newLine, el, title, link, level, baseLevel;

		$(".text > h1, .text > h2, .text > h3").each(function() {

			el = $(this);
			title = el.text();
			console.log(title);
			link = "#" + el.attr("id");

			var prevLevel = level || 0;
			level = this.nodeName.substr(1);
			if(!baseLevel) {
				baseLevel = level;
			}

			if(prevLevel == 0) {
				newLine = '<li>';
			} else if(level == prevLevel) {
				newLine = '</li><li>';
			} else if(level > prevLevel) {
				newLine = '<ul><li>'.repeat(level - prevLevel);
			} else if(level < prevLevel) {
				newLine = '</li></ul>'.repeat(prevLevel - level) +
				'</li><li>';
			}
			newLine += "<a href='" + link + "'>" + title + "</a>";

			ToC += newLine;

		});

		ToC += '</li></ul>'.repeat(level - baseLevel) +
					"</li>" +
				"</ul>" +
			"</nav>";

		$(".toc").prepend(ToC);

		if( ! isMobile ) {
			$('.toc.pinned').scrollToFixed();
		}
	}
} // kollapse
