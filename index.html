<?php  
 session_start();
include "Database_connect.php";
$sql =  "SELECT * FROM user_answers";
$MCScount = 0;$FCScount= 0;$CScount= 0;$ITcount= 0;$MITcount = 0;$FITcount= 0;$i = 0;$testcount = 0;
 $result = mysqli_query($connect, $sql);
 $total_rows = mysqli_num_rows($result);
while($row = mysqli_fetch_assoc($result)){
    $testcount += 1;
    if($row['Course_result']=="CS"){
        $CScount += 1;
    if($row['Sex']=="MALE"){
        $MCScount += 1;
    } else if ($row['Sex']=="FEMALE"){
            $FCScount += 1;
        }
    }
    if($row['Course_result']=="IT"){
        $ITcount += 1;
    if($row['Sex']=="MALE"){
        $MITcount += 1;
    } else if ($row['Sex']=="FEMALE"){
            $FITcount += 1;
        }
    }
    $i++;
}
$CScount_res = round(($CScount/$testcount) * 100);
$ITcount_res = round(($ITcount/$testcount) * 100);
if($CScount<=0){$MCScount_res="Not Enough data";}else{$MCScount_res = round(($MCScount / $CScount) * 100)."%";} if($CScount<=0){$FCScount_res="Not Enough data";}else{$FCScount_res = round(($FCScount / $CScount) * 100)."%";} //Caculate percentage of Com Science M and F
if($ITcount<=0){$MITcount_res="Not Enough data";}else{$MITcount_res = round(($MITcount / $ITcount) * 100)."%";} if($ITcount<=0){$FITcount_res="Not Enough data";}else{$FITcount_res = round(($FITcount / $ITcount) * 100)."%";} //Calculate percentage of Intel Tech M and F
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    .dashboardcontain{
    display: block;
    position:absolute;
    width: 100%;
    height: 300px;
    top:100%;
    transition: 0.5s ease-in-out;
}
    @media screen and (max-width:1367px){
    .topbar{
        height: 89px;
    }
    .dashboard{
        height: 30%;
    }
    .title{
        font-size:75px;

    }
    .content{
        font-size: 10px;
        width: 100%;
        top:75px;
    }
    .text-box{
        z-index: 1;
    }
    .text-box p{
        margin-top: 45px;
        font-size: 20px;
        margin-bottom: 0;
    }
    .columns{
        font-size: 12px;
        width: 35%;
        height: 40%;
    }
    .columns2{
        width: 60%;
        height: 30%;
    }
    .textscale{
        font-size: 15px;
        padding-left: 60%;
        margin-top: 8px;
    }
    .scaleout1{
        height: 40%;
        bottom: 34px;
    }
    .scaleout2{
        height: 40%;
        bottom: 3px;
    }
    .start-test{
        margin-top: 4%;
        z-index: 2;
    }
    #center{
        font-size: 15px;
    }
    }
</style>
<body>
<div class="disclaimerbg" id="discbg">
    <div class="disclaimercontain">
        <div class="exitbutton" onclick="exitbutton('clicked')"><a>X</a></div>
<script>
    function exitbutton(exit){
        if(exit==='clicked'){
            document.getElementById("discbg").classList.remove('active');
        }
    }
</script>
        <div class="disclaimertextcontain">
            <div class="disclaimertext"><a><span style="font-weight:bolder;font-size:30px">DISCLAIMER:</span><br>The results received could be used as a guide to help find a suitable college course with the provided motivation, aspirations and skills answers from the test.</a></div>
        </div>
        <div class="disclaimerbtncontain">
            <div class="disclaimerbtn" onclick="continuetest('clicked')"><a>Continue</a></div>
        </div>
    </div>
</div>
<div class="topbar">
    <a href="records.php"></a>
    <div class="webname">
        <nav>
        <a href="index.php"><img src="images/logo.png"></a>
        <h2>DEGRAVERY</h2>
 </nav>
    </div>
    <nav class="main-nav">
        <ul>
            <li><a href="index.php"> HOME ‎<i class="fas fa-home"></i></a></li>
        </ul>
        <ul><li><a href="about.php"> ABOUT ‎<i class="fas fa-info-circle"></i></a></li></ul>
        <div class="dropdown">
            <button class="dropdown_btn">Courses⮟</button>
            <div class="dropdown_content">
                <a href="https://www.umak.edu.ph/academics/college/ccis/">Computer Science(CS)</a>
                <a href="https://www.umak.edu.ph/academics/college/ccis/">Information Technology(IT)</a>
                <a href="https://www.umak.edu.ph/academics/college/cthm/" target="_blank">Tourism Management(TM)</a>
                <a href="https://www.umak.edu.ph/academics/college/cthm/" target="_blank">Hospitality Management(HM)</a>
            </div>
        </div>
        <?php if(isset($_SESSION['Uname'])){?>
        <ul>
            <li><a href="logout.php">LOGOUT⭯</a></li>
        </ul>
        <?php }else{?>
        <ul>
        <li style="width: 100px">
            <a href="logout.php">
                <i class="fas fa-sign-in-alt"></i> SIGN IN
            </a>
        </li>
    </ul>
        <?php }?>
    </nav>
</div>
    <div class="content">
        <h1 class="title">Discover Your Degree</h1>
        <div class="text-box">
        <!--<p>Welcome to degavery. This website helps you to discover your future collage course and your potential future career. <br>Degavery aims to help those students that have trouble deciding their collage course. Also, Degavery will give you guidance on the course you got, <br>giving you things you need to study for and the requirements you need for that course. We are sure that degavery will help you in picking your future collage course and your future career.</table></p>-->
    </div>
        <a class="start-test" onclick="disclaimer('clicked')">Start Test</a>
    </div>
    <div class="miniboxholder">
        <div class="minibox">
            <div class="minibox-title"><p>Finish the test</p></div>
            <div class="minibox-desc"><p>Answer at with your preferance and aspirations.</p></div>
            <img src="images/news-report.png">
        </div>
        <div class="minibox">
            <div class="minibox-title"><p>Obtain results</p></div>
            <div class="minibox-desc"><p>Discover your suitable courses.</p></div>
            <img src="images/artificial-intelligence.png">
        </div>
        <div class="minibox">
            <div class="minibox-title"><p>Review course details</p></div>
            <div class="minibox-desc"><p>Discover the requirements and details of the course.</p></div>
            <img src="images/computer.png">
        </div>
    </div>
    <div class="dashboardcontain" id="dashboardcontainer">
    <div class="dashboardbutton" id="dashboardtext" onclick="changestate('clicked')">▲</div>
    <div class="dashboard"> <!--Testing Dashboard probably going to try and add visuals eg. Graphs & such-->
        <div class="columns">
        <h3>Computer Science recommended by gender</h2>
        <p>Male: <?php echo $MCScount_res?></p>
        <p>Female: <?php echo $FCScount_res?></p>
        </div>
        <div class="columns">
        <h3>Information Technology  recommended by gender</h2>
        <p>Male: <?php echo $MITcount_res?></p>
        <p>Female: <?php echo $FITcount_res?></p>
        </div>
        <div class="columns2">
        <div class="seperator">
        <p class="textscale">CS</p>
        <p class="textscale">IT</p>
        </div>
        <div class="scaleout1"><div class="scalein" style="width:<?php echo $CScount_res."%"?>"><p id="center"><?php echo $CScount_res."%"; ?></p></div></div>
        <div class="scaleout2"><div class="scalein" style="width:<?php echo $ITcount_res."%"?>"><p id="center"><?php echo $ITcount_res."%"; ?></p></div></div>
    </div>
    </div>
</body>
<script>
    let click=0;
    let testclick=0;
    function changestate(state){
        if(state==='clicked'){
        click++;
        console.log(click);
        if(click==1){
            document.getElementById("dashboardcontainer").style.top = "70%";
            document.getElementById("dashboardtext").textContent='▼';
        }
        if(click>=2){
            click=0;
            document.getElementById("dashboardcontainer").style.top = "100%";
            document.getElementById("dashboardtext").textContent='▲';
        }
    }
    }
    function disclaimer(click){
        if(click==='clicked'){
            document.getElementById("discbg").classList.add('active');
        }
    }
    function continuetest(click){
        if(click==='clicked'){
            document.location.href="test0.php";
        }
    }
</script>
</html>
<?php 
?>
