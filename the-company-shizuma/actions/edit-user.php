<?php
include "../classes/User.php";

//Create an obj
$user = new User;

//Call the Method
$user->update($_POST, $_FILES);


?>