<?php
include "./conn.php";
session_start();
$error = false;
$suess = false;
if (isset($_POST['btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $sql = "SELECT * FROM `users` WHERE email='$email'";
  $res = mysqli_query($conn, $sql);
  $row = mysqli_num_rows($res);
  if ($row > 0) {
    $error = "this email is already regeaster ";
  } else {
    if ($password == $cpassword) {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $insert = "INSERT INTO users (name, email, password) 
      VALUES ('$name','$email','$hash')";
      mysqli_query($conn, $insert);
      $suess = 'congratulations now you have your account';
    } else {

      $error = "password is wrong please enter your corect password";
    }
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

      <?php
      if ($error) {
        echo '<div
      class="alert alert-danger"
      role="alert"
    >
      <strong>' . $error . '</strong> 
    </div>';
      }
      if ($suess) {
        echo ' <br>   <div
            class="alert alert-success"
            role="alert"
        >
            <strong>' . $suess . ' </strong> 
        </div>';
      }

      ?>
    </div>
    <div class="wrapper">
      <form action="" method="post">
        <h1>SIGN UP</h1>
        <div class="input-box">
          <input type="text" placeholder="Name" required name="name" />
        </div>
        <div class="input-box">
          <input type="email" placeholder="Email" required name="email" />
        </div>

        <div class="input-box">
          <input
            type="password"
            placeholder="Password"
            required
            id="password"
            name="password" />
          <i class="fa fa-eye-slash" id="eye"></i>
        </div>
        <div class="input-box">
          <input
            id="cpassword"
            type="password"
            placeholder="Confirm Password"
            required
            name="cpassword" />
          <i class="fa fa-eye-slash" id="Eye"></i>

          <!-- <i class="fa-solid fa-eye-slash"></i> -->
        </div>
        <button type="submit" class="btn" name="btn">Sign Up</button>
        <div class="register-link">
          <p class="msg">Already have a <a href="./login.php">Login</a></p>
        </div>
      </form>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="./jquery-3.7.1.js"></script>
  <script src="./app.js"></script>
</body>

</html>