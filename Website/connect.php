<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
  <link rel="stylesheet" href="style/connect.css" />
  <title>Sign-in/up</title>
</head>

<body>

  <div class="container">

    <div class="forms-container">
      <div class="signin-signup">

        <!-------------------------------SIGN-IN------------------------------------------->
        <form action="" class="sign-in-form" method="post">

          <h2 class="title">Sign-in</h2>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" name="login_email" placeholder="Email" />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="login_password" placeholder="Password" />
          </div>

          <button class="btn solid" type="submit" name="login_button">Login</button>

        </form>
        <!--------------------------------------------------------------------------------->

        <!-------------------------------SIGN-UP------------------------------------------->
        <form action="" class="sign-up-form" method="post">

          <h2 class="title">Sign-up</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="register_firstname" placeholder="First name" />
          </div>

          <div class="input-field">
            <i class="fas fa-users"></i>
            <input type="text" name="register_lastname" placeholder="Last name" />
          </div>

          <div class="input-field">
            <i class="fas fa-user-secret"></i>
            <input type="text" name="register_username" placeholder="Username" />
          </div>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="register_email" placeholder="Email" />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="register_password" placeholder="Password" />
          </div>

          <button class="btn solid" type="submit" name="register_button">Register</button>

        </form>
        <!--------------------------------------------------------------------------------->

      </div>
    </div>

    <div class="panels-container">

      <!-------------------------------SIGN-IN------------------------------------------->
      <div class="panel left-panel">

        <div class="content">
          <h3>New here ?</h3>
          <p>So don't hesitate to create an account first !</p>
          <button class="btn transparent" id="sign-up-btn">Sign-up</button>
        </div>

        <img src="img/login.svg" class="image" alt="" />

      </div>
      <!--------------------------------------------------------------------------------->

      <!-------------------------------SIGN-UP------------------------------------------->
      <div class="panel right-panel">

        <div class="content">
          <h3>One of us ?</h3>
          <p>Then you can directly go to connect !</p>
          <button class="btn transparent" id="sign-in-btn">Sign-in</button>
        </div>

        <img src="img/register.svg" class="image" alt="" />

      </div>
      <!--------------------------------------------------------------------------------->

    </div>

  </div>

  <script src="js/connect.js"></script>

</body>

<?php
include_once 'connect_function.php'
?>

</html>