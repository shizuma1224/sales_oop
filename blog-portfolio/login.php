<?php
require "functions/user-functions.php";

if(isset($_POST['button'])){
    login();
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
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center font-monospace">LOGIN</h1>
    </div>
    <form action="" class="mx-auto w-50" method="post" >
        <!-- username -->
        <input type="username" name="username" id="username" class="form-control border-end-0 border-start-0 border-top-0 border-info rounded-0" placeholder="USERNAME">
        <input type="password" name="password" id="password" class="form-control border-end-0 border-start-0 border-top-0 border-dark rounded-0 mt-3" placeholder="PASSWORD">        
        <!-- login button -->
        <input type="submit" class="btn btn-success mt-5 w-100" name="button" value="ENTER">
    </form>
    <!-- create or recover account link -->
    <div class="row mx-auto w-50 mt-3">
        <div class="w-50 text-center">
            <a href="#" class="text-decoration-underline text-dark font-monospace">Create an Account</a>
        </div>
        <div class="w-50 text-center">
            <a href="#" class="text-decoration-underline text-dark font-monospace">Recover Account</a>
        </div>
    </div>   
</body>
</html>