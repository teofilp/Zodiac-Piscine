<?php 
	
	session_start();
	$currentUsername = $_SESSION['username'];
	
	include "database.php";
	include "functions.php";

	if(isset($_POST['updated']) && $_POST['updated'] == 1) {

		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
	
		$query = $database->prepare("UPDATE admins SET first_name = :firstName, last_name = :lastName, username= :username,  email = :email, phone = :phone WHERE username = :currentUsername");
		$query->bindParam(":firstName", $firstName);
		$query->bindParam(":lastName", $lastName);
		$query->bindParam(":username", $username);
		$query->bindParam(":email", $email);
		$query->bindParam(":phone", $phone);
		$query->bindParam(":currentUsername", $currentUsername);
		$query->execute();
	}

	if(isset($_POST['updatedPassword']) && $_POST['updatedPassword'] == 1) {

		$updatedPassword = $_POST['password'];
		$updatedPassword = cryptPassword($updatedPassword);

		$query = $database->prepare("UPDATE admins SET password = :newPassword WHERE username = :currentUsername");
		$query->bindParam(":newPassword", $updatedPassword);
		$query->bindParam(":currentUsername", $currentUsername);
		$query->execute();
	}
 ?>