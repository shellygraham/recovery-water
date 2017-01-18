/*
Joints Scripts File

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/


// as the page loads, call these scripts
jQuery(document).ready(function($) {
	// load Foundation
	jQuery(document).foundation();
	
    // load gravatars
    $('.comment img[data-gravatar]').each(function(){
        $(this).attr('src',$(this).attr('data-gravatar'));
    });
 

	jQuery(function() {
	  jQuery('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	}); 
	
	jQuery('#flavors').slick({
			arrows: true,
			prevArrow: '<button type="button" class="slick-prev"></button>',
			nextArrow: '<button type="button" class="slick-next"></button>',
			autoplay: true,
			autoplaySpeed: 9000,
  	});

    $('.menu-item.menu-item-6 a').addClass('active-bubble');		

    $('.menu-item a').click(function(){
	    $('.menu-item a.active-bubble').addClass('inactive-bubble');
        $(this).addClass('active-bubble');
    });

	$(document).ready(function () {
		var project1 = $('#banner').offset();
	    var project2 = $('#image-flavors').offset();
	    var project3 = $('#image-center').offset();
	    var project4 = $('#image-sunset').offset();
	    var project5 = $('#image-bottom').offset();
	    var $window = $(window);
	    
	    $window.scroll(function() {
	        if ( $window.scrollTop() >= project1.top) {
	            $('.menu-item a').removeClass('active-bubble').addClass('inactive-bubble');
	            $('.menu-item-6 a').addClass('active-bubble');
	        }
	        if ( $window.scrollTop() >= project2.top ) {
	            $('.menu-item a').removeClass('active-bubble').addClass('inactive-bubble');
	            $('.menu-item-9 a').addClass('active-bubble');
	        }
	        if ( $window.scrollTop() >= project3.top ) {
	            $('.menu-item a').removeClass('active-bubble').addClass('inactive-bubble');
	            $('.menu-item-7 a').addClass('active-bubble');
	        }
	        if ( $window.scrollTop() >= project4.top ) {
	            $('.menu-item a').removeClass('active-bubble').addClass('inactive-bubble');
	            $('.menu-item-10 a').addClass('active-bubble');
	        }
	        if ( $window.scrollTop() >= project5.top ) {
	            $('.menu-item a').removeClass('active-bubble').addClass('inactive-bubble');
	            $('.menu-item-8 a').addClass('active-bubble');
	        }
	    });
    }); 
    
}); /* end of as page load scripts */

/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );