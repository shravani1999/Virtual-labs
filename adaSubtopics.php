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
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/questions.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Quick sort</title>
  
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
  <a class="item" href="ADA.php">
   Design and Analysis
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
Quick Sort
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="prereq">
        Theory
      </a>
      <a class="item" target="_blank" id="list">
        Compiler
      </a>
      <a class="item" id="faq">
        Quiz
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
         
      <div class="ui segment">
      
      <div id="int">
        Sorting is a fundamental task in computing. There are several sorting algorithms developed decades ago, but new algorithms continue to appear.
        In this experiment, the focus is to study a few classical sorting algorithms.
        <br>
        We will primarily be using arrays for our algorithms as it is simple and illustrative to do so. 
        We will cover quick sort in this experiment.
      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">

<br> <br>
          <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/PgBzjlCcFvc" frameborder="0">
</iframe>
<br><br>
            Let us look at one final example of sorting algorithms along with a short proof of correctness. 
            While merge sort can be said to be optimal in terms of its time requiement, it does use some extra space. 
            So one question to prusue is to design a sorting algorithm that can sort in-place, i.e., without using any extra space.
            This is an algorithm based on the divide and conquer strategy called the quick sort that can sort in place. 
            The 3 steps of the algorithm in the framework of divide and conquer are:<br><br>
            
            <div class="GrayBlock">
              <div class="item">Divide: Divide the input into 3 parts L,E, and R where L &lt; E &lt; R based on a pivot.</div>
              <div class="item">Conquer: Solve the sorting problem recursively on L and R. 
                <br>&emsp;&emsp;Assuming that all the items are distinct,we have that |E| = 1 hence already sorted.</div>
              <div class="item">Combine: Produce the sorted L, E, and R in that order.</div>
            </div>
          </div>
          <br>
          <div class="item">
            One can notice that the third step is quite trivial here. 
            In fact, this is an example of the so called partition based algorithms. 
            Let us look at the only non-trivial step, that of partitioning the input. 
            The key to the partition step is to select a pivot and rearrange the elements of the array. 
            For this the following approach is presented:<br><br>

            
            <div class="GrayBlock">
              <div class="item">Procedure Parition(A, l, h)</div>
              <div class="item">&emsp;pivot = A[h];</div>
              <div class="item">&emsp;i = l - 1; 4. for j = p to h - 1 do</div>
              <div class="item">&emsp;&emsp;if A[j] &lt;= pivot</div>
              <div class="item">&emsp;&emsp;&emsp;i = i + 1;</div>
              <div class="item">&emsp;swap A[i] with A[j]</div>
              <div class="item">&emsp;swap A[i + 1] with A[h]</div>
              <div class="item">End Procedure</div>
            </div>
          </div>
        </div>
      </div>
      
      
      <div id="lis" style="display: none;">
      <div class="ui form">
        <div id="compilerData">
        Write a program in C to simulate the working of a stack of integers using an array. Provide the following operations:<br>
         a. Insert<br> b. Delete<br> c. Display.<br><br>
         <strong>Input Format:</strong><br>
         Every line consists of one argument, a character. If the character is 'a', the next argument is an integer.<br>
         The Character denotes the operation. 'a' is to Insert, 'b' is to Delete, and 'c' is to Display.<br>
         The Integer denotes the value to Insert into the stack.<br>
         Note: The program ends only when a character which is not any of the above options is entered.<br><br>
         <strong>Output Format:</strong><br>
         Print one/more array of integers, denoting the composition of the stack.<br> 
        </div><br>

        <div class="ui segment">
         <div class="ui two column very relaxed grid">
              <div class="column">
                <strong>Sample Input</strong><br>
                a 5<br>a 8<br>c<br>b<br>a 7<br>c<br>q
              </div>
              <div class="column">
                <strong>Sample Output</strong><br>
                8 5 <br>7 5 <br>
              </div>
         </div>
         <div class="ui vertical divider">and</div>
         </div>
        </div><br>

        
          <form action="compile.php" id="form" name="f2" method="POST" ><br>
          <label class="writeCode">Write Your Code</label><br><br>
          <!-- <div class="ui  large segment"  id="editor" style="height:500px;"> -->
          <!-- <textarea class="field codeBlock"  id="editor" name="code" rows="10" cols="50">
#include&lt;stdio.h&gt;
void main()
{

}</textarea><br><br> -->

<div class="ui large segment" style="height:500px;">
<div id="editor">/*Type your code here: */
#include&lt;stdio.h&gt;
void main()
{

}
</div>
</div>
<div>
<textarea name="editor" style="display: none;" >
</div>
<textarea style="display: none;"></textarea>

<button class="ui left floated button" onclick="myFunction()">Custom Input</button>
          <div id="inputs" style="display:None;">
          <br><br>
          <label for="in" class="writeCode"><br>Enter Your Input</label><br><br>
          <textarea class="field codeBlock" name="input" rows="10" cols="50"></textarea><br><br><br>
          </div>

        <input type="hidden" name="extra" value="Content of the extra variable" >
         <input type="hidden" name="lang" value="c" >
         <input type="hidden" name="prog" value="stack" >
          <input type="submit" id="st" class="ui left floated button" value="Run Code" onclick="myFunction2()">
          <input type="submit" id="subb" class="ui left floated button" value="Submit" onclick="myFunction2()"><br><br><br>

          </form><br>
          <div id="outputBox" style="display:None;">Output:<br><br>
          <div name="output"></div><br>
          </div>
          </div>

      </div>
      
      <div id="faqs" style="display: none;">
      <form name="quiz" id="quiz" action="quizProcess.php" method="POST">
      <?php
        $servername = "localhost:3306";
        $db_username = "root";
        $password = "";
        $dbname = "virtuallabsdsce";

        // Create connection
        $conn = new mysqli($servername, $db_username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $usn=$_SESSION["usn"];
        $query = "select * from user_scores where usn='$usn' and topic_name='ad'";
        $res=$conn->query($query);
        
        if ($res->num_rows == 1)
        { 
          $row = $res->fetch_assoc();
          echo "Quiz already attemped!<br><br>Your score: ".$row["quiz_score"];
        }
        else{
        $a= [1,2,3,4,5];
        $opt = ['a','b','c','d']; 
        $questionno = 1;
        shuffle($a);
        foreach($a as $i)
        {
          $query = "select question from questions_ada where question_no like \"ad$i\"";
          $question_name = $conn->query($query);
          $row = $question_name->fetch_assoc();
          echo "<p>".$questionno.". ".$row['question']."<br>";
          shuffle($opt);
          foreach($opt as $j)
          {
            $option_name = $conn->query("select options_name from answer_ada where option_no like \"ad$i$j\"");
            $row =$option_name->fetch_assoc();
            echo "<label><input type=\"radio\" name=\"ad".$i."\" value=\"ad".$i.$j."\">".$row['options_name']."</label><br>";
          }
          echo "<span id=\"ad".$i."\"></span></p><br>";
          $questionno += 1;
        }
        
        echo "<input type=\"hidden\" name=\"quizID\" value=\"ada.ad.5\">";
        echo "<div id=\"result\"><input type=\"submit\" id=\"quizSub\" class=\"ui left floated button\" value=\"Submit\"></div>";
        }
        $conn->close();
        ?>
        </form>
        </div>
      </div>
      </div>
      
    </div>
  </div>
</div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/twilight");
    editor.session.setMode("ace/mode/c_cpp");
    var textarea = $('textarea[name="editor"]');
editor.getSession().on("change", function () {
    textarea.val(editor.getSession().getValue());
});
  //  function getcodeVal(){
  //   var code = editor.getValue();
  //   console.log(code);
  //  }
</script>
  
</body>
</html>




