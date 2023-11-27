@include('navbar')
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
            padding: 10px;
            box-sizing: border-box;
            background-color: #4A5859; /* Dark teal background */
            color: #F0F2EF; /* Light grey text */
        }

        #about-us-container {
            max-width:auto;
            margin: 0 auto;
            padding: 20px;
            background-color: #4A5859; /* Dark teal box background */
            border-radius: 10px;
        }

        #about-us-heading {
            color: #98d831; 
            font-size: 40px; /* Larger font size */
            text-align: center;
        }

        #about-us-content {
            margin-top: 20px;
        }

        #our-story,
        #contact-paragraph {
            margin-bottom: 15px;
            line-height: 1.6;
            font-size: 25px; /* Larger font size */
            color : #
        
        }

        #contact-link {
            color: #F0F2EF; /* Light grey link color */
        }

        #image-container {
            margin-top: 20px;
            padding: 20px; /* Added padding for the image box */
            background-color: #1E1E1E; /* Dark grey box background */
            border-radius: 10px;
            text-align: center;
        }

        #page-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>

</head>

<body>

    <div id="about-us-container">

        <h1 id="about-us-heading">About Us</h1>

        <div id="about-us-content">

<p id="our-story">
    Welcome to Gamesmiths, your ultimate destination for cutting-edge gaming accessories that won't break the bank! Founded in 2023 by a passionate team of computer scientists, also known as Group 21, Gamesmith emerged from a shared love for gaming and a mission to reintroduce affordability to the world of gaming accessories.
</p>

<p>
    At Gamesmith, we understand that gaming is not just a pastime; it's a lifestyle. Our team comprises avid gamers who recognized the challenges of finding high-quality gaming gear at reasonable prices. Thus, Gamesmith was born out of the desire to provide a solution to this dilemma, offering a curated selection of products that strike the perfect balance between performance, style, and affordability.
</p>

<p>
    What sets Gamesmith apart is our commitment to delivering a diverse range of gaming accessories, from precision-engineered peripherals to state-of-the-art hardware, all designed to enhance your gaming experience. Our product lineup includes everything from ergonomic gaming mice and mechanical keyboards to immersive virtual reality headsets, ensuring that every gamer can find the perfect accessory to level up their setup.
</p>

<p>
    As a gaming accessory store, we take pride in staying at the forefront of gaming technology trends. Our team of computer scientists brings a wealth of expertise to the development process, ensuring that each product reflects the latest advancements in the gaming industry. From RGB lighting effects to customizable macros, our accessories are not just tools but extensions of your gaming identity.
</p>

<p>
    Gamesmith is more than just a store; it's a community. Join us on social media and connect with fellow gamers who share your passion. Stay updated on the latest releases, exclusive promotions, and gaming events. Together, let's redefine the gaming landscape and make high-quality accessories accessible to all.
</p>

<p id="contact-paragraph">
    Thank you for choosing Gamesmiths for your gaming needs. If you have any questions, feedback, or inquiries, please feel free to <a href="mailto:gamesmitch@gmail.com" id="contact-link">contact us</a>. Level up your gaming experience with Gamesmith!
</p>
</div>


    </div>

    <div id="image-container">
    <img id="page-image" src="images/tester.jpg" alt="Description of the image">
</div>


</body>

</html>
