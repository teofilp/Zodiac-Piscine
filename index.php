<?php 
	include "php_scripts/database.php";
	include "php_scripts/page_views.php";
	include "php_scripts/search_product.php";
	ob_start();
?>
<!DOCTYPE html>
<html> 
<head>
	<title>Zodiac Piscine RO</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Barlow|Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Open+Sans+Condensed:300" rel="stylesheet">

	<!-- Ionicons CSS style sheet -->
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">

	<!-- CSS style sheets -->

	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/nav-footer.css">
	<script type="text/javascript"></script>
</head>
<body>
	<header>
		<div id="afterNav">
			<h4 id="websiteBrand"><a href="index.php">www.zodiac-piscine.ro </a> | Acasa</h4>
			<div id="mediaLinks">
				<div class="media-link fb">
					<i class="ion-social-facebook"></i>
				</div>
				<div class="media-link twt">
					<i class="ion-social-twitter"></i>
				</div>
				<div class="media-link google">
					<i class="ion-social-google"></i>
				</div>
			</div>
		</div>
		<nav>



			<div id="logo"></div>
			<div id="formWrapper">
				<form id="searchForm" method="POST" action="">
					<input type="text" name="searchInput" id="searchInput" placeholder="cauta un produs...">
					<button type="submit" id="search" name="search"><i class="ion-ios-search-strong"></i></button>
				</form>
			</div>
			<ul id="navigationList">
				<li class="navigation-list-item"><a class="active" href="index.php"><i class="ion-android-home"></i> Acasa</a></li>
				<li class=" navigation-list-item">
					<a href="">Produse</a>
				</li>
				<li class="navigation-list-item"><a href="contact.html">Contact</a></li>
			</ul>
			<div id="dropDownMenuButton">
				<i class="ion-navicon"></i>
			</div>
			<div id="dropDownMenu">
				<ul id="dropDownMenuList">
					<li style="border-top: 2px solid rgb(46, 109, 164);" class="dpListItem"><a href="index.php">Acasa</a></li>
					<li class="dpListItem"><a href="">Produse</a></li>
					<li class="dpListItem"><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- Responsive Image Slider -->
	<div class="cycle-slideshow">
		<div  class="overlay"></div>
		<span class="cycle-prev" >&#9001;</span>
		<span class="cycle-next">&#9002;</span>
	 	 <span class="cycle-pager"></span> 
		<img src="images/slider1.jpeg" alt="No Image Found">
		<img src="images/slider5.jpeg">
		<img src="images/slider2.jpeg" alt="No Image Found">
		<img src="images/slider3.jpeg" alt="No Image Found">
	</div>

	<!-- About Us Section -->

	<div id="aboutUsSection">
		<div class="title-container">
			<h1 class="centered-title">Despre noi.</h1>
			<h1 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non lacus mauris. Etiam rutrum erat et arcu laoreet auctor. Integer dictum, velit vitae aliquet tristique, mauris nunc rhoncus tellus, vel finibus velit mauris at enim. </h1>
		</div>
	</div>

	<div class="section-image">
		<div id="imageSectionTitleContainer">
			<h1 id="sectionImageTitle">De ce noi?</h1>
		</div>

		<div id="aboutTextContainer">
			<div class="about-thumbnail" id="first">
				<div class="thumbnail-image">
					<span class="glyphicon glyphicon-user"></span>
				</div>
				<div class="thumbnail-text">
					<p class="text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non lacus mauris. Etiam rutrum erat et arcu laoreet auctor. Integer dictum, velit vitae aliquet tristique, mauris nunc rhoncus tellus, vel finibus velit mauris at enim.

					</p>
				</div>
			</div>
			<div class="about-thumbnail" id="second">
				<div class="thumbnail-image">
					<span class="glyphicon glyphicon-phone"></span>
				</div>
				<div class="thumbnail-text">
					<p class="text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non lacus mauris. Etiam rutrum erat et arcu laoreet auctor. Integer dictum, velit vitae aliquet tristique, mauris nunc rhoncus tellus, vel finibus velit mauris at enim.

					</p>
				</div>
			</div>
			<div class="about-thumbnail" id="third">
				<div class="thumbnail-image">
					<span class="glyphicon glyphicon-ok"></span>
				</div>
				<div class="thumbnail-text">
					<?php echo "<p class='text'>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non lacus mauris. Etiam rutrum erat et arcu laoreet auctor. Integer dictum, velit vitae aliquet tristique, mauris nunc rhoncus tellus, vel finibus velit mauris at enim.
					</p>"; ?>
				</div>
			</div>
		</div>
		<div class="overlay"></div>		
	</div>

	<div id="bestSoldProductsSection"> 
		<h1 id="productsTitle" class="centered-title">Produse populare.</h1>

		<div id="productsContainer">

			<?php  
				 include "php_scripts/database.php";
				 $query = $database->query("SELECT * FROM popular_products LIMIT 3");
				 $query->execute();


				 while($row = $query->fetch(PDO::FETCH_ASSOC)) {

				 	$source = "images/" . $row['image'];

				 	echo "<div class='produs-div'>
					<a style='text-decoration: none;' href='produse.php'><img class='produs-img' src='" . $source . "'>
					<div class='detalii-produs'>
						<h3 class='titlu-produs'>" . $row['name'] . "</h3>
						<div class='specs-produs'>". $row['description'] ."</div>
						
						<div class='cod-produs-div'>
							<h4>cod produs: " . $row['code'] . "</h4>
						</div>
						<div class='cumpara-acum'>
							<a style='text-decoration: none;' href='#'>Cumpara acum</a>
						</div>
					</div>
					</a>
				</div>"; 
				 }
			?>
			<span class="clearfix"></span>
		</div>
		<span class="clearfix"></span>
	</div>



	<div id="locationsContainer">
			<div id="map-cj"></div>
		</div>
	<footer>
		<div id="moreInfo">
			<h1 class="footer-section-title">Mai Multe Despre Noi</h1>
			<p id="moreInfoParagraph">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non lacus mauris. Etiam rutrum erat et arcu laoreet auctor. Integer dictum, velit vitae aliquet tristique, mauris nunc rhoncus tellus, vel finibus velit mauris at enim.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			</p>
			<p id="byPerson">by Modure Rares</p>
		</div>
		<div id="listsContainer">
			<h1 class="footer-section-title">Tinem Legatura</h1>
			<ul id="mediaList">
				<li><a href="#"><div class="fb-logo media-link-logo"><i class="ion-social-facebook fb-i"></i></div></a><p> Like pe Facebook</p></li>
				<li><a href="#"><div class="tw-logo media-link-logo"><i class="ion-social-twitter tw-i"></i></div></a><p> Follow pe Twitter</p></li>
				<li><a href="#"><div class="gp-logo media-link-logo"><i class="ion-social-googleplus gp-i"></i></div></a><p> Adauga-ne pe Google+</p></li>
				<li><a href="#"><div class="pi-logo media-link-logo"><i class="ion-social-pinterest pi-i"></i></div></a><p> Follow pe Pinterest</p></li>
				<li><a href="#"><div class="ln-logo media-link-logo"><i class="ion-social-linkedin ln-i"></i></div></a><p> Adauga-ne pe LinkedIn</p></li>
			</ul>
		</div>
		<div id="contactListContainer">
			<h1 class="footer-section-title">Informatii de Contact</h1>
			<ul id="contactList">
				<li><i class="ion-android-home"></i><p> str Lorem nr. 10</p></li>
				<li><i class="ion-iphone"></i> <p> Suna-ne: 0788888888</p></li>
				<li><i class="ion-email"></i> <p>exempluemail@zodiac.ro</p></li>
			</ul>
		</div>
      	<div id="allRightsReserved">
      		<p>&copy; 2010 All rights reserved.</p>
      	</div>
	</footer>

	<!-- jQuery CDN -->
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
	  
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
	crossorigin="anonymous"></script>

	  
	<script type="text/javascript" src="javascript/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="javascript/maps.js"></script>
	<script type="text/javascript" src="javascript/animations.js"></script>
	<script 
	  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGGys-ed8VkVOY-7rFpLv9DdDEJlApTs0&callback=initMap">
	  </script>
</body>
</html>