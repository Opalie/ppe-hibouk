<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=UTF8', 'root', 'Xk3QPGYBBeEiRvZI');
  } catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
  }


// Check to make sure the id parameter is specified in the URL
if (isset($_GET['book_id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $bdd->prepare('SELECT * FROM ebook WHERE book_id = ?');
    $stmt->execute([$_GET['book_id']]);
    // Fetch the Ebook from the database and return the result as an Array
    $ebook = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the Ebook exists (array is not empty)

    if (!$ebook) {
        // Simple error to display if the id for the Ebook doesn't exists (array is empty)
        exit('Ebook does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Ebook ID does not exist!');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $ebook['book_title'] ?> - <?= $ebook['book_author'] ?></title>
</head>

<body>

    <div class="page">

        <div class="left">
            <img src="<?= $ebook['book_cover'] ?>" alt="<?= $ebook['book_title'] ?>">
            <span class="price">
                &euro;<?= $ebook['book_price'] ?>
            </span>
            <button type="submit">Add to cart</button>
        </div>

        <div class="right">
            <h1 class="name"><?= $ebook['book_title'] ?> - <?= $ebook['book_author'] ?> (<?= $ebook['book_date'] ?>)</h1>
            <hr>
            <?= $ebook['book_genre'] ?>
            <br>
            <div class="description">
                <?= $ebook['book_desc'] ?>
            </div>
        </div>

        <div class="review">



        </div>


    </div>

</body>

</html>


<!--<a href="/product.php?ebook=$id_ebook" > $titre_ebook </a>