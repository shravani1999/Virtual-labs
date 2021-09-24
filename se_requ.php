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
  <title>Requirement Gathering and Analysis</title>
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
    Requirement Gathering and Analysis
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

      Requirements engineering
      <br>
      The process of establishing the services that the customer requires from a system and the constraints under which it operates and is developed. <br>
      The requirements themselves are the descriptions of the system services and constraints that are generated during the requirements engineering process.
      <br><br>
      What is a requirement?
      <br>
      It may range from a high-level abstract statement of a service or of a system constraint to a detailed mathematical functional specification.
This is inevitable as requirements may serve a dual function
May be the basis for a bid for a contract - therefore must be open to interpretation;
May be the basis for the contract itself - therefore must be defined in detail;
Both these statements may be called requirements.

<br> <br>

Types of requirement
<br> 
User requirements <br>
Statements in natural language plus diagrams of the services the system provides and its operational constraints. Written for customers.
<br> <br>
System requirements <br>
A structured document setting out detailed descriptions of the system’s functions, services and operational constraints. Defines what should be implemented so may be part of a contract between client and contractor.
<br><br><br>
Functional and non-functional requirements
<br><br>

Functional requirements <br>
Statements of services the system should provide, how the system should react to particular inputs and how the system should behave in particular situations.
<br> <br>
Non-functional requirements <br>
constraints on the services or functions offered by the system such as timing constraints, constraints on the development process, standards, etc.
<br><br>
Domain requirements <br>
Requirements that come from the application domain of the system and that reflect characteristics of that domain.


 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            User requirements
            <br>
            <br>
            Should describe functional and non-functional requirements in such a way that they are understandable by system users who don’t have detailed technical knowledge.
            <br>
            User requirements are defined using natural language, tables and diagrams as these can be understood by all users.
<br> <br> <br>
Problems with natural language
<br>
<br>
Lack of clarity 
<br>
Precision is difficult without making the document difficult to read. <br>
Requirements confusion. <br>
Functional and non-functional requirements tend to be mixed-up. <br>
Requirements amalgamation. <br>
Several different requirements may be expressed together. <br>

<br><br>


Guidelines for writing requirements
<br>
<br>

Invent a standard format and use it for all requirements. <br>
Use language in a consistent way. Use shall for mandatory requirements, should for desirable requirements. <br>
Use text highlighting to identify key parts of the requirement. <br>
Avoid the use of computer jargon.
<br><br><br>
The requirements document
<br>
<br>
The requirements document is the official statement of what is required of the system developers.
<br>
Should include both a definition of user requirements and a specification of the system requirements.
<br>
It is NOT a design document. As far as possible, it should set of WHAT the system should do rather than HOW it should do it.
<br>

<br><br>
IEEE requirements standard
<br> <br>
Defines a generic structure for a requirements document that must be instantiated for each specific system. 
<br> Introduction.
<br> General description.
<br> Specific requirements.
<br> Appendices.
<br>Index.




            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/gyXcu78bWis">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='sre'";
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
              $query = "select question from questions_se where question_no like \"sre$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_se where option_no like \"sre$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"sre".$i."\" value=\"sre".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"sre".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"se.sre.5\">";
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
