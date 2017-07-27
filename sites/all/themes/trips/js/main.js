;(function(){

			$('#dpmenuToggle, .dpmenu-close').on('click', function(){
				$('#dpmenuToggle').toggleClass('active');
				$('body').toggleClass('body-push-toright');
				$('#theMenu').toggleClass('dpmenu-open');
			});


})(jQuery)