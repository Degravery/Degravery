<?php
session_start();
$A=0; //CCIS
$B=0; //CTHM
//PAGE1
if ($_GET['question1']==1){$A+=1;$Q1="AGREE";}else if($_GET['question1']==2){$A+=0.5;$B+=0.5;$Q1="NOT SURE";}else if ($_GET['question1']==3){$B+=1;$Q1="DISAGREE";}
if ($_GET['question2']==1){$B+=1;$Q2="AGREE";}else if($_GET['question2']==2){$B+=0.5;$A+=0.5;$Q2="NOT SURE";}else if ($_GET['question2']==3){$A+=1;$Q2="DISAGREE";}
if ($_GET['question3']==1){$B+=1;$Q3="AGREE";}else if($_GET['question3']==2){$B+=0.5;$A+=0.5;$Q3="NOT SURE";}else if ($_GET['question3']==3){$A+=1;$Q3="DISAGREE";}
if ($_GET['question4']==1){$A+=1;$Q4="AGREE";}else if($_GET['question4']==2){$A+=0.5;$B+=0.5;$Q4="NOT SURE";}else if ($_GET['question4']==3){$B+=1;$Q4="DISAGREE";}
if ($_GET['question5']==1){$A+=1;$Q5="AGREE";}else if($_GET['question5']==2){$A+=0.5;$B+=0.5;$Q5="NOT SURE";}else if ($_GET['question5']==3){$B+=1;$Q5="DISAGREE";}

//PAGE2
if ($_GET['question6']==1){$B+=1;$Q6="AGREE";}else if($_GET['question6']==2){$A+=0.5;$B+=0.5;$Q6="NOT SURE";}else if ($_GET['question6']==3){$A+=1;$Q6="DISAGREE";}
if ($_GET['question7']==1){$B+=1;$Q7="AGREE";}else if($_GET['question7']==2){$B+=0.5;$A+=0.5;$Q7="NOT SURE";}else if ($_GET['question7']==3){$A+=1;$Q7="DISAGREE";}
if ($_GET['question8']==1){$A+=1;$Q8="AGREE";}else if($_GET['question8']==2){$A+=0.5;$B+=0.5;$Q8="NOT SURE";}else if ($_GET['question8']==3){$B+=1;$Q8="DISAGREE";}
if ($_GET['question9']==1){$B+=1;$Q9="AGREE";}else if($_GET['question9']==2){$B+=0.5;$A+=0.5;$Q9="NOT SURE";}else if ($_GET['question9']==3){$A+=1;$Q9="DISAGREE";}
if ($_GET['question10']==1){$A+=1;$Q10="AGREE";}else if($_GET['question10']==2){$A+=0.5;$B+=0.5;$Q10="NOT SURE";}else if ($_GET['question10']==3){$B+=1;$Q10="DISAGREE";}

if ($A>$B){
    header("Location: test1.php");
}else if ($B>$A){
    header("Location: test2.php");
}else{
    header("Location: test0.php?Error=Inconclusive try again!");
}

?>