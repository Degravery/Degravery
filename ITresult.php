<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="seemore.css">
    <title>Computer Science Info</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="sub-header">
<div class="topbar">
    <div class="webname">
        <nav>
        <a href="index.html"><img src="images/logo.png"></a>
        <h2>DEGRAVERY</h2>
    </nav>
    </div>
    <nav class="main-nav" id="navLinks">
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
            <a href="login.php">
                <i class="fas fa-sign-in-alt"></i> SIGN IN
            </a>
        </li>
    </ul>
        <?php }?>
    </nav>
</div>  
<div class="coursebox" style="font-size:26px"><p>‎ INFORMATION TECHNOLOGY ‎</p></div>
</section>

<section class="facilities">
    <h1>BACHELOR OF SCIENCE IN <br>INFORMATION TECHNOLOGY</h1>
    <p>The Bachelor of Science in Information Technology (BSIT) program at the University of Makati emphasizes practical skills in designing, developing, and managing IT systems and networks. It prepares students for roles in system administration, network security, and IT project management.</p>

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
        <td class="py-3 px-4">Elective Priority (STEM or ICT Track)</td>
        <td class="py-3 px-4">Internal Shift Only</td>
        <td class="py-3 px-4">Not 3rd/4th Year Incoming</td>
      </tr>
      <tr class="border-b">
        <td class="py-3 px-4 font-medium">English / Math Grades</td>
        <td class="py-3 px-4">No grades lower than 85%</td>
        <td class="py-3 px-4">—</td>
        <td class="py-3 px-4">English ≥ 90%, Math ≥ 88%</td>
      </tr>
      <tr class="border-b bg-gray-50">
        <td class="py-3 px-4 font-medium">Exams / Assessments</td>
        <td class="py-3 px-4">None</td>
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
        <td class="py-3 px-4">Interview with the Department Chair</td>
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
            <p><b>• Networking:</b> <small>TCP/IP, DNS, routing, subnetting, network security protocols, and troubleshooting network issues.</small></p>

            <p><b>• System Administration:</b>  <small>Installing, configuring, and maintaining operating systems (Windows, Linux, macOS), servers, and related hardware.</small></p>

            <p><b>• Database Administration:</b>  <small>Managing and maintaining databases (SQL, NoSQL), including performance tuning, security, backups, and recovery.</small></p>

            <p><b>• Cybersecurity:</b>  <small> Understanding of security threats, vulnerabilities, and countermeasures; intrusion detection/prevention, security auditing, incident response..</small></p>

            <p><b>• Cloud Computing:</b>  <small>Familiarity with cloud platforms (AWS, Azure, GCP), virtual machines, storage, and networking services.</small></p>

            <p><b>• Help Desk Support:</b>  <small>Troubleshooting technical issues, providing user assistance, and documenting solutions.</small></p>

            <p><b>• Scripting:</b> <small>Using scripting languages (Bash, PowerShell, Python) for automation tasks.</small></p>

            <p><b>• Hardware Troubleshooting: </b>  <small> Diagnosing and resolving hardware problems.</small></p>
        </ul>

        <button id="audioButtonHard_skill" onclick="toggleAudio('Hard_skill')" class="audio-btn" title="Play/Pause audio for Hard skills">
            <i id="audioIconHard_skill" class="fa fa-play"></i>
        </button>
        <span id="readTextHard_skill" style="font-size: 20px; margin-left: 10px;">Read</span>
    </div>

    <div class="softskills">
        <h2>Soft skills</h2>
        <ul id="softskillList">
            <p><b>•Problem-solving:</b>  <small> Identifying and resolving technical issues effectively and efficiently.</small></p>

            <p><b>•Customer Service:</b>  <small>  Providing excellent support to users, handling difficult situations with professionalism.</small></p>

            <p><b>•Communication:</b>  <small>  CClearly communicating technical information to both technical and non-technical audiences.</small></p>

            <p><b>•Teamwork:</b>  <small>   Collaborating with colleagues to achieve common goals.</small></p>

            <p><b>•Time Management:</b>  <small>  Prioritizing tasks and managing workload effectively, often under pressure.</small></p>

            <p><b>•Adaptability:</b>  <small>  Staying current with rapidly evolving technologies and adapting to new challenges.</small></p>

            <p><b>•Patience: </b>  <small>  Maintaining composure when dealing with frustrating technical problems and demanding users.</small></p>
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
      <h2>Network Administrator</h2>
      <p>Manages and maintains computer networks to ensure optimal performance and security across systems.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱484,116</span>
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
     <span class="growth">34.5%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Systems Analyst</h2>
      <p>Analyzes and improves computer systems to increase efficiency and productivity for organizations.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱404,196</span>
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
     <span class="growth">7.94%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>IT Consultant</h2>
      <p>Provides technical advice and tailored IT solutions to businesses for improving operations and systems.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱636,000</span>
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
     <span class="growth"> 40.1%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Database Administrator</h2>
      <p>Manages and maintains databases, ensuring data integrity, security, and availability for users.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱700,416</span>
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
     <span class="growth">+ 40.1%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>IT Project Manager</h2>
      <p>Oversees IT projects, coordinates teams, and ensures successful project delivery on time and within budget.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱706,536 </span>
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
     <span class="growth">32.9%</span>
     </span>
    </p>
     
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Help Desk Technician</h2>
      <p>Provides front-line technical support to users, troubleshooting issues and assisting with software and hardware problems.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income"> ₱413,863</span>
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
     <span class="growth">7.94%</span>
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
