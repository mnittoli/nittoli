jQuery(document).ready(function($) {
    
  var pull = $('.toggle-secondary-menu');
  var menu = $('nav.secondary-navigation');
    $(pull).on('click', function(e) {
          e.preventDefault();
          menu.slideToggle();
    });
 $(window).resize(function(){
    var w = $(window).width();
    if(w > 700 && menu.is(':hidden')) {
        menu.removeAttr('style');
}
});
});