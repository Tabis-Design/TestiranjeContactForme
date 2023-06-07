function sendEmail() {
  // Retrieve form data
  var name = $('#name').val();
  var email = $('#email').val();
  var message = $('#message').val();

  // AJAX request
  $.ajax({
    url: 'send_email.php',
    method: 'POST',
    data: {
      name: name,
      email: email,
      message: message
    },
    success: function(response) {
      // Display the response message
      $('#response-message').text(response);
    }
  });
}
