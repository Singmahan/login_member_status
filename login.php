<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">

                    <?php if(isset($_SESSION['success'])) :?>
                        <div class="success">
                            <?php echo $_SESSION['success']; ?>
                        </div>
                    <?php endif;?>
                    <?php if(isset($_SESSION['error'])) :?>
                        <div class="error">
                            <?php echo $_SESSION['error']; ?>
                        </div>
                    <?php endif;?>

                    <form action="login_db.php" method="POST">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div><br>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Login" class="form-control btn btn-success">
                        </div>
                    </form>
                    <br>
                    <a href="register.php">Go to register</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php 

    if(isset($_SESSION['success']) || isset($_SESSION['error'])){
        session_destroy();
    }
?>