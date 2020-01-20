(function($){

	"use strict";

	var Sasha = {

      // Bootstrap Carousels

      carousel: function() {

      	$('.carousel.slide').carousel({
      		cycle: true
      	}); 
      }, 

      matchHeight: function() {
      	$('article.post.type-post, .widget_instagram_feed img').matchHeight({ 
      		property: 'min-height' 
      	});

      },

		// Owl Carousels 

		owlcarousel: function() {
			try { 
				(function($) {

					$(".banner-slider-02").owlCarousel({
						items:2,
						loop:true,
						margin:3,
						nav: false,
						autoplay: true,
						responsive:{
							320:{
								items:1
							},
							436:{
								items:1
							},
							480:{
								items:2
							}
						}
					});

					$(".banner-slider-05").owlCarousel({
						items:2,
						loop:true,
						center: true,
						margin:20,
						nav: false,
						autoplay: true,
						responsive:{
							320:{
								items:1
							},
							436:{
								items:1
							},
							480:{
								items:2
							}
						}
					});

				})(jQuery);
			} catch(e) { 

			} 
		},

		// Isotop Filters

		isotope: function() {

			var $PortfolioItems = $('.masonry-posts');
			$PortfolioItems.isotope({
				itemSelector: 'article',
				layoutMode: 'masonry',
				transitionDuration: '0.6s',
				percentPosition: true,
				margin: 45,
				masonry: {
					columnWidth: 'article'
				}

			});
		},


		// Images Loaded

		imagesloaded: function() {

			var $PortfolioItems = $('.masonry-posts');
			$PortfolioItems.imagesLoaded().progress( function() {
				$PortfolioItems.isotope('layout');
			});  
		},

	};


	$(document).ready(function() {
		"use strict";

		// Background Img

		$(".background-bg").css('background-image', function () {
			var bg = ('url(' + $(this).data("image-src") + ')');
			return bg;
		});

		$('.form-trigger').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().toggleClass('open');
		});

		$('.form-trigger').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
		});

		// Sidebar Nav Open / Close	

		$('.side-menu-trigger').on('click', function() {
			$('.overlay-wrapper').toggleClass('open');
		});

		$('.menu-close').on('click', function(event) {
			$('.overlay-wrapper').removeClass('open');
		});

		// Sidebar Menu Dropdown Open / Close	

		$('.sidebar-menu .menu-item-has-children>a').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});



		Sasha.carousel();
		Sasha.matchHeight();
		Sasha.owlcarousel();
		Sasha.isotope();
		Sasha.imagesloaded();
	});


	// Responsive Menu Open and Close in Mobile

	if ($(window).width() < 767) {
		"use strict";
		$('#main-menu .menu-item-has-children>a').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
		
	};


	jQuery(window).on('scroll', function () {
		
		'use strict';

		if (jQuery(this).scrollTop() > 100) {
			jQuery('#scroll-to-top').fadeIn('slow');
		} else {
			jQuery('#scroll-to-top').fadeOut('slow');
		}

	});


	jQuery('#scroll-to-top').on("click", function() {
		
		'use strict';

		jQuery("html,body").animate({ scrollTop: 0 }, 1500);
		return false;
	});



})(jQuery);





/* Working Contact Form Js
-------------------------------------------------------------------*/
    // Email from Validation
    jQuery('#submit').on("click", function(e){ 

    //Stop form submission & check the validation
    e.preventDefault();


    // Variable declaration
    var error = false;
    var k_name = jQuery('#name').val();
    var k_email = jQuery('#email').val(); 
    var k_email = jQuery('#url').val(); 
    var k_message = jQuery('#message').val();


    /* Post Ajax function of jQuery to get all the data from the submission of the form as soon as the form sends the values to email.php*/
    jQuery.post("email.php", jQuery(".wpcf7-form").serialize(),function(result){
        //Check the result set from email.php file.
        if(result == 'sent'){

          //If the email is sent successfully, remove the submit button
          //$('#name').remove();
          //$('#email').remove();
          //$('#subject').remove();
          //$('#message').remove();
          //$('#submit').remove(); 

          $('.contact-message').html('<i class="fa fa-check contact-success"></i><div>Your message has been sent.</div>').fadeIn();
      } else {
      	// $('.error-message').html('<i class="fa fa-thumbs-down contact-error"></i><div>Your message has not been sent</div>').fadeIn();

      }
  });

}); 

function blackout(){
	document.getElementById("logo").innerHTML="";
	var img = document.createElement('img');
	img.src = "wp-content/themes/estrangeiro/images/logo3.png";
	document.getElementById("logo").appendChild(img)

	document.getElementById('body').style.backgroundColor = "#222222";

	var pg = document.getElementsByTagName('p');
	for (x = 0; x < pg.length; x++){
		document.getElementsByTagName('p')[x].setAttribute("style", "color: #fff;");
	}
	var lk = document.getElementsByClassName('link');
	for (x = 0; x < lk.length; x++){
		document.getElementsByClassName('link')[x].setAttribute("style", "color: #fff;");
	}
	var sp = document.getElementsByTagName('span');
	for (x = 0; x < sp.length; x++){
		document.getElementsByTagName('span')[x].setAttribute("style", "color: #fff;");
	}
	
	var divLamp = document.getElementById("lampada");
	
	divLamp.innerHTML = "";
	var link = document.createElement('a');
	var lamp = document.createElement('img');
	divLamp.appendChild(link);
	link.appendChild(lamp);
	link.setAttribute("onclick", "rebuild()");
	lamp.src = "wp-content/themes/estrangeiro/images/lamp2.png";
	lamp.setAttribute("class", "blackout");
	

	
	
	
	
}


function rebuild(){
	document.getElementById("logo").innerHTML="";
	var img = document.createElement('img');
	img.src = "wp-content/themes/estrangeiro/images/logo.png";
	document.getElementById("logo").appendChild(img)

	document.getElementById('body').style.backgroundColor = "#ffffff";

	var pg = document.getElementsByTagName('p');
	for (x = 0; x < pg.length; x++){
		document.getElementsByTagName('p')[x].setAttribute("style", "color: #686765;");
	}
	var lk = document.getElementsByClassName('link');
	for (x = 0; x < lk.length; x++){
		document.getElementsByClassName('link')[x].setAttribute("style", "color: #222222;");
	}
	var sp = document.getElementsByTagName('span');
	for (x = 0; x < sp.length; x++){
		document.getElementsByTagName('span')[x].setAttribute("style", "color: #999;");
	}

	var divLamp = document.getElementById("lampada");
	
	divLamp.innerHTML = "";
	var link = document.createElement('a');
	var lamp = document.createElement('img');
	divLamp.appendChild(link);
	link.appendChild(lamp);
	link.setAttribute("onclick", "blackout()");
	lamp.src = "wp-content/themes/estrangeiro/images/lamp1.png";
	lamp.setAttribute("class", "blackout");
	
}



