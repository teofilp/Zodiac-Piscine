<?php 
		try {
		$database = new PDO("mysql:dbname=zodiac;host=localhost", "root", "");
	} catch (Exception $e) {
		echo "Sorry an error has occured. Check your internet connetction and try again.";
	}

	//echo cryptPassword("parola");
 ?>

 