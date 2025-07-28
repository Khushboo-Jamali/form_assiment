<?php
include "./conn.php";
session_start();
if (isset($_POST['btn'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM `users` WHERE email='$email'";
  $res = mysqli_query($conn, $sql);
  $row = mysqli_num_rows($res);
  if ($row > 0) {
    $_SESSION['user'] = $_POST['email'];

    header('location:welcome.php');
  } else {
    echo 'user email is incorrect';
  }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form | Dan Aleko</title>
  <link rel="stylesheet" href="styles.css" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
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
        <a href="./index.php"> <input type="submit" value="SIGN UP" id="cbtn" /></a>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="text_container">
      <h1>YOU WANT TO GO TRIP</h1>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam
        exercitationem eos Lorem ipsum dolor sit amet consectetur adipisicing
        elit. Maxime, repudiandae.
      </p>
    </div>
    <div class="wrapper_login">
      <form action="" method="post">
        <h1>LOGIN</h1>

        <div class="input-box">
          <input type="email" placeholder="Email" required name="email" />
        </div>

        <div class="input-box">
          <input
            id="password"
            type="password"
            placeholder="Password"
            required
            name="password" />
          <i class="fa fa-eye-slash" id="eye"></i>
        </div>

        <button type="submit" class="btn" name="btn">Login</button>
        <div class="register-link">
          <p>Dont have an account? <a href="#">Sign Up</a></p>
        </div>
      </form>
    </div>
  </div>
  <script src="./jquery-3.7.1.js"></script>
  <script src="./app.js"></script>
</body>

</html>