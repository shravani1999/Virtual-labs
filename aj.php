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
  <title>Advanced Java</title>
</head>
<body>
  <h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="https://cdn.glitch.com/f3f0a812-ef86-4316-8cee-84e24f8e112e%2Fdsce.png?v=1566407586257"></a>
  Virtual Labs 
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
  </a>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
    Advanced Java
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
      Advance Java is next level concept of JAVA Programming. It is used for developing the web based application and enterprise application. So "Advanced Java" is nothing but specialization in domains such as web, networking, database handling. ...<br><br> Advance Java include RMI, Socket Programming, SWING, JDBC, Servlet, JSP
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="applet.php">Introduction to AWT and Applet</a>
          <a class="item" href="swings.php">Introduction to Swings</a>
          <a class="item" href="jdbc.php">JDBC(Java Database Connectivity)</a>
          <a class="item" href="servlets.php">Introduction to Servlets</a>
          <a class="item" href="rmi.php">RMI (Remote Method Invocation)</a>
        </div>
      </div>
      
      <div id="pre" style="display: none;">To make students get better in Advanced Java.<br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What is AJ?
          </div>
          <div class="content">
            <p class="transition hidden"> Advance Java is next level concept of JAVA Programming. It is used for developing the web based application and enterprise application. So "Advanced Java" is nothing but specialization in domains such as web, networking, database handling. ...<br><br> Advance Java include RMI, Socket Programming, SWING, JDBC, Servlet, JSP.</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>Abbreviate AJ? </div>
          <div class="content">
            <p class="transition hidden">Advance Java</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What do you think Java is platform independent?
</div>
          <div class="content">
            <p class="transition hidden">Essentially, the core concept of Java lies in the fact that once written it can be run anywhere. More specifically, the bytecodes of Java can run on any platform, the underlying operations notwithstanding. So it is platform independent.</p>
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