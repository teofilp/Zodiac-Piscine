<?php 	
	
	//echo cryptPassword("thiscryptisinvdopeel2uP6bIh1InX4JqP4DEX4VxWOFwKPHu96O");
	//function for encrypting the password 
	function cryptPassword($userPassword) {

		$hashFromat = "$2y$10$";
		$salt = "thiscryptisinvdopeel22";
		
		//combining the hashFormat and the salt for better security
		$cryptString = $hashFromat . $salt;

		$encryptedPassword = crypt($userPassword, $cryptString);

		return $encryptedPassword;
	}
?>