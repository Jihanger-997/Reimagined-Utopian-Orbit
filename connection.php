<?php
    $servername="localhost";
    $username = "root";
    $password="";
    $db = "utopian_orbit";

    try{
        $conn = mysqli_connect($servername, $username, $password, $db);
        echo "Connected";
    }catch (Exception $e){
        die("Connection Failed. ".$e->getMessage()); //the arrow operator is used to call a method, on the object of the class, ( . in java)
    }
        
    // msqli_close($conn); //this function is undefined?

?>
