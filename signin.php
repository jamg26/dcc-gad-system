<?php
include 'styles.php';
include 'navigation.php';
?>
<html>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
            <form action="./requests/auth.php" method="post">
                <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>
    </body>
</html>
