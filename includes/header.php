<?php include 'includes/config.php'?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MimiSmith Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Irish+Grover" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<body>

    <header>
        <h1 class="logo">
            <a href="https://miminaz.com/mimi/web130/final">
                <h3>MimiSmith</h3></a>
        </h1>
        <div class="header-list">
            <ul>
                <li>
                    <h6 class="today-Date"><a href="daily.php"><?=$day?> <?=$today?> - Special</a></h6>
                </li>
                <li>
                <i class="fab fa-facebook-square"></i>
                </li>
                <li>
                <i class="fab fa-instagram"></i>


                </li>
                <li>
                    <a href="login.php">
                    <i class="fas fa-user"></i> Admin
                </a>
                </li>
            </ul>


        </div>
    </header>
    <!--NAVBAR=================================================-->
    <nav class="sticky-top">
        <ul class="closed">
            <li id="mobile-menu" class="mobile-only">
                <a href="#">Menu</a>
            </li>
            <li><a href="index.php">Home <span class="sr-only">(current)</span></a>
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
                                Menu
                            </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    About
                </a>
            </li>
        </ul>
    </nav>
    <!--/navbar-->