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
        <h2><a class="fa fa-user searchuser" aria-hidden="true" href="user_profile.php"> My Account</a></h2>
        <div class="searchcontainer">
            <i class="fa fa-search searchicon"></i>
            <input class="searchbox" type="search" name="search" placeholder=" Search...">
            <input type="submit" value="Search" class="searchbutton">
        </div>
        <h2><a class="fa fa-heart searchheart" aria-hidden="true" href=""></a></h2>
        <h2><a class="fa fa-shopping-basket searchbasket" aria-hidden="true" href=""></a></h2>
    </div>

    <div class="lower">

        <span>
            <h2>
                <nav>
                    <a class="theme" href="">DRAMA</a>
                    <a class="theme" href="">ROMANCE</a>
                    <a class="theme" href="">ADVENTURE</a>
                    <a class="theme" href="">THRILLER</a>
                    <a class="theme" href="">POEM</a>
                    <a class="theme" href="">CLASSIC</a>
                    <a class="theme" href="">MYSTERY</a>
                    <a class="theme" href="">FANTASY</a>
                    <a class="theme" href="">HORROR</a>
                    <a class="seemore" href="">SEE MORE...</a>
                </nav>
            </h2>
        </span>

    </div>

</header>