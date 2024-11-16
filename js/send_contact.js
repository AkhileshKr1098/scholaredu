$(document).ready(function(){
  $('#contact-form').submit(function(e){
      e.preventDefault(); // Prevent form submission
      var formData = $(this).serialize(); // Serialize form data
      console.log(formData);
      $.ajax({
          type: 'POST',
          url: 'contact_email.php', // PHP script for sending email
          data: formData,
          success: function(response){
              $('#response').html(response); // Display response
          }
      });
  });
});
