<?php ob_start(); ?>
<div class="warning-div"></div>
<h1 class="view-title">Setari Administrator</h1>
<div class="table-container">
	<?php include "pop_products_view.php"; ?>
</div>
<div class="form-wrapper">
	<h2 class="subtitle">Adauga COD produs</h2>
	<form  method='POST' action='' id='postsForm' enctype='multipart/form-data'>
		<div class="input-label-wrapper">
			<label for="productCode">Cod Produs 1:</label>
			<input type="text" required="true" name="code1" id="code1">
		</div>

		<div class="input-label-wrapper">
			<label for="productName">Cod Produs 2:</label>
			<input type="text" required="true" name="code2" id="code2">
		</div>

		<div class="input-label-wrapper">
			<label for="productCategory">Cod Produs 3:</label>
			<input type="text" required="true" name="code3" id="code3">
		</div>


		<div class="input-label-wrapper">
			<button style="margin-bottom: 50px;" type="submit" onclick="return false;" name="addPopProducts" class="submitProductDescription" id="addPopProducts">Adauga</button>
		</div>
	</form>
</div>