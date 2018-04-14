<?php 
	session_start();
	ob_start();

	$username = $_SESSION['username'];
	//echo $username;
 ?>
<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Prenume</th>
	      <th scope="col">Nume</th>
	      <th scope="col">Username</th>
	      <th scope="col">Telefon</th>
	      <th scope="col">Email</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
	   <?php 

	   		include '../php_scripts/database.php';

	   		$query = $database->query('SELECT * FROM admins');
	   		$query->execute();

	   		while($row = $query->fetch(PDO::FETCH_ASSOC)) {

	   			echo  "<tr><td> " . $row['id'] . "</td>" .
	    			"<td> " . $row['first_name'] . "</td>" .
	    			"<td> " . $row['last_name'] . "</td>" . 
	    			"<td> " . $row['username'] . "</td>" . 
	    			"<td> " . $row['phone'] . "</td>";
	    			; 
	    			
	    			if($username == "lupasserban" || $username == "lupascirpian") {
	    				echo "<td> " . $row['email'] . "</td><td><button class='btn btn-danger delete-admin' id = '" . $row['id'] . "'>Sterge</button></td>";
	    			} else {
	    				echo "<td> " . $row['email'] . "</td></tr>";
	    			}
	   		}

	    ?>
	  </tbody>
	</table>