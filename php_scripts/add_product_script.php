<?php 

	include 'database.php';

	if(isset($_POST['productCode'])) {

		$code =  $_POST['productCode'];
		$name = $_POST['productName'];
		$cat = strtolower($_POST['productCategory']);
		$subcat = strtolower($_POST['productSubcategory']);
		$description = $_POST['productDescription'];

		//iamge
		$imageName = $_FILES['productImage']['name'];
		$imageCurrentPath = $_FILES['productImage']['tmp_name'];
		$imageTargetPath = '../images/' . $imageName;

		move_uploaded_file($imageCurrentPath, $imageTargetPath);

		//product pdf
		$pdfDoc = $_FILES['productPDF']['name'];
		$pdfDocCurrentPath = $_FILES['productPDF']['tmp_name'];
		$pdfDocTargetPath = '../pdf/' . $pdfDoc;

		move_uploaded_file($pdfDocTargetPath, $pdfDocCurrentPath);

		//guarantee
		$guarantee = $_FILES['guaranteePDF']['name'];
		$guaranteeCurrentPath = $_FILES['guaranteePDF']['tmp_name'];
		$guaranteeTargetPath = '../pdf/' . $guarantee;

		move_uploaded_file($guaranteeCurrentPath, $guaranteeTargetPath);

		$query = $database->prepare('INSERT INTO products (id, name, code, category, subcategory, description, image, pdf, guarantee) VALUES (NULL, :name, :code, :cat, :subcat, :description, :image, :pdf, :guarantee)');
		$query->bindParam(':name', $name);
		$query->bindParam(':code', $code);
		$query->bindParam(':cat', $cat);
		$query->bindParam(':subcat', $subcat);
		$query->bindParam(':description', $description);
		$query->bindParam(':image', $imageName);
		$query->bindParam(':pdf', $pdfDoc);
		$query->bindParam(':guarantee', $guarantee);
		$query->execute();
	}
?>