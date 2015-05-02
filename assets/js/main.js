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

});
