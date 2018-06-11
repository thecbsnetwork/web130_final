<?php include 'includes/header.php'?>
    <main class="container">
        <h1>Add Menu Item</h1>
        <form>
            <div class="form-group ">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control col-sm-8">
            </div>
            <div class="form-group ">
                <label for="content" class="col-sm-2 col-form-label">Content</label>
                <textarea name="content" id="content" class="form-control col-sm-8"></textarea>
            </div>
            <div class="form-group ">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control col-sm-2">
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <input id="save-post-button" type="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </main>
<script type="text/javascript">
    var JS_PAGE = 'form_view';
</script>
<script type="text/javascript" src="js/build/app.js"></script>
</body>
</html>
