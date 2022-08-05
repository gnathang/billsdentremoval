
jQuery(document).ready(function( $ ) {
  $('.hamburger').on('click', function() {
    $('.main-nav-small').toggleClass('open');
    $('.hamburger').toggleClass('open');
    $('.logo').toggleClass('open');
    return false;
  })
});

