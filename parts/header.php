<?php
session_start();
require_once __DIR__ . "/../models/LocalMusicService.php";
require_once __DIR__ . "/../models/DbUserService.php";
$music_service = new LocalMusicService();
$user_service = new DbUserService();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $preTitle; ?> | Yet Another Music Database</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/yamd/public/css/custom.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="/yamd">Yet Another Music Database</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle Navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/yamd">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/yamd/search-artist.php">Search Artist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/yamd/search-album.php">Search Album</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/yamd/search-track.php">Search Track</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/yamd/about.php">About</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <form action="/yamd/search-album.php" method="get" class="form-inline mt-2 mt-md-0 mr-2">
                                <input class="form-control" type="text" name="q" placeholder="Search Artist">
                            </form>
                        </li>
                        <?php
                        if(array_key_exists('name', $_SESSION)) {
                        ?>
                        <li class="nav-item">
                            <img class="img-thumbnail nav-profile-img" src="<?php echo $_SESSION['picture']?>" alt="User Logo"/>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/yamd/profile.php"><?php echo $_SESSION['name']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="/yamd/logout.php">Logout</a>
                        </li>
                        <?php
                        } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/yamd/login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/yamd/signup.php">Signup</a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </nav>
            
        </header>
        <main class="container flex-shrink-0" role="main">