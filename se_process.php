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
  <title>Software Process</title>
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
    Software Process
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
      <a class="item" id="list">
        Video
      </a>
      <a class="item" id="faq">
        Quiz
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int">

      The software process
      <br> 
      A structured set of activities required to develop a software system
      <br>
Specification <br>
Design <br>
Validation <br>
Evolution <br>
<br>
A software process model is an abstract representation of a process. It presents a description of a process from some particular perspective.


<br> <br> <br>
Generic software process models
<br><br>
The waterfall model <br>
Separate and distinct phases of specification and development. <br>
Evolutionary development <br>
Specification, development and validation are interleaved. <br>
Component-based software engineering. <br>
The system is assembled from existing components. <br>
There are many variants of these models e.g. formal development where a waterfall-like process is used but the specification is a formal specification that is refined through several stages to an implementable design. <br><br><br>

Waterfall model phases
<br><br>
Requirements analysis and definition <br>
System and software design <br>
Implementation and unit testing <br>
Integration and system testing <br>
Operation and maintenance <br>
The main drawback of the waterfall model is the difficulty of accommodating change after the process is underway. One phase has to be complete before moving onto the next phase.
<br> <br> <br>

Waterfall model problems
<br><br>
Inflexible partitioning of the project into distinct stages makes it difficult to respond to changing customer requirements. <br>
Therefore, this model is only appropriate when the requirements are well-understood and changes will be fairly limited during the design process. <br>
Few business systems have stable requirements. <br>
The waterfall model is mostly used for large systems engineering projects where a system is developed at several sites. <br>
<br><br>


Evolutionary development
<br><br>
Exploratory development <br>
Objective is to work with customers and to evolve a final system from an initial outline specification. Should start with well-understood requirements and add new features as proposed by the customer. <br>
Throw-away prototyping <br>
Objective is to understand the system requirements. Should start with poorly understood requirements to clarify what is really needed.
<br><br><br>

Evolutionary development
<br><br>
Problems <br> 
Lack of process visibility. <br> 
Systems are often poorly structured. <br>
Special skills (e.g. in languages for rapid prototyping) may be required. <br>
<br>
Applicability
<br>
For small or medium-size interactive systems <br>
For parts of large systems (e.g. the user interface) <br>
For short-lifetime systems.
<br><br> <br>

Component-based software engineering
<br><br>
Based on systematic reuse where systems are integrated from existing components or COTS (Commercial-off-the-shelf) systems.
<br>
Process stages <br>
Component analysis <br>
Requirements modification <br>
System design with reuse <br>
Development and integration <br>
This approach is becoming increasingly used as component standards have emerged.







 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            Process activities
            <br><br>
            Software specification <br>
Software design and implementation <br>
Software validation <br>
Software evolution

<br><br>
Software specification
<br><br>
The process of establishing what services are required and the constraints on the system’s operation and development. <br>
Requirements engineering process <br>
Feasibility study <br>
Requirements elicitation and analysis <br>
Requirements specification <br>
Requirements validation. <br><br>
<br>
Software design and implementation <br>
<br>
The process of converting the system specification into an executable system.
<br>
Software design <br>
Design a software structure that realises the specification <br>
Implementation <br>
Translate this structure into an executable program <br>
The activities of design and implementation are closely related and may be inter-leaved. <br> <br>
<br>

Design process activities
<br><br>
Architectural design <br>
Abstract specification <br>
Interface design <br>
Component design <br>
Data structure design <br>
Algorithm design <br>
<br> <br>
<br>

Structured methods
<br>
<br>
Systematic approaches to developing a software design. <br>
The design is usually documented as a set of graphical models. <br>
Possible models <br>
Object model <br>
Sequence model <br>
State transition model <br>
Structural model <br>
Data-flow model <br>
            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/laSrDtYtkXU">
      </iframe>
    
      
      
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
            $query = "select * from user_scores where usn='$usn' and topic_name='spe'";
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
              $query = "select question from questions_se where question_no like \"spe$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_se where option_no like \"spe$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"spe".$i."\" value=\"spe".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"spe".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"se.spe.5\">";
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
</body>
</html>
