<?php
    //locally on XAMPP
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "lungolago_media";

    //host, user, pw, database
    $con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if(!$con){
        die('Connection Failed'.mysqli_connect_error());
    }
?>