$(document).ready(function() {


  $('.js--nav-icon, .js--main-nav a').click(function(element) {
    var nav = $('.js--main-nav');
    var icon = $('.js--nav-icon i');




    //Opens and closes the menu
    if ($(window).width() < 768) {
      nav.slideToggle(200);
    }

    //Changes icon states of the menu button
    if (icon.hasClass('ion-navicon-round')) {
      icon.addClass('ion-close-round');
      icon.removeClass('ion-navicon-round');
    } else {
      icon.addClass('ion-navicon-round');
      icon.removeClass('ion-close-round');
    }
  });


  $(window).resize(function() {
    var nav = $('.js--main-nav');
    var icon = $('.js--nav-icon i');

    if ($(window).width() > 767) {
      nav.css("display", "block");
      icon.addClass('ion-close-round');
      icon.removeClass('ion-navicon-round');
    } else {
      nav.css("display", "none");
      icon.addClass('ion-navicon-round');
      icon.removeClass('ion-close-round');
    }

  });
});