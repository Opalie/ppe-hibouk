<!------------------------------- Connecte à la bdd  --------------------------------------------->
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=UTF8', 'root', 'Xk3QPGYBBeEiRvZI');
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}
?>