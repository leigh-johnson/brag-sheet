$(document).ready(function() {
			// Show or hide the sticky footer buttons
			$(window).scroll(function() {
				if ($(this).scrollTop() > 150) {
					$('.go-top').fadeIn(200);
					//don't display the alert if its been dismissed
					if ($.cookie('alert-bottom') != 'dismissed') {
						$('.alert-bottom').fadeIn(200);
					}
				} else {
					$('.alert-bottom').fadeOut(200);
					$('.go-top').fadeOut(200);
				}
			});

			$('.alert-close').click(function(){
				$('.alert-bottom').fadeOut(200);
				$('.alert-bottom').addClass('dismissed');
				// create a session cookie to store dismissed state
				$.cookie('alert-bottom', 'dismissed', {expires: 7, path: '/'})	
				return false;
			});

			// Animate the scroll to top
			$('.go-top').click(function(event) {
				event.preventDefault();
				
				$('html, body').animate({scrollTop: 0}, 300);
			})


});