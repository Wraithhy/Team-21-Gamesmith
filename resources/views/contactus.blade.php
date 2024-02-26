@extends('layouts.app')    
 <!--   <body>
            <h1 class="contactTitle">Contact Us</h1>
        <div class="container3">
            
            <form class='contactForm' action="mailto:gamesmith-ecommerce@gmail.com" method="post" enctype="text/plain" onsubmit="return validateForm()">
            @csrf
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

              

            </form>
          </div>

        
    </body>-->

@section( 'content' )
<head>
<link href="https://fonts.googleapis.com/css?family=Bebas+Neue" rel="stylesheet">

<link rel="stylesheet" href="css/contact2.css">

</head>


<body>


    <div class="container">
        <h1> Connect with us</h1>
        <p>We would love to get to know what you require from us!</p>
        <div class="contact-us"> 
            <div class="contact-left">
                <h3>Send your request</h3>
                <form id="myForm" onsubmit="compareEmails(this);">
                    <div class="input-row">
                        <div class="contact-info">
                            <label for="name">Name</label>
                            <input id="name" type="text" placeholder="John Smith">
                        </div>
                        <div class="contact-info">
                            <label for="Phone">Phone</label>
                            <input id="Phone" type="text" placeholder="+44 123 456 789 ">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="contact-info">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" placeholder="johnsmith@gmail.com">
                        </div>
                        <div class="contact-info">                            
                            <label for="Confirm-email">Confirm Email</label>
                            <input id="Confirm-email" name="cEmail" type="email" placeholder="johnsmith@gmail.com">
                        </div>
                    </div>
                    <div class="input-row">
                        <label>How would you like to be contacted?</label>
                        <div class="contact-info">
                            <input id="html" type="checkbox"  name="CotactPref">
                            <label for="html">Email</label><br>

                        </div>
                    <div class="contact-info">
                        <input id="css" type="checkbox"  name="ContactPref">
                        <label for="css">Phone</label>
                    </div>
                </div>
                <label for="message">Message</label>
                <textarea id="message" rows="5" placeholder="Your message here"></textarea>

                    <button class="submitButton" id="Submit" type="submit">Send</button>
                </form>
            </div>
            
            <div class="contact-right">
                <h3>Reach us </h3>

                <table>
                    <tr>
                        <td>GameSmith</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>Group 21</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><a href="mailto:220160340@aston.ac.uk">220160340@aston.ac.uk</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>
@endSection


