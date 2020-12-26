<?php
include_once 'navbar.php'
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ebook-page.css">
    <title>bruh</title>
</head>

<body>
    <div class="ebook-info">
        <div class="left">
            <!-------------------------------------IMAGE------------------------------------->

            <?php
            $res = $db->query("SELECT book_cover FROM ebook WHERE id = {$_GET['id']}");

            if ($res->num_rows > 0) {
                $img = $res->fetch_assoc();

                //Rendre l'image
                header("Content-type: image/png");
                echo $img['image'];
            } else {
                echo "<img src='/img/nocoverfound.png/" . "' alt='error'>";
            }
            ?>

            <!-------------------------------------SCORE------------------------------------->
        </div>
        <div class="right">
            <h1>TITLE - author (date)</h1>
            <h2>Genre</h2>
            <!--------------------------------------DESC-------------------------------------->
        </div>
    </div>
    <div class="reviews">
        <!-------------------------------------COMMENTS------------------------------------->
    </div>
</body>

</html>