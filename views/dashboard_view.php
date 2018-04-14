<?php 
include '../php_scripts/database.php'; 
ob_start(); ?>

<div class="warning-div"></div>
<div id="adminInfo">
	<div class="info traffic-info">
		<div class="icon-wrapper">
			<i class="ion-ios-people-outline"></i>
		</div>
		<div class="number-wrapper">
			<h1 style="font-family: 'Quicksand', sans-serif;" class="number">	<?php 	
					
					$query = $database->query("SELECT * FROM visitors");
					$query->execute();

					echo $query->rowCount();
				 ?></h1>
			<h1 class="info-title">Vizualuzari Pagina</h1>
		</div>
		<div class="bottom-bar"></div>
	</div>
	<div class="info products-info">
		<div class="icon-wrapper">
			<i class="ion-ios-cart-outline"></i>
		</div>
		<div class="number-wrapper">
			<h1 style="font-family: 'Quicksand', sans-serif;" class="number">
			<?php 	
					$query = $database->query("SELECT * FROM products");
					$query->execute();

					echo $query->rowCount();
				 ?></h1>
			<h1 class="info-title">Nr. Produse</h1>
		</div>
		<div class="bottom-bar"></div>
	</div>
	<div class="info admins-info">
		<div class="icon-wrapper">
			<i class="ion-earth"></i>
		</div>
		<div class="number-wrapper">
			<h1 style="font-family: 'Quicksand', sans-serif;" class="number">
				<?php 	
					$query = $database->query("SELECT * FROM admins");
					$query->execute();

					echo $query->rowCount();
				 ?>
			</h1>
			<h1 class="info-title"> Adminstratori</h1>
		</div>
		<div class="bottom-bar"></div>
	</div>
</div>
<div id="canvasWrapper">
	<h1 class="view-title">Mesaje  Clienti</h1>
	<div class="table-container">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Prenume</th>
		      <th scope="col">Nume</th>
		      <th scope="col">Telefon</th>
		      <th scope="col">Email</th>
		      <th scope="col">Mesaj</th>
		      <th></th>
		      <th></th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 
	    	include '../php_scripts/database.php';

	    	$query = $database->query("SELECT * FROM messages");
	    	$query->execute();

	    	while($row = $query->fetch(PDO::FETCH_ASSOC)) {

	    		echo "<tr><td> " . $row['id'] . "</td><td> " . $row['first_name'] . "</td>" .
	    			"<td> " . $row['last_name'] . "</td>" .
	    			"<td> " . $row['email'] . "</td>" .
	    			"<td> " . $row['phone'] . "</td>" .
	    			"<td> " . $row['message'] . "</td><td><button class='btn btn-danger delete-msg' id='" . $row['id'] . "'>Sterge</button></td></tr>";
	    	}

	     ?>
		  </tbody>
		</table>
	</div>
</div>