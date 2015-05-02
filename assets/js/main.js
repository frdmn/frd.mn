/**
 * main.js
 *
 * Author: Marian Friedmann
 *
 */

$(function() {

  var legal = {};
  legal.modal = '.open-legal';
  legal.content = document.getElementById('legal-content').innerHTML;
  legal.template = '<div class="modal modal--centered">{{content}}</div>';

  var legalModal = new Modal(legal);

  var gpg = {};
  gpg.modal = '.open-gpg';
  gpg.content = document.getElementById('gpg-content').innerHTML;
  gpg.template = '<div class="modal">{{content}}</div>';
  gpg.callback = function() {
    $(".modal .gpg-block textarea").focus(function() {
      var $this = $(this);
      setTimeout(function() {
        $this.select();
      }, 100);
    });
  };

  var gpgModal = new Modal(gpg);

  $('.wobbly-eyes-hover').mouseenter(function() {
    $('.wobbly-eyes').toggleClass('wobbly-eyes--right');
  });

});
