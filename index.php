<?php include 'includes/header.php'?>
        <main class="container-fluid">
            <!--SPECIALS=================================================-->
            <div class="row justify-content-center"> 
                    <div>
                        <h2><a href="daily.php">Daily Specials</a></h2>
                    </div>
                    <div class="col-sm-12 col-md-8"  id="special">
                    <div class="col-md-3">
                        <a href="item_detail.php#cji85dj701z3701292738ne7q">
                             Monday</a>
                    </div>

                    <div class="col-md-3">
                        <a href="item_detail.php#cji85fv5a20mr0192c2ddf2se">
                                Tuesday</a>
                    </div>

                    <div class="col-md-3">
                        <a href="item_detail.php#cji85h9l121xa0175wy22fqd8">
                                Wednesday</a>
                    </div>

                    <div class="col-md-3">
                        <a href="item_detail.php#cji85ijmm21n90192ppl5j1po">
                                Thursday</a>
                    </div>
                    <div class="col-md-3">
                        <a href="item_detail.php#cji85k4kc22nu01750imo0wmu">
                                Friday</a>
                    </div>

                    <div class="col-md-3">
                        <a href="item_detail.php#cji85lcop21xn01412sqqo9ee">
                            Saturday</a>
                    </div>
                    <div class="col-md-3">
                        <a href="item_detail.php#cji85mkn122yh0192wfeab8hh">
                                Sunday</a>
                    </div>
                </div>
            </div>

            <!--/specials-->
            <div class="container" id="main-content">
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

            </div>

            </div>
            <!--ABOUT====================================================-->
            <div class="container" id="about">
                <div class="row">
                    <div class="col-md-6">
                        <h2>About MimiSmith Restaurant</h2>
                        <p>Our restaurant is the best and fanciest.</p>
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