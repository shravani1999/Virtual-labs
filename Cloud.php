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
  <title>CCA</title>
</head>
<body>
  <h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
      <a href="titles.php">Virtual Labs</a>
</h1>
<div id="toTop"><i class="chevron up icon"></i></div>
  <div>
  <div class="ui  light blue inverted secondary huge menu">
  <a class="header item" href="index.php">
    Home
  </a>
 <a class="item">
    About Us
  </a> 
  <a class="item">
    Contact Us
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
    Cloud Computing
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
     
    
1.	To learn how to use Cloud Services. 
<br><br>

2.	To gain knowledge Virtualization 
<br> <br>

3.	To gain knowledge Task Scheduling algorithms. 
<br> <br>

4.	Apply Map-Reduce concept to applications. 
<br> <br>
5.	To gain knowledge in cloud resource virtualization and scheduling. 
<br> <br>


      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="cloud_into.php">Introduction, Cloud Infrastructure</a>
          <a class="item" href="Cloud_computing.php">Cloud Computing</a>
          <a class="item" href="cloud_network.php">Networking Support</a>
          <a class="item" href="cloud_storage.php">Storage Systems</a>
          <a class="item" href="cloud_resource.php">Resource Management and Scheduling</a>
        </div>
      </div>
      
      
      <div id="pre" style="display: none;">To make students understand the concepts of cloud computing.<br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What is Cloud Computing?
          </div>
          <div class="content">
            <p class="transition hidden">Cloud Computing refers to manipulating, configuring, and accessing the hardware and software resources remotely. It offers online data storage, infrastructure, and application.
            <br>
            Cloud computing offers platform independency, as the software is not required to be installed locally on the PC. Hence, the Cloud Computing is making our business applications mobile and collaborative.
            </p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What is a public cloud? </div>
          <div class="content">
            <p class="transition hidden">The public cloud allows systems and services to be easily accessible to the general public. Public cloud may be less secure because of its openness.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is private cloud? </div>
          <div class="content">
            <p class="transition hidden">The private cloud allows systems and services to be accessible within an organization. It is more secured because of its private nature.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is Community cloud? </div>
          <div class="content">
            <p class="transition hidden">The community cloud allows systems and services to be accessible by a group of organizations.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is Hybrid Cloud? </div>
          <div class="content">
            <p class="transition hidden">The hybrid cloud is a mixture of public and private cloud, in which the critical activities are performed using private cloud while the non-critical activities are performed using public cloud.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What are service models of Cloud Computing?
</div>
          <div class="content">
            <p class="transition hidden">Infrastructure-as–a-Service (IaaS) <br>
Platform-as-a-Service (PaaS) <br>

Software-as-a-Service (SaaS)</p>
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
