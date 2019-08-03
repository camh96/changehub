$(function() {

  // jquery ready:

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('form#register input[name=email]').on('keyup input', $.debounce(750, checkRegisterEmailAvailability) );

  function checkRegisterEmailAvailability(evt) {
    var $this = $(this);
    if (this.validity && this.validity.valid) {
      $.get('/auth/email-available', {
        'email': $this.val()
      }, function(data) {
        var formClass = "has-error";
        var iconClass = "glyphicon-ban-circle";
        if (data.available) {
          formClass = "has-success";
          iconClass = "glyphicon-ok-circle";
        }
        $this.closest('.form-group').removeClass (function (index, css) {
          return (css.match(/(^|\s)has-\S+/g) || []).join(' ');
        }).addClass(formClass);
        $this.closest('.form-group').find('.glyphicon').removeClass (function (index, css) {
          return (css.match(/(^|\s)glyphicon-\S+/g) || []).join(' ');
        }).addClass(iconClass);
      }, 'json');
    }
  }

  $('form.attempts-update').on('click', 'button', function(evt){
    evt.preventDefault();
    var $this = $(this);
    var url = $this.closest('form').attr('action');
    var attemptId = $this.closest('form').data('attempt-id');
    var newStatus = $this.val();

    $.post(url, {
      'status': newStatus,
      '_method': 'PUT',
    }, function(data) {
      $this.closest('form').find('button').removeClass('active');
      $this.addClass('active').blur();

      var classes = {
        'success':   'success',
        'almost':    'warning',
        'miss':      'danger',
        'unchecked': 'info'
      };
      $this.closest('.row').find('img').removeClass (function (index, css) {
        return (css.match(/(^|\s)alert-\S+/g) || []).join(' ');
      }).addClass('alert-' + classes[newStatus]);

    }, 'json');

  });
});
