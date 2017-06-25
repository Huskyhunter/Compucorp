(function($){
	Drupal.behaviors.themename = {

    attach: function (context, settings) {            
			$('#our-members .owl-carousel').owlCarousel({
				items: 5,
				margin: 160,
				slideBy: 5,
				dots: true,
				responsive:{
					0:{
						items: 2,
						margin: 30,
						slideBy: 2
					},
					480:{
						items: 4,
						margin: 50,
						slideBy: 4
					},
					768:{
						items: 5,
						margin: 70,
						slideBy: 5
					},
					1120:{
						items: 5,
						margin: 160,
						slideBy: 5
					}
				}
			});
			
			
			$('#blog .owl-carousel').owlCarousel({
				items:4,
				margin: 23,
				mouseDrag: false,
				dots: false,
				nav: true,
				slideBy: 1,
				navText: [
					'',
					''
				],
				responsive: {
					0:{
						items: 1,
						margin: 20,
						stagePadding: 20,
					},
					480:{
						items: 2,
						margin: 30,
						stagePadding:20,
					},
					768:{
						items: 3,
						margin: 30,
					},
					992:{
						items: 4,
						margin: 30,
					}
				}
			})

			$(document).on('click', '#menu-icn', function(){
				$('#overlayer').show();
				$('nav .links').show().attr('class', 'links animated slideInLeft');
			})

			$(document).on('click', '#overlayer',function(){
				$('nav .links').show().attr('class', 'links animated slideOutLeft');
				setTimeout(function(){
					$('nav .links').hide();
					$('#overlayer').hide();
				},500)
			})
  	}
	}

})(jQuery)
