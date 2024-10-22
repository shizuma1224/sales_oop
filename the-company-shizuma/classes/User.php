<?php
require_once "Database.php";

class User extends Database
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

    public function getAllUsers()
    {
        $sql = "SELECT id, first_name, last_name, username, photo FROM users";

        if($result = $this->conn->query($sql))
        {
            return $result;
        } else
        {
            die('Error retrieving data.' . $this->conn->error);
        }
    }
    
    public function getUser()
    {
        $id = $_SESSION['id'];

        $sql = "SELECT first_name, last_name, username, photo from users WHERE id = $id";

        if($result = $this->conn->query($sql))
        {
            return $result->fetch_assoc();
        } else
        {
            die('Error retrieving data.' . $this->conn->error);
        }
    }

    public function update($request, $files)
    {
        session_start();
        $id = $_SESSION['id'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $photo = $files['photo']['name'];
        $tmp_photo = $files['photo']['tmp_name'];

        $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username' WHERE id = $id";
        
        if ($this->conn->query($sql))
        {
            $_SESSION['username'] = $username;
            $_SESSION['full_name'] = "$first_name $last_name";

            # If there is an uploaded photo, save it to the db and save the file to images folder
            if ($photo){
                $sql = "UPDATE users SET photo = '$photo' WHERE id = $id";
                $destination = "../assets/images/$photo";

                // Save the image name to db
                if ($this->conn->query($sql)){
                    // Save the file to images folder
                    if(move_uploaded_file($tmp_photo, $destination)){
                        header('location: ../views/dashboard.php');
                        exit;
                    } else {
                        die('Error moving the photo.');
                    }
                } else {
                    die('Error uploading photo: '.$this->conn->error);
                }
            }

            header('location: ../views/dashboard.php');
            exit;
        } else {
            die('Error uploading account: '.$this->conn->error);
        }
    }

    public function delete()
    {
        session_start();
        $id = $_SESSION['id'];

        $sql = "DELETE FROM users WHERE id = $id";

        if ($this->conn->query($sql)) {
            $this->logout();
        } else {
            die('Error deleting your account: ' . $this->conn->error);
        }
    }
}


?>