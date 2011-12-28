jQuery.noConflict();

jQuery(document).ready(function($) {

//  Fancybox

  jQuery(".fancybox").fancybox({
    closeSpeed: 'fast'
  });

//  Placeholder

  jQuery('[placeholder]').placeholder();

//  main styles fix

  jQuery(".content .search-result-part").last().css('border', 'none');

});

//  Google plus button

(function() {
  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
  po.src = 'https://apis.google.com/js/plusone.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
