<?php
require_once "Database.php";

class Product extends Database
{
    public function store($request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];
    

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (`first_name`,`last_name`,`username`,`password`)
                           VALUES ('$first_name','$last_name','$username','$password')";

        if ($this->conn->query($sql))
        {
            header('location: ../views'); // goes to index.php
            exit; //breaks script execution
        } else 
        {
            die('Error creating the user: ' . $this->conn->error);
        }
    }

    public function login($request)
    {
        $username = $request ['username'];
        $password = $request ['password'];
    
        $sql = "SELECT * FROM users WHERE username = '$username'";

        if ($result = $this->conn->query($sql))
        {
            # Check if the username exists
            if($result->num_rows == 1){
                $user = $result->fetch_assoc();
        
                # Check if the password is correct
                if (password_verify($password, $user['password'])){
                    /******SESSION *******/
                    session_start();
        
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['full_name'] = $user['first_name']." ".$user['last_name'];
        
                    header('location: ../views/dashboard.php');
                    exit;
                } else {
                ?> <p class="alert alert-danger">Incorrect password.</p><?php    
                }
            } else {
                ?><p class="alert alert-danger">Username not found.</p><?php
            }
        } else {
            die('Error retrieving data. ' . $this->conn->error);
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header("location: ../views");
        exit;
    }

    public function getAllProducts()
    {
        $sql = "SELECT id, product_name, price, quantity FROM products";

        if($result = $this->conn->query($sql))
        {
            return $result;
        } else
        {
            die('Error retrieving data.' . $this->conn->error);
        }

    }

    public function addProduct($request)
    {
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];    

        $sql = "INSERT INTO products (`product_name`,`price`,`quantity`)
                           VALUES ('$product_name','$price','$quantity')";

        if ($this->conn->query($sql))
        {
            header('location: ../views/dashboard.php'); // goes to dashboard.php
            exit; //breaks script execution
        } else 
        {
            die('Error creating the user: ' . $this->conn->error);
        }


    }

    public function deleteProduct($product_id)
    {

        $sql = "DELETE FROM products WHERE id = $product_id";

        if ($this->conn->query($sql)) {
            header('location: ../views/dashboard.php'); // goes to dashboard.php
        } else {
            die('Error deleting your account: ' . $this->conn->error);
        }
    }

    public function getProduct($product_id)
    {

        $sql = "SELECT id, product_name, price, quantity from products WHERE id = $product_id";

        if($result = $this->conn->query($sql))
        {
            return $result->fetch_assoc();
        } else
        {
            die('Error retrieving data.' . $this->conn->error);
        }


    }

    public function editProduct($request,$product_id)
    {
        session_start();
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "UPDATE products SET product_name = '$product_name', price = '$price', quantity = '$quantity' WHERE id = $product_id";
        
        if ($this->conn->query($sql))
        {
            if ($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        } else {
            die('Error uploading product: '.$this->conn->error);
        }
      }
    }

    public function payProduct($product_id, $buy_quantity)
    {
        session_start();
        $buy_quantity = $_POST['buy_quantity'];
        $product_id = $_GET['product_id']; 

        $sql = "UPDATE products SET quantity = '$buy_quantity' WHERE id = $product_id";
        
        if ($this->conn->query($sql))
        {
            if ($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        } else {
            die('Error uploading product: '.$this->conn->error);
        }
      }
    }

}    
?>