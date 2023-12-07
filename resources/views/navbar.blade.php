<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://fonts.googleapis.com/css?family=Bebas+Neue">
    <title>Gamesmith</title>
    <style>
    * {
    
    font-family: 'Bebas Neue', sans-serif>;
    }
.navbar {
    background-color: #1E1E1E;
    padding: 15px 0;
    margin: 10px;
    border-bottom: 2px solid #333;
}
.container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center:
}
.navbar-brand {
    color: #fff;
    text-decoration: none;
    font-size: 1.5em;
}
.nav {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}
.nav-item {
    margin-right: 20px;
}
.nav-link {
    color: #fff;
    text-decoration: none;
    font-size: 1.2em;
}
.nav-link:hover {
    text-decoration: underline;
    color: #98D831; 
}
.menu-btn {
    display: none;
    flex-direction: column;
    cursor: pointer;
}
.menu-btn div {
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin: 5px 0;
    transition: 0.4s;
}
@media screen and (max-width: 980px) {
    .nav {
        display: none;
        flex-direction: column;
        text-align: center;
        position: absolute;
        top: 70px;
        left: 0;
        width: 100%;
        background-color: #333;
        z-index: 1;
    }
    .nav-item {
        margin: 0;
        padding: 15px;
    }
    .menu-btn {
        display: flex;
    }
    .nav.expanded {
        display: flex;
    }
}
    </style>
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
                <a class="nav-link" href="/login">Log In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Sign Up</a>
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