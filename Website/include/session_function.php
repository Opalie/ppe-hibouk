<!-------- Redirige sur le login si non connecté -------->
<?php
include '_dbSettings.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header('location:connect.php');
}
?>
<!------------------------------------------------------->