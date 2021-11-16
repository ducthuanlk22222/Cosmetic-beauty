<?php
include "config.php";

$connection = new mysqli($hostname, $username, $password, $dbname);

//cho phép php lưu unicode utf8 - database
mysqli_set_charset($connection,'utf8');

if($connection->connect_error){
    die('Connection failed: '. $connection->connect_error);
}

?>