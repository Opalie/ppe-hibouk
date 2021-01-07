<?php
include_once './include/session_function.php';
?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
    <link rel="stylesheet" href="style/index.css" />
    <title>Profile</title>
</head>

<?php
include_once './include/navbar.php';
?>

<body>



    <div class="container mt-5">
        <div class="row">
            <?php
            $stmt = $bdd->query("SELECT * FROM ebook");
            $stmt->execute();
            while ($ebook = $stmt->fetch()) {

            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <?php echo '<img class="pic-1" src=' . $ebook['book_cover'];
                                '>' ?>

                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#"><?php echo $ebook['book_title'] ?></a></h3>
                            <span class="price">11,00€</span>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <hr>

</body>

<?php
include_once './include/copyright.php';
?>

<script src="js/.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</html>