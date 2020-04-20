export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').click(function() {
      $(this).toggleClass('is-active');
      $('.site-menu').toggleClass('site-menu--active'); 
    });
  },
  finalize() {
     // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
