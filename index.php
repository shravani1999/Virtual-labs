<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Virtual Lab</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/Semantic/semantic.min.css">
        <script src="css/Semantic/semantic.min.js"></script>
        <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/home.css">
        <link rel="icon" href="images\dscelogo.png">
        <title>Virtual-Labs</title>
</head>
<body>

  <div class="ui header" style="text-align:center;" id ="head">
  <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>  <span style="color:#3053AB"> Dayananda Sagar College Of Engineering</span> 
 
  <br><p style="font-size:25px;margin-top:10px; text-align: center;">A Self Learning initiative by the Department of Computer Science</p>
</div>
<div>
<div id="toTop"><i class="chevron up icon"></i></div>
  <div class="ui dodger blue inverted secondary huge menu">
  <a class="header item" href="index.php">
    Home
  </a>
 <a class="item">
    About Us
  </a> 
    <?php
    session_start();
    if(!isset($_SESSION["username"])) echo "<a class=\"item\" href=\"login.php\">Login</a><a class=\"item\" href=\"register.php\">Register</a>";
    else 
    { 
      echo "<a class=\"item\">"; 
      echo $_SESSION['username'];
      echo "</a><a class=\"item\" href=\"logoutprocess.php\">Logout</a>";
    }
    ?>
  
</div>
</div>
<div id="toTop"><i class="chevron up icon"></i></div>
<div class="ui container" id="CardGrid">

<h1 style="text-align:center;font-size:40px;margin-left:-10px;"><a style="color:black;" href="titles.php">Virtual Tutorial Lab</a></h1><br><br>
<span style="font-size:17px;">Virtual Tutorial Lab is an initiative taken by the <strong>Department of Computer Science Engineering</strong>, Dayananda Sagar Institutions to help students to get better at Laboratory programs as well as Placements. </span><br><br>

  <div class="headerr">Vision of the Department</div><br><br>
  <div style="font-size:17px;">To provide a vibrant learning environment in computer science and engineering with focus on industry needs and research, for the students to be successful global professionals contributing to the society.</div><br><br>

  <div class="headerr">Mission of the Department</div><br>

  <div style="font-size:17px;" class="ui bulleted list">
  <span class="item">To adopt a <strong>contemporary teaching learning process</strong> with emphasis on hands on and collaborative learning.</span>
  <span class="item">To facilitate <strong>skill development</strong> through additional training and encourage <strong>student forums</strong> for enhanced learning.</span>
  <span class="item">To <strong>collaborate with industry partners and professional societies</strong> and make the students industry ready.</span>
  <span class="item">To encourage innovation through <strong>multidisciplinary research and development activities.</strong></span>
  <span class="item">To inculcate human values and ethics in students and groom them to be responsible citizens.</span>
  </div><br><br>

  <i style="font-size:15px;">The department Vision - Mission statements are formulated in accordance with the goals and objectives of the department keeping Institutional goals and objectives under consideration.</i><br><br>

  <div>
    <img src="images/HOD.jpg" style="border-radius:150px; width:150px; margin-left:50px; margin-right: 15px; display: inline; float: left;">
    <p style="display: inline; font-size: 17px;"> The Department of Computer Science and Engineering is positioned to create the technological leaders of tomorrow. Our goal is to ensure that our engineering graduates are well prepared to play the roles of problem solvers, project leaders, entrepreneurs, and above all ethical citizens of a global society. Our objective is to empower our students with latest technical knowledge and skills to meet global challenges. We provide them with the best teaching faculty, state-of-the-art technologies, excellent research and development environment and internships. Our aim is to provide professional grooming and guidance so that our students mould into thorough professionals and inspiring individuals when they enter into the real-time environment. <br><br>
    <strong>Dr. Ramesh Babu D. R.</strong><br>
    Vice-Principal,<br>
    Professor & Head of the Department.</p> <br><br>
  </div>
<a href="titles.php" style="font-size:20px; margin: 10px; float: left;" class="ui dodger blue button">Go to Virtual Labs</a><br><br><br>

  </div> 
  <div class="ui inverted  large segment" >
    <div class="ui grid" style="" >
      <div class="five wide column" style="text-align:right ;">
      <h2 style="margin-top:15px;color:#365CCF;">
       Under the Guidance of :
      </h2>
      <p style="color:white;">HOD of Computer Science Dr. Ramesh Babu</p>
      <p style="margin-left:20px;color:white;">Prof. Amutha</p>
      <p style="margin-left:20px;color:white;">Prof. Anitha </p>
      <p></p>
      </div>
      <div class="five wide column">

      </div>
      <div class="five wide column" style="text-align:left">
      
      <h2 style=" margin-top:15px;color:#365CCF;">Student Co-ordinators:</h2>
      <p style=" margin-left:15px;color:white;">Harshith R S</p>
      <p style=" margin-left:15px;color:white;">Hemanth Kumar V</p>
      <p style=" margin-left:15px;color:white;">Anush D P</p>
      <p style=" margin-left:15px;color:white;">Anoop Satish Gejje</p>
      <p style=" margin-left:15px;color:white;">Ajaykumar S Hadimani</p>
      <p style=" margin-left:15px;color:white;">Prajna N Bhat</p>
      <p style=" margin-left:15px;color:white;">Shravani Yashodhara K</p>
      
      </div>

    </div>
  
  </div>
</body>
</html>