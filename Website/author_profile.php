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

<body>
    <div id="emp-profile" class="container-fluid">
        <div class="row h-100">
            <div class="col-lg-3 author-info">
                <div class="col">
                    <div class="profile-img">
                        <img src="https://c7.alamy.com/comp/J0EH7M/portrait-of-guillaume-musso-03092016-mollonaopale-J0EH7M.jpg" alt="" />
                    </div>
                </div>
                <div class="col">
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
            <div class="col-lg-9">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col author-description h-20">
                            <div class="profile-head">
                                <p class="description"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit facere ratione similique quia saepe nesciunt nihil vitae qui voluptates. Eos assumenda aliquam aperiam impedit incidunt aspernatur beatae voluptates fugit deleniti?</p>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <p class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Books</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col h-80">
                            <div class="tab-content profile-books-tab" id="authorTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6 book-container">
                                                <img src="img/img2.jpg">
                                            </div>
                                            <div class="col-lg-6 book-container">
                                                <img src="img/img2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col pagination-container">
                            <div class="flex">
                                <ul>
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <div class="bar"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- <form method="post">
            <div class="row">
                <div class="col-lg-4">
                    <div class="profile-img">
                        <img src="https://c7.alamy.com/comp/J0EH7M/portrait-of-guillaume-musso-03092016-mollonaopale-J0EH7M.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="profile-head">
                        <p class="description"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit facere ratione similique quia saepe nesciunt nihil vitae qui voluptates. Eos assumenda aliquam aperiam impedit incidunt aspernatur beatae voluptates fugit deleniti?</p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <p class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Books</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4">
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

                <div class="col-lg-8">
                    <div class="tab-content profile-books-tab" id="authorTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="img/img2.jpg">
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="img/img2.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-8 pagination-container">
                <div class="flex">
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <div class="bar"></div>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->


        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>