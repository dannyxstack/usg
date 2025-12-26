$(document).ready(function() {
    // Smooth scrolling (unchanged)
    $('a[href^="#"]').on('click', function(e) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
  
    // Form submission (unchanged)
    $('form').on('submit', function(e) {
      if (!$(this).hasClass('search-form')) {
        e.preventDefault();
        alert('Form submitted! (Demo)');
      }
    });
  
    // Search toggle
    $('.search-icon').on('click', function() {
      $('.search-form').toggle();
    });
  });