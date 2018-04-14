
	$(document).ready(function(){

	//navigation event handler
	$('body').on('click', '#submitContactForm', function(event){

	 	event.preventDefault();

	 	var firstName = $("#firstName").val();
	 	var lastName = $("#lastName").val();
	 	var phone = $("#phone").val();
	 	var email = $("#email").val();
	 	var message = $("#message").val();


	 	$.ajax({
	 		url: 'php_scripts/send_message_script.php',
	 		method: 'POST',
	 		data: {
	 			messageSent: 1,
	 			firstName: firstName, 
	 			lastName: lastName,
	 			email: email,
	 			phone, phone,
	 			message: message
	 		}, 
	 		success: function(response) {
				$('.warning-div').html(response);
	 			$('#contactForm')[0].reset();
	 		}
	 	});

	});
}); //end 