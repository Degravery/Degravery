<?php
include "Database_connect.php";
$i=0;
$sql =  "SELECT * FROM test0_questions ORDER BY RAND()";
$result = mysqli_query($connect, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php while($row = mysqli_fetch_assoc($result)){
    $ques = array("qname" => $row['questionname'], "qnum" =>$row['questionnumber']);
    echo $ques["qname"]." ".$ques["qnum"]."\n";
 ?>
 <?php if($i==0){ ?>
    <input type="radio" name="yes">
    <input type="radio" name="yes">
<?php $i++;}?>
    <?php }?>
</body>
</html>