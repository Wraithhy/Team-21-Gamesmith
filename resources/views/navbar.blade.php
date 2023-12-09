<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css\navbar.css" />
    <title>Gamesmith</title>
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a href="/">
            <img src="/images/11.png" alt="Flowers" style="width:auto;" height="45px">
        </a>
        <div class="menu-btn" onclick="toggleNav()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about-us">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="checkout">Checkout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login">Log In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register">Sign Up</a>
            </li>
        </ul>
    </div>
</nav>

</body>

<script>
    function toggleNav() {
        const nav = document.querySelector('.nav');
        nav.classList.toggle('expanded');
    }
    window.addEventListener('resize', function () {
        const nav = document.querySelector('.nav');
        if (window.innerWidth > 768) {
            nav.classList.remove('expanded');
        }
    });
</script>

</html>