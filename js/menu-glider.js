/**
 * This script adds the jquery effects to the front page of the Altitude Pro Theme.
 *
 * @package Altitude\JS
 * @author StudioPress
 * @license GPL-2.0+
 */

(function( $ ){

	if (document.location.hash) {
			window.setTimeout(function () {
				document.location.href += '';
			}, 10);
	}

	// Scroll to target function.
	$( '.header-menu a[href*="#"]:not([href="#"]), .section-menu a[href*="#"]:not([href="#"])' ).click(function() {

		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

			var target = $(this.hash);
			target = target.length ? target : $( '[name=' + this.hash.slice(1) + ']' );

			if (target.length) {

				$( 'html,body' ).animate({
					scrollTop: target.offset().top
				}, {
					duration: 750,
					complete: function() {
						target.focus();
					}
				});

				return false;

			}
		}

	});

	// Image section height.
	var windowHeight = $( window ).height();

	$( '.image-section' ) .css({'height': windowHeight +'px'});

	$( window ).resize(function(){

		var windowHeight = $( window ).height();

		$( '.image-section' ) .css({'height': windowHeight +'px'});

	});

})(jQuery);


// When the user scrolls the page, execute functionStickyNav.
window.onscroll = function() {functionStickyNav()};

// Get the Section Menu
var sectionMenu = document.getElementById("SectionMenu");

//Get admin bar
var adminnav = document.getElementById('wpadminbar');

// Get the offset position of the Section Menu.
var sticky = sectionMenu.offsetTop;
 
// Add the sticky class to the Section Menu when you reach its scroll position. Remove "sticky" when you leave the scroll position.

function functionStickyNav() {
 

  
	if ((adminnav) && (window.pageYOffset >= sticky)){
		sectionMenu.classList.add("section-menu-sticky-admin", "section-menu-sticky");
		sectionMenu.classList.remove("section-menu-hide");
		
	}
	else if ((!adminnav) && (window.pageYOffset >= sticky)){
		sectionMenu.classList.add("section-menu-sticky");
		sectionMenu.classList.remove("section-menu-hide");
	}
    else {
		sectionMenu.classList.remove("section-menu-sticky");
		sectionMenu.classList.add("section-menu-hide");
  }

}