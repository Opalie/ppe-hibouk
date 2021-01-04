<<<<<<< HEAD
<div class="php">

    <?php
        //CREATiON DE COMPTE//
        if (isset($_POST['register_button'])) { //Fonction de modification de compte
            //Comparer email et mot de passe avec ceux de la bdd
            $request = $bdd->prepare('SELECT * FROM user WHERE user_email = ? AND user_password = ?');
            $request->execute(array(htmlspecialchars($_POST['register_email']), htmlspecialchars($_POST['register_password'])));
            $user = $request->fetch(PDO::FETCH_ASSOC);

            //Si similaire à un de la bdd alors afficher message d'erreur
            if (!empty($user)) {
                echo "Username or email already taken !";
            }

            //Sinon modifier l'utilisateur de la bdd
            else {
                $request = $bdd->prepare('UPDATE user SET user_username = ?, user_email = ?, user_password = ?, user_icon = ? WHERE user_id = ?');
                $request->execute(array($_POST['register_email'], $_POST['register_password'], $_POST['register_username'], $_POST['picture_input'], $_SESSION['user_id']));
            }
        }
    ?>

=======
<div class="php">

    <?php
        //CREATiON DE COMPTE//
        if (isset($_POST['register_button'])) { //Fonction de modification de compte
            //Comparer email et mot de passe avec ceux de la bdd
            $request = $bdd->prepare('SELECT * FROM user WHERE user_email = ? AND user_password = ?');
            $request->execute(array(htmlspecialchars($_POST['register_email']), htmlspecialchars($_POST['register_password'])));
            $user = $request->fetch(PDO::FETCH_ASSOC);

            //Si similaire à un de la bdd alors afficher message d'erreur
            if (!empty($user)) {
                echo "Username or email already taken !";
            }

            //Sinon modifier l'utilisateur de la bdd
            else {
                $request = $bdd->prepare('UPDATE user SET user_username = ?, user_email = ?, user_password = ?, user_icon = ? WHERE user_id = ?');
                $request->execute(array($_POST['register_email'], $_POST['register_password'], $_POST['register_username'], $_POST['picture_input'], $_SESSION['user_id']));
            }
        }
    ?>

>>>>>>> Abdel
</div>