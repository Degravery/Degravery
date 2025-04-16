<?php
session_start();

$A = 0; 
$B = 0;
$C = 0;
$RESULT1 = '';
$RESULT2 = '';

if(isset($_GET['token1']) & !isset($_GET['token2'])){
$A = (int)$_GET['A'];
$B = (int)$_GET['B'];
$C = (int)$_GET['C'];
$RESULT1 = $_GET['RESULT1'];
$RESULT2 = $_GET['RESULT2'];
$A_res = round(($A/$C)*100);
$B_res = round(($B/$C)*100); 
if($A>$B){
    $RESULT1 = "Computer Science ".$A_res."%  ";
    $RESULT2 = "Information Technology ".$B_res."%  ";
}else if ($B>$A){
    $RESULT1 = "Information Technology ".$B_res."%   ";
    $RESULT2 = "Computer Science ".$A_res."%   ";
}else {
        $RESULT1 = "Results not valid";
        $RESULT2 = "Results not valid";
    }
}else if(isset($_GET['token2']) & !isset($_GET['token1'])){
    $A = (int)$_GET['A'];
$B = (int)$_GET['B'];
$C = (int)$_GET['C'];
$RESULT1 = $_GET['RESULT1'];
$RESULT2 = $_GET['RESULT2'];
$A_res = round(($A/$C)*100);
$B_res = round(($B/$C)*100);
if($A>$B){
    $RESULT1 = "Tourism Management ".$A_res."%  ";
    $RESULT2 = "Hospitality Management ".$B_res."%  ";
}else if ($B>$A){
    $RESULT1 = "Hospitality Management ".$B_res."%   ";
    $RESULT2 = "Tourism Management ".$A_res."%   ";
}else {
    $RESULT1 = "Results not valid";
    $RESULT2 = "Results not valid";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>RESULT</title>
    <style>
        #seemore {
            display: inline-block;
            position: relative;
            text-decoration: none;
            color: #001248;
            font-size: 20px;
            margin-top: 30px;
            padding-left: 2%;
        }
        #seemore::after {
            content: '';
            position: absolute;
            height: 2px;
            left: 0;
            bottom: 0;
            width: 0;
            background-color: #001248;
            transition: width .5s ease-in-out;
        }
        #seemore:hover::after{
            width: 100%;
        }

        @media all and (width:1366px){
            .topbar{
                height: 89px;
            }
            .resultpos{
                margin-top: -10%;
            }
            .result{
                width: 20%;
                height: 25%;
            }
            .rescontentpos{
                margin-top: 2%;
            }
            .resultcontent{
                height: 300px;
            }
        }
    </style>
</head>
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
                    <a href="https://www.umak.edu.ph/academics/college/ccis/" target="_blank">Computer Science(CS)</a>
                    <a href="https://www.umak.edu.ph/academics/college/ccis/" target="_blank">Information Technology(IT)</a>
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

    <div class="resultpos">
        <div class="result">RESULT</div>
    </div>

    <div class="miniboxholder">
      <?php if($A==$B){?>
        <div class="minibox">
            <div class="minibox-desc">
            <p><?php echo "Results not valid";?></  p>
            </div>
        </div>
        <?php }else if(!($A==$B) & (isset($_GET['token1']))) {?>
            <div class="minibox">
                <div class="minibox-title"><p>Course 1</p></div>
                <div class="minibox-desc">
                    <p><?php echo "$RESULT1"; ?><a href="CSresult.php" id="seemore"><br>See More</a></p>
                </div>
                <img src="images/CS.png">
            </div>

            <div class="minibox">
                <div class="minibox-title"><p>Course 2</p></div>
                <div class="minibox-desc">
                    <p><?php echo "$RESULT2"; ?><a href="ITresult.php" id="seemore"> <br>See More</a></p>
                </div>
                <img src="images/IT.png">
            </div>
            <?php }else if(!($A==$B) & (isset($_GET['token2']))) {?>
            <div class="minibox">
                <div class="minibox-title"><p>Course 1</p></div>
                <div class="minibox-desc">
                    <p><?php echo "$RESULT1"; ?><a href="TMresult.php" id="seemore"><br>See More</a></p>
                </div>
                <img src="images/TM.png">
            </div>

            <div class="minibox">
                <div class="minibox-title"><p>Course 2</p></div>
                <div class="minibox-desc">
                    <p><?php echo "$RESULT2"; ?><a href="HMresult.php" id="seemore"> <br>See More</a></p>
                </div>
                <img src="images/HM.png">
            </div>
            <?php } ?>
            <div class="email-container" style="text-align: center; margin-top: 40px;">
             <div id="email-prompt">
               <span style="font-size: 18px;">📧 Want a copy of your result?</span><br><br>
               <button id="show-form-btn" style="padding: 8px 16px; font-size: 16px; border: 1px solid #facc15;cursor:pointer">Enter Email</button>
             </div>

             <form id="email-form" method="POST" style="display: none; margin-top: 20px;">
               <input type="email" name="email" placeholder="Enter your email" required style="padding: 5px; width: 240px; margin-top: -10px; margin-bottom: 5px;">
               <input type="hidden" name="result1" value="<?php echo $RESULT1; ?>">
               <input type="hidden" name="result2" value="<?php echo $RESULT2; ?>">
                <?php 
                   $img1 = "images/CS.png";
                   $img2 = "images/IT.png";
                     if(isset($_GET['token2'])){
                      $img1 = "images/TM.png";
                      $img2 = "images/HM.png";
                ?>
                <input type="hidden" name="img1" value="<?php echo $img1; ?>">
                <input type="hidden" name="img2" value="<?php echo $img2; ?>">
                <?php } ?>
               <button type="submit" style="padding: 8px 16px;cursor:pointer">Send</button>
             </form>

             <div id="sent-message" style="display: none; margin-top: 2px;">
               <div style="font-size: 32px; color: green;">✔</div>
               <p>Success! <br>We’ve sent the results to your email.</p>
             </div>
         </div>  
    </div>
    <nav><a id="button" href="index.php" >Exit test</a></nav>
<script>
 document.getElementById("show-form-btn").addEventListener("click", function () {
    document.getElementById("email-prompt").style.display = "none";
    document.getElementById("email-form").style.display = "block";
 });

 document.getElementById("email-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    fetch("send_email.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === 'success') {
            form.style.display = "none";
            document.getElementById("sent-message").style.display = "block";
        } else {
            alert("Error sending email: " + data.message);
        }
    })
    .catch(err => {
        alert("Unexpected error: " + err.message);
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script>
  function burstConfetti() {
    confetti({
      origin: { x: 0, y: 0.5 },
      angle: 60, 
      spread: 55,
      particleCount: 50,
      startVelocity: 45
    });

    confetti({
      origin: { x: 1, y: 0.5 },
      angle: 120,
      spread: 55,
      particleCount: 50,
      startVelocity: 45
    });
  }

  window.onload = burstConfetti;
</script>
</body>
</html>
