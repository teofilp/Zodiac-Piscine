<?php 
	include 'database.php';
	include 'functions.php';

	if(isset($_POST['adminSubmited']) && $_POST['adminSubmited'] == 1) {

		$firstName = strip_tags($_POST['firstName']);
		$lastName = strip_tags($_POST['lastName']);
		$username = strip_tags($_POST['username']);
		$email = strip_tags($_POST['email']);
		$phone = strip_tags($_POST['phone']);
		$password = strip_tags(cryptPassword($_POST['password']));

		if($firstName == "" || $lastName == "" || $username == "" || $email == "" || $phone == "" || $password == "") {
			echo "<h3>Completeaza toate spatiile!</h3>";
		} else {
			$query = $database->prepare("INSERT INTO admins (id, first_name, last_name, username, phone, email, password, type) VALUES (NULL, :first_name, :last_name, :username, :phone, :email, :password, 2)");
				$query->bindParam(':first_name', $firstName);
				$query->bindParam(':last_name', $lastName);
				$query->bindParam(':username', $username);
				$query->bindParam(':phone', $phone);
				$query->bindParam(':email', $email);
				$query->bindParam(':password', $password);
				$query->execute();
		}
	}

	if(isset($_POST['adminDeleted']) && $_POST['adminDeleted'] == 1) {

		$adminId = $_POST['adminId'];

		$query = $database->prepare("DELETE FROM admins WHERE id = :adminId");
		$query->bindParam(':adminId', $adminId);
		$query->execute();
	}
?>