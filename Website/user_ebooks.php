<!-------- Redirige sur le login si non connecté -------->
<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header('location:connect.php');
}
?>
<!------------------------------------------------------->

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
    <link rel="stylesheet" href="style/.css" />
    <title>My Ebooks</title>
</head>

<?php
include_once 'navbar.php'
?>

<body>



</body>

<?php
include_once 'copyright.php'
?>

<script src="js/.js"></script>

</html>