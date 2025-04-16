<?php
session_start();
include "Database_connect.php";
$sql =  "SELECT * FROM test2_questions ORDER BY RAND()";
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
<div class="alertbgcontain" id="alertbg">
<div class="alertcontain">
    <div class="alertheadercontain"><div class="alertheader" style="width:80%"><a>Suitable College: CTHM</a></div></div>
    <div class="alerttextcontain"><div class="alerttext"><a>Collage of Tourism and Hospitality Management (CTHM) is a college or academic division that focuses on courses like Tourism Management and Hospitality Management.</a></div></div>
    <div class="alertbuttoncontain"><div class="alertbutton" onclick="continueclick('yes')"><a>Continue test</a></div></div>
</div>
</div>
<script>
</script>
    <div class="topbar">
        <div class="webname">
            <nav>
                <a href="index.php"><img src="images/degicon.png" alt="Logo"></a>
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
                <i class="fas fa-sign-in-alt"></i>SIGN IN
            </a>
        </li>
    </ul>
        <?php }?>
    </nav>
        </nav>
    </div>

    <div class="sidepanel">
            <div class="musiccontain" id="mcontainer">
            <div class="musicbutton" onclick="musbtn()"><a>♪</a></div>

            <script>
                let mbtnclick=0;
                let mcontain = document.getElementById("mcontainer");
                function musbtn(){
                    if(mbtnclick==0){
                        mcontainer.style.left="0";
                        mbtnclick++;
                    }else if(mbtnclick==1){
                        mcontainer.style.left="-250px";
                        mbtnclick=0;
                    }
                }
            </script>

                <div class="musicselector">
                    <a>
                    <audio controls autoplay id="audioplay"><source src=""  type="audio/mpeg"></audio>
                    </a>
                    <a>
                     <div class="playbuttoncontain">
                        <div class="playbutton" id="pbtn" onclick="playmusic(1)">
                            <div class="triangle">

                            </div>
                        </div>
                    </div>
                    <div class="mtitlecontain">
                       <div class="titles">Deaf Kev - Invincible</div>         
                    </div>
                    </a>
                    <a>
                    <div class="playbuttoncontain">
                        <div class="playbutton" id="pbtn" onclick="playmusic(2)">
                            <div class="triangle">

                            </div>
                        </div>
                    </div>
                    <div class="mtitlecontain">
                       <div class="titles">Cartoon, Coleman Trapp, Jéja - Why We Lose</div>         
                    </div>
                    </a>
                    <a>
                    <div class="playbuttoncontain">
                        <div class="playbutton" id="pbtn" onclick="playmusic(3)">
                            <div class="triangle">

                            </div>
                        </div>
                    </div>
                    <div class="mtitlecontain">
                       <div class="titles">Desmeon - Hellcat</div>         
                    </div>
                    </a>
                    <a>
                    <div class="playbuttoncontain">
                        <div class="playbutton" id="pbtn" onclick="playmusic(4)">
                            <div class="triangle">

                            </div>
                        </div>
                    </div>
                    <div class="mtitlecontain">
                       <div class="titles">Different Heaven - Nekozilla</div>         
                    </div>
                    </a>
                    <a>
                    <div class="playbuttoncontain">
                        <div class="playbutton" id="pbtn" onclick="playmusic(5)">
                            <div class="triangle">

                            </div>
                        </div>
                    </div>
                    <div class="mtitlecontain">
                       <div class="titles">Syn Cole - Feel Good</div>         
                    </div>
                    </a>
                    <a>
                    <div class="playbuttoncontain">
                        <div class="playbutton" id="pbtn" onclick="playmusic(6)">
                            <div class="triangle">

                            </div>
                        </div>
                    </div>
                    <div class="mtitlecontain">
                       <div class="titles">Tobu - Candyland</div>         
                    </div>
                    </a>
                    <a>
                    <div class="playbuttoncontain">
                        <div class="playbutton" id="pbtn" onclick="playmusic(7)">
                            <div class="triangle">

                            </div>
                        </div>
                    </div>
                    <div class="mtitlecontain">
                       <div class="titles">Tobu - Hope</div>         
                    </div>
                    </a>
                    <a style="border-bottom:none">
                    <div class="playbuttoncontain">
                        <div class="playbutton" id="pbtn" onclick="playmusic(8)">
                            <div class="triangle">

                            </div>
                        </div>
                    </div>
                    <div class="mtitlecontain">
                       <div class="titles">JJD - Adventure</div>         
                    </div>
                    </a>
                    </a>
                </div>
            </div>
        </div>

        <script>
            var mplayer = document.getElementById("audioplay");
            function playmusic(num){
                if(num===1){
                mplayer.src = "music/invincible_DEF.mp3";
                mplayer.volume = 0.11;
            }if(num===2){
                mplayer.src = "music/Cartoon, Coleman Trapp, Jéja - Why We Lose (feat. Coleman Trapp) [NCS Release].mp3";
                mplayer.volume = 0.11;
            }if(num===3){
                mplayer.src = "music/Desmeon - Hellcat [NCS Release].mp3";
                mplayer.volume = 0.11;
            }if(num===4){
                mplayer.src = "music/Different Heaven - Nekozilla [NCS Release].mp3";
                mplayer.volume = 0.11;
            }if(num===5){
                mplayer.src = "music/Syn Cole - Feel Good [NCS Release].mp3";
                mplayer.volume = 0.11;
            }if(num===6){
                mplayer.src = "music/Tobu - Candyland.mp3";
                mplayer.volume = 0.11;
            }if(num===7){
                mplayer.src = "music/Tobu - Hope (Original Mix).mp3";
                mplayer.volume = 0.11;
            }if(num===8){
                mplayer.src = "music/JJD - Adventure [NCS Release].mp3";
                mplayer.volume = 0.11;
            }
        }
        </script>

    <div class="progressbarcontain">
        <div class="progressbar">
            <div class="progressbarin" id="progress"></div>
        </div>
    </div>
    <div class="errorcontain" style="width: 146px;"><?php if(isset($_GET['error'])){?>
        <div class="errorbox"><a><?php echo($_GET['error']);} ?></a></div>
    </div>
    <form action="calculating.php" method="post">
        <!-- your form elements here -->
</form>
    <form action="calculating.php?token2" method="post">

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
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                    <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                    <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==1){?>
        <div class="qbox">
            <div class="question2pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but2contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

<?php if($i==2){?>        
        <div class="qbox">
            <div class="question3pos"><h1><?php echo $row['questionname']; ?></h1><br></div>
                <div class="but3contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

<?php if($i==3){?>
        <div class="qbox">
            <div class="question4pos"><h1><?php echo $row['questionname']; ?></h1><br></div>
                <div class="but4contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>   
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==4){?>
        <div class="qbox">
            <div class="question5pos"><h1><?php echo $row['questionname']; ?></h1><br></div>
                <div class="but5contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="neutral" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div>
        <div class="nextpbtn" onclick="changetestpage('next')"><a>NEXT</a></div>
        <span><a href="https://www.umak.edu.ph/academics/college/ccis/"></a></span>
        <nav><a id="button" href="index.php">Exit Test</a></nav>
            </div>
        </div></div><?php $i++;continue;} ?>



        <?php if($i==5){?>
        <div class="testpage" id="test2">
        <div class="AQ_container">
        <div class="AQ_containerrows">

        
        <div class="qbox">
            <div class="question1pos" id="question1"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but1contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                    <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                    <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==6){?>
        <div class="qbox">
            <div class="question2pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but2contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==7){?>
        <div class="qbox">
            <div class="question3pos"><h1><?php echo $row['questionname']; ?></h1><br></div>
                <div class="but3contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==8){?>
        <div class="qbox">
            <div class="question4pos"><h1><?php echo $row['questionname']; ?></h1><br></div>
                <div class="but4contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==9){?>
        <div class="qbox">
            <div class="question5pos"><h1><?php echo $row['questionname']; ?></h1><br></div>
                <div class="but5contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div>
        <div class="nextpbtn" onclick="changetestpage('next')" href="#question1"><a>NEXT</a></div>
        <div class="backpbtn" onclick="changetestpage('back')"><a><a>BACK</a></a></div>
        <nav><a id="button" href="index.php">Exit Test</a></nav>
            </div>
        </div></div><?php $i++;continue;} ?>

        

        <?php if($i==10){?>
        <div class="testpage" id="test3">
        <div class="AQ_container">
        <div class="AQ_containerrows">

 
        <div class="qbox">
            <div class="question1pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but1contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                    <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                    <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==11){?>
        <div class="qbox">
            <div class="question2pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but2contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==12){?>
        <div class="qbox">
            <div class="question3pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but3contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==13){?>
        <div class="qbox">
            <div class="question4pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but4contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==14){?>
        <div class="qbox">
            <div class="question5pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but5contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div>
        <div class="nextpbtn" onclick="changetestpage('next')" ondclick="scrollup()"><a>NEXT</a></div>
        <div class="backpbtn" onclick="changetestpage('back')"><a><a>BACK</a></a></div>
        <nav><a id="button" href="index.php">Exit Test</a></nav>
            </div>
        </div></div><?php $i++;continue;} ?>


        

        <?php if($i==15){?>
        <div class="testpage" id="test4">
        <div class="AQ_container">
        <div class="AQ_containerrows">


        <div class="qbox">
            <div class="question1pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but1contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                    <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                    <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==16){?>
        <div class="qbox">
            <div class="question2pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but2contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==17){?>
        <div class="qbox">
            <div class="question3pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but3contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div>
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div>
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==18){?>
        <div class="qbox">
            <div class="question4pos"><h1><?php echo $row['questionname']; ?></h1></div> <!--Considering-->
                <div class="but4contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==19){?>
        <div class="qbox">
            <div class="question5pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but5contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div>
        <div class="nextpbtn" onclick="changetestpage('next')" ondclick="scrollup()"><a>NEXT</a></div>
        <div class="backpbtn" onclick="changetestpage('back')"><a><a>BACK</a></a></div>
        <nav><a id="button" href="index.php">Exit Test</a></nav>
            </div>
        </div></div><?php $i++;continue;} ?>


        

        <?php if($i==20){?>
        <div class="testpage" id="test5">
        <div class="AQ_container">
        <div class="AQ_containerrows">


        <div class="qbox">
            <div class="question1pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but1contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                    <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
                    <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==21){?>
        <div class="qbox">
            <div class="question2pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but2contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
            <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==22){?>
        <div class="qbox">
            <div class="question3pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but3contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- CS -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==23){?>
        <div class="qbox">
            <div class="question4pos"><h1><?php echo $row['questionname']; ?></h1></div> <!--Considering-->
                <div class="but4contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- CS -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==24){?>
        <div class="qbox">
            <div class="question5pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but5contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div>
        <div class="nextpbtn" onclick="changetestpage('next')" ondclick="scrollup()"><a>NEXT</a></div>
        <div class="backpbtn" onclick="changetestpage('back')"><a><a>BACK</a></a></div>
        <nav><a id="button" href="index.php">Exit Test</a></nav>
            </div>
        </div></div><?php $i++;continue;} ?>



        <?php if($i==25){?>
        <div class="testpage" id="test6">
        <div class="AQ_container">
        <div class="AQ_containerrows">


        <div class="qbox">
            <div class="question1pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but1contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                    <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
                    <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==26){?>
        <div class="qbox">
            <div class="question2pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but2contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
            <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- CS -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==27){?>
        <div class="qbox">
            <div class="question3pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but3contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
            <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==28){?>
        <div class="qbox">
            <div class="question4pos"><h1><?php echo $row['questionname']; ?></h1></div> <!--Considering-->
                <div class="but4contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- CS -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==29){?>
        <div class="qbox">
            <div class="question5pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but5contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- IT -->
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div>
        <div class="nextpbtn" onclick="changetestpage('next')" ondclick="scrollup()"><a>NEXT</a></div>
        <div class="backpbtn" onclick="changetestpage('back')"><a><a>BACK</a></a></div>
        <nav><a id="button" href="index.php">Exit Test</a></nav>
            </div>
        </div></div><?php $i++;continue;} ?>


        

        <?php if($i==30){?>
        <div class="testpage" id="test7">
        <div class="AQ_container">
        <div class="AQ_containerrows">


        <div class="qbox">
            <div class="question1pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but1contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                    <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
                    <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==31){?>
        <div class="qbox">
            <div class="question2pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but2contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
            <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- CS -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==32){?>
        <div class="qbox">
            <div class="question3pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but3contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
            <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==33){?>
        <div class="qbox">
            <div class="question4pos"><h1><?php echo $row['questionname']; ?></h1></div> <!--Considering-->
                <div class="but4contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- IT -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- BOTH 0.5 -->
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- CS -->
        </div></div></div><?php $i++;continue;} ?>

        <?php if($i==34){?>
        <div class="qbox">
            <div class="question5pos"><h1><?php echo $row['questionname']; ?></h1></div>
                <div class="but5contain">
                    <div class="butpos">
                        <div class="radio1">
        <label>AGREE</label>
            <input type="radio" id="agree" name="<?php echo $row['questionnumber']; ?>" value="1"></div> <!-- CS -->
                        <div class="radio2">
        <label>NOT SURE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="2" checked></div> <!-- IT -->
                        <div class="radio3">
        <label>DISAGREE</label>
            <input type="radio" id="disagree" name="<?php echo $row['questionnumber']; ?>" value="3"></div> <!-- IT -->
        </div></div></div>
        <div class="backpbtn" onclick="changetestpage('back')"><a><a>BACK</a></a></div>
        <button type="submit" class="submitbtn">FINISH</button>
        <nav><a id="button" href="index.php" style="margin-top:-50px">Exit Test</a></nav><?php continue;}} ?>
            </div>
        </div></div>
    </form>
</body>
<script>
    let currentpage = 0;
    let progressor = 0;
    let click=0;

    function continueclick(clicked){
        if (clicked==="yes"){
            document.getElementById("alertbg").style.display="none";
        }
    }  
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
        document.getElementById("progress").style.width = "17%";
      }
      if(progressor==2){
        document.getElementById("progress").style.width = "33%";
      }
      if(progressor==3){
        document.getElementById("progress").style.width = "50%";
      }
      if(progressor==4){
        document.getElementById("progress").style.width = "67%";
      }
      if(progressor==5){
        document.getElementById("progress").style.width = "83%";
      }
      if(progressor==6){
        document.getElementById("progress").style.width = "100%";
      }
    }
</script>
</html>