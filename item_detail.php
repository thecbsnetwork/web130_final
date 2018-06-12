<?php include 'includes/header.php'?>
    <div class="container-fluid" id="detail">
        <div class="row">
            <div id="item-content" class="col-lg-8 col-md-8 col-sm-12">
                <h1 id="item-title" class="title"></h1>
                <img src="images/<?=$dailyImage?>" alt="<?=$dailyAlt?>">
                <div id="item-image">
                    Loading...
                </div>
                <div id="item-content">
                    Loading...
                </div>
                <div id="item-price">
                    price
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    var JS_PAGE = 'detail_view';
</script>
<script type="text/javascript" src="js/build/app.js"></script>
</body>
</html>