<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, maximum-scale=1.0">
  <title>Contact - Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css">
  <style>
    .help-block {
      display: none;
    }
    .has-error .help-block {
      display: block;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="panel panel-primary">
        <div class="panel-heading">Contact</div>
        <div class="panel-body">
          <form action="contact.php" class="form" id="contact_form">
            <div class="form-group">
              <label for="name" class="form-control-label">Name</label>
              <input type="text" class="form-control" placeholder="John Doe" id="name_input" name="name">
              <span class="help-block" >This field is required</span>
            </div>
            <div class="form-group">
              <label for="email" class="form-control-label">Email</label>
              <input type="text" class="form-control" placeholder="john@doe.com" id="email_input" name="email">
              <span class="help-block" >This field is required</span>
            </div>
            <button class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      var $contactForm = $("#contact_form")
      $contactForm.on("submit", function(event) {
        event.preventDefault()
        var $formData = $($contactForm).serialize()
        var $name = null, $email = null
        $name = $("#name_input").val()
        $email = $("#email_input").val()
        $.ajax({
          url: $($contactForm).attr('action'),
          type: 'POST',
          data: $formData,
          success: function(data) {
            console.log(data)
            if(data === 'ERROR') {
              $(".form-group").addClass('has-error')
            } else if(data === "OK") {
              $(".panel").removeClass('panel-primary')
              $(".panel").addClass('panel-warning')
            }
          }
        })
      })
    })
  </script>
</body>
</html>