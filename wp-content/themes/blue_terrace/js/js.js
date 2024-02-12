$(document).ready(function () {
  $('.inviewfadeInUp').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
    if (isInView) {
      $(this).stop().addClass('fadeInUp');
    }
  });
});

