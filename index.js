jQuery(document).ready(function($){

	var path = window.location.pathname.split("/").pop();

	if ( path == '') {
		path = 'index.php';
	}

	var target = $('nav a[href="'+path+'"]');

	target.addClass('active');

	$(function(){
	$('.toggle-menu').click(function(e){
	e.preventDefault();
	$('.sidebar').toggleClass('toggled');
		});
	});

});