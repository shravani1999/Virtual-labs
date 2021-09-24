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
  <title>Software Design and Development</title>
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

      Requirement Gathering and Analysis
      <br>
      The design process for identifying the sub-systems making up a system and the framework for sub-system control and communication is architectural design.
      <br> The output of this design process is a description of the software architecture.
<br> <br> <br>
Architectural design
      <br> <br>
      An early stage of the system design process. <br>
Represents the link between specification and design processes. <br>
Often carried out in parallel with some specification activities. <br>
It involves identifying major system components and their communications. <br>


<br> <br>

Advantages of explicit architecture
<br>  <br>
Stakeholder communication <br>
Architecture may be used as a focus of discussion by system stakeholders. <br>

System analysis <br>
Means that analysis of whether the system can meet its non-functional requirements is possible. <br>
Large-scale reuse <br>
The architecture may be reusable across a range of systems.

Architecture and system characteristics<br>
<br>
Performance:
<br>
Localise critical operations and minimise communications. Use large rather than fine-grain components.
<br> <br>
Security:
<br> 
Use a layered architecture with critical assets in the inner layers.
<br>
Safety: <br>

Localise safety-critical features in a small number of sub-systems.
<br> <br>
Availability: <br>
Include redundant components and mechanisms for fault tolerance.
 <br> <br>
Maintainability: <br>
Use fine-grain, replaceable components.

</div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            Rapid software development
            <br>
            <br>
            Because of rapidly changing business environments, businesses have to respond to new opportunities and competition.
            <br>
This requires software and rapid development and delivery is not often the most critical requirement for software systems.
<br>
Businesses may be willing to accept lower quality software if rapid delivery of essential functionality is possible.
<br> <br> <br>
Requirements
<br>
<br>
Because of the changing environment, it is often impossible to arrive at a stable, consistent set of system requirements. <br>
Therefore a waterfall model of development is impractical and an approach to development based on iterative specification and delivery is the only way to deliver software quickly.


<br><br>
<br>

Characteristics of RAD processes
<br>
<br>

The processes of specification, design and implementation are concurrent. <br>
There is no detailed specification and design documentation is minimised. <br>
The system is developed in a series of increments. End users evaluate each increment and make proposals for later increments. <br>
System user interfaces are usually developed using an interactive development system.


<br><br>
Agile methods
<br> <br>
Dissatisfaction with the overheads involved in design methods led to the creation of agile methods. 
<br> <br>
These methods: <br>
Focus on the code rather than the design <br>
Are based on an iterative approach to software development <br>
Are intended to deliver working software quickly and evolve this quickly to meet changing requirements. <br>
Agile methods are probably best suited to small/medium-sized business systems or PC products.





            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/NpCEjtKAa20 ">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='sde'";
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
              $query = "select question from questions_se where question_no like \"sde$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_se where option_no like \"sde$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"sde".$i."\" value=\"sde".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"sde".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"se.sde.5\">";
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
