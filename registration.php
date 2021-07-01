<?php
session_start();

    include("includes/dbh.inc.php");
    include("includes/functions.inc.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="HTML%20template/css/login.css">

</head>

<body>
<header>
    <!-- <div class="home"><a href="index.html">home</a></div> -->
</header>
<main>
    <div class="login">

        <h1>Registration</h1>
        <form action="includes/registration.inc.php" method="post">
            <input type="email" name="email" placeholder="Email" required="required" />
            <input type="text" name="name" placeholder="Numele Prenumele" required="required" />
            <input type="text" name="uid" placeholder="Numele de utilizator" required="required" />
            <input type="password" name="password" placeholder="Parola" required="required" id="password"/>
            <input type="password" name="r_password" placeholder="Confirmati parola" required="required" id="confirm_password"/>
            <span id="message"></span>
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="signup">Sign Up</button>
        </form>
        <div class="option">Already have an account ? <a href="login.php">log in</a></div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "passwordsDontMatch"){
                echo "<div class='alert'> Passwords do not match </div>";
            }
            else if ($_GET["error"] == "usernameTaken" ) {
                echo "<div class='alert'> Username taken, choose another one </div>";
            }
            else if ($_GET["error"] == "emailExists" ) {
                echo "<div class='alert'> Email exists</div>";
            }
            else if ($_GET["error"] == "stmtfailed" ) {
                echo "<div class='alert'> Something went wrong </div>";
            }
            else if ($_GET["error"] == "stmtcreateerror" ) {
                echo "<div class='alert'> Something went wrong, user not created </div>";
            }
            else if ($_GET["error"] == "none" ) {
                echo "<div class='success'> You signed up ! </div>";
            }

        }
        ?>
    </div>
</main>
</body>

</html>
