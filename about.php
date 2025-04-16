<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<section class="sub-header">
<div class="topbar">
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
<div class="coursebox" style="font-size:26px"><p>‎ ABOUT DEGRAVERY ‎</p></div>
</section>

<section class="facilities">
    <h1>Degravery</h1>
    <p>This website helps you to discover your future college course and your potential future career. Degavery aims to help those students that have trouble deciding their college course. Also, Degavery will give you guidance on the course you got, giving you things you need to study for and the requirements you need for that course. We are sure that degavery will help you in picking your future college course and your future career.</p>
    <button id="audioButtonDegravery" 
            onclick="toggleAudio('Degravery')" 
            class="audio-btn" 
            title="Play/Pause audio for Degravery">
        <i id="audioIconDegravery" class="fa fa-play"></i>
    </button>
    <span id="readTextDegravery" style="font-size: 20px; margin-left: 10px;">Read</span>
    
    <h2>Objectives</h2>
    <ul id="requirementsList">
        <li>To Help students make informed decisions about their future.</li>
        <li>To Provide information on courses, required skills, and potential career opportunities.</li>
        <li>To Offer students tailored suggestions for courses based on their interests, strengths, and career goals.</li>
        <li>To Assist students in understanding their strengths, interests, and values through quizzes, so they pick the right course.</li>
    </ul>
    <button id="audioButtonObjectives" onclick="toggleAudio('Objectives')" class="audio-btn" title="Play/Pause audio for Objectives">
        <i id="audioIconObjectives" class="fa fa-play"></i>
    </button>
    <span id="readTextObjectives" style="font-size: 20px; margin-left: 10px;">Read</span>

    <div class="mission-vision-container">
        <div class="mission">
            <h2>Mission</h2>
            <ul id="missionList">
                <p>To guide students in selecting the right college course and future career by offering personalized advice, clear resources, and expert insights, helping them make informed choices and reduce career mismatch.</p>
            </ul>
            <button id="audioButtonMission" onclick="toggleAudio('Mission')" class="audio-btn" title="Play/Pause audio for Mission">
                <i id="audioIconMission" class="fa fa-play"></i>
            </button>
            <span id="readTextMission" style="font-size: 20px; margin-left: 10px;">Read</span>
        </div>

        <div class="vision">
            <h2>Vision</h2>
            <ul id="visionList">
                <p>To be the go-to platform that empowers students to confidently choose the right college course and career path, ensuring that their education aligns with their interests and future job opportunities.</p>
            </ul>
            <button id="audioButtonVision" onclick="toggleAudio('Vision')" class="audio-btn" title="Play/Pause audio for Vision">
                <i id="audioIconVision" class="fa fa-play"></i>
            </button>
            <span id="readTextVision" style="font-size: 20px; margin-left: 10px;">Read</span>
        </div>
    </div>
    <a id="button" href="javascript:window.history.back();" >Go Back</a>

    <h2>About us</h2>
    <li><b>Lead programmer</b></li>
    <ul><small>Lumibao, Gabriel</small></ul>
    <li><b>Programmer</b></li>
    <ul><small>Bermundo, John Andre</small></ul>
    <ul><small>Shaban, John Ezekiel</small></ul>
    <li><b>Designer</b></li>
    <ul><small>Lumibao, Gabriel</small></ul>
    <ul><small>Bermundo, John Andre</small></ul>
    <ul><small>Shaban, John Ezekiel</small></ul>
    <li><b>Researcher</b></li>
    <ul><small>Lumibao, Gabriel</small></ul>
    <ul><small>Bermundo, John Andre</small></ul>
    <ul><small>Shaban, John Ezekiel</small></ul>
    <ul><small>Dilla, Christian Dave</small></ul>
    <ul><small>Garcia, Jahnna Trisha</small></ul>
</section>

<script>
    let speechInstance;
    let isPlaying = false;

    function readTextAloud(section) {
        let textToRead = '';

        if (section === 'Degravery') {
            textToRead = "Degravery: " + document.querySelector("section.facilities p").textContent;
        } else if (section === 'Objectives') {
            const items = document.getElementById("requirementsList").getElementsByTagName("li");
            textToRead = "Objectives are: ";
            for (let i = 0; i < items.length; i++) {
                textToRead += items[i].textContent + ". ";
            }
        } else if (section === 'Mission') {
            textToRead = "Mission: " + document.querySelector("section.facilities #missionList p").textContent;
        } else if (section === 'Vision') {
            textToRead = "Vision: " + document.querySelector("section.facilities #visionList p").textContent;
        }

        speechInstance = new SpeechSynthesisUtterance(textToRead);
        speechInstance.lang = 'en-US';
        speechSynthesis.speak(speechInstance);
    }

    function stopSpeech() {
        speechSynthesis.cancel();
    }

    function toggleAudio(section) {
        const audioButton = document.getElementById("audioButton" + section);
        const audioIcon = document.getElementById("audioIcon" + section);

        if (isPlaying) {
            stopSpeech();
            audioIcon.classList.remove('fa-stop');
            audioIcon.classList.add('fa-play');
        } else {
            readTextAloud(section);
            audioIcon.classList.remove('fa-play');
            audioIcon.classList.add('fa-stop');
        }

        isPlaying = !isPlaying;
    }
</script>
</body>
</html>

