<?php
session_start();
include "Database_connect.php";
if(isset($_SESSION['Uname'])){
$curUser = $_SESSION['Uname'];}
$Q1="";$Q2="";$Q3="";$Q4="";$Q5="";$Q6="";$Q7="";$Q8="";$Q9="";$Q10="";$Q11="";$Q12="";$Q13="";$Q14="";$Q15="";
$Q16="";$Q17="";$Q18="";$Q19="";$Q20="";$Q21="";$Q22="";$Q23="";$Q24="";$Q25="";$Q26="";$Q27="";$Q28="";$Q29="";$Q30="";
$Q31="";$Q32="";$Q33="";$Q34="";$Q35="";$Q36="";$Q37="";$Q38="";$Q39="";$Q40="";$Q41="";$Q42="";$Q43="";$Q44="";$Q45="";
$C_result="";$result_perc="";
$A=0;
$B=0;
$RESULT1="";
$RESULT2="";
if(isset($_GET['token1']) & !isset($_GET['token2'])){ // COMPUTER SCIENCE & INFORMATION TECHNOLOGY
//TEST 1
if ($_POST['question1']==1){$A+=1;$Q1="AGREE";}else if($_POST['question1']==2){$B+=1;$A+=1;$Q1="NOT SURE";}else if ($_POST['question1']==3){$B+=1;$Q1="DISAGREE";}
if ($_POST['question2']==1){$B+=1;$Q2="AGREE";}else if($_POST['question2']==2){$B+=1;$A+=1;$Q2="NOT SURE";}else if ($_POST['question2']==3){$A+=1;$Q2="DISAGREE";}
if ($_POST['question3']==1){$B+=1;$Q3="AGREE";}else if($_POST['question3']==2){$B+=1;$A+=1;$Q3="NOT SURE";}else if ($_POST['question3']==3){$A+=1;$Q3="DISAGREE";}
if ($_POST['question4']==1){$A+=1;$Q4="AGREE";}else if($_POST['question4']==2){$B+=1;$A+=1;$Q4="NOT SURE";}else if ($_POST['question4']==3){$B+=1;$Q4="DISAGREE";}
if ($_POST['question5']==1){$A+=1;$Q5="AGREE";}else if($_POST['question5']==2){$B+=1;$A+=1;$Q5="NOT SURE";}else if ($_POST['question5']==3){$B+=1;$Q5="DISAGREE";}

//TEST 2
if ($_POST['question6']==1){$A+=1;$Q6="AGREE";}else if($_POST['question6']==2){$B+=1;$A+=1;$Q6="NOT SURE";}else if ($_POST['question6']==3){$B+=1;$Q6="DISAGREE";}
if ($_POST['question7']==1){$B+=1;$Q7="AGREE";}else if($_POST['question7']==2){$B+=1;$A+=1;$Q7="NOT SURE";}else if ($_POST['question7']==3){$A+=1;$Q7="DISAGREE";}
if ($_POST['question8']==1){$A+=1;$Q8="AGREE";}else if($_POST['question8']==2){$B+=1;$A+=1;$Q8="NOT SURE";}else if ($_POST['question8']==3){$B+=1;$Q8="DISAGREE";}
if ($_POST['question9']==1){$B+=1;$Q9="AGREE";}else if($_POST['question9']==2){$B+=1;$A+=1;$Q9="NOT SURE";}else if ($_POST['question9']==3){$A+=1;$Q9="DISAGREE";}
if ($_POST['question10']==1){$A+=1;$Q10="AGREE";}else if($_POST['question10']==2){$B+=1;$A+=1;$Q10="NOT SURE";}else if ($_POST['question10']==3){$B+=1;$Q10="DISAGREE";}

//TEST 3
if ($_POST['question11']==1){$B+=1;$Q11="AGREE";}else if($_POST['question11']==2){$B+=1;$A+=1;$Q11="NOT SURE";}else if ($_POST['question10']==3){$A+=1;$Q11="DISAGREE";}
if ($_POST['question12']==1){$B+=1;$Q12="AGREE";}else if($_POST['question12']==2){$B+=1;$A+=1;$Q12="NOT SURE";}else if ($_POST['question10']==3){$A+=1;$Q12="DISAGREE";}
if ($_POST['question13']==1){$A+=1;$Q13="AGREE";}else if($_POST['question13']==2){$B+=1;$A+=1;$Q13="NOT SURE";}else if ($_POST['question10']==3){$B+=1;$Q13="DISAGREE";}
if ($_POST['question14']==1){$B+=1;$Q14="AGREE";}else if($_POST['question14']==2){$B+=1;$A+=1;$Q14="NOT SURE";}else if ($_POST['question10']==3){$A+=1;$Q14="DISAGREE";}
if ($_POST['question15']==1){$B+=1;$Q15="AGREE";}else if($_POST['question15']==2){$B+=1;$A+=1;$Q15="NOT SURE";}else if ($_POST['question10']==3){$A+=1;$Q15="DISAGREE";}

//TEST 4
if ($_POST['question16']==1){$A+=1;$Q16="AGREE";}else if($_POST['question16']==2){$B+=1;$A+=1;$Q16="NOT SURE";}else if ($_POST['question10']==3){$B+=1;$Q16="DISAGREE";}
if ($_POST['question17']==1){$B+=1;$Q17="AGREE";}else if($_POST['question17']==2){$B+=1;$A+=1;$Q17="NOT SURE";}else if ($_POST['question10']==3){$A+=1;$Q17="DISAGREE";}
if ($_POST['question18']==1){$A+=1;$Q18="AGREE";}else if($_POST['question18']==2){$B+=1;$A+=1;$Q18="NOT SURE";}else if ($_POST['question10']==3){$B+=1;$Q18="DISAGREE";}
if ($_POST['question19']==1){$A+=1;$Q19="AGREE";}else if($_POST['question19']==2){$B+=1;$A+=1;$Q19="NOT SURE";}else if($_POST['question19']==3){$B+=1;$Q19="DISAGREE";}
if ($_POST['question20']==1){$A+=1;$Q20="AGREE";}else if($_POST['question20']==2){$B+=1;$A+=1;$Q20="NOT SURE";}else if($_POST['question20']==3){$B+=1;$Q20="DISAGREE";}

//TEST 5
if ($_POST['question21']==1){$A+=1;$Q21="AGREE";}else if($_POST['question21']==2){$B+=1;$A+=1;$Q21="NOT SURE";}else if($_POST['question21']==3){$B+=1;$Q21="DISAGREE";}
if ($_POST['question22']==1){$A+=1;$Q22="AGREE";}else if($_POST['question22']==2){$B+=1;$A+=1;$Q22="NOT SURE";}else if($_POST['question22']==3){$B+=1;$Q22="DISAGREE";}
if ($_POST['question23']==1){$B+=1;$Q23="AGREE";}else if($_POST['question23']==2){$B+=1;$A+=1;$Q23="NOT SURE";}else if($_POST['question23']==3){$A+=1;$Q23="DISAGREE";}
if ($_POST['question24']==1){$B+=1;$Q24="AGREE";}else if($_POST['question24']==2){$B+=1;$A+=1;$Q24="NOT SURE";}else if($_POST['question24']==3){$A+=1;$Q24="DISAGREE";}
if ($_POST['question25']==1){$A+=1;$Q25="AGREE";}else if($_POST['question25']==2){$B+=1;$A+=1;$Q25="NOT SURE";}else if($_POST['question25']==3){$B+=1;$Q25="DISAGREE";}

//TEST 6
if ($_POST['question26']==1){$A+=1;$Q26="AGREE";}else if($_POST['question26']==2){$B+=1;$A+=1;$Q26="NOT SURE";}else if($_POST['question26']==3){$B+=1;$Q26="DISAGREE";}
if ($_POST['question27']==1){$B+=1;$Q27="AGREE";}else if($_POST['question27']==2){$B+=1;$A+=1;$Q27="NOT SURE";}else if($_POST['question27']==3){$B+=1;$Q27="DISAGREE";}
if ($_POST['question28']==1){$A+=1;$Q28="AGREE";}else if($_POST['question28']==2){$B+=1;$A+=1;$Q28="NOT SURE";}else if($_POST['question28']==3){$B+=1;$Q28="DISAGREE";}
if ($_POST['question29']==1){$B+=1;$Q29="AGREE";}else if($_POST['question29']==2){$B+=1;$A+=1;$Q29="NOT SURE";}else if($_POST['question29']==3){$A+=1;$Q29="DISAGREE";}
if ($_POST['question30']==1){$A+=1;$Q30="AGREE";}else if($_POST['question30']==2){$B+=1;$A+=1;$Q30="NOT SURE";}else if($_POST['question30']==3){$B+=1;$Q30="DISAGREE";}

//TEST 7
if ($_POST['question31']==1){$A+=1;$Q31="AGREE";}else if($_POST['question31']==2){$B+=1;$A+=1;$Q31="NOT SURE";}else if($_POST['question31']==3){$B+=1;$Q31="DISAGREE";}
if ($_POST['question32']==1){$B+=1;$Q32="AGREE";}else if($_POST['question32']==2){$B+=1;$A+=1;$Q32="NOT SURE";}else if($_POST['question32']==3){$A+=1;$Q32="DISAGREE";}
if ($_POST['question33']==1){$A+=1;$Q33="AGREE";}else if($_POST['question33']==2){$B+=1;$A+=1;$Q33="NOT SURE";}else if($_POST['question33']==3){$B+=1;$Q33="DISAGREE";}
if ($_POST['question34']==1){$B+=1;$Q34="AGREE";}else if($_POST['question34']==2){$B+=1;$A+=1;$Q34="NOT SURE";}else if($_POST['question34']==3){$A+=1;$Q34="DISAGREE";}
if ($_POST['question35']==1){$A+=1;$Q35="AGREE";}else if($_POST['question35']==2){$B+=1;$A+=1;$Q35="NOT SURE";}else if($_POST['question35']==3){$B+=1;$Q35="DISAGREE";}

//Calculate this
$C_res = $A + $B;
$A_res = round(($A/$C_res)*100);
$B_res = round(($B/$C_res)*100);
if($A>$B){
    $RESULT1 = "Computer Science ".$A_res."%  ";
    $RESULT2 = "Information Technology ".$B_res."%  ";
    $C_result = "CS"; $result_perc = $A_res;
}else if ($B>$A){
    $RESULT1 = "Information Technology ".$B_res."%   ";
    $RESULT2 = "Computer Science ".$A_res."%   ";
    $C_result = "IT"; $result_perc = $B_res;
}


if($A==$B){ ?>
    <form name="restart" action="test1.php" method="get">
    <input type="text" name="error" value="Try again!">
    </form>
<script>
    document.restart.submit();
</script>
<?php }else{ 
//CONNECT TO user_answers
if(isset($_SESSION['Uname'])){
$sql = "INSERT INTO user_answers (Uname,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15,Q16,Q17,Q18,Q19,Q20,Q21,Q22,Q23,Q24,Q25,Q26,Q27,Q28,Q29,Q30,Q31,Q32,Q33,Q34,Q35,Course_result,Result_percent,Sex)
VALUES ('$curUser','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$Q11','$Q12','$Q13','$Q14','$Q15','$Q16','$Q17','$Q8','$Q19','$Q20','$Q21','$Q22','$Q23','$Q24',
'$Q25','$Q26','$Q27','$Q28','$Q29','$Q30','$Q31','$Q32','$Q33','$Q34','$Q35','$C_result','$result_perc',(SELECT Sex FROM user WHERE Uname = '$curUser'))";
mysqli_query($connect, $sql);}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>RESULT</title>
</head>
<body>
    <form name="calculate" action="results.php" method="get">
    <input type="text" name="A" value="<?php echo (isset($A))? $A:''; ?>">
    <input type="text" name="B" value="<?php echo (isset($B))? $B:''; ?>">
    <input type="text" name="C" value="<?php echo (isset($C_res))? $C_res:''; ?>">
    <input type="text" name="RESULT1" value="<?php echo (isset($RESULT1))? $RESULT1:''; ?>">
    <input type="text" name="RESULT2" value="<?php echo (isset($RESULT2))? $RESULT2:''; ?>">
    <input type="text" name="token1">
    </form>
</body>
<script>
    document.calculate.submit();
</script>
</html>


<?php }else if(isset($_GET['token2']) & !isset($_GET['token1'])){ //TOURISM MANAGEMENT & HOSPITALITY MANAGEMENT

//TEST 1
if ($_POST['question1']==1){$A+=1;$Q1="AGREE";}else if($_POST['question1']==2){$B+=1;$A+=1;$Q1="NOT SURE";}else if ($_POST['question1']==3){$B+=1;$Q1="DISAGREE";}
if ($_POST['question2']==1){$B+=1;$Q2="AGREE";}else if($_POST['question2']==2){$B+=1;$A+=1;$Q2="NOT SURE";}else if ($_POST['question2']==3){$A+=1;$Q2="DISAGREE";}
if ($_POST['question3']==1){$B+=1;$Q3="AGREE";}else if($_POST['question3']==2){$B+=1;$A+=1;$Q3="NOT SURE";}else if ($_POST['question3']==3){$A+=1;$Q3="DISAGREE";}
if ($_POST['question4']==1){$A+=1;$Q4="AGREE";}else if($_POST['question4']==2){$B+=1;$A+=1;$Q4="NOT SURE";}else if ($_POST['question4']==3){$B+=1;$Q4="DISAGREE";}
if ($_POST['question5']==1){$A+=1;$Q5="AGREE";}else if($_POST['question5']==2){$B+=1;$A+=1;$Q5="NOT SURE";}else if ($_POST['question5']==3){$B+=1;$Q5="DISAGREE";}

//TEST 2
if ($_POST['question6']==1){$A+=1;$Q6="AGREE";}else if($_POST['question6']==2){$B+=1;$A+=1;$Q6="NOT SURE";}else if ($_POST['question6']==3){$B+=1;$Q6="DISAGREE";}
if ($_POST['question7']==1){$B+=1;$Q7="AGREE";}else if($_POST['question7']==2){$B+=1;$A+=1;$Q7="NOT SURE";}else if ($_POST['question7']==3){$A+=1;$Q7="DISAGREE";}
if ($_POST['question8']==1){$A+=1;$Q8="AGREE";}else if($_POST['question8']==2){$B+=1;$A+=1;$Q8="NOT SURE";}else if ($_POST['question8']==3){$B+=1;$Q8="DISAGREE";}
if ($_POST['question9']==1){$B+=1;$Q9="AGREE";}else if($_POST['question9']==2){$B+=1;$A+=1;$Q9="NOT SURE";}else if ($_POST['question9']==3){$A+=1;$Q9="DISAGREE";}
if ($_POST['question10']==1){$A+=1;$Q10="AGREE";}else if($_POST['question10']==2){$B+=1;$A+=1;$Q10="NOT SURE";}else if ($_POST['question10']==3){$B+=1;$Q10="DISAGREE";}

//TEST 3
if ($_POST['question11']==1){$B+=1;$Q11="AGREE";}else if($_POST['question11']==2){$B+=1;$A+=1;$Q11="NOT SURE";}else if ($_POST['question10']==3){$A+=1;$Q11="DISAGREE";}
if ($_POST['question12']==1){$B+=1;$Q12="AGREE";}else if($_POST['question12']==2){$B+=1;$A+=1;$Q12="NOT SURE";}else if ($_POST['question10']==3){$A+=1;$Q12="DISAGREE";}
if ($_POST['question13']==1){$A+=1;$Q13="AGREE";}else if($_POST['question13']==2){$B+=1;$A+=1;$Q13="NOT SURE";}else if ($_POST['question10']==3){$B+=1;$Q13="DISAGREE";}
if ($_POST['question14']==1){$B+=1;$Q14="AGREE";}else if($_POST['question14']==2){$B+=1;$A+=1;$Q14="NOT SURE";}else if ($_POST['question10']==3){$A+=1;$Q14="DISAGREE";}
if ($_POST['question15']==1){$B+=1;$Q15="AGREE";}else if($_POST['question15']==2){$B+=1;$A+=1;$Q15="NOT SURE";}else if ($_POST['question10']==3){$A+=1;$Q15="DISAGREE";}

//TEST 4
if ($_POST['question16']==1){$A+=1;$Q16="AGREE";}else if($_POST['question16']==2){$B+=1;$A+=1;$Q16="NOT SURE";}else if ($_POST['question10']==3){$B+=1;$Q16="DISAGREE";}
if ($_POST['question17']==1){$B+=1;$Q17="AGREE";}else if($_POST['question17']==2){$B+=1;$A+=1;$Q17="NOT SURE";}else if ($_POST['question10']==3){$A+=1;$Q17="DISAGREE";}
if ($_POST['question18']==1){$A+=1;$Q18="AGREE";}else if($_POST['question18']==2){$B+=1;$A+=1;$Q18="NOT SURE";}else if ($_POST['question10']==3){$B+=1;$Q18="DISAGREE";}
if ($_POST['question19']==1){$A+=1;$Q19="AGREE";}else if($_POST['question19']==2){$B+=1;$A+=1;$Q19="NOT SURE";}else if($_POST['question19']==3){$B+=1;$Q19="DISAGREE";}
if ($_POST['question20']==1){$A+=1;$Q20="AGREE";}else if($_POST['question20']==2){$B+=1;$A+=1;$Q20="NOT SURE";}else if($_POST['question20']==3){$B+=1;$Q20="DISAGREE";}

//TEST 5
if ($_POST['question21']==1){$A+=1;$Q21="AGREE";}else if($_POST['question21']==2){$B+=1;$A+=1;$Q21="NOT SURE";}else if($_POST['question21']==3){$B+=1;$Q21="DISAGREE";}
if ($_POST['question22']==1){$A+=1;$Q22="AGREE";}else if($_POST['question22']==2){$B+=1;$A+=1;$Q22="NOT SURE";}else if($_POST['question22']==3){$B+=1;$Q22="DISAGREE";}
if ($_POST['question23']==1){$B+=1;$Q23="AGREE";}else if($_POST['question23']==2){$B+=1;$A+=1;$Q23="NOT SURE";}else if($_POST['question23']==3){$A+=1;$Q23="DISAGREE";}
if ($_POST['question24']==1){$A+=1;$Q24="AGREE";}else if($_POST['question24']==2){$B+=1;$A+=1;$Q24="NOT SURE";}else if($_POST['question24']==3){$B+=1;$Q24="DISAGREE";}
if ($_POST['question25']==1){$A+=1;$Q25="AGREE";}else if($_POST['question25']==2){$B+=1;$A+=1;$Q25="NOT SURE";}else if($_POST['question25']==3){$B+=1;$Q25="DISAGREE";}

//TEST 6
if ($_POST['question26']==1){$A+=1;$Q26="AGREE";}else if($_POST['question26']==2){$B+=1;$A+=1;$Q26="NOT SURE";}else if($_POST['question26']==3){$B+=1;$Q26="DISAGREE";}
if ($_POST['question27']==1){$B+=1;$Q27="AGREE";}else if($_POST['question27']==2){$B+=1;$A+=1;$Q27="NOT SURE";}else if($_POST['question27']==3){$B+=1;$Q27="DISAGREE";}
if ($_POST['question28']==1){$A+=1;$Q28="AGREE";}else if($_POST['question28']==2){$B+=1;$A+=1;$Q28="NOT SURE";}else if($_POST['question28']==3){$B+=1;$Q28="DISAGREE";}
if ($_POST['question29']==1){$B+=1;$Q29="AGREE";}else if($_POST['question29']==2){$B+=1;$A+=1;$Q29="NOT SURE";}else if($_POST['question29']==3){$A+=1;$Q29="DISAGREE";}
if ($_POST['question30']==1){$A+=1;$Q30="AGREE";}else if($_POST['question30']==2){$B+=1;$A+=1;$Q30="NOT SURE";}else if($_POST['question30']==3){$B+=1;$Q30="DISAGREE";}

//TEST 7
if ($_POST['question31']==1){$A+=1;$Q31="AGREE";}else if($_POST['question31']==2){$B+=1;$A+=1;$Q31="NOT SURE";}else if($_POST['question31']==3){$B+=1;$Q31="DISAGREE";}
if ($_POST['question32']==1){$B+=1;$Q32="AGREE";}else if($_POST['question32']==2){$B+=1;$A+=1;$Q32="NOT SURE";}else if($_POST['question32']==3){$A+=1;$Q32="DISAGREE";}
if ($_POST['question33']==1){$A+=1;$Q33="AGREE";}else if($_POST['question33']==2){$B+=1;$A+=1;$Q33="NOT SURE";}else if($_POST['question33']==3){$B+=1;$Q33="DISAGREE";}
if ($_POST['question34']==1){$B+=1;$Q34="AGREE";}else if($_POST['question34']==2){$B+=1;$A+=1;$Q34="NOT SURE";}else if($_POST['question34']==3){$A+=1;$Q34="DISAGREE";}
if ($_POST['question35']==1){$A+=1;$Q35="AGREE";}else if($_POST['question35']==2){$B+=1;$A+=1;$Q35="NOT SURE";}else if($_POST['question35']==3){$B+=1;$Q35="DISAGREE";}

//Calculate this
$C_res = $A + $B;
$A_res = round(($A/$C_res)*100);
$B_res = round(($B/$C_res)*100);
if($A>$B){
    $RESULT1 = "Tourism Management ".$A_res."%  ";
    $RESULT2 = "Hospitality Management ".$B_res."%  ";
    $C_result = "TM"; $result_perc = $A_res;
}else if ($B>$A){
    $RESULT1 = "Hospitality Management ".$B_res."%   ";
    $RESULT2 = "Tourism Management ".$A_res."%   ";
    $C_result = "HM"; $result_perc = $B_res;
}


if($A==$B){ ?>
    <form name="restart" action="test2.php" method="get">
    <input type="text" name="error" value="Try again!">
    </form>
<script>
    document.restart.submit();
</script>
<?php }else{ 
//CONNECT TO user_answers
if(isset($_SESSION['Uname'])){
$sql = "INSERT INTO user_answers (Uname,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15,Q16,Q17,Q18,Q19,Q20,Q21,Q22,Q23,Q24,Q25,Q26,Q27,Q28,Q29,Q30,Q31,Q32,Q33,Q34,Q35,Course_result,Result_percent,Sex)
VALUES ('$curUser','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$Q11','$Q12','$Q13','$Q14','$Q15','$Q16','$Q17','$Q8','$Q19','$Q20','$Q21','$Q22','$Q23','$Q24',
'$Q25','$Q26','$Q27','$Q28','$Q29','$Q30','$Q31','$Q32','$Q33','$Q34','$Q35','$C_result','$result_perc',(SELECT Sex FROM user WHERE Uname = '$curUser'))";
mysqli_query($connect, $sql);}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>RESULT</title>
</head>
<body>
    <form name="calculate" action="results.php" method="get">
    <input type="text" name="A" value="<?php echo (isset($A))? $A:''; ?>">
    <input type="text" name="B" value="<?php echo (isset($B))? $B:''; ?>">
    <input type="text" name="C" value="<?php echo (isset($C_res))? $C_res:''; ?>">
    <input type="text" name="RESULT1" value="<?php echo (isset($RESULT1))? $RESULT1:''; ?>">
    <input type="text" name="RESULT2" value="<?php echo (isset($RESULT2))? $RESULT2:''; ?>">
    <input type="text" name="token2">
    </form>
</body>
<script>
    document.calculate.submit();
</script>
</html>
<?php } ?>