<head>
    <meta charset="utf-8">
    <title>navbar</title>
    <link rel="stylesheet" href="style/navbar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<header class="navbar">
    <div class="upper">
        <h1 class="brand">Vélès</h1>
        <img class="logo" src="img/logo.png">
        <a class="contact" href="mailto:"><button>Contact</button></a>
    </div>

    <div class="middle">
        <h1><a class="fa fa-user searchuser" aria-hidden="true" href="./"> My Account</a></h1>
        <div class="searchcontainer">
            <i class="fa fa-search searchicon"></i>
            <input class="searchbox" type="search" name="search" placeholder=" Search...">
            <input type="submit" value="Search" class="searchbutton">
        </div>
        <h1><a class="fa fa-heart searchheart" aria-hidden="true" href=""></a></h1>
        <h1><a class="fa fa-shopping-basket searchbasket" aria-hidden="true" href=""></a></h1>
    </div>

    <div class="lower">

        <span>
            <h1>
                <nav>
                    <a href="">DRAMA</a>
                    <a href="">ROMANCE</a>
                    <a href="">ADVENTURE</a>
                    <a href="">THRILLER</a>
                    <a href="">POEM</a>
                    <a href="">CLASSIC</a>
                    <a href="">MYSTERY</a>
                    <a href="">FANTASY</a>
                    <a href="">HORROR</a>
                    <a class="seemore" href="">SEE MORE...</a>
                </nav>
            </h1>
        </span>

    </div>

</header>