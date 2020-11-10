(function($) {
"use strict";

/*------------------------------------------------------------------
[Table of contents]


-------------------------------------------------------------------*/

/*--------------------------------------------------------------
CUSTOM PRE DEFINE FUNCTION
------------------------------------------------------------*/
/* is_exist() */
jQuery.fn.is_exist = function(){
  return this.length;
}


$(function(){


$('#slfa--login').on('submit', function(e){
	e.preventDefault();

	var $self = $(this);

	var remember = false;
	if( $('#remember').is(':checked') ) {
		remember = true;
	}

	$('#slfa-error-msg').html('');

	$.ajax({
		url: slfa_prems.ajax_url,
		type: 'POST',
		data: {
			action: 'slfa_login',
			nonce: slfa_prems.nonce,
			user_login: $('#user_login').val(),
			user_pass: $('#user_pass').val(),
			remember: remember
		},
		success: function(response){
			if( response.success === true ) {
				$('#slfa-error-msg').html('').append('<p>'+response.data+'</p>')
				window.location.href = slfa_prems.redirect_url;
			} else {
				$('#slfa-error-msg').html('').append('<p>'+response.data+'</p>')
				$self[0].reset();
			}
		}
	})
	
	
})

$('.slf-form-heading').fadeOut(5000);

});/*End document ready*/




//login popup
// $('.popup').magnificPopup({
//   type:'inline',
//   midClick: true 
// });


$(window).on("resize", function(){

}); // end window resize


$(window).on("load" ,function(){


}); // End window LODE


})(jQuery);







