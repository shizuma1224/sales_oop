<?php
include "connection.php";

function register(){
    $conn = dbConnect();

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    // $avatar = $_POST['avatar'];

    $sql_accpunts = "INSERT INTO `accounts` (`username`,`password`) VALUES ('$username','$password')";

    if ($conn->query($sql_accpunts)) {
        $account_id = $conn->insert_id;

        $sql_users = "INSERT INTO users (first_name, last_name, `address`, contact_number, account_id)
        VALUES ('$first_name', '$last_name','$address','$contact_number','$account_id')";

        if($conn->query($sql_users)) {
            header("location: login.php");
            exit;
        } else {?> 
            <div class="alert alert-danger text-center fw-bold" role="alert">
                <p>Error in USERS Table <?= $conn->error?></p>
            </div>
        <?php
        }
    } else {?>
            <div class="alert alert-danger text-center fw-bold" role="alert">
                <p>Error in ACCOUNTS Table <?= $conn->error?></p>
            </div>        
    <?php
    }
}

function login(){
    $conn = dbConnect();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM accounts WHERE username = '$username'";

    if($result = $conn->query($sql)){
        # Check if the username exists
        if($result->num_rows == 1){
            $account = $result->fetch_assoc();
            # Check if the password is correct
            if(password_verify($password, $account['password'])){
                /******SESSION *******/
                session_start();

                $_SESSION['account_id'] = $account['account_id'];
                $_SESSION['username'] = $account['username'];
                $_SESSION['full_name'] = getFullname($account['account_id']);

                header('location: dashboard.php');
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

function getFullname($account_id){
    $conn = dbConnect();
    
    $sql = "SELECT * FROM users WHERE account_id = $account_id";

    if($result = $conn->query($sql)){
        $users = $result->fetch_assoc();
        $full_name = $users['first_name']." ".$users['last_name'];

        return $full_name;

    } else {
        die('Error retrieving data. ' . $conn->error);
    }
}



?>