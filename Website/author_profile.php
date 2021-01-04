<?php

require('connect_function.php');


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
    <link rel="stylesheet" href="style/style_Author.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<?php
include_once 'navbar.php'
?>

<body>

    <div id="emp-profile" class="container-fluid">
        <div class="row h-100">
            <div class="col-lg-2 author-part-1 h-100 p-0">
                <div class="col p-0">
                    <div class="profile-img">
                        <img src="https://c7.alamy.com/comp/J0EH7M/portrait-of-guillaume-musso-03092016-mollonaopale-J0EH7M.jpg" alt="" />
                    </div>
                </div>
                <div class="col p-0">
                    <div class="profile-author">
                        <p id="titleAuthor" class="mt-2">Guillaume Musso</p>
                        <ul>
                            <p>Biography</p>
                            <li>Name: Guillaume Musso</li>
                            <li>Birth: 6 june 1974 in Antibes</li>
                            <li>Occupation : Novelist</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 author-part-2 h-100">
                <div class="container-fluid author-description p-0" style="border-bottom: 1px solid #dee2e6;">
                    <div class="row">
                        <div class="col author-description ">
                            <div class="profile-head">
                                <p class="description"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit facere ratione similique quia saepe nesciunt nihil vitae qui voluptates. Eos assumenda aliquam aperiam impedit incidunt aspernatur beatae voluptates fugit deleniti?</p>
                                <div class="col-md-6">
                                    <div class="pagination-container">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <p class="mr-2">Page :</p>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">4</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">5</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid book-list pt-5">
                    <div class="row">
                        <div class="col">
                            <div class="tab-content profile-books-tab" id="authorTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="container-book">
                                                <div class="card">
                                                    <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/O2e2GUi8sJ7jCajwhVlOfJnvhIKbAA4WqBKbDvDi-st2joq3S9Ty1jWobhrB6PkWOlTUePBLjP1Hx2WUkG0krwUsbh5JdFDQf0CIrJQ" alt="">
                                                    <div class="card-body">
                                                        <p class="card-text">Central park</p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <img class="card-img-top" src="https://www.guillaumemusso.com/sites/default/files/images/livres/demain_1.jpg" alt="">
                                                    <div class="card-body">
                                                        <p class="card-text">Demain</p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/41r0Jtq43pL._SX303_BO1,204,203,200_.jpg" alt="">
                                                    <div class="card-body">
                                                        <p class="card-text">Je reviens te chercher</p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <img class="card-img-top" src="https://static.fnac-static.com/multimedia/FR/Images_Produits/FR/fnac.com/ZoomPE/2/7/5/9782845634572/tsp20121113134828/La-fille-de-papier.jpg" alt="">
                                                    <div class="card-body">
                                                        <p class="card-text">La fille de papier</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include_once 'footer.php';
            ?>


            <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>