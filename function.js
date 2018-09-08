$(document).ready(function(){
	$('.countdown').parallax({imageSrc: 'images/back1.jpg'});
});

$(window).on('scroll', function(){
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