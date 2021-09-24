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
  <title>Flat</title>
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
    Finite Autumata and Formal Language
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
      To undestand how DFA's and others play a very important role how to design the abstract selfpropelled computing devices that follow a predetermined sequence of operations automatically. An automaton with a finite number of states
<br> <br>
      Finite Automata are a useful model for many important kinds of hardware and software.
<br> <br>
1. Software for designing and checking the behavior of digital circuits
<br>
2. The “Lexical analyzer” of a typical compiler , that is , the compiler component that breaks the

input text into logical units, such as identifiers, keywords, and punctuation.
<br>
3. Software for scanning large bodies of text, such as collections of Web pages, to find

occurrences of words, phrases, or other patterns.
<br>
4. Software for verifying systems of all types that have a finite number of distinct states, such as

communications protocols or protocols for secure exchange of information.

Structural Representations:
<br>

      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="Flatover.php">Introduction</a>
          <a class="item" href="Flat_regular.php">Regular Expressions</a>
          <a class="item" href="Flat_cont.php">Context Free grammar</a>
          <a class="item" href="Flat_push.php">Pushdown Automata</a>
          <a class="item" href="Flat_turing.php">Turing machines</a>
        </div>
      </div>
      
      
      <div id="pre" style="display: none;">To make students get better in FLAT.<br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What are the various problem types for which we can construct DFA?
          </div>
          <div class="content">
            <p class="transition hidden">1.Pattern Recognition <br>
            2.Divisible by k problem <br>
            3.Modulo-k-counter problems</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What is an Alphabet </div>
          <div class="content">
            <p class="transition hidden">An alphabet is any finite set of symbols. <br>
Example − ∑ = {a, b, c, d} is an alphabet set where ‘a’, ‘b’, ‘c’, and ‘d’ are symbols.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is Finite Automata ? </div>
          <div class="content">
            <p class="transition hidden">A finite automation is a mathematical model which is used to study the abstract machines or abstract computing devices.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>According to you which SDLC model is the best? </div>
          <div class="content">
            <p class="transition hidden">There, is no such ranking, as SDLC Models are adopted as per the need for the development process. It may differ software-to-software.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is Kleene Star? </div>
          <div class="content">
            <p class="transition hidden">The Kleene star, ∑*, is called as a unary operator on a set of symbols or strings, ∑, that gives the infinite set of all possible strings of all possible lengths over ∑including λ.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is DFA?
</div>
          <div class="content">
            <p class="transition hidden">In DFA, for each input symbol, one is used to know the state to determine the machine moving, so it is called Deterministic Automaton. If it includes a finite number of states, then the machine is called as Deterministic Finite Machine or Deterministic Finite Automaton.</p>
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
