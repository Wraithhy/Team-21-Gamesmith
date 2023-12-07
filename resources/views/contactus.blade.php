<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width inital-scale-1.0" />
        <link rel="stylesheet" type="text/css" href="test.css" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100&display=swap" rel="stylesheet">

        <style> 
          * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          }

          body {
              background-color: #1e1e1e;
              color: #F0F2EF;
              font-family: 'Roboto Condensed', sans-serif;
              margin: 0;
          }

          .container {
              width: 100%;
              padding: 20px;
              box-sizing: border-box;
          }

          h1 {
              text-align: center;
              margin-bottom: 20px;
              color: #f0f2ef;
          }

          form {
              width: 90%;
              max-width: 500px;
              margin: 0 auto;
              padding: 20px;
              background-color: #98D831;
              color: #F0F2EF;
              border-radius: 8px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }

          label {
              margin-bottom: 5px;
              display: block;
          }


          textarea, input[type="text"], input[type="email"], input[type="tel"] {
              width: 100%;
              padding: 10px;
              border: 1px solid #ccc;
              border-radius: 4px;
              margin-bottom: 10px;
          }

          input[type="submit"] {
              width: 100%;
              padding: 10px;
              border: none;
              border-radius: 4px;
              background-color: #401fff;
              color: #fff;
              cursor: pointer;
              transition: background-color 0.3s ease;
          }

          input[type="submit"]:hover {
              background-color: #007bff;
          }
        
        </style>

        @include ('navbar')

    </head>

    <body>
        
        <div class="container">
            <h1>Contact Us</h1>
            <form action="mailto:gamesmith-ecommerce@gmail.com" method="post" enctype="text/plain" onsubmit="return validateForm()">
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