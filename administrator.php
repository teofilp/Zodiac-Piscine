 <?php 
	ob_start();
	session_start();
	include "php_scripts/database.php";
	

	if(isset($_POST['logout'])) {
		
		$_SESSION = array();

		session_destroy();

		header("location:login.php");
	}

 ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Zodiac RO - Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width initial-scale=1">

	<!-- Charts.js CDN -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Barlow|Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Open+Sans+Condensed:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

	<!-- Ionicons CSS style sheet -->
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="styles/administrator.css">
</head>
	<?php if(isset($_SESSION['username'])) { $username = $_SESSION['username'];?> 

	<header>
		<nav>
			<h3 id="navTitle">Welcome, <span><?php echo  $username; ?></span></h1>
			<ul id="navList">
				<li><a href="index.php"><i class="ion-android-home"></i> Acasa</a></li>
				<li><form method='POST' actrion=""><button type="submit" name="logout" id="logoutBtn"><i class="ion-log-out"></i> Log Out</button></form></li>
			</ul>
		</nav>
	</header>
	<body>
		<div id="controlsPanel">
			<ul id="controlsList">
				<li><a class="dashboard-link" onclick="return false;" data-target="dashboard_view" href="#"><i class="ion-stats-bars"></i> Dashboard</a></li>
				<li><a class="dashboard-link" onclick="return false;" data-target="add_products_view" href="#"><i class="ion-android-cart"></i>Creaza Produs</a></li>
				<li><a class="dashboard-link" onclick="return false;" data-target="products_list_view" href="#"><i class="ion-clipboard"></i>Tabel Produse</a></li>
				<li><a class="dashboard-link" onclick="return false;" data-target="admins_view" href="#"><i class="ion-ios-people"></i> Administratori</a></li>
				<li><a class="dashboard-link" onclick="return false;" data-target="popular_products_view" href="#"><i class="ion-ribbon-b"></i>Produse Populare</a></li>
				<li><a class="dashboard-link" onclick="return false;" data-target="user_settings_view" href="#"><i class="ion-ios-gear"></i>Setari Cont</a></li>
			</ul>
		</div>

		<div id="content">
			 <div class="warning-div"></div>
<div id="adminInfo">
	<div class="info traffic-info">
		<div class="icon-wrapper">
			<i class="ion-ios-people-outline"></i>
		</div>
		<div class="number-wrapper">
			<h1 style="font-family: 'Quicksand', sans-serif;" class="number"><?php 
					$query = $database->query("SELECT * FROM visitors");
					$query->execute();

					echo $query->rowCount(); ?></h1>
			<h1 class="info-title">Vizitatori</h1>
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
					//include 'php_scripts/database.php';
					$query = $database->query("SELECT * FROM products");
					$query->execute();

					echo $query->rowCount();
				 ?> 
			</h1>
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
					//include 'php_scripts/database.php';
					$query = $database->query("SELECT * FROM admins");
					$query->execute();

					echo $query->rowCount();
				 ?> 
			</h1>
			<h1 class="info-title"> Administratori</h1>
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
	    	include 'php_scripts/database.php';

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
		</div> <!-- #content end -->

		 <?php } else { ?>
		 <h1>Restricted acces. Please leave this page.</h1>
		<?php } ?>

		<!-- jQuery CDN -->
		<script
		  src="https://code.jquery.com/jquery-3.2.1.min.js"
		  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"> 	
		 </script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
		crossorigin="anonymous"></script>

		<!-- My Scripts -->
	
	 	<script type="text/javascript" src="javascript/upload_product.js"></script>
	 	<script type="text/javascript" src="javascript/admin_main.js"></script>

	</body>
</html>