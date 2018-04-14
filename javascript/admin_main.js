$(document).ready(function(){

	//navigation event handler
	$("body").on('click', '.dashboard-link', function(){

		var target = $(this).data('target');
		target = "views/" + target;

		//loading the coresponding view
		$("#content").load(target + ".php");
	});

	//adding inputs for the specifications table
	var i = 1;

	$('body').on('click', '#addInputBtn', function(){

		i++;
		var html = "<div class='input-label-wrapper' id='row" + i + "'>" + 
		"<input type='text' name='specName[]' placeholder='nume specificatie'>" +
		"<input type='text' name='specValue[]' placeholder='valoare specificatie'>" +
		"<button class='deleteInput' type='button' id='" + i + "'>Sterge</button>" +
		"</div>";
		
		$('#inputsWrapper').append(html);
	});

	//removing input
	$('body').on('click', '.deleteInput', function(){

		var id = $(this).attr('id');
		$('#row' + id + '').remove(); 
	});

	// //submiting the form
	$('body').on('click', '#submitSpecsForm', function(event){

	 	event.preventDefault();

	 	$.ajax({
	 		url: 'php_scripts/add_products_script.php',
	 		method: 'POST',
	 		data: $('#specsForm').serialize(),
	 		success: function(response) {
	 			$('.warning-div').html(response);
	 			$('#specsForm')[0].reset();
	 		}
	 	});
	});


	//add administrator
	$('body').on('click', '#submitAdmin', function(event){

		event.preventDefault();

		var firstName = $("#adminFirstName").val();
		var lastName = $("#adminName").val();
		var username = $("#username").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var password = $("#password").val();

		$.ajax({
			url: 'php_scripts/add_admin_script.php',
			method: 'POST',
			data: {
				adminSubmited: 1,
				firstName: firstName, 
				lastName: lastName, 
				username: username, 
				email: email,
				phone, phone,
				password: password
			}, 
			success: function(response) {
				$('.table-container').load('views/admins_table_view.php');
				$('.warning-div').html(response);
				$('#adminForm')[0].reset();
			}
		});
	});

	//delete administrator
	$('body').on('click', '.delete-admin', function(event){

		event.preventDefault();

		var adminId = $(this).attr('id');

		$.ajax({
			url: 'php_scripts/add_admin_script.php',
			method: 'POST',
			data: {
				adminDeleted: 1,
				adminId: adminId
			}, 
			success: function(response){
				$('.table-container').load('views/admins_table_view.php');
			}
		});
	});

	//delete message
	$('body').on('click', '.delete-msg', function(){

		var id = $(this).attr('id');
		//alert('clicked');

		$.ajax({
			url: 'php_scripts/send_message_script.php',
			method: 'POST',
			data: {
				msgDeleted: 1,
				id: id
			},
			success: function(response){
				$('#content').load('views/dashboard_view.php');
			}
		});
	});

	//delete product 
	$('body').on('click', '.deleteProduct', function(){

		var id = $(this).attr('id');
		//alert('clicked');

		$.ajax({
			url: 'php_scripts/add_products_script.php',
			method: 'POST',
			data: {
				productDeleted: 1,
				id: id
			},
			success: function(response){
				$('#content').load('views/products_list_view.php');
			}
		});
	});

	//adding popular products
	$('body').on('click', '#addPopProducts', function(event){

		event.preventDefault();

		var code1 = $('#code1').val();
		var code2 = $('#code2').val();
		var code3 = $('#code3').val();

		$.ajax({
			url: 'php_scripts/pop_products_script.php',
			method: 'POST',
			data: {
				productAdded: 1,
				code1: code1,
				code2: code2,
				code3: code3
			},
			success: function(response) {
				$('.warning-div').html(response);
				$('.table-container').load('views/pop_products_view.php');
			}
		});
	});

	//delete popular products
	$('body').on('click', '.deletePopProduct', function(event){

		event.preventDefault();

		var id = $(this).attr('id');
		//alert('clicked');

		$.ajax({
			url: 'php_scripts/pop_products_script.php',
			method: 'POST',
			data: {
				productDeleted: 1,
				id: id
			},
			success: function(response){
				$('.table-container').load('views/pop_products_view.php');
			}
		});
	});

	//update account 
	$('body').on('click', '#updateAccount', function(event) {

		event.preventDefault();

		var firstName = $("#firstName").val();
		var lastName = $("#lastName").val();
		var username = $("#username").val();
		var phone = $("#phone").val();
		var email = $("#email").val();

		$.ajax({
			url: 'php_scripts/user_settings.php',
			method: 'POST',
			data: {
				updated: 1,
				firstName: firstName,
				lastName: lastName, 
				username: username,
				email: email,
				phone: phone
			},
			success: function(response) {
				$('.warning-div').html(response);
				alert("Contul a fost actualizat!");
				$("#userUpdateAccount")[0].reset();
			}
		});
	});

	$('body').on('click', '#changePassword', function(event) {

		event.preventDefault();

		var password = $("#password").val();

		$.ajax({
			url: 'php_scripts/user_settings.php',
			method: 'POST',
			data: {
				updatedPassword: 1,
				password: password
			},
			success: function(response) {
				$('.warning-div').html(response);
				alert("Contul a fost actualizat!");
				$("#passwordUpdateForm")[0].reset();
			}
		});
	});
}); //end 