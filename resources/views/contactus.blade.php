@include ('auth.layouts')

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width inital-scale-1.0" />
        <link rel="stylesheet" href="css/contact.css" />
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">

        
        
    </head>
    
    <body>
            <h1>Contact Us</h1>
        <div class="container">
            
            <form class='contactForm' action="mailto:gamesmith-ecommerce@gmail.com" method="post" enctype="text/plain" onsubmit="return validateForm()">
              <label for="first_name">First Name: </label>
              <input type ="text" id="first_name" name="first_name" required><br><br>
              <label for="last_name">Last Name: </label>
              <input type ="text" id="last_name" name="last_name" required><br><br>
              <label for="contact_number">Contact Number: </label>
              <input type ="tel" id="contact_number" name="contact_number" required><br><br>
              <label for="email">Email Address: </label>
              <input type ="email" id="email" name="email" required><br><br>
              <label for="confirm_email">Confirm Email Address: </label>
              <input type ="email" id="confirm_email" name="confirm_email" required><br><br>
              <label for="message">Message: </label>
              <textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>

              <input type="submit" value="Submit">

            </form>
          </div>

          

        <footer>
            @include('footer')
        </footer>

    </body>


    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');

        form.addEventListener('submit', function(event) {
        event.preventDefault();

        const email = form.querySelector('#email').value.trim();
        const confirmEmail = form.querySelector('#confirm_email').value.trim();

        if (email !== confirmEmail) {
            alert("Your email addresses don't match. Please double check.");
        } else {
            form.submit();
        }

        })
      })

      function validateForm() {
        var project = document.forms[0]["first_name"].value;
        var date = document.forms[0]["last_name"].value;
        var duration = document.forms[0]["contact_number"].value;
        var email = document.forms[0]["email"].value;
        var confirmEmail = document.forms[0]["confirm_email"].value;
        var contactMethod = document.forms[0]["message"].value;
      }

      

    </script>
</html>