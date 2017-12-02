$(document).ready(function() {
  // Prefill the texts
  Materialize.updateTextFields();

  $('form').on('submit', function(e) {
    // Prevent default action
    e.preventDefault();

    var member = {
      username: $('#username')[0].value,
      email: $('#email')[0].value,
      firstName: $('#first_name')[0].value,
      lastName: $('#last_name')[0].value,
      role: $('#role')[0].value
    };
    var id = $('#id')[0].value;

    var options = {
      url: '/api/members/' + id,
      method: 'PUT',
      data: member,
      success: function(data) {
        alert('User updated');
        window.location.replace('/members');
      },
      error: function(error) {
        alert('Whoops, shit hit the fan');
      }
    };

    $.ajax(options);
  });

  $('#delete-confirm').on('click', function(e) {
    var id = $('#id')[0].value;
    var options = {
      url: '/api/members/' + id,
      method: 'DELETE',
      success: function(data) {
        alert('User deleted');
        window.location.replace('/members');
      },
      error: function(error) {
        alert('Whoops, shit hit the fan');
      }
    };

    $.ajax(options);
  });
});
