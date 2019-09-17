
$(document).ready(function() {

  /* MAIN MENU */
  $('#main-menu > li:has(ul.dropdown-menu)').addClass('dropdown');
  $('ul.dropdown-menu > li:has(ul.dropdown-menu) > a').addClass('dropdown');

  $('#menu-toggle').click(function() {
    $('#main-menu').slideToggle(300);
    return false;
  });

  $(window).resize(function() {
    if ($(window).width() > 700) {
      $('#main-menu').removeAttr('style');
    }
  });

});