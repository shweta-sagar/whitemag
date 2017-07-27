jQuery(document).ready(function() {
  	jQuery('.fixed_discover .discover_search').addClass("goaway").viewportChecker({
  	    classToAdd: 'showme animated fadeInDown',
  	    offset: 100    
  	   });   
});






function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#sticky').addClass('stick');
		if ($(".filter_mar")[0]){
         $('.filter_mar').addClass('stick');
		}
    } else {
        $('#sticky').removeClass('stick');
         $('.filter_mar').removeClass('stick');
    }
	
	
}

function sticky_tab_relocate() {
    var window_top = $(window).scrollTop();
	var treking_tab_top=$('#treking_tab').offset().top;
   	if (window_top > treking_tab_top) {
        $('.treking_tab').addClass('stick');
	} else {
        $('.treking_tab').removeClass('stick');
    }
}

$(function () {
	if ($("#sticky-anchor")[0]){
    $(window).scroll(sticky_relocate);
    sticky_relocate();
	}
	if ($("#treking_tab")[0]){
	$(window).scroll(sticky_tab_relocate);
    sticky_tab_relocate();
	}
});









// Slick slider
      $('.responsive').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
      {
       breakpoint: 1199,
       settings: {
         slidesToShow: 3,
         slidesToScroll: 1,
         infinite: true,
         dots: false
       }
      },
      {
       breakpoint: 768,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
      },
      {
       breakpoint: 480,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
      }
      ]
      });

//Search box button toggle
      $( document ).ready(function() {
            $( ".mod_search" ).click(function() {
                $( ".hide_fare_box" ).toggleClass( "showthis" );
            });
         
		 $( ".trip_search" ).click(function() {
                $( ".hide_trip" ).toggleClass( "showtrip" );
            });
			
			
              $('#itinerary').on('shown.bs.tab', function (e) {

$('#itinerary').slick();
			  });
            
			
			
		 
      }); 


 $('.multiple-items').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 25,
      slidesToScroll: 6,
      responsive: [
      {
       breakpoint: 1199,
       settings: {
         slidesToShow: 25,
         slidesToScroll: 6,
         infinite: true,
         dots: false
       }
      },
      {
       breakpoint: 768,
       settings: {
         slidesToShow: 15,
         slidesToScroll: 16
       }
      },
      {
       breakpoint: 480,
       settings: {
         slidesToShow: 10,
         slidesToScroll: 10
       }
      }
      ]
      });
	  
$( "#search-fixed" ).submit(function( event ) {
 //alert( "Handler for .submit() called." );
 if($('input[name=rtrip]:checked', '#search-fixed').val()==1){
 $('#search-fixed').attr('action', '/fixed-departure');
   }
});
 
$("#search-fixed-top").submit(function( event ) {
 if($('input[name=rtrip]:checked', '#search-fixed-top').val()==1){
 $('#search-fixed-top').attr('action', '/fixed-departure');
   }
}); 

	 
 $( document ).ready(function() {
	if ($(".home_wrap")[0]){
	 var rndNum = Math.floor(Math.random()*(4));
		if(rndNum>0){
		//$(".home_wrap").css("background", "transparent url('/sites/all/themes/trips/images/home-bg/home"+rndNum+".jpg') no-repeat bottom center");
		$(".home_wrap" ).addClass("home-bg"+rndNum );
		}
	 }
	 $(".trip_pic_text > h5").each(function(){
    if (!$(this).text().trim().length) {
        $(this).addClass("foo");
    }
});
	 /*if($("#edit-field-location-tid-95").prop("checked") == true){
		$("ul.bef-tree-child.bef-tree-depth-1").css({ display: "block" });
		}
		$('#edit-field-location-tid-95').click(function() {
		if($(this).is(':checked')){
		$("ul.bef-tree-child.bef-tree-depth-1").css({ display: "block" });
		}
		});*/
        $( "a#trigger" ).click(function() {
            $( "body" ).addClass( "showthis" );
		});
		$( "a#bodyscroll" ).click(function() {
            $( "body" ).removeClass( "showthis" );
		});
		});
		$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 500) {
    $('.discover_cal .icon-search.front').fadeIn();
  }
  else {
    $('.discover_cal .icon-search.front').fadeOut();
	$('.hide_fare_box').removeClass( "showthis" );

	
  }
 if (y > 850) {
    $('.discover_cal .icon-calendar.front').fadeIn();
  }  else {
	$('.discover_cal .icon-calendar.front').fadeOut();
	
  }
  
});