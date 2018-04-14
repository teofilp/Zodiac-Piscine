<?php 

	if(isset($_POST['search'])) {

		$search = $_POST['searchInput'];
		//echo $search;
		$location = "location:produse-search.php?search=" . $search;
		//echo $location;
		header($location);
	}	 
?>