<?php 
	include '../php_scripts/database.php';
	ob_start();
	session_start(); 
	
	$username = $_SESSION['username'];
	$firstName = $_SESSION['firstName'];
	$lastName = $_SESSION['lastName'];
	$email = $_SESSION['email'];
	$phone = $_SESSION['phone'];
?>

<div class="warning-div"></div>
<h1 class="view-title">Setari Administrator</h1>
<div class="form-wrapper">
	<h2 class="subtitle">Contul Meu</h2>
	<form  method='post' action='' id='userUpdateAccount'>
		<div class="input-label-wrapper">
			<label for="productCode">Prenume:</label>
			<input type="text" required="true" value="<?php echo $firstName; ?>" name="firstName" id="firstName">
		</div>

		<div class="input-label-wrapper">
			<label for="productName">Nume:</label>
			<input type="text" required="true" value="<?php echo $lastName; ?>" name="lastName" id="lastName">
		</div>

		<div class="input-label-wrapper">
			<label for="productCategory">Nume utilizator:</label>
			<input type="text" required="true" value="<?php echo $username; ?>" name="username" id="username">
		</div>

		<div class="input-label-wrapper">
			<label for="productCategory">Nr telefon:</label>
			<input type="text" required="true" value="<?php echo $phone; ?>" name="phone" id="phone">
		</div>

		<div class="input-label-wrapper">
			<label for="productCategory">Email:</label>
			<input type="text" required="true" value="<?php echo $email; ?>" name="email" id="email">
		</div>

		<div class="input-label-wrapper">
			<button style="margin-bottom: 50px;" type="submit" name="updateAccount" class="submitProductDescription" class="submitProductDescription" id="updateAccount">Actualizeaza</button>
		</div>
	</form>
</div>
<div class="form-wrapper">
	<h2 class="subtitle">Schimba Parola</h2>
	<form  method='POST' action='' id='passwordUpdateForm' enctype='multipart/form-data'>

		<div class="input-label-wrapper">
			<label for="productCategory">Parola Noua:</label>
			<input type="text" name="password" required="true" id="password">
		</div>

		<div class="input-label-wrapper">
			<button style="margin-bottom: 50px;" type="submit" name="updateAccount" class="submitProductDescription" class="submitProductDescription" id="changePassword">Schimba Parola</button>
		</div>
	</form>