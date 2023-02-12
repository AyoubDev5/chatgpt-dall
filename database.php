<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chat_gpt_mockup";

    // Create connection
    try {
        //code...
        $conn = mysqli_connect($servername, $username, $password, $dbname);
      
    } catch (\Throwable $th) {
        //throw $th;
        die("Connection failed: " . mysqli_connect_error());
    }
    
    
?>