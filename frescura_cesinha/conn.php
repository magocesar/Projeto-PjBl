<?php

    $servername = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbname = 'fracademy';

    $conn = new mysqli($servername, $username, $password, $dbname); // OOP

    if ($conn->connect_error){
        die('Connection Failed');
    }
?>
