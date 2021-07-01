<?php
session_start();

include("includes/dbh.inc.php");
include("includes/functions.inc.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Smartech </title>
    <!-- library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

</head>
<body class="bg-blue-500">

<header class="topbar">
    <div class="topnav-wrapper">
        <nav class="topnav" id="topnav">
            <a class=" logo" href="index.html" class="active">SmarTech</a>
            <?php
                if (isset($_SESSION["useruid"])){
                    echo '<a class="nav-item " href="profile.php">Profile </a>';
                    echo '<a class="nav-item logout" href="logout.php" >Log Out</a>';
                }
                else {
                    echo '<a class="nav-item signup" href="registration.php">Sign Up</a>';
                    echo '<a class="nav-item login" href="login.php">Log In</a>';
                }
            ?>
            <a class="nav-item contact-us" href="contacts.html"><i class="fas fa-phone-alt"></i> 24/7 +342 22 846 13</a>
<!--            <a class="nav-item login" href="login.php">Log In</a>-->
<!--            <a class="nav-item signup" href="registration.php">Sign Up</a>-->
            <a class="nav-item" href="delivery.html">Delivery</a>
            <a class="nav-item" href="liked.html">
                <i class="fas fa-heart"></i>
            </a>
            <a class="nav-item" href="notification.html">
                <i class="fas fa-bell"></i>
            </a>
            <a class="nav-item" href="cart.html">
                <i class="fas fa-shopping-cart"></i>
            </a>

            <a class="burger" >
                <i class="fas fa-bars" ></i>
            </a>
        </nav>
    </div>

</header>

<main>
    <div class="main-category">
        <div class="main-category-heading">
            <h2 class="bold"> Alege categoria ! </h2>
        </div>
        <div class="main-category-container">
            <div class="category-row">
                <div class="col">
                    <a href="" class="img-wrapper">
                        <p class="img-description">Smartbands</p>
                        <img  src="./HTML%20template/Assests/images/carousel/smartband_sm.jpg" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="category.html" class="img-wrapper">
                        <p class="img-description">Smartphones</p>
                        <img src="./HTML%20template/Assests/images/carousel/phone_sm.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="category-row">
                <div class="col">
                    <a href="" class="img-wrapper">
                        <p class="img-description">Household use</p>
                        <img src="./HTML%20template/Assests/images/carousel/chromecast_sm.jpg" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" class="img-wrapper">
                        <p class="img-description">Boxe</p>
                        <img src="./HTML%20template/Assests/images/carousel/boxes_sm.jpg" alt="">
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="main-offerts">

    </div>
    <div class="main-pageBanner">
        <!--  -->
    </div>
</main>
<footer>
    <div class="footer-news">
        <div class="news-container">
            <div class="left-col">
                <div>
                    <h2>Aboneazăte la noutățile noastre</h2>
                </div>
            </div>
            <div class="right-col">
                <div>
                    <p>
                        Pe tot parcursul anului avem promoții. Unele dintre ele - cu reduceri de până la -50%.
                        Află despre ofertele noastre.Introdu numele și e-mailul mai jos.
                    </p>
                </div>
                <form action="">
                    <input type="email" placeholder="example@gmail.com">
                    <input type="text" placeholder="nume, prenume">
                    <input class="btn" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <div class="footer-links">
        <div class="row">
            <div class="col">
                <h1 class="heading">Companie</h1>
                <a class="links" href="contacts.html">Contacte</a>
                <a class="links" href="delivery.html">Livrarea</a>
                <a class="links" href=""></a>
                <a class="links" href=""></a>
            </div>
            <div class="col">
                <h1 class="heading">Categorii</h1>
                <a class="links" href="">Telefoane</a>
                <a class="links" href="">Smartbanduri</a>
                <a class="links" href="">Tehnica de casa</a>
                <a class="links" href="">Boxe</a>
            </div>
            <div class="col">
                <h1 class="heading">Retelele noastre de socializare</h1>
                <a class="links" target="_blank" href="https://www.facebook.com/">Facebook</a>
                <a class="links" target="_blank" href="https://twitter.com/">Twitter</a>
                <a class="links" target="_blank" href="https://www.youtube.com/">YouTube</a>
                <a class="links" target="_blank" href="https://www.instagram.com/">Instagram</a>
            </div>
        </div>
        <div class="row">
            <span>Copyright © 2021 SmarTech. Toate drepturile sunt rezervate</span>
        </div>
    </div>
</footer>


<!-- script -->
<script src="script.js"></script>



</body>
</html>