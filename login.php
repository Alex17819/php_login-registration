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
    <style>

    </style>
</head>

<body>
<header>

</header>
<main>
    <div class="login">
        <h1>Login</h1>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username" required="required" />
            <input type="hidden" name="submit" />
            <input type="password" name="password" placeholder="Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large" value="login">Let me in.</button>
        </form>
        <div class="option">Do not have an account ? <a href="registration.php">register here</a></div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "wrongPwd"){
                echo "<div class='alert'> Wrong password </div>";
            }
            else if ($_GET["error"] == "wrongLogin" ) {
                echo "<div class='alert'> User dont exist </div>";
            }
            else if ($_GET["error"] == "stmtfailed" ) {
                echo "<div class='alert'> Something went wrong </div>";
            }
            else if ($_GET["error"] == "none" ) {
                echo "<div class='success'> You signed in ! </div>";
            }

        }
        ?>
    </div>
</main>
</body>

</html>