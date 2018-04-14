<?php ob_start(); ?>
<div class="warning-div"></div>
<h1 class="view-title">Lista Produse Zodiac</h1>
<div class="table-container">
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Cod Produs</th>
	      <th scope="col">Nume</th>
	      <th scope="col">Categorie</th>
	      <th scope="col">Subcategorie</th>
	      <th scope="col">Imagine</th>
	      <th></th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php 

	    	include '../php_scripts/database.php';

	    	$query = $database->query("SELECT * FROM products");
	    	$query->execute();

	    	while($row = $query->fetch(PDO::FETCH_ASSOC)) {

	    		$source = "images/" . $row['image'];

	    		echo "<tr><td> " . $row['id'] . "</td><td> " . $row['code'] . "</td>" .
	    			"<td> " . $row['name'] . "</td>" .
	    			"<td> " . $row['category'] . "</td>" .
	    			"<td> " . $row['subcategory'] . "</td>" .
	    			"<td><img width='130' height='80' src='" . $source . "'></td>" .
	    			"<td><button class='btn btn-danger deleteProduct' id='" . $row['id'] . "'>Sterge</button></td></tr>";
	    	}

	     ?>

	  </tbody>
	</table>
</div>