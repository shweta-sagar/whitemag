(function(){

			$('#dpmenuToggle, .dpmenu-close').on('click', function(){
				$('#dpmenuToggle').toggleClass('active');
				$('body').toggleClass('body-push-toright');
				$('#theMenu').toggleClass('dpmenu-open');
			});

			// $(".views-exposed-form-wm-upcoming-trips-page-2").stick_in_parent();


})(jQuery);
// fixing .panel-group div on scrolling
$(document).ready(function(){
	$(document).scroll(function(){
		if(($(document).scrollTop() > 95) && ($(document).scrollTop() < 16500 ))
 			$('.panel-group').css("position", "fixed");
 		else {
 			$('.panel-group').css("position", "relative");
 		}
	});
});

// jQuery(document).ready(function(){
// 	jQuery(document).scroll(function(){
// 	var headerHeight = jQuery('header').height();	// gives 43
// 	var finalHeader = headerHeight + 10;
// 	var footerHeight = jQuery('footer').height();	// gives 356
// 	var finalFooter = footerHeight + 130;
//   // var totalHeight = finalHeader + finalFooter;
// 	// console.log(totalHeight);
// 	var documentHeight = jQuery(document).height();
// 	var contentHeight = documentHeight - totalHeight;
// 	if((jQuery(document).scrollTop() > finalHeader) && (jQuery(document).scrollTop() < finalFooter ))
// 		jQuery('.panel-group').css("position", "fixed");
// 	else {
// 		jQuery('.panel-group').css("position", "relative");
// 	}
// 	});
// });
