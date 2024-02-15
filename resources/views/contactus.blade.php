@extends('master')    

    <link rel="stylesheet" href="css/contact.css">

@section( 'content' )

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

                    <button id="Submit" type="submit">Send</button>
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
                        <td><a href="mailto:220226495@aston.ac.uk">220226495@aston.ac.uk</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>
@endSection


