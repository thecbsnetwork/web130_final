<?php include 'includes/header.php'?>

<main class="container">
        <div >
            <div class="col-sm-12 col-md-8">
                <form>
                    <div class=" form-group ">
                        <label for="username" class="col-sm-2 col-form-label">Email address</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-10">
                            <button type="submit" id="login-button" class="btn btn-primary btn-lg" >Login</button>
                
                            <button type="submit" id="logout-button" class="btn btn-secondary btn-lg">Logout</button>
                        </div>

                    </div>
                    
                </form>
            </div>
        </div>
    </main>
    <script type="text/javascript">
        var JS_PAGE = 'login_view';
    </script>
    <script type="text/javascript" src="js/build/app.js"></script>
</body>
</html>