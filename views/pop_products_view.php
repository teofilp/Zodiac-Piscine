<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nume</th>
	      <th scope="col">Cod Produs</th>
	      <th scope="col">Imagine</th>
	      <th></th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php 
	    	include '../php_scripts/database.php';

	    	$query = $database->query("SELECT * FROM popular_products");
	    	$query->execute();

	    	while($row = $query->fetch(PDO::FETCH_ASSOC)) {

	    		echo "<tr><td> " . $row['id'] . "</td><td> " . $row['name'] . "</td>" .
	    			 "<td>" . $row['code'] . "</td>" .
	    			 "<td>" . "<img width='130' height='80' src='images/" . $row['image'] . "'>" . "</td>" .
	    			 "</td><td><button class='btn btn-danger deletePopProduct' id='" . $row['id'] . "'>Sterge</button></td></tr>";
	    	}
	     ?>
	  </tbody>
	</table>