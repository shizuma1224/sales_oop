<?php
require "functions/user-functions.php";

session_start();

if (!$_SESSION['id']) {
    header("location: logout.php");
    exit;
}

function getAllUsers(){
    $conn = dbConnect();
    
    $sql = "SELECT users.account_id,users.first_name,users.last_name,users.contact_number,users.address,accounts.username
              FROM users
             INNER JOIN accounts on accounts.account_id = users. account_id";

    if ($result = $conn->query($sql)){
        return $result;
    } else {
        die("Error retrieving all sections: " . $conn->error);
    }
}

function createUser() {
    // CONNECTION
    $conn = dbConnect();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $avatar = 'profile.jpg';

    //ACCOUNTS テーブルにUSERNAMEとPASSWORDでINSERTして、ACCOUNT_IDを発行して、その後にUSERSテーブルにデータをADDする


    // SQL
    $sql = "INSERT INTO users (first_name, last_name, `address`, `contact_number`, `avatar`) VALUES ('$first_name', '$last_name', '$address','$contact_number', '$avatar')";

    // EXECUTE
    if ($conn->query($sql)) {
        header('refresh: 0');
    } else {
        die('Error adding section: '. $conn->error);
    }
}

if(isset($_POST['btn_add'])){
    createUser();
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
    <title>Users</title>
</head>
<body>
    <?php
    include "main-nav.php";
    ?>
    <header>
        <div class="container-fluid mb-3 bg-warning bg-gradient text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-user-pen me-3"></i>User</h2>
        </div>
    </header>
    <div class="container">
        <form action="" class="mx-auto w-50 mb-3" method="post">
            <h1 class="font-monospace">Add User</h1>
            <div class="row mx-auto">
                <input type="text" name="first_name" id="first_name" class="form-control w-auto col" placeholder="First Name">
                <input type="text" name="last_name" id="last_name" class="form-control w-auto col ms-5" placeholder="Last Name">
            </div>
            <div class="row mx-auto mt-2">
                <input type="text" name="contact_number" id="contact_number" class="form-control w-auto col" placeholder="Contact Number">
                <input type="text" name="address" id="address" class="form-control w-auto col ms-5" placeholder="Address">
            </div>
            <input type="text" name="username" id="username" class="form-control mt-2" placeholder="UserName">
            <input type="text" name="password" id="password" class="form-control mt-2" placeholder="Password">
            <!-- add button -->
             <div>
                <button type="submit" class="btn btn-warning mt-3 w-100 text-white" name="btn_add" value="ADD">ADD</button>
             </div>
        </form>
        <table class="table table-striped">
            <!-- Header Area -->
            <thead class="table-dark">
                <tr>
                    <th>ACCOUNT ID</th>
                    <th>FULL NAME</th>
                    <th>CONTACT NUMBER</th>
                    <th>ADDRESS</th>
                    <th>USERNAME</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <!-- table body Area -->
            <tbody>
                <?php
                    $all_users = getAllUsers();
                        
                    while($user = $all_users->fetch_assoc()){
                    ?>  
                    <!-- // HTML code here -->
                    <tr>
                        <td><?= $user['account_id'] ?></td>
                        <td><?= $user['first_name']." ".$user['last_name'] ?></td>
                        <td><?= $user['contact_number'] ?></td>
                        <td><?= $user['address'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><a href="" id="update" class="btn btn-warning text-white">Update</a></td>
                        <td><a href="" id="update" class="btn btn-danger text-white">Delete</a></td>                    </tr>
                    <?php
                    }
                ?>
            </tbody> 
        </table>

    </div>
</body>
</html>