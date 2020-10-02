// customer.js

// search


$( document ).ready(function() {
  $('#s_search').keyup(function () {
  	// Search string
    var s_string = $(this).val();
    // Action Loction Url
    var url = $(this).data('action')+'/'+$(this).val();
	
	$.get( url, function( data ) {
	 $('.search_sug').html( data );
	});
  });
});

