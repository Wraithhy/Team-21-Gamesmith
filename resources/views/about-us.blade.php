@include('navbar')


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">   <title>About Us</title>
<link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 10px;
            padding: 10px;
            box-sizing: border-box;
            background-color: #4A5859;
            color: #F0F2EF;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .about-container,
        .extra-info {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #4A5859;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .about-heading {
            color: #98d831;
            font-size: 40px;
            text-align: center;
            margin-bottom: 20px;
        }

        .content,
        .extra-info {
            margin-top: 20px;
        }

        .story,
        .contact-para,
        .random-info {
            margin-bottom: 15px;
            line-height: 1.6;
            font-size: 20px;
            color: #F0F2EF;
        }

        .contact-link {
            color: #98D831;
        }

        .unique-container {
            margin-top: 20px;
            padding: 20px;
            background-color: #1E1E1E;
            border-radius: 10px;
            text-align: center;
        }

        .page-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            border: 5px solid #98d831;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);}
            .site-footer {
            margin-top: auto;
            padding: 20px;
            background-color: #1E1E1E;
            color: #98D831;
            font-size: 18px;
            border-radius: 10px;
            text-align: center;}
    </style>
</head>
<body>
    <div class="about-container">
        <h1 class="about-heading">About Us</h1>
    <div class="content">

            <p class="story">
                Welcome to Gamesmiths, your ultimate destination for cutting-edge gaming accessories that won't break the bank! Founded in 2023 by a passionate team of computer scientists, also known as Group 21, Gamesmith emerged from a shared love for gaming and a mission to reintroduce affordability to the world of gaming accessories.            </p>

            <p class="contact-para">
                Thank you for choosing Gamesmiths for your gaming needs. If you have any questions, feedback, or inquiries, please feel free to <a href="mailto:gamesmitch@gmail.com" class="contact-link">contact us</a>. Level up your gaming experience with Gamesmith!
            </p>
        </div>

    </div>
<div class="unique-container">
     <img class="page-image" src="images/gamesmith.png" alt="Description of the image">
    </div>
    <div class="extra-info">
        <p class="random-info">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lobortis feugiat vivamus at augue eget arcu dictum varius duis. Elementum pulvinar etiam non quam lacus suspendisse faucibus. Sociis natoque penatibus et magnis dis parturient montes. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Varius duis at consectetur lorem donec massa sapien. Vitae et leo duis ut diam quam. Tortor dignissim convallis aenean et. Et netus et malesuada fames. Nullam ac tortor vitae purus faucibus ornare suspendisse sed. Cursus mattis molestie a iaculis at. Morbi tristique senectus et netus. Mi bibendum neque egestas congue quisque. A arcu cursus vitae congue mauris rhoncus aenean vel. Eu turpis egestas pretium aenean pharetra magna ac. Libero justo laoreet sit amet cursus sit. Auctor elit sed vulputate mi sit amet mauris. Nec tincidunt praesent semper feugiat. Sed lectus vestibulum mattis ullamcorper.
        </p>
    </div>
    <div class="site-footer">
        &copy; 2023 Gamesmiths | Designed by Group 21
  </div>
</body>
</html>
