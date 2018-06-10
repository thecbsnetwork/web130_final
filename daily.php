<?php include 'includes/header.php'?>
<?php include 'includes/config.php'?>
    <div class="container" id="daily">
        <div class="justify-content-center">
            <div class="col-md-8 ">
                <h1 id="item-title" class="title"></h1>
                <div id="item-content">  
                </div>
                <img src="images/<?=$dailyImage?>" alt="<?=$dailyAlt?>">
            </div> 
        </div>
    </div>
    <script type="text/javascript">
        var JS_PAGE = 'list_view';
    </script>
    <script type="text/javascript" src="js/build/app.js"></script>
</body>

</html>