<?php ob_start(); ?>
<div class="warning-div"></div>
<h1 class="view-title">Produse Zodiac</h1>
			<div class="form-wrapper">
				<h2 class="subtitle">Informatii Produs</h2>
				<form  method='POST' action='' id='postsForm' enctype='multipart/form-data'>
					<div class="input-label-wrapper">
						<label for="productCode">Cod Prouds:</label>
						<input type="text" required="true" name="productCode" id="productCode">
					</div>

					<div class="input-label-wrapper">
						<label for="productName">Nume Produs:</label>
						<input type="text" required="true" name="productName" id="productName">
					</div>

					<div class="input-label-wrapper">
						<label for="productCategory">Categorie Produs:</label>
						<input type="text" required="true" name="productCategory" id="productCategory">
					</div>

					<div class="input-label-wrapper">
						<label for="productCategory">Subcategorie Produs:</label>
						<input type="text" name="productSubcategory" required="true" id="productSubcategory">
					</div>

					<div class="input-label-wrapper">
						<label for="productImage" style="width: 100%;">Imagine Produs:</label>
						<input type="file" required="true" name="productImage" id="productImage">
					</div>

					<div class="input-label-wrapper">
						<label for="productPDF" style="width: 100%;">Document PDF:</label>
						<input type="file" required="true" name="productPDF" id="productPDF">
					</div>

					<div class="input-label-wrapper">
						<label for="guaranteePDF" style="width: 100%;">Garantie PDF:</label>
						<input type="file" required="true" name="guaranteePDF" id="guaranteePDF">
					</div>

					<div class="input-label-wrapper">
						<label for="productDescription" style="width: 100%;">Detalii Produs:</label>
						<textarea type="text" required="true" name="productDescription" id="productDescription"></textarea>
					</div>

					<div class="input-label-wrapper">
						<button style="margin-bottom: 50px;" type="submit" name="submitProductDescription" class="submitProductDescription" id="addProductButton">Adauga Produs</button>
					</div>
				</form>
			</div>

			<div class="form-wrapper">
				<h2 class="subtitle">Specificatii Produs</h2>
				<form action="" method="POST" id="specsForm">
					<button type="button" name="addInputBtn" class="inputBtn" id="addInputBtn">Adauga Rand</button>
					<button style="margin-left: 2%;" type="submit" name="submitSpecsForm" class="inputBtn" id="submitSpecsForm">Adauga Tabel</button>
					<div id="inputsWrapper">
						<div class="input-label-wrapper" id="productCodeInputWrapper">
							<input style="width: 72%; margin-right: 28%;" type="text" placeholder="COD produs" name="productCodeSpecs">
						</div>
						<div class="input-label-wrapper" id="row1">
							<input type="text" placeholder="nume specificatie" name="specName[]">
							<input type="text" placeholder="valoare specificatie" name="specValue[]">
							<button class="deleteInput" type="submit" onclick="return false;" id="1">Sterge</button>
						</div>
					</div>
				</form>
				
			</div>
