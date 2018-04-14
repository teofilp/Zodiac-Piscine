<?php 
 	include "php_scripts/database.php";
 	include "php_scripts/search_product.php";
 	ob_start();

 	if(isset($_GET['search'])) {
 		$search = $_GET['search'];
 	}
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Produsele noastre</title>
	
	<link rel="stylesheet" type="text/css" href="styles/nav-footer.css">
	<link rel="stylesheet" type="text/css" href="styles/produse.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	ul {
		margin-top: 0;
	}
</style>
</head>
<body>

	<?php if(isset($_GET['search'])) { ?>

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
					<a href="produse.php">Produse</a>
				</li>
				<li class="navigation-list-item"><a href="contact.html">Contact</a></li>
			</ul>
			<div id="dropDownMenuButton">
				<i class="ion-navicon"></i>
			</div>
			<div id="dropDownMenu">
				<ul id="dropDownMenuList">
					<li style="border-top: 2px solid rgb(46, 109, 164);" class="dpListItem"><a href="index.php">Acasa</a></li>
					<li class="dpListItem"><a href="produse.php">Produse</a></li>
					<li class="dpListItem"><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="center">
		<div class="categorii">
			<h2>Categorii</h2>
			<a href="produse-cat.php?cat=incalzire piscina"><h3>Incalzire piscina</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=pompe de caldura pentru piscine">Pompe de caldura pentru piscina</a></li>
				<li><a href="produse-subcat.php?subcat=incalzitor electric pentru piscina">Incalzitor electric pentru piscina</a></li>
				<li><a href="produse-subcat.php?subcat=schimbator de caldura pentru piscina">Schimbator de caldura pentru piscina</a></li>

			</ul>
			
			<a href="produse-cat.php?cat=dezumificare piscina"><h3>Dezumificare piscina</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=individual">Individual</a></li>
				<li><a href="produse-subcat.php?subcat=dupa perete">Dupa perete</a></li>
				<li><a href="produse-subcat.php?subcat=sistem centralizat">Sistem centralizat</a></li>
				<li><a href="produse-subcat.php?subcat=mobil">Mobil</a></li>

			</ul>
			
			<a href="produse-cat.php?cat=aspirator piscina"><h3>Aspirator piscina</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=aspirator/robot automat pentru piscina">Aspirator/robot automat pentru piscina</a></li>
				<li><a href="produse-subcat.php?subcat=aspirator piscina hidraulic">Aspirator piscina hidraulic</a></li>
				

			</ul>
			
			<a href="produse-cat.php?cat=automatizari pentru tratarea apei"><h3>Automatizari pentru tratarea apei</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=magnapool">Magnapool</a></li>
				<li><a href="produse-subcat.php?subcat=electroliza sare">Electroliza sare</a></li>
				<li><a href="produse-subcat.php?subcat=nature systems">Nature Systems</a></li>

			</ul>
			
			<a href="produse-subcat.php?cat=ingrijirea apei"><h3>Ingrijirea apei</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=lichid">Lichid</a></li>
				<li><a href="produse-subcat.php?subcat=reglare">Reglare</a></li>
				<li><a href="produse-subcat.php?subcat=dezinfectie">Dezinfectie</a></li>
				<li><a href="produse-subcat.php?subcat=lichidaplicatii speciale">Aplicatii speciale</a></li>

			</ul>
			
			<a href="produse-cat.php?cat=panou de control pentru piscina"><h3>Panou de control pentru piscina</h3></a>
			
			<a href="produse-cat.php?cat=elemente filtrare"><h3>Elemente filtrare</h3></a>
			
			<a href="produse-cat.php?cat=piscine"><h3>Piscine</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=piscine perete metalic">Piscine perete metalic</a></li>
				<li><a href="produse-subcat.php?subcat=rotunde">Rotunde</a></li>
				<li><a href="produse-subcat.php?subcat=ovale">Ovale</a></li>
				<li><a href="produse-subcat.php?piscine caramizi polistiren">Piscine caramizi polistiren</a></li>

			</ul>
			
			<a href="produse-cat.php?cat=accesorii"><h3>Accesorii</h3></a>
			<ul>
				<li><a href="produse-cat.php?cat=accesorii">Incalzire</a></li>
				<li><a href="produse-cat.php?cat=dezumidificare">Dezumidificare</a></li>
				<li><a href="produse-cat.php?cat=tratament/chimicale pentru piscina">Tratament/Chimicale pentru piscina</a></li>
				<li><a href="produse-cat.php?cat=aspiratoare piscina">Aspiratoare piscina</a></li>
				<li><a href="produse-cat.php?cat=Aspiratoare hidraulice">Apiratoare hidraulice</a></li>

			</ul>
			
		</div>

		<div class="mobile-categories">
				<button class="mb-button">Categorii
					<i id="cat-arrow"class="ion-arrow-down-c"></i>
				</button>

			</div>
		<div id="mb-categories">
			<a href="produse-cat.php?cat=incalzire piscina"><h3>Incalzire piscina</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=pompe de caldura pentru piscine">Pompe de caldura pentru piscina</a></li>
				<li><a href="produse-subcat.php?subcat=incalzitor electric pentru piscina">Incalzitor electric pentru piscina</a></li>
				<li><a href="produse-subcat.php?subcat=schimbator de caldura pentru piscina">Schimbator de caldura pentru piscina</a></li>

			</ul>
			
			<a href="produse-cat.php?cat=dezumificare piscina"><h3>Dezumificare piscina</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=individual">Individual</a></li>
				<li><a href="produse-subcat.php?subcat=dupa perete">Dupa perete</a></li>
				<li><a href="produse-subcat.php?subcat=sistem centralizat">Sistem centralizat</a></li>
				<li><a href="produse-subcat.php?subcat=mobil">Mobil</a></li>

			</ul>
			
			<a href="produse-cat.php?cat=aspirator piscina"><h3>Aspirator piscina</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=aspirator/robot automat pentru piscina">Aspirator/robot automat pentru piscina</a></li>
				<li><a href="produse-subcat.php?subcat=aspirator piscina hidraulic">Aspirator piscina hidraulic</a></li>
				

			</ul>
			
			<a href="produse-cat.php?cat=automatizari pentru tratarea apei"><h3>Automatizari pentru tratarea apei</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=magnapool">Magnapool</a></li>
				<li><a href="produse-subcat.php?subcat=electroliza sare">Electroliza sare</a></li>
				<li><a href="produse-subcat.php?subcat=nature systems">Nature Systems</a></li>

			</ul>
			
			<a href="produse-subcat.php?cat=ingrijirea apei"><h3>Ingrijirea apei</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=lichid">Lichid</a></li>
				<li><a href="produse-subcat.php?subcat=reglare">Reglare</a></li>
				<li><a href="produse-subcat.php?subcat=dezinfectie">Dezinfectie</a></li>
				<li><a href="produse-subcat.php?subcat=lichidaplicatii speciale">Aplicatii speciale</a></li>

			</ul>
			
			<a href="produse-cat.php?cat=panou de control pentru piscina"><h3>Panou de control pentru piscina</h3></a>
			
			<a href="produse-cat.php?cat=elemente filtrare"><h3>Elemente filtrare</h3></a>
			
			<a href="produse-cat.php?cat=piscine"><h3>Piscine</h3></a>
			<ul>
				<li><a href="produse-subcat.php?subcat=piscine perete metalic">Piscine perete metalic</a></li>
				<li><a href="produse-subcat.php?subcat=rotunde">Rotunde</a></li>
				<li><a href="produse-subcat.php?subcat=ovale">Ovale</a></li>
				<li><a href="produse-subcat.php?piscine caramizi polistiren">Piscine caramizi polistiren</a></li>

			</ul>
			
			<a href="produse-cat.php?cat=accesorii"><h3>Accesorii</h3></a>
			<ul>
				<li><a href="produse-cat.php?cat=accesorii">Incalzire</a></li>
				<li><a href="produse-cat.php?cat=dezumidificare">Dezumidificare</a></li>
				<li><a href="produse-cat.php?cat=tratament/chimicale pentru piscina">Tratament/Chimicale pentru piscina</a></li>
				<li><a href="produse-cat.php?cat=aspiratoare piscina">Aspiratoare piscina</a></li>
				<li><a href="produse-cat.php?cat=Aspiratoare hidraulice">Apiratoare hidraulice</a></li>

			</ul>
				
			</div>
		<div class="produse">

			<?php 

				//echo $search;

				$query = $database->query("SELECT * FROM products WHERE name LIKE '%$search%'");
				$query->execute();

				if($query->rowCount() == 0) {
					echo "<h1 style='font-family:" . "Open Sans, sans-serif" . ";'>Nu au fost gasite produse.<h1>";
				}

				while($row = $query->fetch(PDO::FETCH_ASSOC)) {

					$source = "images/" . $row['image'];

					 echo "<div class='produs-div'>
					<a style='text-decoration: none;' href='pagina-produs.php?id=" . $row['id'] . "'><img class='produs-img' src='" . $source . "'>
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
			
			
		</div>
		</div>
	</div>
			

	<footer style="float: left">
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



	</div>
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
	  <script type="text/javascript">
		$(document).ready(function(){
			//the dropdown effect
			$(".navigation-list-item").hover(function(){
				//diplaying the products
				$(this).find("#productsListDropdown").stop().fadeToggle(300);
			});
			$(".mb-button").click(function(){
				$("#mb-categories").slideToggle(400);
				$("#cat-arrow").toggleClass('cat-arrow');


			});
		});
	</script>
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
	<script type="text/javascript" src="javascript/animations.js"></script>

	<?php } ?>
</body>
</html>