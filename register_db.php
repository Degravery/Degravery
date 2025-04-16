<?php
session_start();
include "Database_connect.php";

if (isset($_POST['aname'])){
     function accept($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }
}
$aname = accept($_POST['aname']);

$sql = "SELECT * FROM user WHERE Uname='$aname'";
        
$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result);

if(empty($_POST['aname'])){
    header("location: register.php?error=Empty user name");
    exit();
    } else if (empty($_POST['pname'])){
    header("location: register.php?error=Empty name");
    exit();
    } else if (empty($_POST['pass'])){
        header("location: register.php?error=Empty password");
        exit();
     }else if ($row['Uname']===$aname){
          header("location: register.php?error=User taken");
     }else{

$uname = $_POST['aname'];
$pname = $_POST['pname'];
$password = $_POST['pass'];
$sex = $_POST['sex'];

$sql = "INSERT INTO user (Uname, Password, name, Sex) VALUES ('$uname','$password','$pname','$sex');";
mysqli_query($connect, $sql);

session_destroy();
header("location: loginmenu.php?Sign_up=Successful");
     }
?>