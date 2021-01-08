<!------------------------------- Connecte à la bdd  --------------------------------------------->
<?php
include_once 'connect_function.php';
?>
<!------------------------------------------------------------------------------------------------>

<!-------- Redirige sur le login si non connecté -------->
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location:connect.php');
}
?>
<!------------------------------------------------------->