<?php include 'includes/header.php'?>
    <main class="container-fluid">
        <form>
            <div class="form-group">
                <label for="username" class="col-4 col-form-label">Email Address</label>
                <div class="col-10">
                    <input type="email" class="form-control" id="username" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-4 col-form-label">Password</label>
                <div class="col-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <button type="submit" id="login-button" class="btn btn-primary btn-lg">Login</button>
                    <button type="submit" id="logout-button" class="btn btn-secondary btn-lg">Logout</button>
                </div>
            </div>
        </form>
    </main>
<script type="text/javascript">
    var JS_PAGE = 'login_view';
</script>
<script type="text/javascript" src="js/build/app.js"></script>
</body>
</html>
