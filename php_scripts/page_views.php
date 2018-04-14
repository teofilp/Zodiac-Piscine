<?php
	
	include "database.php";

    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else{
      $ip=$_SERVER['REMOTE_ADDR'];
    }

    $query = $database->prepare("SELECT * FROM visitors WHERE ip_address = :ip");
    $query->bindParam(":ip", $ip);
    $query->execute();


    if($query->rowCount() == 0) {

    	$insert = $database->prepare("INSERT INTO visitors (id, ip_address) VALUES (NULL, :ip)");
    	$insert->bindParam(":ip", $ip);
    	$insert->execute();
    }

?>