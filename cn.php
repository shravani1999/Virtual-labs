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
  <title>Computer Networks</title>
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
     Computer Networks
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
      A computer network is a set of computers connected together for the purpose of sharing resources. The most common resource shared today is connection to the Internet. Other shared resources can include a printer or a file server.<br><br> The Internet itself can be considered a computer network.
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="networkutilities.php">Network Utilities</a>
        </div>
      </div>
      
      <div id="pre" style="display: none;">To make students get better in Computer Networks.<br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What is CN?
          </div>
          <div class="content">
            <p class="transition hidden"> A computer network is a set of computers connected together for the purpose of sharing resources. The most common resource shared today is connection to the Internet. Other shared resources can include a printer or a file server.<br><br> The Internet itself can be considered a computer network.</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>Abbreviate CN? </div>
          <div class="content">
            <p class="transition hidden">Computer Networks</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What are layers in OSI model?
</div>
          <div class="content">
            <p class="transition hidden">There are a total of 7 layers
1. Physical Layer
2. Data Link Layer
3. Network Layer
4. Transport Layer
5. Session Layer
6. Presentation Layer
7. Application Layer</p>
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
