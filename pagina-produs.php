 <?php 
	 include "php_scripts/database.php";
	 include "php_scripts/search_product.php";
	 ob_start();

	 if(isset($_GET['id'])) {
	 	$id = $_GET['id'];
	 	//echo $id;
	 	$query = $database->prepare("SELECT * FROM products WHERE id = :id");
	 	$query->bindParam(':id', $id);
	 	$query->execute();

	 	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	 		$code = $row['code'];
	 		$name = $row['name'];
	 		$description = $row['description'];
	 		$image = $row['image'];
	 		$pdfDoc = $row['pdf'];
	 		$guaranteePdf = $row['guarantee'];
	 		$cat = $row['category'];
	 	}
	 }
?> 


<!DOCTYPE html>
<html>
<head>
	<title>Zodiac RO - <?php echo  $name?></title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	
	<link rel="stylesheet" type="text/css" href="styles/product.css">
	<link rel="stylesheet" type="text/css" href="styles/nav-footer.css">
</head>
<body>

	<?php if(isset($_GET['id'])) {?>
	<div class="overlay"></div>
	<div id="buyProductInfo">
		<span id="close"><i class="ion-close"></i></span>
		<div class="cumpar-acum">
					<h3>Comanda telefonic :</h3>
					<h4>0723 - 581 534</h4>
					<h4>0740 - 052 223</h4>
					<h3>Comanda prin e-mail :</h3>
					<h4>office@zodiac-piscine.ro</h4>
					<div>
						<p><b>Consiliere</b> – firma noastră sugerează clienților produse de calitate și asigură o prezență profesională constantă pe intreaga durată de funcționare a echipamentelor achiziționate de la noi.</p>

						<p><b>Profesionalism în abordare</b> – relaționăm permanent cu clienții, ținând cont de sugestiile acestora; asimilăm noi tehnici, ne informăm constant asupra noilor produse apărute pe piață in domeniu; acordăm atenție crescută prevederilor de securitate, respectând legislația și standardele europene în vigoare.
					</div>
				</div>
	</div>

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
			<ul id="navigationList" style="margin-top: 0;">
				<li class="navigation-list-item"><a class="active" href="index.php"><i class="ion-android-home"></i> Acasa</a></li>
				<li class=" navigation-list-item">
					<a href="produse.php">Produse</a>
				</li>
				<li class="navigation-list-item"><a href="contact.html">Contact</a></li>
			</ul>
			<div id="dropDownMenuButton">
				<i class="ion-navicon"></i>
			</div>
			<div id="dropDownMenu">
				<ul id="dropDownMenuList" style="margin: 0;">
					<li style="border-top: 2px solid rgb(46, 109, 164);" class="dpListItem"><a href="index.php">Acasa</a></li>
					<li class="dpListItem"><a href="produse.php">Produse</a></li>
					<li class="dpListItem"><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div class="centered-div">
		<div id="product-container">
			<div id="basic-info">
				<h2><?php echo $name; ?></h2>
				<div>
					<img src="<?php echo 'images/' . $image; ?>">
				</div>
				<div id="basic-info-bottom-buttons">
					<div>
						<h5>Cod produs <br>
							<?php echo $code; ?>
						</h5>
					</div>
					<div id="contact-button">
						<h5>Cumpara</h5>
					</div>
				</div>

			</div>
			<div id="complex-info">
				<ul>
					<li class="li-detalii"><a style="text-decoration: none;" href="#">Detalii</a></li>
					<li class="li-specificatii"><a style="text-decoration: none;" href="#">Specificatii</a></li>
					<li class="li-garantie"><a style="text-decoration: none;" href="<?php echo 'pdf/' . $guaranteePdf; ?>">Garantie</a></li>
					<li class="li-cumpar-acum active"><a style="text-decoration: none;" href="#">Cumpar acum</a></li>
					
				</ul>
				<a href="#detalii-produs-pdf" class="detalii-produs-pdf">DOWNLOAD PDF Produs</a>\

				<div class="detalii-div">	
					<?php echo "<h3>" . $description . "</h3>"; ?>
				</div>
				<div class="specificatii-div">
					<div class="table-responsive-xl" style="margin-bottom: 20px">
						<table class="table table-sm table-hover table-bordered" style="width: 90%; margin-left: 5%;">
							<tbody>
								<?php 
									$sepcsQuery = $database->prepare("SELECT * FROM specifications WHERE product_code = :code");
									$sepcsQuery->bindParam(':code', $code);
									$sepcsQuery->execute();

									echo "<tr style='font-weight: bolder;'><td>Cod Produs</td><td>" . $code . "</td></tr>";

									while($row = $sepcsQuery->fetch(PDO::FETCH_ASSOC)) {
										echo "<tr><td>" . $row['spec_name'] . "</td><td>" . $row['spec_value'] . "</td></tr>";
									} 
								?>
							</tbody>
						</table>

					</div>
				</div>
				<div class="cumpar-acum">
					<h3>Comanda telefonic :</h3>
					<h4>0723 - 581 534</h4>
					<h4>0740 - 052 223</h4>
					<h3>Comanda prin e-mail :</h3>
					<h4>office@zodiac-piscine.ro</h4>
					<div>
						<p><b>Consiliere</b> – firma noastră sugerează clienților produse de calitate și asigură o prezență profesională constantă pe intreaga durată de funcționare a echipamentelor achiziționate de la noi.</p>

						<p><b>Profesionalism în abordare</b> – relaționăm permanent cu clienții, ținând cont de sugestiile acestora; asimilăm noi tehnici, ne informăm constant asupra noilor produse apărute pe piață in domeniu; acordăm atenție crescută prevederilor de securitate, respectând legislația și standardele europene în vigoare.
					</div>
				</div>
				
			</div>
		</div>

		<div class="related-posts-div">
			<h2>Produse asemanatoare</h2>
			<ul>

				<?php 

					$query = $database->prepare("SELECT * FROM products WHERE category = :cat AND code <> :code LIMIT 3");
					$query->bindParam(":code", $code);
					$query->bindParam(":cat", $cat);
					$query->execute();

					while($row = $query->fetch(PDO::FETCH_ASSOC)) {
 
						$source = "images/" . $row['image'];

						echo "<li><div class='produs-div'>
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
				</div></li>"; 
					}
				?>
			</ul>
		</div>
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
			<h1 class="footer-section-title"><p>Informatii de Contact</p></h1>
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

	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
	crossorigin="anonymous"></script>
	  <script type="text/javascript">
		$(document).ready(function(){
			//the dropdown effect
			$(".navigation-list-item").hover(function(){
				//diplaying the products
				$(this).find("#productsListDropdown").stop().fadeToggle(300);
			});
			$(".li-detalii").click(function(){
				$(".detalii-div").removeClass("inactive-div");
				$(".detalii-div").addClass("active-div");
				$(".specificatii-div").removeClass("active-div");
				$(".cumpar-acum").removeClass("active-div");
				$(".specificatii-div").addClass("inactive-div");
				$(".cumpar-acum").addClass("inactive-div");
				$(".li-detalii").removeClass("active");
				$(".li-detalii").addClass("active");
				$(".li-specificatii").removeClass("active");
				$(".li-cumpar-acum").removeClass("active");
				$(".li-garantie").removeClass("active");

			});
			$(".li-specificatii").click(function(){
				$(".specificatii-div").removeClass("inactive-div");
				$(".specificatii-div").addClass("active-div");
				$(".detalii-div").removeClass("active-div");
				$(".cumpar-acum").removeClass("active-div");
				$(".detalii-div").addClass("inactive-div");
				$(".cumpar-acum").addClass("inactive-div");
				$(".li-specificatii").removeClass("active");
				$(".li-specificatii").addClass("active");
				$(".li-detalii").removeClass("active");
				$(".li-cumpar-acum").removeClass("active");
				$(".li-garantie").removeClass("active");
			});
			$(".li-cumpar-acum").click(function(){
				$(".cumpar-acum").removeClass("inactive-div");
				$(".cumpar-acum").addClass("active-div");
				$(".detalii-div").removeClass("active-div");
				$(".specificatii-div").removeClass("active-div");
				$(".detalii-div").addClass("inactive-div");
				$(".specificatii-div").addClass("inactive-div");
				$(".li-cumpar-acum").removeClass("active");
				$(".li-cumpar-acum").addClass("active");
				$(".li-specificatii").removeClass("active");
				$(".li-detalii").removeClass("active");
				$(".li-garantie").removeClass("active");
			});


		});
	</script>
	<script type="text/javascript" src="javascript/animations.js"></script>
	<?php } ?>
</body>
</html>