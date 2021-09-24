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
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Logic Design</title>
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
      Logic Design
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
        List of Experiments
      </a>
      <!-- <a class="item" id="faq">
        FAQ's
      </a> -->
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int" align="justify">
      Logic design, Basic organization of the circuitry of a digital computer. All digital computers are based on a two-valued logic system—1/0, on/off, yes/no (see binary code). Computers perform calculations using components called logic gates, which are made up of integrated circuits that receive an input signal, process it, and change it into an output signal. The components of the gates pass or block a clock pulse as it travels through them, and the output bits of the gates control other gates or output the result. There are three basic kinds of logic gates, called “and,” “or,” and “not.” By connecting logic gates together, a device can be constructed that can perform basic arithmetic functions.
    </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="numbersystem.php">Number Systems Introduction - Decimal, Binary, Octal, Hexadecimal & BCD Conversions</a>
          <a class="item" href="demorgan.php">De Morgan’s Theorem</a>
          <a class="item" href="kmap.php">Introduction to Karnaugh Maps - Combinational Logic Circuits, Functions & Truth Tables</a>
        </div>
      </div>
      
      <div id="pre" align="justify" style="display: none;">Understand the concepts of Logic Design.</div>
      
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
      <div class="title">
            <i class="dropdown icon"></i>What is the meaning of OOPS?
          </div>
          <div class="content">
            <p class="transition hidden">Object-oriented programming System(OOPs) is a programming paradigm based on the concept of “objects” that contain data and methods. The primary purpose of object-oriented programming is to increase the flexibility and maintainability of programs. Object oriented programming brings together data and its behaviour(methods) in a single location(object) makes it easier to understand how a program works. </p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What are the characteristics of an object?</div>
          <div class="content">
            <p class="transition hidden">An Object is a bundle of data and its behaviour(often known as methods), which have states and behaviors. The characteristcs of an Object is:<br><br>
            <div class="ui bulleted list">
              <div class="item">Abstraction</div><br>
              <div class="item">Encapsulation</div><br>
              <div class="item">Method Invocation</div>
            </div></p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is an Abstract method? </div>
          <div class="content">
            <p class="transition hidden">
            <div class="ui bulleted list">
              <div class="item">A method that is declared but not defined. Only method signature no body.</div><br>
              <div class="item">Declared using the abstract keyword</div><br>
              <div class="item">Used to put some kind of compulsion on the class who inherits the class has abstract methods.</div><br>
              <div class="item">The class that inherits must provide the implementation of all the abstract methods of parent class else declare the subclass as abstract.</div>
            </div></p>
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