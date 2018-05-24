$('.product-card').on('click', function () {
  	$(this).toggleClass('flipped');
});

$('.product-card .front .image').mouseenter(function () {
	$(this).find('.image-overlay').fadeIn(150);
}).mouseleave(function () {
	$(this).find('.image-overlay').fadeOut(150);
	//$('.product-card .front .image .image-overlay').fadeOut(150);
});