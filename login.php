<?php 
	ob_start();
	session_start();

	include "php_scripts/database.php";
	include "php_scripts/functions.php";

	if(isset($_POST['loginButton'])) {

		$userName = strip_tags($_POST['userName']);
		$password = strip_tags($_POST['password']);
		$cryptedPassword = cryptPassword($password);

		$loginQuery = $database->prepare('SELECT * FROM admins WHERE username = :username');
		$loginQuery->bindParam(':username', $userName);
		$loginQuery->execute();

		if($loginQuery->rowCount() > 0) {

			while($row = $loginQuery->fetch(PDO::FETCH_ASSOC)) 	{
				$validUserPassword = $row['password']; 

				//setting the sessions with the user info
				$_SESSION['firstName'] = $row['first_name'];
				$_SESSION['lastName'] = $row['last_name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['phone'] = $row['phone'];
				$_SESSION['id'] = $row['id'];
			}

			if($cryptedPassword == $validUserPassword) {

				$_SESSION['username'] = $userName;
				header("location: administrator.php");
			} else {

				//invailid password case
				$message = "<div class='warning-div'><h3>Parola incorecta!</h3></div>";
				echo $message;
			}
		} else {

			//invalid username case
			$message = "<div class='warning-div'><h3>Nume utilizator incorect!</h3></div>";
			echo $message;
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Zodiac RO - Log In</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Barlow|Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Open+Sans+Condensed:300" rel="stylesheet">

	<!-- Ionicons CSS style sheet -->
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">

	<!-- CSS Scripts -->
	<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>
	<div id="wrapper">
		<a style="text-decoration: none;" href="index.html"><i class="ion-android-home"></i> Acasa</a>
		<div class="overlay"></div>
		<div id="loginFormContainer">
			<h1 class="title">Log In Admin</h1>
			<form action="" method="POST">
				<div class="input-wrapper">
					<input placeholder="username" type="text" name="userName" id="userName">
					<i class="ion-person"></i>
				</div>
				<div class="input-wrapper">
					<input placeholder="password" type="password" name="password" id="password">
					<i class="ion-locked"></i>
				</div>
				<div class="input-wrapper">
					<button type="submit" name="loginButton" id="loginButton">Log In</button>
				</div>
				<span class="clearfix"></span>
			</form>
		</div>	
	</div>
	
	<!-- jQuery CDN -->
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>

	  <script type="text/javascript">
	  	$(document).ready(function(){

	  		$('body').on('click', '#loginButton', function(event){

	  			var username = $("#userName").val();
	  			var password = $("#password").val();

	  			if(username == "" || password == "") {
	  				event.preventDefault();
	  				alert("Completati toate spatiile!");
	  			}
	  		});
	  	});
	  </script>

</body>
</html>