<?php 

    session_start();
    include('connection.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        //check username
        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);

        $user = mysqli_fetch_assoc($result);
        if($user['username'] === $username){
            echo "<script>('Username already exists');</script>";
        }else{
            $passwordenc = md5($password);

            $query = "INSERT INTO user (username, password, firstname, lastname, userlevel) VALUES ('$username','$passwordenc','$firstname','$lastname','m')";
            $result = mysqli_query($conn, $query);

            if($result){
                $_SESSION['success'] = "Insert user Successfully";
                header("Location: index.php");
            }else{
                $_SESSION['error'] = "Someting went erong";
                header("Location: index.php");
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="firstname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lastname" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Register" class="form-control btn btn-success">
                        </div>
                    </form>
                    <br>
                    <a href="login.php">Go Back to index</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>