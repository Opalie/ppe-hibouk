<?php

include_once './include/_dbSettings.php';


// Check to make sure the id parameter is specified in the URL
if (isset($_GET['author_id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $bdd->prepare('SELECT * FROM author WHERE author_id = ?');
    $stmt->execute([$_GET['author_id']]);
    // Fetch the author from the database and return the result as an Array
    $author = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the author exists (array is not empty)

    if (!$author) {
        // Simple error to display if the id for the author doesn't exists (array is empty)
        exit('Author does not exist!');
    }
} else {
    // Simple error to display if the id wasn't specified
    exit('Author ID does not exist!');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/author.css" />
    <title><?= $author['author_lastname'] ?> <?= $author['author_firstname'] ?></title>
</head>

<div class="navbar"><?= include './include/navbar.php'; ?></div>

<body>

    <div class="page">

        <?= $author['author_lastname'] ?>
        <?= $author['author_firstname'] ?>

        <?= $author['author_birth'] ?>
        <?= $author['author_death'] ?> <!--gotta make a IF statement here when death is NONE-->

        <?= $author['author_bio'] ?>

        <img src="<?= $author['author_pic'] ?>" alt="author picture">

    </div>



</body>


</html>

<?php

include './include/copyright.php';

?>

<!--/product.php?ebook=$id_book=?