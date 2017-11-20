/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function ($, Drupal) {

  /**
   * Use this behavior as a template for custom Javascript.
   */
  Drupal.behaviors.exampleBehavior = {
    attach: function (context, settings) {
      //alert("I'm alive!");
    }
  };

})(jQuery, Drupal);
(function ($) {
  $(document).ready(function () {
    $('#hamburger').click(function () {
      if ($('#mobile-links').hasClass('hidden')) {
        $('#mobile-links').addClass('active');
        $('#mobile-links').removeClass('hidden');
      } else {
        $('#mobile-links').addClass('hidden');
        $('#mobile-links').removeClass('active');
      }
    });
    $('.mobile-link').click(function (){
	console.log(this);
    });
  });
})(jQuery);
