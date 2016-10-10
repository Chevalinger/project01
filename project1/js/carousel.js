$(window).load(function(){
      $('.carousel').carousel();
      var intervalID = setInterval(function() {
		$('.carousel').carousel('next');
	}, 5000);
});

$('.carousel.carousel-slider').carousel({full_width: true});


