<?php include 'includes/config.php'?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MimiSmith Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>
    <header class="container-fluid inner">
        <div class="row">
            <div class="logo col-lg-4 col-md-4 col-sm-12">
                <a href="index.php">
                    <h3>MimiSmith</h3>
                </a>
            </div>
            <div class="today-Date col-lg-4 col-md-4 col-sm-12">
                    <p>Special for: </p>
                    <a href="daily.php">
                        <h5><?=$day?> <?=$today?></h5>
                    </a>
            </div>
            <div class="header-list col-lg-4 col-md-4 col-sm-12">
                <ul>
                    <li>
                        <a href="#">
                        <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="login.php"><i class="fas fa-user"></i> Admin Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!--NAVBAR=================================================-->
    <nav class="sticky-top" id="headernav">
        <ul class="closed">
            <li id="mobile-menu" class="mobile-only">
                <a href="#">Menu</a>
            </li>
            <li>
                <a href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li>
                <a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Now Serving
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="daily.php">
                                Specials
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                Complete Menu
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="index.php#about">
                    About MimiSmith
                </a>
            </li>
        </ul>
    </nav>
    <!--/navbar-->
