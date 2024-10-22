<?php

function connection() //mysqli
{
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $db_name = "minimart_catalog";

  $conn = new mysqli($servername, $username, $password, $db_name);

  if($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error);
  } else {
    return $conn;
  }

}

?>