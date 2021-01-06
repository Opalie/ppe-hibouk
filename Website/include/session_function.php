<!-------- Redirige sur le login si non connecté -------->
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location:connect.php');
}
?>
<!------------------------------------------------------->

<!------------------------------- Connecte à la bdd  --------------------------------------------->
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=UTF8', 'root', '');
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}
?>
<!------------------------------------------------------------------------------------------------>

