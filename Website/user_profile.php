<?php
include_once './include/session_function.php';
?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
    <link rel="stylesheet" href="style/user_profile.css" />
    <title>Profile</title>
</head>

<?php
include_once './include/navbar.php';
?>

<?php
include_once './include/user_menu.php';
?>

<body>

    <div class="profile">
        <div class="content">

            <form action="" class="inside" method="post">

                <div class="picture">
                    <div class="imgborder">
                        <img src="img/noimagefound.png" alt="">
                    </div>
                    <input class="input" type="file" name="picture_input" accept="image/png, image/jpeg"></input>
                </div>

                <h2>Profile informations</h2>

                <div class="input-field">
                    <i class="fas fa-user-secret"></i>
                    <input type="text" name="register_username" placeholder="Change your Username" />
                </div>

                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="register_email" placeholder="Change your Email" />
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="register_password" placeholder="Change your Password" />
                </div>

                <button class="btn solid" type="submit" name="register_button">Save changes</button>
            </form>

        </div>

</body>

<?php
include_once './include/user_profile_function.php';
?>

<?php
include_once './include/copyright.php';
?>

<script src="js/.js"></script>

</html>