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

          <h2 class="title">Sign in</h2>

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

          <h2 class="title">Sign up</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="register_firstname" placeholder="First name" />
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="register_lastname" placeholder="Last name" />
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
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

<!------------------------------- Connecte à la bdd  --------------------------------------------->
<div class="php">
  <?php
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=UTF8', 'root', '');
  } catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
  }
  ?>
<!------------------------------------------------------------------------------------------------>

  <?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //TENTATIVE DE CONNEXION//
    if (isset($_POST['login_button'])) { //Fonction de connexion
      $request = $bdd->prepare('SELECT * FROM user WHERE user_email = ? AND user_password = ?');
      $request->execute(array(htmlspecialchars($_POST['login_email']), htmlspecialchars($_POST['login_password'])));
      $user = $request->fetch(PDO::FETCH_ASSOC); //Compare

      //Connecte car similaire à la bdd
      if (!empty($user)) {
        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['login_email'] = $user['user_email'];
        header('location:index.php');
      }
      //Erreur ou incorrect                        
      else {
        echo "Email or password wrong !";
      }
    }


    //CREATiON DE COMPTE//
    if (isset($_POST['register_button'])) { //Fonction de création de compte
      //Comparer pseudo et email avec ceux de la bdd
      $request = $bdd->prepare('SELECT * FROM user WHERE user_email = ?');
      $request->execute(array(htmlspecialchars($_POST['register_email'])));
      $user = $request->fetch(PDO::FETCH_ASSOC);

      //Si similaire à un de la bdd alors afficher message d'erreur
      if (!empty($user)) {
        echo "Email already taken !";
      }

      //Sinon ajouter l'utilisateur à la bdd
      else {
        $request = $bdd->prepare('INSERT INTO user (user_email, user_password, user_username, user_firstname, user_lastname) VALUES (?, ?, ?, ?, ?)');
        $request->execute(array($_POST['register_email'], $_POST['register_password'], $_POST['register_username'], $_POST['register_firstname'], $_POST['register_lastname']));
        header('location:index.php');
      }
    }
  }
  ?>
</div>

</html>