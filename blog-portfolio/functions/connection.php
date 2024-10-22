<?php

function dbConnect() //mysqli
{
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $db_name = "blog";

  $conn = new mysqli($servername, $username, $password, $db_name);

  if($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error);
  } else {
    return $conn;
  }

}

?>