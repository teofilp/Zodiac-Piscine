$(document).ready(function(){

	$("body").on('submit', "#postsForm" , function(event){
		//preventing the form submision
		event.preventDefault();

		//alert("Form submited!");
		//setting the post category id
		var postCategoryId = $("#selectCategory option:selected").data("target");
		$("#postCategoryId").val(postCategoryId);

		var name = $("#productName").val();
		var code = $("#productCode").val();
		var cat = $("#productCategory").val();
		var subcat = $("#productSubcategory").val();
		var description = $("#productDescription").val();

		 $.ajax({
		 	url: 'php_scripts/add_product_script.php',
		 	method:'POST',
		 	data: new FormData(this),
		 	contentType: false,
		 	cache: false,
		 	processData: false,
		 	success: function(response){
		 		$('#postsForm')[0].reset();
		 	},
		 	dataType: 'text'
		});
	});	
});