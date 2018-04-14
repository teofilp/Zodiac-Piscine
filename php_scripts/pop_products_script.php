<?php 
	
	include 'database.php';

	if(isset($_POST['productAdded']) && $_POST['productAdded'] == 1) {

		$code1 = $_POST['code1'];
		$code2 = $_POST['code2'];
		$code3 = $_POST['code3'];

		$query1 = $database->prepare("SELECT * FROM products WHERE code = :code");
		$query1->bindParam(':code', $code1);
		$query1->execute();

		while($row = $query1->fetch(PDO::FETCH_ASSOC)) {
			$id1 = $row['id'];
			$name1 = $row['name'];
			$productCode1 = $row['code'];
			$image1 = $row['image'];
			$description1 = $row['description'];

		}

		$query2 = $database->prepare("SELECT * FROM products WHERE code = :code");
		$query2->bindParam(':code', $code2);
		$query2->execute();

		while($row = $query2->fetch(PDO::FETCH_ASSOC)) {
			$id2 = $row['id'];
			$name2 = $row['name'];
			$productCode2 = $row['code'];
			$image2 = $row['image'];
			$description2 = $row['description
		}'];


		$query3 = $database->prepare("SELECT * FROM products WHERE code = :code");
		$query3->bindParam(':code', $code3);
		$query3->execute();

		while($row = $query3->fetch(PDO::FETCH_ASSOC)) {
			$id3 = $row['id'];
			$name3 = $row['name'];
			$productCode3 = $row['code'];
			$image3 = $row['image'];
			$description3 = $row['description'];

		}

		if($query1->rowCount() == 0 || $query2->rowCount() == 0 || $query3->rowCount() == 0) {

			echo "<h3>Cod produs introdus gresit!</h3>";
		} else {

			$query = $database->prepare("INSERT INTO popular_products (id, name, code, image, description) VALUES (NULL, :name1, :code1, :image1, :description1), (NULL, :name2, :code2, :image2, :description2), (NULL, :name3, :code3, :image3, :description3)");
			$query->bindParam(':code1', $productCode1);
			$query->bindParam(':name1', $name1);
			$query->bindParam(':image1', $image1);
			$query->bindParam(':description1', $description1);
			$query->bindParam(':code2', $productCode2);
			$query->bindParam(':name2', $name2);
			$query->bindParam(':image2', $image2);
			$query->bindParam(':description2', $description2);
			$query->bindParam(':code3', $productCode3);
			$query->bindParam(':name3', $name3);
			$query->bindParam(':image3', $image3);
			$query->bindParam(':description3', $description3);
			$query->execute();
		}
	}

	if(isset($_POST['productDeleted']) && $_POST['productDeleted'] == 1) {

		$id = $_POST['id'];
		echo $id;

		$query = $database->prepare("DELETE FROM popular_products WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();
	}
 ?>