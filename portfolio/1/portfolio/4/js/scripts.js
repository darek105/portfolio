$(document).ready(function(){
	$('#hamburger').click(function(){
		$(this).toggleClass('open');
    $('.for_small').toggleClass('show');
	});
});

$(document).ready(function(){
	$('.small').click(function(){
  	$('#hamburger').toggleClass('open');
    $('.for_small').toggleClass('show');
	});
});
