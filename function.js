$(document).ready(function(){
	$("#site-logo").on('click', function(event) {
      	event.preventDefault();
      	$('html, body').animate({
        	scrollTop: $('#header-section').offset().top="0px"
      	}, 1000);
    });
	$("#nav-link-1").on('click', function(event) {
      	event.preventDefault();
      	$('html, body').animate({
        	scrollTop: $('#vr-description').offset().top="640px"
      	}, 1000);
    });
    $("#nav-link-2").on('click', function(event) {
      	event.preventDefault();
      	$('html, body').animate({
        	scrollTop: $('#vr-timeline').offset().top="2100px"
      	}, 1000);
    });
    $("#nav-link-3").on('click', function(event) {
      	event.preventDefault();
      	$('html, body').animate({
        	scrollTop: $('#vr-awards').offset().top="2840px"
      	}, 1000);
    });
    $("#nav-link-4").on('click', function(event) {
      	event.preventDefault();
      	$('html, body').animate({
        	scrollTop: $('#vr-sponsers').offset().top="3520px"
      	}, 1000);
    });
    $("#nav-link-5").on('click', function(event) {
      	event.preventDefault();
      	$('html, body').animate({
        	scrollTop: $('#vr-contact-us').offset().top="3850px"
      	}, 1000);
    });
});

var sections = $('.section')
  , nav = $('nav')
  , nav_height = nav.outerHeight();

$(window).on('scroll', function(){

	var cur_pos = $(this).scrollTop();
 
  	sections.each(function() {
	    var top = $(this).offset().top - nav_height,
	        bottom = top + $(this).outerHeight();
	 
	    if (cur_pos >= top && cur_pos <= bottom) {
		    nav.find('a').removeClass('active');
		    sections.removeClass('active');
		 
		    $(this).addClass('active');
	      	nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	    }
  	});

	if ($(window).scrollTop()) {
		$('.navbar').addClass('black').css('transition','0.5s');
	}
	else{
		$('.navbar').removeClass('black');
	}
});

function makeTimer() {

	var endTime = new Date("27 October 2018 13:00:00 GMT+05:30");			
	endTime = (Date.parse(endTime) / 1000);

	var now = new Date();
	now = (Date.parse(now) / 1000);

	var timeLeft = endTime - now;

	var days = Math.floor(timeLeft / 86400); 
	var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
	var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
	var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

	if (hours < "10") { hours = "0" + hours; }
	if (minutes < "10") { minutes = "0" + minutes; }
	if (seconds < "10") { seconds = "0" + seconds; }

	$("#days").html(days);
	$("#hours").html(hours);
	$("#minutes").html(minutes);
	$("#seconds").html(seconds);		

}

setInterval(function() { makeTimer(); }, 1000);

/*$(window).bind('scroll', function(){
	var scrollOffset = $(document).scrollTop();
	var containerOffset = $('#vr-description').offset().top - window.innerHeight;
	if (scrollOffset > containerOffset) {
		$('#icon-div-icon-1').animate({width:'auto'},3000);
		$('#icon-div-icon-2').animate({width:'auto'},4000);
		$('#icon-div-icon-3').animate({width:'auto'},5000);
		$(document).unbind('scroll');
	}
});*/