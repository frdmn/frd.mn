/**
 * Modal
 *
 * @param {object} object
 *
 * object.modal    class or HTMLCollection,
 * object.content  string
 * object.template string with {{content}} placeholder
 * object.callback function (optional)
 */

var Modal = function(object) {
  this.modal = (typeof object.modal == 'string' ? document.getElementsByClassName(object.modal.replace(/^\./, '')) : object.modal);
  this.content = object.content;
  this.template = (object.template ? object.template : '{{content}}');
  this.callback = (object.callback ? object.callback : false);
  var modal = this;

  click = function(target, method) {
    if (target.addEventListener)
      target.addEventListener('click', method, false);
    else if (target.attachEvent)
      target.attachEvent('on ' + 'click', method);
  };

  [].slice.call(this.modal).forEach(function(a) {
    click(a, function(e){
      e.preventDefault();
      modal.open(modal);
    });
  });
};

/**
 * Modal.open
 *
 * @param  {object} modal
 */
Modal.prototype.open = function(modal) {
  // Create modal wrapper
  var wrapper = document.createElement('div');
  wrapper.id = 'modal-wrapper';
  wrapper.className = 'modal-wrapper';

  // Create modal
  wrapper.innerHTML = modal.template.replace('{{content}}', modal.content);

  // Append modal to body
  document.body.appendChild(wrapper);

  // Set body overflow to hidden, to prevent double scrollbars
  document.body.style.overflow = 'hidden';

  // Add active class to modal wrapper.
  // (Short timeout to allow some kind of animations via css.)
  setTimeout(function() {
    wrapper.className += ' modal-wrapper--active';
  },10);

  // Click handler to close modal
  click(wrapper, function() {
    modal.close(modal);
  });

  // Prevent clicks inside the modal from closing it
  click(wrapper.firstChild, function(e) {
    e.stopPropagation();
  });

  // Optional callback function
  if (modal.callback)
    modal.callback();
};

/**
 * Modal.close
 */
Modal.prototype.close = function() {
  // Remove active class from modal wrapper and remove
  // overflow:hidden from body to reanable scrolling
  var wrapper = document.getElementById('modal-wrapper');
  wrapper.className = wrapper.className.replace(' modal-wrapper--active', '');
  setTimeout(function() {
    document.body.removeChild(wrapper);
    document.body.style.overflow = '';
  },300);
};
