<?php
    $conn = new mysqli('localhost', 'root', '', 'minicourse1');
    //echo $conn->connect_error;
    //echo $conn->connect_errno;
    $conn->set_charset("utf8");
    
    if ($conn->connect_errno) {
        die("Connection Failed: " .$conn->connect_error);
       // echo "Failed to connect to MySQL: " . $conn->connect_error;
       // exit();
    }

?>