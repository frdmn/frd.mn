/**
 * Modal
 *
 * Modal class takes an object containing the opening element,
 * modal content and template, joins modal content and template
 * and appends them to body by clicking the opening element.
 *
 * @param {object} object
 *
 * object.modal    class or HTMLCollection,
 * object.content  string
 * object.template string with {{content}} placeholder
 * object.callback function (optional)
 *
 * Example usage:

var o = {};
o.modal = '.open-legal';
o.content = document.getElementById('legal-content').innerHTML;
o.template = '<div class="modal modal--centered">{{content}}</div>';

var legalModal = new Modal(o);

 *
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
 * Joins modal content and template and appends it to body.
 * Sets body overflow to hidden to prevent double scrollbars.
 *
 * @param  {object} modal
 */
Modal.prototype.open = function(modal) {

  var wrapper = document.createElement('div');
  wrapper.id = 'modal-wrapper';
  wrapper.className = 'modal-wrapper';

  wrapper.innerHTML = modal.template.replace('{{content}}', modal.content);

  document.body.appendChild(wrapper);

  document.body.style.overflow = 'hidden';

  // Add active class to modal wrapper.
  // (Short timeout to allow some kind of animations via css.)
  setTimeout(function() {
    wrapper.className += ' modal-wrapper--active';
  },10);

  // Click handler to close modal and prevent clicks
  // inside the modal from closing it
  click(wrapper, function() {
    modal.close(modal);
  });

  click(wrapper.firstChild, function(e) {
    e.stopPropagation();
  });

  if (modal.callback)
    modal.callback();
};

/**
 * Modal.close
 *
 * Removes active class from modal wrapper and
 * overflow:hidden from body to reanable scrolling
 */
Modal.prototype.close = function() {
  var wrapper = document.getElementById('modal-wrapper');
  wrapper.className = wrapper.className.replace(' modal-wrapper--active', '');
  setTimeout(function() {
    document.body.removeChild(wrapper);
    document.body.style.overflow = '';
  },300);
};
