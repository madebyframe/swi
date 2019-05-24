export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

      $('.staff .staff-individual').hover( function(){
        $( '#' + $(this).data('overlay') ).css('opacity', 1);
      }, function(){
        $( '#' + $(this).data('overlay') ).css('opacity', 0);
      });

      $('.portfolio .item').hover( function(){
          $( '#' + $(this).data('overlay') ).css('opacity', 1);
      }, function(){
          $( '#' + $(this).data('overlay') ).css('opacity', 0);
      });

      jQuery('.magnific-gallery').magnificPopup({
          delegate: 'a', // child items selector, by clicking on it popup will open
          type: 'image',
          gallery: {
              enabled: true,
          },
      });
  },
};
