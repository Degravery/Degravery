<?php
include "Database_connect.php";
session_start();
$numcount = 0;
$uname = $_SESSION['Uname'];
if(isset($_SESSION['Uname'])){
 $sql =  "SELECT * FROM user_answers WHERE Uname = '$uname' ";
 $result = mysqli_query($connect, $sql);
 $row = mysqli_fetch_assoc($result);
 $total_rows = mysqli_num_rows($result);
 while($row = mysqli_fetch_assoc($result)){ //Proper way to get all results in database smh
   if ($row['Uname']==$_SESSION['Uname']){
    $numcount++;
    echo "Result ".$numcount." ".$row['Uname']." ".$row["Course_result"]."<br>";
 }
}
}
?>