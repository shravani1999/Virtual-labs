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
  <title>ADA-Lab</title>
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
      Design And Analysis Of Algorithms
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
 <div class="twelve wide stretched column">
    <div class="ui clearing segment">
      
      <div id="int">
        To understand the fundamental concepts of Designing Strategies. To understand some important applications of various algorithms and their implementation. 
        The important aspects of algorithm design include creating an efficient algorithm to solve a problem in an efficient way using minimum time and space.
         To understand the different methods of solving algorithms.
      </div>
      
      <div id="lis" style="display: none;">
      <div style="display:inline-block;">
      <button class="ui icon dropdown button">
        <span class="text">Divide and conquer</span>
        <div class="menu">
          <a class="item" href="adaSubtopics.php">QuickSort</a>
          <a class="item" href="ada_mergesort.php">Merge Sort</a>
          <a class="item" href="ratmaze.php">Binary search</a>
        </div>
      </button><br>
      <button class="ui icon dropdown button">
        <span class="text">Decrease and conquer</span>
        <div class="menu">
          <a class="item" href="queue.php">DFS</a>
          <a class="item" href="queue.php">BFS</a>
          
        </div>
      </button><br>
      <div class="ui icon dropdown button">
        <span class="text">Dynamic Programming</span>
        <div class="menu">
          <a class="item" href="singlylinkedlist.php">Warshalls</a>
          <a class="item" href="singlylinkedlist.php">Floyds</a>
          <a class="item" href="singlylinkedlist.php">Knapsack</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Greddy Technique</span>
        <div class="menu">
          <a class="item" href="stack.php">Prims</a>
          <a class="item" href="stack.php">Kruskals</a>
          <a class="item" href="stack.php">Dijikstras</a>
        </div>
      </div><br>
      <div class="ui icon dropdown button">
        <span class="text">Back Tracking</span>
        <div class="menu">
          <a class="item" href="stack.php">Sum of subset</a>
          <a class="item" href="stack.php">nqueens</a>
          
        </div>
      </div><br>
      
      </div>
      </div>
      
      <div id="pre" style="display: none;">To help students understand the importance of algorithms</div>
      
      <div id="faqs" style="display: none;">
      <div class="ui styled accordion">
          <div class="title" id="dion1">
            <i class="dropdown icon"></i>What is an algorithm?
          </div>
          <div>
            <p style="padding-left: 30px;display: none;" id="accord1">algorithm is any well-defined computational procedure that takes some value, or set of values, as input and produces some value, or set of values, as output. An algorithm is thus a sequence of computational steps that transform the input into the output.</p>
          </div>
          
         

          <div class="title" id="dion2">
            <i class="dropdown icon"></i>When does the worst case of QuickSort occur? 
          </div>
          <div>
            <p style="padding-left: 30px;display: none;" id="accord2">In quickSort, we select a pivot element, then partition the given array around the pivot element by placing pivot element at its correct position in sorted array.
The worst case of quickSort occurs when one part after partition contains all elements and other part is empty. For example, if the input array is sorted and if last or first element is chosen as a pivot, then the worst occurs 
            
          </div>

          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What is Bubble Sort?
          </div>
          <div>
            <p style="padding-left: 30px;display: none;" id="accord2">Bubble Sort is an elementary sorting algorithm, which works by repeatedly exchanging adjacent elements, if necessary. When no exchanges are required, the file is sorted.
          </div>

          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What are the criteria of algorithm analysis?
          </div>
          <div>
            <p style="padding-left: 30px;display: none;" id="accord2">An algorithm are generally analyzed on two factors − time and space. That is, how much execution time and how much extra space required by the algorithm.
          </div>

          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What is asymptotic analysis of an algorithm?
          </div>
          <div>
            <p style="padding-left: 30px;display: none;" id="accord2">Asymptotic analysis of an algorithm, refers to defining the mathematical boundation/framing of its run-time performance. Using asymptotic analysis, we can very well conclude the best case, average case and worst case scenario of an algorithm.
          </div>

          <div class="title" id="dion2">
            <i class="dropdown icon"></i>What is linear data structure?
          </div>
          <div>
            <p style="padding-left: 30px;display: none;" id="accord2">A linear data-structure has sequentially arranged data items. The next time can be located in the next memory address. It is stored and accessed in a sequential manner. Array and list are example of linear data structure.
          </div>

          <div class="title" id="dion2">
            <i class="dropdown icon"></i>Why do we use stacks?
          </div>
          <div>
            <p style="padding-left: 30px;display: none;" id="accord2">Stacks follows LIFO method and addition and retrieval of a data item takes only Ο(n) time. Stacks are used where we need to access data in the reverse order or their arrival. Stacks are used commonly in recursive function calls, expression parsing, depth first traversal of graphs etc.
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
