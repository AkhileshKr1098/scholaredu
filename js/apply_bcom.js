$(document).ready(function(){
  $('#myform').submit(function(e){
      e.preventDefault(); // Prevent form submission
      var formData = $(this).serialize(); // Serialize form data
      console.log(formData);
      $.ajax({
          type: 'POST',
          url: 'email_cuet.php', // PHP script for sending email
          data: formData,
          success: function(response){
              $('#response').html(response); // Display response
          }
      });
  });
});
