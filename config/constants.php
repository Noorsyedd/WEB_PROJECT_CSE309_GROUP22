<?php 
    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/onlinefood-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'onlinefoodorder');
    $err;
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error( $err)); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error( $err)); //SElecting Database


?>