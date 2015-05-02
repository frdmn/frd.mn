/**
 * main.js
 *
 * Author: Marian Friedmann
 *
 */

$(function() {
  $('p.typewriter, .typewriter a').each(function() {
    var $self = $(this);
    if ($self.children().length === 0 && (Math.floor(Math.random() * 2) + 1) == 1) {
      var content = $self.text(),
          random = Math.floor(Math.random() * content.length) + 1,
          content2 = content.substring(random),
          random2 = Math.floor(Math.random() * content2.length) + 1,
          text = [];
      text.push(content.substring(0, random));
      text.push(content2.substring(0, random2));
      text.push(content2.substring(random2));
      console.log(content.length, random);
      console.log(text[0]+''+text[1]+''+text[2]);
      $self.html(text[0] + '<span data-content="' + text[1] + '">' + text[1] + '</span>' + text[2]);
    }
  });
});
