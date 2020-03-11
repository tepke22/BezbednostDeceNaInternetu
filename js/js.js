$(window).scroll(function() {
	
  if ($(document).scrollTop() > 1) {
	$('nav').removeClass('navbar-light bg-light');
    $('nav').addClass('navbar-dark bg-dark');
	$('nav').addClass('animated slideInDown');
  } else {
	$('nav').addClass('navbar-light bg-light');
    $('nav').removeClass('navbar-dark bg-dark');
	$('nav').removeClass('animated slideInDown');	
  }
  
  //---------POČETNA----------
  
    if ($(document).scrollTop() > 10) {
	$('#prvi .container').removeClass('invisible');
	$('#prvi .container').addClass('animated slideInLeft');
	}
	
	if ($(document).scrollTop() > 800) {
	$('#drugi .container').removeClass('invisible');
	$('#drugi .container').addClass('animated slideInRight');
	}
	
	if ($(document).scrollTop() > 1000) {
	$('#treci .container').removeClass('invisible');
	$('#treci .container').addClass('animated slideInLeft');
	}

	//---------ZLOUPOTREBA----------
	
	if ($(document).scrollTop() > 100) {
	$('#lista .container').removeClass('invisible');
	$('#lista .container').addClass('animated zoomIn');
	}
	
	if ($(document).scrollTop() > 1000) {
	$('#sajber .container').removeClass('invisible');
	$('#sajber .container').addClass('animated zoomInUp');
	}
	
	//---------ZASTITA----------
	
	if ($(document).scrollTop() > 600) {
	$('#regulativa .container').removeClass('invisible');
	$('#regulativa .container').addClass('animated slideInRight');
	}
	
	if ($(document).scrollTop() > 1400) {
	$('#centar .container').removeClass('invisible');
	$('#centar .container').addClass('animated zoomInUp');
	}
	
	$(function()
		{
			var requiredCheckboxes = $('.opcije1 :checkbox[required]');
			requiredCheckboxes.change(function(){
				if(requiredCheckboxes.is(':checked')) {
					requiredCheckboxes.removeAttr('required');
				} 
				else {
				requiredCheckboxes.attr('required', 'required');
				}
			});
		});
		
		$(function()
		{
			var requiredCheckboxes = $('.opcije2 :checkbox[required]');
			requiredCheckboxes.change(function(){
				if(requiredCheckboxes.is(':checked')) {
					requiredCheckboxes.removeAttr('required');
				} 
				else {
				requiredCheckboxes.attr('required', 'required');
				}
			});
		});
		
		
});

