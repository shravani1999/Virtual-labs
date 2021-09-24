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
  <script src="js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Software Engineering</title>
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
  <?php
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
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
    Software Engineering
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
        List of Tutorials
      </a>
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int" align="justify">
      To understand development of software product using well-defined scientific principles,
       methods and procedures.
       The outcome of software engineering is an efficient and reliable software product.
       to understand the software models and select appropriate model for a particular project.
       To kow know to manage process and project when a problem arises.
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="a_SEOverview.php">OverView</a>
          <a class="item" href="se_requ.php">Requirement Gathering and Analysis</a>
          <a class="item" href="se_deveop.php">Softeware Design And Development</a>
          <a class="item" href="se_verifi.php">Verification and Validation, Software Testing</a>
          <a class="item" href="se_process.php">Software process</a>
        </div>
      </div>
      
      
      <div id="pre" style="display: none;">To make students get better in Software Engineering.<br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What is software re-engineering?
          </div>
          <div class="content">
            <p class="transition hidden">It is a process of software development which is done to improve the maintainability of a software system.</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What is verification and validation? </div>
          <div class="content">
            <p class="transition hidden">Verification:

Verification is a term that refers to the set of activities which ensure that software implements a specific function.
<br>
<br>
Validation:

It refers to the set of activities which ensure that software that has been built according to the need of clients.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is computer software? </div>
          <div class="content">
            <p class="transition hidden">Computer software is a package which includes a software program, its documentation, and user guide on how to use the software.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>According to you which SDLC model is the best? </div>
          <div class="content">
            <p class="transition hidden">There, is no such ranking, as SDLC Models are adopted as per the need for the development process. It may differ software-to-software.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What are software requirements? </div>
          <div class="content">
            <p class="transition hidden">Software requirements are a functional description of a proposed software system. It is assumed to be the description of the target system, its functionalities, and features.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is modularization?
</div>
          <div class="content">
            <p class="transition hidden">Modularization is a technique which is used for dividing a software system into various discreet modules. That is expected to carry out the tasks independently.</p>
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
