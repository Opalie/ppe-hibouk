<?php

include '_dbSettings.php';

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