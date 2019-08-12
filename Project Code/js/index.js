jQuery(document).ready(function() {
  jQuery('.main-menu .res-menu a').click(function() {
    jQuery('.main-menu ul').slideToggle(500);
    jQuery('.main-menu ul ul').css('display', 'none');
    return false;
  });

  jQuery(window).resize(function() {
    var screenWidth = jQuery(window).width();
    if (screenWidth > 767) {
      jQuery('.main-menu ul').removeAttr('style');
    }
  });

  jQuery('.main-menu ul li').click(function(e) {
    jQuery(this)
      .children('ul')
      .slideToggle(500);

    jQuery('.main-menu ul ul')
      .not(jQuery(this).children('ul'))
      .slideUp();
    e.stopPropagation();
  });

  jQuery('html').click(function(e) {
    jQuery('.main-menu ul ul').slideUp();
  });
  jQuery('.scroll').click(function() {
    jQuery('html').animate({ scrollTop: '0' }, 500);
    return false;
  });
  //   jQuery(window).scroll(function() {
  //     let area = jQuery(window).scrollTop();
  //     let scroll = jQuery('.main-menu').outerHeight();
  //     if (area > scroll) {
  //       jQuery('.main-menu').addClass('fixed');
  //     } else {
  //       jQuery('.main-menu').removeClass('fixed');
  //     }
  //     if (area > 200) {
  //       jQuery('.scroll').fadeIn(500);
  //     } else {
  //       jQuery('.scroll').fadeOut(500);
  //     }
  //   });
  jQuery('.main-menu ul ul')
    .parent('li')
    .children('a')
    .append('  <i class="fas fa-angle-down"></i>');

  // ----------slider part
  jQuery('.owl-carousel').owlCarousel({
    autoplay: true,
    loop: true,
    items: 1,
    margin: 10,
    autoplayHoverPause: true
  });
});
