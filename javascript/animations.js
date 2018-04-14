$(document).ready(function() {


		$("#dropDownMenuButton").click(function() {
			animateDropDown();
		});
	//animation triggered when scroll
	$(window).scroll(function() {

		if($(window).scrollTop() > 50) {

			$("nav").addClass('fixed-top');
			$("dropDownMenu").removeClass('.noScroll');
		} else {
			
			$("nav").removeClass('fixed-top');
			$("dropDownMenu").addClass('.noScroll');
		}

		if ($(document).scrollTop() > 650) {
			animateThmbAndTitle();
		}

		if($(window).scrollTop() > 1300) {
			animateProducts();
		}
	});
});


//buy-popup
$('body').on('click', '#contact-button', function(){

	$('#buyProductInfo').slideToggle(300);
	$('.overlay').slideToggle(100);
});

$('body').on('click', '#close', function(){
	$('#buyProductInfo').slideToggle(300);
	$('.overlay').slideToggle(100);
});

/********************
	FUNCTIONS
********************/



function animateThmbAndTitle() {

	//callbackhell of animations
	$("#sectionImageTitle").animate({
		'left': '130'
	}, 350);

	$("#aboutTextContainer").animate({
		'right': '100px'
	}, 350);
} 

function animateProducts() {
	// $("#productsTitle").fadeIn(350);
	// $(".produs-div").fadeIn(350);

	$("#productsTitle").animate({
		'margin-left': '0'
	}, 400);

	$("#productsContainer").animate({
		'margin-left': '10%'
	}, 400);
}

function animateDropDown() {

	$("#dropDownMenu").slideToggle(350);
}