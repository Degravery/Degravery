<?php
$sname = "localhost";
$unmae = "root";
$password = "";

$db_name = "test_db";

$connect = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$connect){
    echo "FAILED TO CONNECT";
}

?>