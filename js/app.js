jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function
	
	$(document).foundation();

	$( ".nav-toggle" ).click(function() {
	  $(this).toggleClass("open");
	  $("nav").fadeToggle(100);

	  return false;
	});
});
