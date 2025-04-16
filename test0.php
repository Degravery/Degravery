<?php
session_start();
include "Database_connect.php";
$sql =  "SELECT * FROM test0_questions ORDER BY RAND()";
$i=0;
$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <link rel="icon" type="image/x-icon" href="images/degicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>TEST</title>
</head>
<style>
    body{
        background-image: url(images/homebg.jpg);
        min-height: 100vh;
        width: 100%;
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        overflow-x: hidden;
        overflow-y: scroll;
    }
    ::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
::-webkit-scrollbar-thumb {
  background: #0d2364; 
}
::-webkit-scrollbar-thumb:hover {
  background: #0d2364; 
}
    button{
        color: #0d2364;
        background-color: gold;
        border-radius: 10px;
        font-size: 25px;
        font-family: 'Times New Roman', Times, serif;
        width: 300px;
        height: 50px;
        margin-top: 15px;
        transition: 0.25s ease; 
    }
    input[type="radio"]{
        width: 25px;
        height: 25px;
        transition: 200ms ease-in-out;
    }
    input[type="radio"]:hover{
        transform: scale(1.5);
    }
    .testpage{
        display:none;
        transition: opacity 0.75s;
    }
    .testpage.active{
        display:block;
        transition: opacity 0.75s;
    }
    .progressbarin{
    display: inline-block;
    height: 100%;
    transition-property: width;
    transition-duration: 0.5s;
    transition-timing-function: ease-in-out;
    overflow: hidden;
    background-color: green;
    animation-name: progress;
    border-radius: 5.1px;
}
#progress{
    width: 0%;
}

    @media screen and (max-width:1367px){
        .topbar{
            height: 89px;
        }
        .AQ_container{
            left: 16%;
        }
    }
</style>
<body>
    <div class="topbar">
        <div class="webname">
            <nav>
                <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
                <h2>DEGRAVERY</h2>
            </nav>
        </div>
        <nav class="main-nav">
        <ul>
            <li><a href="index.html"> HOME ‎<i class="fas fa-home"></i></a></li>
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
                <i class="fas fa-sign-in-alt"></i>SIGN IN
            </a>
        </li>
    </ul>
        <?php }?>
    </nav>
    </div>
    <div class="progressbarcontain">
        <div class="progressbar">
            <div class="progressbarin" id="progress"></div>
        </div>
    </div>
    <div class="errorcontain"><?php if(isset($_GET['Error'])){?>
        <div class="errorbox"><a><?php echo($_GET['Error']);} ?></a></div>
    </div>
    <form action="test0result.php" method="get">
        <!-- your form elements here -->
</form>
    <form action="test0result.php" method="get">
    <div class="testpage active" id="test1">
    <div class="AQ_container">
        <div class="AQ_containerrows">
<?php while($row = mysqli_fetch_assoc($result)){ 

        if($i==0){?>
        <div class="qbox">
            <div class="question1pos" id="question1"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but1contain">
                    <div class="butpos">
                        <div class="radio1">
        <label class>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CCIS -->
                    <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                    <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>


       <?php if($i==1){?>    
        <div class="qbox">
            <div class="question2pos"><h1><?php echo $row['questionname'] ?></h1></div>
                <div class="but2contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber'] ?>" value="1"></div> <!-- CTHM -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'] ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'];$i++;?>" value="3"></div>
        </div></div></div><?php continue;} ?>
        <?php if($i==2){?>  
        <div class="qbox">
            <div class="question3pos"><h1><?php echo $row['questionname'] ?></h1><br></div>
                <div class="but3contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber'] ?>" value="1"></div> <!-- CTHM -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'] ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'];$i++;?>" value="3"></div>
        </div></div></div><?php continue;} ?>


<?php if($i==3){?>  
        <div class="qbox">
            <div class="question4pos"><h1><?php echo $row['questionname'] ?></h1><br></div>
                <div class="but4contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber'] ?>" value="1"></div> <!-- CCIS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'] ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'];$i++;?>" value="3"></div> 
        </div></div></div><?php continue;} ?>


<?php if($i==4){?>  
        <div class="qbox">
            <div class="question5pos"><h1><?php echo $row['questionname'] ?></h1><br></div>
                <div class="but5contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber'] ?>" value="1"></div> <!-- CCIS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="neutral" name="<?php echo $row['questionnumber'] ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'];$i++;?>" value="3"></div>
        </div></div></div>
        <div class="nextpbtn" onclick="changetestpage('next')"><a>NEXT</a></div>
        <span><a href="https://www.umak.edu.ph/academics/college/ccis/"></a></span>
        <nav><a id="button" href="index.php">Exit Test</a></nav>
            </div>
        </div></div>
        <?php continue;} ?>


        <?php if($i==5){?>  
        <div class="testpage" id="test2">
        <div class="AQ_container">
        <div class="AQ_containerrows"> 
        <div class="qbox">
            <div class="question1pos" id="question1"><h1><?php echo $row['questionname'] ?></h1></div>
                <div class="but1contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber'] ?>" value="1"></div> <!-- CTHM -->
                    <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'] ?>" value="2" checked></div>
                    <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'];$i++;?>" value="3"></div>
        </div></div></div><?php continue;} ?>


        <?php if($i==6){?>  
        <div class="qbox">
            <div class="question2pos"><h1><?php echo $row['questionname'] ?></h1></div>
                <div class="but2contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber'] ?>" value="1"></div> <!-- CTHM -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'] ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'];$i++;?>" value="3"></div>
        </div></div></div>  <?php continue;} ?>


        <?php if($i==7){?>  
        <div class="qbox">
            <div class="question3pos"><h1><?php echo $row['questionname'] ?></h1><br></div>
                <div class="but3contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber'] ?>" value="1"></div> <!-- CCIS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'] ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'];$i++;?>" value="3"></div>
        </div></div></div> <?php continue;} ?>


        <?php if($i==8){?>  
        <div class="qbox">
            <div class="question4pos"><h1><?php echo $row['questionname'] ?></h1><br></div>
                <div class="but4contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber'] ?>" value="1"></div> <!-- CTHM -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'] ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'];$i++;?>" value="3"></div>
        </div></div></div> <?php continue;} ?>

        
        <?php if($i==9){?>  
        <div class="qbox">
            <div class="question5pos"><h1><?php echo $row['questionname'] ?></h1><br></div>
                <div class="but5contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber'] ?>" value="1"></div> <!-- CCIS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'] ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber'];$i++;?>" value="3"></div>
        </div></div></div>
        <?php } ?>
        <div class="backpbtn" onclick="changetestpage('back')"><a>BACK</a></div>
        <button type="submit" class="submitbtn">Continue Test</button>
        <nav><a id="button" href="index.php" style="margin-top:-102px">Exit Test</a></nav><?php continue;} ?>
            </div>
        </div></div>
            </div>
        </div></div>
    </form>
</body>
<script>
    let currentpage = 0;
    let progressor = 0;

    const testpages = document.querySelectorAll(".testpage");
    function changetestpage(action){
        testpages[currentpage].classList.remove('active');
      if(action==='next'){
        currentpage++;
        progressor++;
        document.documentElement.scrollTop = 0;
        if(currentpage>=testpages.length){
            currentpage = testpages.length -1;
        }
      }else if (action==='back'){
        currentpage--;
        progressor--;
        document.documentElement.scrollTop = 0;
        if(currentpage<0){
            currentpage = 0;
        }    
    }
    testpages[currentpage].classList.add('active');
        if(progressor==0){
        document.getElementById("progress").style.width = "0%";
      }
      if(progressor==1){
        document.getElementById("progress").style.width = "100%";
    }
}
</script>
</html>
