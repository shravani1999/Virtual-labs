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
  <title>English Skills</title>
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
     English Language Skills
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
       English is the language of science, of aviation, computers, diplomacy, and tourism. Knowing English increases your chances of getting a good job in a multinational company within your home country or for finding work abroad. <br> <br>
It’s also the language of international communication, the media and the internet, so learning English is important for socialising and entertainment as well as work!
      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="FourSpeakingRules.php">Four Speaking Rules of English</a>
          <a class="item" href="HowToSpeakEnglishfluently.php">How to Speak English fluently</a>
          <a class="item" href="basicEnglishtoBusiness.php">How to change Basic English to Business English</a>
          <a class="item" href="#">Verbs</a>
          <a class="item" href="#">Present,Past and future tenses</a>
        </div>
      </div>
      
      <div id="pre" style="display: none;">To make students speak fluently in English.<br> To be able to use Formal as well as informal English speech.<br> To speak and write in English language.</div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What are Present, Past and Future tenses?
          </div>
          <div class="content">
            <p class="transition hidden">Verbs come in three tenses: past, present, and future. The past is used to describe things that have already happened (e.g., earlier in the day, yesterday, last week, three years ago). The present tense is used to describe things that are happening right now, or things that are continuous. The future tense describes things that have yet to happen (e.g., later, tomorrow, next week, next year, three years from now</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What is English? </div>
          <div class="content">
            <p class="transition hidden">English is a West Germanic language that was first spoken in early medieval England and eventually became a globally spoken language.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What are the different Nouns in English? </div>
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
