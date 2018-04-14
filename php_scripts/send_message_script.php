<?php 
	
	include 'database.php';

	if(isset($_POST['messageSent']) && $_POST['messageSent'] == 1) {

		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		if($firstName == "" || $lastName == "" || $phone == "" || $email == "" || $message == "") {
			echo "<h3>Completati toate spatiile!<h3>";
		} else {

			$query = $database->prepare("INSERT INTO messages (id, first_name, last_name, email, phone, message) VALUES (NULL, :firstName, :lastName, :email, :phone, :message)");
			$query->bindParam(':firstName', $firstName);
			$query->bindParam(':lastName', $lastName);
			$query->bindParam(':email', $email);
			$query->bindParam(':phone', $phone);
			$query->bindParam(':message', $message);
			$query->execute();

			echo "<h3>Mesajul a fost trimis!</h3>";
		}
	}


	if(isset($_POST['msgDeleted']) && $_POST['msgDeleted'] == 1) {

		$id = $_POST['id'];

		$query = $database->prepare('DELETE FROM messages WHERE id = :id');
		$query->bindParam(':id', $id);
		$query->execute();
	}
?>