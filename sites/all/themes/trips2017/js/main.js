(function(){

			$('#dpmenuToggle, .dpmenu-close').on('click', function(){
				$('#dpmenuToggle').toggleClass('active');
				$('body').toggleClass('body-push-toright');
				$('#theMenu').toggleClass('dpmenu-open');
			});

			$("#view-filters").stick_in_parent();


})(jQuery);

$( document ).ready(function() {
    $("#view-filters, #trip_box_slide").stick_in_parent();
});
