<?php
if(session_status()==PHP_SESSION_NONE)
{
  session_start();
  if(!isset($_SESSION['username']))
  {
    header("Location: index.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Placement Training</title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
  <a href="titles.php">Virtual Labs</a>
</h1>
<div id="toTop"><i class="chevron up icon"></i></div>
  <div>
  <div class="ui  light grey inverted secondary huge menu">
  <a class="header item" href="index.php">
    Home
  </a>
 <a class="item">
    About Us
  </a> 
   <!-- <a class="item">
    Item
  </a>
  <a class="item">
    Item
  </a> -->
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
      Placement Training
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="prereq">
        Objective
      </a>
      <a class="item" id="list">
        Programs and Algorithms
      </a>
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int" align="justify">
      Dayananda Sagar Institutions has an elite placement division to facilitate the placements for all students. The Centre provides pre-placement training in soft skills to all students to enable them to apprise to the modern corporate requirements in association with CIL - Centre for Innovation & Leadership and HR Division.<br><br>

      The Placement Division also supports training in CV Writing, Aptitude Assessment, Mock interviews, Group Discussion etc.,
      Internship opportunities in various companies will be provided for interested UG/PG students.<br><br>

      DSI is committed to provide best talent for corporates.<br><br>

      The Placement division works with Corporates to build the overall Development of Students as per industry requirements.
    </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="problem1.php">Problem-1</a>
          <a class="item" href="problem2.php">Problem-2</a>
          <a class="item" href="problem3.php">Problem-3</a>
          <a class="item" href="#">Exception Handling</a>
          <a class="item" href="#">Multithreaded Programming</a>
          <a class="item" href="#">Generics and String handling</a>
        </div>
      </div>
      
      <div id="pre" align="justify" style="display: none;"> Understand the type of programs which may be used in Placements. <br>
        Gain knowledge on working of various algorithms and functions in multiple languages, such as C, C++, Java and Python.<br>  
        Understand the importance of Programming to be placed on campus.</div>
      
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>What is the use of being placed?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord1">You get a job.. Duh!</p>
          </div>
          
          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What companies come to hire students? 
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord2">Infosys, HCL, Accenture, IBM, WIPRO, Mercedes Benz, SASKEN, Tech Mahindra, Mahindra Satyam, NOKIA, TESCO, Novell Software Ltd., Cap Gemini, I Gate, HP, Mphasis, Volvo, ICICI, KPIT, HSBC, Thomson Reuters, D-Link, Oracle, SBI Life, ITC InfoTech, TCS, Fire Pro systems, Mindtree, Deloitte, Cognizant, Honeywell, Biocon, Soma Constructions, KNK, LG Soft, Huwaei, Patni Computers, Microsoft, Adobe, Future Group, L & T InfoTech, ERNST & YOUNG, KPMG, Deutsche Bank, Aviva, Kotak Securities, Standard Chartered Bank, AMADA-Japan, Wipro InfoTech, Godrej, Altair, ICICI Securities & Many More..</p>
          </div>

          <div class="title" id="dion3">
            <i class="dropdown icon"></i>How to get placed?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord3">Go to the previous tab and <strong>solve the algorithms.</strong></p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
  </div>
  <script language='javascript'>
             $(document).ready(function(){
                $('.ui.accordion').accordion();
             });
</script>
</body>
</html>