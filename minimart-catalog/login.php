<?php
require "connection.php";

if(isset($_POST['btn_log_in'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    login($username, $password);
}

function login($username, $password){
    $conn = connection();
    $sql = "SELECT * FROM users WHERE username = '$username'";

    if($result = $conn->query($sql)){
        # Check if the username exists
        if($result->num_rows == 1){
            $user = $result->fetch_assoc();

            # Check if the password is correct
            if(password_verify($password, $user['password'])){
                /******SESSION *******/
                session_start();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['first_name']." ".$user['last_name'];

                header('location: products.php');
                exit;
            } else {
            ?> <p class="alert alert-danger">Incorrect password.</p><?php    
            }
        } else {
            ?><p class="alert alert-danger">Username not found.</p><?php
        }
    } else {
        die('Error retrieving data. ' . $conn->error);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- FONTAWESOME CDNS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>LOGIN</title>
</head>
<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto px-0">
                <div class="card-header text-primary bg-white">
                    <h1 class="card-title text-center mb-0">Minimart Catalog</h1>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label small fw-bold">Username</label>
                            <input type="text" name="username" id="username" class="form-control" autofocus required>
                        </div>
                        <div class="mb-5">
                            <label for="password" class="form-label small fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button type="submit" name="btn_log_in" class="btn btn-primary w-100">Log in</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="sign-up.php" class="small">Create Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>