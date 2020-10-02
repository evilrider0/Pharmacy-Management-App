// alert('Custom Script Loded');

$('.nav-item').click(function(){
  $('ul.dw-nav').css('display','block');
});

var nav_button = $('.nav_button');
var nav = $('.nav-wrap');

nav_button.click(function(){
	// nav.css('display', 'block');
	nav.toggle();
})