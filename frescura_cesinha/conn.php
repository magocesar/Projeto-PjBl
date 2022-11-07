<?php

    $servername = '127.0.0.1';
    $username = 'desenvolvedor';
    $password = 'Bes@2022#';
    $dbname = 'fracademy';

    $conn = new mysqli($servername, $username, $password, $dbname); // OOP

    if ($conn->connect_error){
        die('Connection Failed');
    }
?>
