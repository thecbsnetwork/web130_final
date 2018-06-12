<?php include 'includes/header.php'?>
    <div class="container-fluid" id="daily">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12">
                <h1 id="today-date"  class="title"><?=$day.", ".$today?></h1>
                <div id="item-image" >
                <img src="images/<?=$dailyImage?>" alt="<?=$dailyAlt?>">
                </div>
                <h2  id="item-title"><?=$heading2?></h2>
                <div id="item-content"><?=$content?></div>
                <div  id="item-price">$<?=$price?></div>
            </div>
        </div>
    </div>
    <footer>
        <div id="copyright">&copy; <?=$year?> MimiSmith</div>
        <div id="github"><a href="http://www.github.com/thecbsnetwork/web130_final" target="_blank">
        <i class="fab fa-github-square"> </i>Read the code on Github</a></div>
        <div id="seattle">Seattle, WA</div>
    </footer>
    <script type="text/javascript">
        var JS_PAGE = 'list_view';
    </script>
    <script type="text/javascript" src="js/build/app.js"></script>
</body>
</html>
