
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

  //Scrollspy on navbar while scrolling//
  $('body').scrollspy({ target: '#navbar' })

});

$('#contactForm').on('submit', function(e){
  e.preventDefault();

  var name = $('#contactName').val();
  var email = $('#contactEmail').val();
  var message = $('#contactMessage').val();

  $.ajax({
    url: '/PHPMailer/index.php',
    type: 'POST',
    data: {
      name: name,
      email: email,
      message: message
    },
    success: function(res) {
      $('#responseMessage').html('Message successfully sent!')
    },
    error: function(err){
      $('#responseMessage').html('Error sending your message!')
    }
  });
});