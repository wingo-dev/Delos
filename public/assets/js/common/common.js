// Module name: Scroll Top
// Dependencies: no dependencies
(function(){
	var scrollButton = $('.js-scroll-top');

	scrollButton.on("click", function(e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: "0px" }, 2000);
	});
})();

// Module name: Scroll To
// Dependencies: no dependencies
(function(){
	var buttons = $('.js-scroll-to');

	buttons.each(function () {
		var button = $(this);
		var target = button.attr('href');
		var speed = button.data('speed') ? button.data('speed') : 1000;

		if(typeof target !== 'undefined' && $(target).length){
			button.on('click', function(event) {
				event.preventDefault();

				$('html, body').animate({
			        scrollTop: $(target).first().offset().top - $('.js-header').outerHeight()
			    }, speed);
			});
		}
	});
})();