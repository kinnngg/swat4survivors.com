jQuery(function($){
	
	var isMobile = false;
	if (/Mobi|Android|webOS|iPhone|iPad|iPod|pocket|psp|kindle|avantgo|blazer|midori|Tablet|Palm|maemo|plucker|phone|BlackBerry|symbian|IEMobile|mobile|ZuneWP7|Windows Phone|Opera Mini/i.test(navigator.userAgent)) {
		isMobile = true;
		console.log("Mobile version detected");
	} else {
		console.log("No mobile version detected");
	}
	
	console.log("Theme functions file was loaded | v.2.2.2");
	var html = $('html');
	
	$(document).ready(function() {
		
		// Begin onDocumentReady functions
		console.log("Beginning onDocumentReady functions");
		
		// Header resize
		
		var el = $('.p-body');
		var pageTop = el.position().top + parseInt(el.css('marginTop'));
		
		var totalHeight = ( pageTop );
		function responsiveHeaderHeight() {
			$('.headerProxy').css({
				  "height": totalHeight
			 });
		}
		responsiveHeaderHeight();
		$(window).resize(function() {
			responsiveHeaderHeight()
		});
		
		// Ticker settings
		if ($('#ticker').length) {
			console.log("Ticker found and initializing");
			$('#ticker').addClass('animate');
			$('.ticker_wrap').css({
				overflow: 'hidden',
			})
		}
		
		// Footer column settings
		if ($('.flex_columns.main').length) {
			var numItems = $('.flex_columns.main .flex-item').length
			$('.flex_columns.main').addClass("cols-" + numItems)
		}
		
		// Anchor smooth scroll
		$("a[href^='#']").click(function(){
			$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top
			}, 750);
			return false;
		});
		
		if ( isMobile == true) {
			
			// console.log("Mobile onDocumentReady functions starting..");
			// Begin documentOnReady mobile functios
			
		} else {
			
			// console.log("No mobile / else onDocumentReady functions starting..");
			// Begin documentOnReady no-mobile functios
			
		} // end onDocumentReady isMobile functions 
		
	}) // end onDocumentReady


	$(window).on('load', function() {
		
		console.log("Beginning onWindowLoad functions");
		
		// Begin windowOnLoad functions
		
		if ( isMobile == true) {
			
			// console.log("Mobile onWindowLoad functions starting..");
			// Begin onWindowLoad mobile functios
			
		} else {
			
			// console.log("No mobile / else onWindowLoad functions starting..");
			// Begin onWindowLoad no-mobile functios
			
		} // end onWindowLoad isMobile functions 
		
	}); // end onWindowLoad 

}); // end jqueryNoConflict