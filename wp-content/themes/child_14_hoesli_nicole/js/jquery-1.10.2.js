(function () {

jQuery.noConflict();

"use strict";


document.oncontextmenu = function() {return true;};


/*======================================== owl-slider/ isotope
==================================================*/
jQuery(document).ready(function($) {
      $("#owl-demo").owlCarousel({
        navigation: true,
        loop: true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        video: true,
        transitionStyle:"fade"
        
      });
      
    });

jQuery(document).ready( function($) {
  
  $('.grid').isotope({
    itemSelector: '.grid-item a',
    masonry: {
      columnWidth: 100
    }
  });

});
jQuery(document).ready( function($) {
  $( "owl-carousel > iframe" ).last().addClass( '.show-one-video' );
});

})();