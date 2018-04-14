<?php 

	if(isset($_POST['logout']) && $_POST['logout'] == 1) {
		
		$_SESSION = array();

		session_destroy();

		header("location:../login.php");
	}

?>