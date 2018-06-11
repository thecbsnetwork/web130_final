<?php include 'includes/header2.php'?>
    <!--SPECIALS=================================================-->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="banner col-12">
                    <div class="col-lg-12 col-md-12 col-sm-12" id="special">
                        <div class="col-2">
                            <a href="item_detail.php#cji85dj701z3701292738ne7q">
                            Monday
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="item_detail.php#cji85fv5a20mr0192c2ddf2se">
                            Tuesday
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="item_detail.php#cji85h9l121xa0175wy22fqd8">
                            Wednesday
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="item_detail.php#cji85ijmm21n90192ppl5j1po">
                            Thursday
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="item_detail.php#cji85k4kc22nu01750imo0wmu">
                            Friday
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="item_detail.php#cji85lcop21xn01412sqqo9ee">
                            Weekend
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--/specials-->
     <!--NAVBAR=================================================-->
    <nav class="sticky-top">
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
                <a href="#about">
                    About MimiSmith
                </a>
            </li>
        </ul>
    </nav>
    <!--/navbar-->
    <main>
        <div class="container-fluid" id="main-content">
            <div class="row">
                <article class="col-md-6">
                    <div class="col-md-6" id="item-2">
                        <h1 id="item-title" class="title"></h1>
                        <div id="item-content">
                        </div>
                        <img src="images/<?=$item_id?>" alt="<?=$dailyAlt?>">
                    </div>
                </article>
            </div>
        </div>
        <!--ABOUT====================================================-->
        <div class="container" id="about">
            <div class="row">
                <div class="col-md-6">
                    <h2>About MimiSmith Restaurant</h2>
                    <p>MimiSmith Restaurant is the final course project developed and designed by <a href="http://www.miminaz.com" target="_blank">Mariam Abdelmohsen</a> &#40;developer/designer&#41; and <a href="http://www.growlingwillow.com" target="_blank">Catherine Blake Smith</a> &#40;designer&#41; for WEB 130: Web Authoring III. The course was taken at <a href="http://www.seattlecentralcollege.edu" target="_blank">Seattle Central College</a> and taught in Spring 2018 by <a href="http://www.twitter.com/halfnibble" target="_blank">Josh Wedekind</a>. Built collaboratively and semi-remotely thanks to Cloud9, Github, and Google Hangouts.</p>
                    <p>Components include a developer environment with Grunt and Bootstrap, GraphQL, Sass, JavaScript, and HTML5. Content indiscriminately pulled from restaurant menus and <a href="http://www.unsplash.com" target="_blank">unsplash.com</a>.</p>
                </div>
            </div>
        </div>
        <!--/about-->
    </main>
<script type="text/javascript">
    var JS_PAGE = 'list_view';
</script>
<script type="text/javascript" src="js/build/app.js"></script>
</body>
</html>