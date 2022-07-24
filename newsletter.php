<?php

include "connection.php"; // this calls the file and executes it


$fullname = $_POST['txtName'];
$email = $_POST['txtEmail'];



$query = "INSERT INTO `newsletter` (`id_nl`, `name_nl`, `email_nl`) 
VALUES (NULL, `$email`, `$fullname`)";

mysqli_query($conn, $query) or die(mysqli_error($conn));

?>