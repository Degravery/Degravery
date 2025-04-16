<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="seemore.css">
    <title>Tourism Management Info</title>
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
                <i class="fas fa-sign-in-alt"></i> SIGN IN
            </a>
        </li>
    </ul>
        <?php }?>
    </nav>
</div>  
<div class="coursebox" style="font-size:26px"><p>‎ TOURISM MANAGEMENT ‎</p></div>
</section>

<section class="facilities">
    <h1>BACHELOR OF SCIENCE IN <br>TOURISM MANAGEMENT</h1>
    <p>The Bachelor of Science in Tourism Management (BSTM) program at the University of Makati is tailored for individuals aspiring to build a career in travel and tourism. It encompasses management concepts related to travel operations, research, tourism planning, and marketing. Additionally, the program includes specialized training in managing meetings, incentives, conventions, and exhibitions (MICE), as well as evaluating tourism sites and attractions.</p>

    <button id="audioButtonBSIT" onclick="toggleAudio('BSIT')" class="audio-btn" title="Play/Pause audio for BSIT">
        <i id="audioIconBSIT" class="fa fa-play"></i>
    </button>
    <span id="readTextBSIT" style="font-size: 20px; margin-left: 10px;">Read</span>

    <h2>Requirements</h2>
    <div id="requirementlist" class="overflow-x-auto">
  <table class="w-full border-collapse rounded-lg overflow-hidden shadow-md">
    <thead class="bg-blue-600 text-white">
      <tr>
        <th class="py-3 px-4 text-left">Requirements</th>
        <th class="py-3 px-4 text-left">General</th>
        <th class="py-3 px-4 text-left">Shifters</th>
        <th class="py-3 px-4 text-left">Transferees / 2nd Coursers</th>
      </tr>
    </thead>
    <tbody class="bg-white text-gray-800">
      <tr class="border-b">
        <td class="py-3 px-4 font-medium">GWA Requirement</td>
        <td class="py-3 px-4">85% and above</td>
        <td class="py-3 px-4">2.00 or higher (85–87%)</td>
        <td class="py-3 px-4">2.00 or higher (85–87%)</td>
      </tr>
      <tr class="border-b bg-gray-50">
        <td class="py-3 px-4 font-medium">SHS Track / Eligibility</td>
        <td class="py-3 px-4">Any SHS Track</td>
        <td class="py-3 px-4">Internal Shift Only</td>
        <td class="py-3 px-4">Not 3rd/4th Year Incoming</td>
      </tr>
      <tr class="border-b">
        <td class="py-3 px-4 font-medium">English / Math Grades</td>
        <td class="py-3 px-4">Good English Grade</td>
        <td class="py-3 px-4">—</td>
        <td class="py-3 px-4">English ≥ 90%, Math ≥ 88%</td>
      </tr>
      <tr class="border-b bg-gray-50">
        <td class="py-3 px-4 font-medium">Exams / Assessments</td>
        <td class="py-3 px-4">Oral & Written Exam</td>
        <td class="py-3 px-4">None</td>
        <td class="py-3 px-4">TOR Evaluation / Validation</td>
      </tr>
      <tr class="border-b">
        <td class="py-3 px-4 font-medium">Academic Standing</td>
        <td class="py-3 px-4">—</td>
        <td class="py-3 px-4">No failing/incomplete/UD grades</td>
        <td class="py-3 px-4">No failing/incomplete/UD grades</td>
      </tr>
      <tr class="border-b bg-gray-50">
        <td class="py-3 px-4 font-medium">Other</td>
        <td class="py-3 px-4">Minimum Height (M: 5'6", F: 5'4") <br> Presentable (Hotel Grade Looks) <br>Interview with the Department Chair <br> Video introduction</td>
        <td class="py-3 px-4">Approval letter from former college</td>
        <td class="py-3 px-4">TOR, not more than 72 units</td>
      </tr>
    </tbody>
  </table>
</div>

    <button id="audioButtonRequirements" onclick="toggleAudio('Requirements')" class="audio-btn" title="Play/Pause audio for Requirements">
        <i id="audioIconRequirements" class="fa fa-play"></i>
    </button>
    <span id="readTextRequirements" style="font-size: 20px; margin-left: 10px;">Read</span>

   <div class="skills-container">
    <div class="hardskills">
    <h2>Hard skills</h2>
        <ul id="hardskillList">
            <p><b>• Itinerary Planning & Tour Packaging:</b> <small>Creating customized travel plans and cost-effective tour packages for individuals or groups.</small></p>

            <p><b>• Travel Reservation Systems (e.g., Amadeus, SABRE, Galileo) :</b>  <small>Using global distribution systems to book flights, hotels, and other travel services</small></p>

            <p><b>• Destination & Geography Knowledge:</b>  <small>Understanding tourist destinations, cultures, and attractions to provide accurate travel advice.</small></p>

            <p><b>• Sales & Marketing of Tourism Products:</b>  <small> Promoting and selling tour packages through digital, print, and direct marketing channels.</small></p>

            <p><b>• Travel Documentation & Visa Knowledge:</b>  <small>Managing passport, visa, and insurance requirements for domestic and international travel..</small></p>

            <p><b>• Customer Relationship Management (CRM):</b>  <small>Using tools and strategies to maintain strong relationships with clients and enhance customer service.</small></p>
         </ul>

        <button id="audioButtonHard_skill" onclick="toggleAudio('Hard_skill')" class="audio-btn" title="Play/Pause audio for Hard skills">
            <i id="audioIconHard_skill" class="fa fa-play"></i>
        </button>
        <span id="readTextHard_skill" style="font-size: 20px; margin-left: 10px;">Read</span>
    </div>

    <div class="softskills">
        <h2>Soft skills</h2>
        <ul id="softskillList">
            <p><b>•Communication Skills:</b>  <small>  Clear verbal and written communication with customers and employees.</small></p>

            <p><b>•Problem-Solving:</b>  <small>   Quick thinking to resolve customer issues.</small></p>

            <p><b>•Emotional Intelligence:</b>  <small>  Understanding and managing emotions to improve interactions with other customers or clients.</small></p>

            <p><b>•Time Management:</b>  <small>  Ability to prioritize tasks, manage deadlines, and work efficiently.</small></p>

            <p><b>•Adaptability:</b>  <small>  Ability to handle different cultures, languages, and work environments.</small></p>
        </ul>
        <button id="audioButtonSoft_skill" onclick="toggleAudio('Soft_skill')" class="audio-btn" title="Play/Pause audio for Soft skills">
            <i id="audioIconSoft_skill" class="fa fa-play"></i>
        </button>
        <span id="readTextSoft_skill" style="font-size: 20px; margin-left: 10px;">Read</span>
    </div>
 </div>
</section>
<div class="coursebox2" style="font-size:26px"><p>‎ CAREER OPPORTUNITIES ‎</p></div>
<section class="career-container">

  <div class="career-card">
    <div class="career-left">
      <h2>Tourism Officer</h2>
      <p>Works in local or national government to promote tourism development and policy.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱270,000</span>
     </span>
    </p>
    <p>
    <i class="fas fa-graduation-cap education-icon"></i>
     <span>
     <strong>Most Common Education Level:</strong><br>
     <span class="education">Bachelor’s degree</span>
     </span>
    </p>
    <p>
     <i class="fas fa-chart-line growth-icon"></i>
     <span>
     <strong>Projected Job Growth:</strong><br>
     <span class="growth">+5%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Cruise or Resort Coordinator</h2>
      <p>Manages guest activities, entertainment, and services on cruise ships or in resort environments.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱360,000</span>
     </span>
    </p>
    <p>
    <i class="fas fa-graduation-cap education-icon"></i>
     <span>
     <strong>Most Common Education Level:</strong><br>
     <span class="education">Bachelor’s degree</span>
     </span>
    </p>
    <p>
     <i class="fas fa-chart-line growth-icon"></i>
     <span>
     <strong>Projected Job Growth:</strong><br>
     <span class="growth">15%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Travel Consultant/Agent</h2>
      <p>Helps clients plan and book travel, including flights, hotels, and tours.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱270,000</span>
     </span>
    </p>
    <p>
    <i class="fas fa-graduation-cap education-icon"></i>
     <span>
     <strong>Most Common Education Level:</strong><br>
     <span class="education">Bachelor’s degree</span>
     </span>
    </p>
    <p>
     <i class="fas fa-chart-line growth-icon"></i>
     <span>
     <strong>Projected Job Growth:</strong><br>
     <span class="growth"> 6%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Tour Guide</h2>
      <p>Leads tourists on local or international tours, providing information and ensuring a great experience.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱207,420</span>
     </span>
    </p>
    <p>
    <i class="fas fa-graduation-cap education-icon"></i>
     <span>
     <strong>Most Common Education Level:</strong><br>
     <span class="education">Bachelor’s degree</span>
     </span>
    </p>
    <p>
     <i class="fas fa-chart-line growth-icon"></i>
     <span>
     <strong>Projected Job Growth:</strong><br>
     <span class="growth"> 5%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Flight Attendant</h2>
      <p>Assists passengers, performs safety checks, and ensures service quality on flights.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱346,416 </span>
     </span>
    </p>
    <p>
    <i class="fas fa-graduation-cap education-icon"></i>
     <span>
     <strong>Most Common Education Level:</strong><br>
     <span class="education">Bachelor’s degree</span>
     </span>
    </p>
    <p>
     <i class="fas fa-chart-line growth-icon"></i>
     <span>
     <strong>Projected Job Growth:</strong><br>
     <span class="growth">11%</span>
     </span>
    </p>
     
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Airline Customer Service Manager</h2>
      <p>Supervises airport operations, check-ins, flight bookings, and passenger services.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income"> ₱678,000</span>
     </span>
    </p>
    <p>
    <i class="fas fa-graduation-cap education-icon"></i>
     <span>
     <strong>Most Common Education Level:</strong><br>
     <span class="education">Bachelor’s degree</span>
     </span>
    </p>
    <p>
     <i class="fas fa-chart-line growth-icon"></i>
     <span>
     <strong>Projected Job Growth:</strong><br>
     <span class="growth">5%</span>
     </span>
    </p>
    </div>
  </div>
  <a id="button" href="javascript:window.history.back();" >Go Back</a>
</section>
<script>
    let speechInstances = {};

    function readTextAloud(section) {
    let textToRead = '';
    
    if (section === 'BSIT') {
        textToRead = "The Bachelor of Science in Hospitality Management program at the University of Makati focuses on the theoretical foundations of computing and prepares students for careers in software development, data analysis, and research.";
    } else if (section === 'Requirements') {
        const table = document.querySelector("#requirementlist table");
        const rows = table.querySelectorAll("tbody tr");

        textToRead = "Requirements are as follows: ";
        rows.forEach(row => {
            const cells = row.querySelectorAll("td");
            if (cells.length > 0) {
                textToRead += `${cells[0].textContent} for General: ${cells[1].textContent}, for Shifters: ${cells[2].textContent}, and for Transferees: ${cells[3].textContent}. `;
            }
        });
    } else if (section === 'Hard_skill') {
        const hardSkills = document.getElementById("hardskillList");
        textToRead = "Hard skills are: ";
        const items = hardSkills.getElementsByTagName("p");
        for (let i = 0; i < items.length; i++) {
            textToRead += items[i].textContent + ". ";
        }
    } else if (section === 'Soft_skill') {
        const softSkills = document.getElementById("softskillList");
        textToRead = "Soft skills are: ";
        const items = softSkills.getElementsByTagName("p");
        for (let i = 0; i < items.length; i++) {
            textToRead += items[i].textContent + ". ";
        }
    }

    const speechInstance = new SpeechSynthesisUtterance(textToRead);
    speechInstance.lang = 'en-US';
    speechSynthesis.speak(speechInstance);
    
    speechInstances[section] = speechInstance;
}
    function stopSpeech(section) {
        if (speechInstances[section]) {
            speechSynthesis.cancel();
        }
    }

    function toggleAudio(section) {
        const audioButton = document.getElementById(`audioButton${section}`);
        const audioIcon = document.getElementById(`audioIcon${section}`);

        if (audioIcon.classList.contains('fa-play')) {
            readTextAloud(section);
            audioIcon.classList.remove('fa-play');
            audioIcon.classList.add('fa-stop');
        } else {
            stopSpeech(section);
            audioIcon.classList.remove('fa-stop');
            audioIcon.classList.add('fa-play');
        }
    }
</script>
</body>
</html>
