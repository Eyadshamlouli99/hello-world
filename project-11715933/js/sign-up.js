$(function() {

$('[required]').click(function ( ){
 
 if($(this).val() == ''){
 	$(this).next('span').fadeIn().delay(2000).fadeOut();
 }
 
});
	// body...
});