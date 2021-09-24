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
  <title>Computer Organization</title>
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
    Item -->
  </a>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
     Computer Organization
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
      Computer organization is the design of abstracted computer components, such as the CPU and memory subsystem. <br> <br>
      Computer Organization refers to the level of abstraction above the digital logic level, but below the operating system level.A closely related term, computer architecture, emphasizes the engineering decisions and tradeoffs that must be made in order to produce a "good" design.
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="cpu.php">How CPU works</a>
          <a class="item" href="processing.php">How processing is done Inside your computer</a>
          <a class="item" href="interrupts.php">Introduction to interrupts</a>
          <a class="item" href="polling.php">Differences of Polling, Interrupts, DMA</a>
          <a class="item" href="bus.php">Bus Arbitration</a>
        </div>
      </div>
      
      <div id="pre" style="display: none;">To make students get better in Computer Organization.<br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What is CO?
          </div>
          <div class="content">
            <p class="transition hidden">Verbs come in three tenses: past, present, and future. The past is used to describe things that have already happened (e.g., earlier in the day, yesterday, last week, three years ago). The present tense is used to describe things that are happening right now, or things that are continuous. The future tense describes things that have yet to happen (e.g., later, tomorrow, next week, next year, three years from now</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>Abbreviate CO? </div>
          <div class="content">
            <p class="transition hidden">English is a West Germanic language that was first spoken in early medieval England and eventually became a globally spoken language.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>Who does CPU works? </div>
          <div class="content">
            <p class="transition hidden">English nouns are only inflected for number and possession. New nouns can be formed through derivation or compounding. They are semantically divided into proper nouns (names) and common nouns. Common nouns are in turn divided into concrete and abstract nouns, and grammatically into count nouns and mass nouns. <br>

            Most count nouns are inflected for plural number through the use of the plural suffix -s, but a few nouns have irregular plural forms. Mass nouns can only be pluralised through the use of a count noun classifier, e.g. one loaf of bread, two loaves of bread.</p>
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