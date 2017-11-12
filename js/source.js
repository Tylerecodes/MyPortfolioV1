
//Transitioning Navbar with Page-scroll//
$(document).ready(function() {
	$(window).scroll(function() {
  	if($(document).scrollTop() > 10) {
        $('.navbar').addClass('shrink');
        $('.collapse').addClass('shrink');
    }
    else {
    $('.navbar').removeClass('shrink');
    $('.collapse').removeClass('shrink');
    }
  });
});


//Scrollspy on navbar while scrolling//
$('body').scrollspy({ target: '#navbar' })