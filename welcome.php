<?php
include "./conn.php";
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>welcome</title>
    <link rel="stylesheet" href="styles.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
</head>

<body>
    <header>
        <h2>Registration</h2>
        <nav>
            <a href="#">HOME</a>
            <a href="#">ABOUT</a>
            <a href="#">BLOG</a>
            <a href="#">CONTACT</a>
        </nav>
        <div class="sign_in_up">
            <div class="banner-btn">
                <a href="./login.php"> <input type="submit" value="LOGIN" id="cbtn" /></a>
                <a href="./index.php"> <input type="submit" value="SIGN UP" id="cbtn" /></a>
                <a href="./logout.php"> <input type="submit" value="LOGOUT" id="cbtn" /></a>


            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="text_container">


            <h1>welcome - <?php echo $_SESSION['user'] ?></h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam
                exercitationem eos Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Maxime, repudiandae.
            </p>
        </div>
    </div>
</body>

</html>