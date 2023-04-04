$(document).ready(function() {
    $('form').submit(function(event) {
      event.preventDefault();
      $.ajax({
        type: 'POST',
        url: 'index.php',
        data: $(this).serialize(),
        success: function(response) {
          $('#output').html(response);
        }
      });
    });
  });
  