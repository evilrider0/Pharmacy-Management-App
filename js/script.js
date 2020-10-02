


// $.(document).ready(function(){
// });

$( document ).ready(function() {
	$( ".dropdown-toggle" ).click(function() {
	   // $(".dropdown-menu").toggle("slow");
		var dw = $(this).parent().children('.dropdown-menu');
		dw.toggle("");
	   // $(".body-warpper").toggleClass("new-width");

	});
  // $('.dropdown-toggle').mouseover(function() {
  //     $(this).parent().find('.dropdown-menu').slideToggle('fast');
  // });
  // $('.dropdown-toggle').mouseout(function() {
  //     $(this).parent().find('.dropdown-menu').slideToggle('fast');
  // });
});