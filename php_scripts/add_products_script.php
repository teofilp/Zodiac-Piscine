<?php 	

	include 'database.php';


	//adding specificatoins
	if(isset($_POST['productCodeSpecs'])) {

		$code = $_POST['productCodeSpecs'];
		$nameCount = count($_POST['specName']);
		$valueCount = count($_POST['specValue']);

		for($i = 0; $i < $nameCount; $i++) {
			if($code == "" || $_POST['specValue'][$i] == "" || $_POST['specName'] == "") {
				echo "<h3>Completeaza toate spatiile!</h3>";
				// break;
			} else {
				$query = $database->prepare("INSERT INTO specifications (id, product_code, spec_name, spec_value) VALUES (NULL, :code, :specName, :specValue)");
				$query->bindParam(':code', $code);
				$query->bindParam(':specName', $_POST['specName'][$i]);
				$query->bindParam(':specValue', $_POST['specValue'][$i]);
				$query->execute();
			}
		}
	}

	if(isset($_POST['productDeleted']) && $_POST['productDeleted'] == 1) {

		echo "Am ajuns in delete if";

		$id = $_POST['id'];

		echo $id;

		$query = $database->prepare("DELETE FROM products WHERE id = :id");
		$query->bindParam(':id', $id);
		$query->execute();
	}

?>