<?php 
	ob_start(); 
?>
<div class="warning-div"></div>
<h1 class="view-title">Administratori Zodiac</h1>
<div class="table-container">
	<?php include 'admins_table_view.php'; ?>
</div>

<div class="form-wrapper full-width">
	<h2 class="subtitle">Adauga Administrator</h2>
	<form action="" ="" method="POST" id="adminForm">
		<div class="input-label-wrapper">
			<label for="adminName">Nume: </label>
			<input type="text" name="adminFirstName" id="adminName">
		</div>

		<div class="input-label-wrapper">
			<label for="adminFirstName">Prenume: </label>
			<input type="text" name="adminName" id="adminFirstName">
		</div>

		<div class="input-label-wrapper">
			<label for="username">Nume utilizator: </label>
			<input type="text" name="username" id="username">
		</div>

		<div class="input-label-wrapper">
			<label for="email">Email: </label>
			<input type="email" name="email" id="email">
		</div>

		<div class="input-label-wrapper">
			<label for="phone">Telefon:</label>
			<input type="text" name="phone" id="phone">
		</div>

		<div class="input-label-wrapper">
			<label for="password">Parola:</label>
			<input type="text" name="password" id="password">
		</div>

		<div class="input-label-wrapper">
			<button type="submit" name="submitAdmin" id="submitAdmin" class="submitProductDescription">Adauga Admin</button>
		</div>
	</form>
</div>