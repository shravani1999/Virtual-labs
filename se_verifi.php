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
  <title>Verification and Validation</title>
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
    Verification and Validation
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

      Verification: <br> <br>	"Are we building the product right”.
      <br> 
The software should conform to its specification. <br> <br>
Validation: <br> <br>	 "Are we building the right product”.
<br>
The software should do what the user really requires.


<br> <br> <br>

The V & V process
<br>
<br> 
Is a whole life-cycle process - V & V must be applied at each stage in the software process. <br>
Has two principal objectives <br> <br>
The discovery of defects in a system; <br>
The assessment of whether or not the system is useful and useable in an operational situation. <br>
<br> <br> <br>

Static and dynamic verification
<br> <br>
Software inspections-  Concerned with analysis of the static system representation to discover problems  (static verification)
May be supplement by tool-based document and code analysis <br> <br>
Software testing- Concerned with exercising and observing product behaviour (dynamic verification)
The system is executed with test data and its operational behaviour is observed
<br> <br>
<br>

Program testing <br> <br>
Can reveal the presence of errors NOT their absence. <br>
The only validation technique for non-functional requirements as the software has to be executed to see how it behaves. <br> 
Should be used in conjunction with static verification to provide full V&V coverage.
<br> <br> <br>

Types of testing
<br> <br>
Defect testing <br> <br>
Tests designed to discover system defects. <br>
A successful defect test is one which reveals the presence of defects in a system. <br>
Validation testing <br><br>
Intended to show  that the software meets its requirements. <br>
A successful test is one that shows that a requirements has been properly implemented.

<br> <br> <br>

Testing and debugging
<br>
<br>
Defect testing and debugging are distinct processes.
<br>
Verification and validation is concerned with establishing the existence of defects in a program.
<br>
Debugging is concerned with locating and repairing these errors.
<br>
Debugging involves formulating a hypothesis about program behaviour then testing these hypotheses to find the system error.
<br>

 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            The structure of a software test plan
            <br><br>
            The testing process. <br>
Requirements traceability. <br>
Tested items. <br>
Testing schedule. <br>
Test recording procedures. <br>
Hardware and software requirements. <br>
Constraints.
<br><br><br>
Software inspections
<br><br>
These involve people examining the source representation with the aim of discovering anomalies and defects.
<br>
Inspections not require execution of a system so may be used before implementation.
<br>
They may be applied to any representation of the system (requirements, design,configuration data, test data, etc.).
<br>
They have been shown to be an effective technique for discovering program errors.
<br><br><br>
Inspections and testing
<br><br>
Inspections and testing are complementary and not opposing verification techniques.
<br>
Both should be used during the V & V process. <br>
Inspections can check conformance with a specification but not conformance with the customer’s real requirements.
<br>
Inspections cannot check non-functional characteristics such as performance, usability, etc.
<br> <br> <br>
Inspection checklists
<br> <br>
Checklist of common errors should be used to drive the inspection. <br>
Error checklists are programming language dependent and reflect the characteristic errors that are likely to arise in the language.
<br>
In general, the 'weaker' the type checking, the larger the checklist. <br>
Examples: Initialisation, Constant naming, loop termination, array bounds, etc.
<br> <br> <br>
Automated static analysis
<br>
<br>
Static analysers are software tools for source text processing. <br>
They parse the program text and try to discover potentially erroneous conditions and bring these to the attention of the V & V team. <br>
They are very effective as an aid to inspections - they are a supplement to but not a replacement for inspections.
<br> <br> <br>






            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/33EiOfCRpSQ">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='sve'";
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
              $query = "select question from questions_se where question_no like \"sve$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_se where option_no like \"sve$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"sve".$i."\" value=\"sve".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"sve".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"se.sve.5\">";
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
