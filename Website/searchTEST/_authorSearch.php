<?php
include '_dbSettings.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author list</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>



    <div class="container">
        <div class="row">
            <div id="custom-search-input" style="margin-top: 20%;">
                <div class="input-group col-md-12">
                    <form action="phpSearch.php" method="post">
                        Search <input type="text" name="search"><br>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>




</body>

</html>