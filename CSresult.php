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
<div class="coursebox" style="font-size:26px"><p>‎ COMPUTER SCIENCE ‎</p></div>
</section>

<section class="facilities">
    <h1>BACHELOR OF SCIENCE IN <br>COMPUTER SCIENCE</h1>
    <p>The Bachelor of Science in Computer Science (BSCS) program at the University of Makati focuses on the theoretical foundations of computing and prepares students for careers in software development, data analysis, and research.</p>

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
            <p><b>• Programming Languages:</b> <small>Proficiency in several languages (Python, Java, C++, C#, JavaScript, etc.) including advanced concepts like object-oriented programming, design patterns, and algorithm optimization.</small></p>

            <p><b>• Data Structures and Algorithms:</b>  <small>Deep understanding of various data structures (arrays, linked lists, trees, graphs, hash tables) and algorithms (searching, sorting, graph traversal) and their time/space complexity.</small></p>

            <p><b>• Software Development Methodologies:</b>  <small>Experience with Agile (Scrum, Kanban), Waterfall, or other methodologies for software development lifecycle management.</small></p>

            <p><b>• Databases:</b>  <small> SQL and NoSQL database design, querying, optimization, and administration.</small></p>

            <p><b>• Computer Architecture:</b>  <small>Understanding of CPU architecture, memory management, and I/O systems (more crucial for certain specializations).</small></p>

            <p><b>• Operating Systems:</b>  <small>Understanding of operating system principles and internals, often focusing on specific OSes like Linux or Windows.</small></p>

            <p><b>• Testing and Debugging:</b> <small>Skills in unit testing, integration testing, debugging tools, and techniques.</small></p>

            <p><b>•Mathematics and Logic:</b>  <small>Strong foundation in discrete mathematics, linear algebra, and logic (especially for AI/ML specializations).</small></p>
        </ul>

        <button id="audioButtonHard_skill" onclick="toggleAudio('Hard_skill')" class="audio-btn" title="Play/Pause audio for Hard skills">
            <i id="audioIconHard_skill" class="fa fa-play"></i>
        </button>
        <span id="readTextHard_skill" style="font-size: 20px; margin-left: 10px;">Read</span>
    </div>

    <div class="softskills">
        <h2>Soft skills</h2>
        <ul id="softskillList">
            <p><b>•Problem-solving:</b>  <small>  Analytical thinking and creative problem-solving abilities are essential for designing and implementing effective solutions.</small></p>

            <p><b>•Critical Thinking:</b>  <small>  Ability to analyze information objectively, identify flaws in reasoning, and make informed decisions.</small></p>

            <p><b>•Communication:</b>  <small>  Clearly and effectively communicating technical concepts to both technical and non-technical audiences.</small></p>

            <p><b>•Collaboration:</b>  <small>  Working effectively in teams, contributing ideas, and resolving conflicts constructively.</small></p>

            <p><b>•Time Management:</b>  <small>  Ability to prioritize tasks, manage deadlines, and work efficiently.</small></p>

            <p><b>•Adaptability:</b>  <small>  Willingness to learn new technologies and adapt to changing project requirements.</small></p>
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
      <h2>Software Developer</h2>
      <p>Designs, builds, tests, and maintains software applications for desktops, mobile devices, or enterprise systems.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱500,000 – ₱800,000</span>
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
     <span class="growth">10–15%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Data Scientist</h2>
      <p>Collects, processes, and analyzes large datasets to uncover patterns, predict outcomes, and support business decisions.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱600,000 – ₱1,000,000</span>
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
     <span class="growth">15–20%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Web Developer</h2>
      <p>Develops and maintains websites and web applications, focusing on functionality, user experience, and visual design.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱350,000 – ₱600,000</span>
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
     <span class="growth"> 8–12%</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>AI/Machine Learning Engineer</h2>
      <p>Manages and maintains databases, ensuring data integrity, security, and availability for users.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱800,000 – ₱1,500,000</span>
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
     <span class="growth"> 20%+</span>
     </span>
    </p>
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Cybersecurity Analyst</h2>
      <p>Monitors and defends systems and networks against cyber threats such as hacking, malware, and data breaches.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income">₱600,000 – ₱1,000,000 </span>
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
     <span class="growth">15–20%</span>
     </span>
    </p>
     
    </div>
  </div>

  <div class="career-card">
    <div class="career-left">
      <h2>Game Developer</h2>
      <p>Designs, writes code for, and tests interactive video games for computers, consoles, and mobile devices.</p>
    </div>
    <div class="career-right">
    <p>
     <i class="fas fa-money-bill-wave income-icon"></i>
     <span>
     <strong>Median Yearly Income:</strong><br>
     <span class="income"> ₱400,000 – ₱800,000</span>
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
     <span class="growth">10–15%</span>
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
