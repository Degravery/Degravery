<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="seemore.css">
    <title>Hospitality Management Info</title>
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
<div class="coursebox" style="font-size:26px"><p>‎ HOSPITALITY MANAGEMENT ‎</p></div>
</section>

<section class="facilities">
    <h1>BACHELOR OF SCIENCE IN <br>HOSPITALITY MANAGEMENT</h1>
    <p>The Bachelor of Science in Hospitality Management (BSHM) program at the University of Makati focuses on equipping students with the essential skills for the hospitality industry, specifically in hotel and restaurant management. The curriculum covers core competencies related to food services, lodging, and tourism, preparing graduates for careers in various sectors such as restaurants, hotels, theme parks, and airlines, or for entrepreneurship within the hospitality industry.</p>

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
        <td class="py-3 px-4">Minimum Height (M: 5'6", F: 5'4")</td>
        <td class="py-3 px-4">Approval letter from former college</td>
        <td class="py-3 px-4">—</td>
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
            <p><b>• Revenue Management:</b> <small>The strategic use of pricing, inventory control, and market data to maximize income in hospitality businesses.</small></p>

            <p><b>• Event Planning:</b>  <small>Organizing and coordinating all aspects of events, from logistics and budgeting to vendor management and guest experience.</small></p>

            <p><b>• Health and Safety Compliance:</b>  <small>Ensuring that facilities and practices meet legal standards and safety regulations to protect both guests and staff.</small></p>

            <p><b>• Financial Management:</b>  <small> Managing budgets, tracking expenditures, and analyzing financial data to ensure the financial health of an operation.</small></p>

            <p><b>• Food & Beverage Service Management:</b>  <small>Overseeing restaurant, bar, and room service operations to ensure smooth service and guest satisfaction.</small></p>

            <p><b>• Hospitality Software Proficiency (e.g., Opera, MICROS):</b>  <small>Using hotel management systems to handle bookings, billing, and service coordination.</small></p>
        </ul>

        <button id="audioButtonHard_skill" onclick="toggleAudio('Hard_skill')" class="audio-btn" title="Play/Pause audio for Hard skills">
            <i id="audioIconHard_skill" class="fa fa-play"></i>
        </button>
        <span id="readTextHard_skill" style="font-size: 20px; margin-left: 10px;">Read</span>
    </div>

    <div class="softskills">
        <h2>Soft skills</h2>
        <ul id="softskillList">
            <p><b>•Problem-solving:</b>  <small> Delivering high-quality service by understanding and exceeding customer expectations to ensure satisfaction and loyalty.</small></p>

            <p><b>•Customer Service Excellence::</b>  <small>  Delivering high-quality service by understanding and exceeding customer expectations to ensure satisfaction and loyalty.</small></p>

            <p><b>•Communication:</b>  <small>  The ability to clearly express ideas, listen actively, and engage in meaningful conversations with guests, colleagues, and stakeholders.</small></p>

            <p><b>•Collaboration:</b>  <small>  Working effectively in teams, contributing ideas, and resolving conflicts constructively.</small></p>

            <p><b>•Time Management:</b>  <small>  Ability to prioritize tasks, manage deadlines, and work efficiently.</small></p>

            <p><b>•Adaptability:</b>  <small>  Being flexible and open to change, especially in fast-paced or unpredictable environments.</small></p>

            <p><b>•Cultural Awareness:</b>  <small>  Understanding, respecting, and valuing different cultural backgrounds to provide inclusive and personalized experiences.</small></p>
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
      <h2>Hotel General Manager</h2>
      <p> Oversees the daily operations of a hotel, ensuring guest satisfaction, staff coordination, financial success, and compliance with industry standards.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱554,325</span>
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
     <span class="growth">+18%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Food Service Manager</h2>
      <p>Manages restaurants or food service establishments, focusing on food quality, inventory, staff supervision, and customer service.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱380,014</span>
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
     <span class="growth">+10%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Event Manager</h2>
      <p>Plans, organizes, and executes events such as weddings, conferences, and corporate gatherings, handling logistics, budgeting, and coordination.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱399,828</span>
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
     <span class="growth"> +8%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Sales Manager</h2>
      <p>Leads the sales efforts of a hospitality business, developing strategies, setting goals, and managing client relationships to drive revenue.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱421,200</span>
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
     <span class="growth"> +4%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Human Resources Manager</h2>
      <p>Handles hiring, training, employee relations, and compliance within a hospitality organization to support a productive and satisfied workforce.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱535,764 </span>
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
      <h2>Financial Manager</h2>
      <p>Manages the financial planning, reporting, and investment strategies of a hospitality business to ensure financial health and profitability.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income"> ₱566,700</span>
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
     <span class="growth">+16%</span>
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