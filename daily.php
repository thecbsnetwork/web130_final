<?php include 'includes/header.php'?>
    <div class="container-fluid" id="daily">
        <div class="row">
            <div id="item-content" class="col-lg-8 col-md-8 col-sm-12">
                <h1 id="item-title" class="title"><?=$heading1?></h1>
                <img src="images/<?=$dailyImage?>" alt="<?=$dailyAlt?>">
                <p id="day-title"><?=$heading2?></p>
                <p><?=$content?></p>
                <p>$<?=$price?></p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var JS_PAGE = 'list_view';
    </script>
    <script type="text/javascript" src="js/build/app.js"></script>
</body>
</html>
