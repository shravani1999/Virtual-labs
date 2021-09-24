<!DOCTYPE html>
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
  <title>DS-Lab</title>
  <style>
  #cont{
background-color:#cce6ff;

  }
  .menu{
   color:blue;
  }
 
 
  </style>
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
      Data Structures Laboratory
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
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column" id="hello">
    <div class="ui clearing segment">
      
      <div id="int">
        To understand how various data structures work. To understand some important applictions of various data structures. 
        To familiarize how certain applications can benefit from the choice of data structures. 
        To understand how the choice of data structures can lead to efficient implementations of algorithms.
      </div>
      
      <div id="lis" style="display: none;">
      <div style="display:inline-block;">
      <button class="ui icon dropdown button">
        <span class="text">Operations on Stack</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="infixtopostfix.php">Infix to Postfix</a>
          <a class="item" href="ratmaze.php">Maze</a>
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">Operations on Queue</span>
        <div class="menu">
          <a class="item" href="queue.php">Queue</a>
          <a class="item" href="queue.php">Calculator</a>
          <a class="item" href="queue.php">Maze</a>
        </div>
      </button><br>
      <div class="ui icon dropdown button">
        <span class="text">Operations on Singly Linked List</span>
        <div class="menu">
          <a class="item" href="singlylinkedlist.php">Singly Linked List</a>
          <a class="item" href="singlylinkedlist.php">Calculator</a>
          <a class="item" href="singlylinkedlist.php">Maze</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Operations on Doubly Linked List</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="stack.php">Calculator</a>
          <a class="item" href="stack.php">Maze</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Binary Tree</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="stack.php">Calculator</a>
          <a class="item" href="stack.php">Maze</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Preorder Traversal in Binary Search Tree</span>
        <div class="menu">
          <a class="item" href="stack.php">Stack</a>
          <a class="item" href="stack.php">Calculator</a>
          <a class="item" href="stack.php">Maze</a>
        </div>
      </div><br>
      </div>
      </div>
      
      <div id="pre" style="display: none;">To make students get better at Data Structures in C.</div>
      
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>What is a datastructure?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord1">In computer science, a data structure is a data organization, management, and storage format that enables efficient access and modification. More precisely, a data structure is a collection of data values, the relationships among them, and the functions or operations that can be applied to the data.</p>
          </div>
          
          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What are some types of datastructures? 
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord2">There are many datastructures. Some of them are: <br>
            Array<br>List<br>Union<br>Trees</p>
          </div>

          <!-- <div class="title" id="dion3">
            <i class="dropdown icon"></i>What is a dog?
          </div>
          <div>
            <p style="padding: 10px;display: none;" id="accord3">A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
          </div> -->
        </div>
      </div>
      
    </div>
  </div>
</div>
  </div>
  <script language='javascript'>
             $(document).ready(function(){
                $('.ui.accordion').accordion();
                $('.ui.dropdown').dropdown();
             });
</script>
</body>
</html>
