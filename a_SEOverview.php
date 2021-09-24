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
  <title>Software Engineering</title>
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
    Overview
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

      Software Engineering
      <br> <br>
      The economies of ALL developed nations are dependent on software.
      <br><br>
      More and more systems are software controlled.
      <br> <br> 
      Software engineering is concerned with theories, methods and tools for professional software development.
      <br><br>
      Expenditure on software represents a significant fraction of GNP in all developed countries.
      <br> <br>
      Computer programs and associated documentation such as requirements, design models and user manuals.
Software products may be developed for a particular customer or may be developed for a general market.
Software products may be
<br> <br>
Generic - developed to be sold to a range of different customers e.g. PC software such as Excel or Word.
<br>
Bespoke (custom) - developed for a single customer according to their specification.
<br>
New software can be created by developing new programs, configuring generic software systems or reusing existing software
<br> <br>
Software Engineering
<br><br>
Software engineering is an engineering discipline that is concerned with all aspects of software production. <br>
Software engineers should adopt a systematic and organised approach to their work and use appropriate tools and techniques depending on the problem to be solved, the development constraints and the resources available.

<br><br>
Software Process
<br><br>

A set of activities whose goal is the development or evolution of software. <br>
Generic activities in all software processes are: <br>
Specification - what the system should do and its development constraints <br>
Development - production of the software system <br>
Validation - checking that the software is what the customer wants <br>
Evolution - changing the software in response to changing demands. <br>

<br><br>

What is a system?
<br><br>
A purposeful collection of inter-related components working together to achieve some common objective. 
A system may include software, mechanical, electrical and electronic hardware and be operated by people.
System components are dependent on other system components
The properties and behaviour of system components are inextricably inter-mingled

<br><br>
Socio-technical system characteristics
<br>
Emergent properties
<br>
Properties of the system of a whole that depend on the system components and their relationships.
<br> <br>
Non-deterministic <br>
<br> 
They do not always produce the same output when presented with the same input because the system’s behaviour is partially dependent on human operators.
<br><br>
Complex relationships with organisational objectives <br>
The extent to which the system supports organisational objectives does not just depend on the system itself.
<br>
<br>


 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            Professional and ethical responsibility
            <br><br>
            Software engineering involves wider responsibilities than simply the application of technical skills.
Software engineers must behave in an honest and ethically responsible way if they are to be respected as professionals.
Ethical behaviour is more than simply upholding the law.

<br> <br>
Issues of professional responsibility
<br> <br>
Confidentiality 
Engineers should normally respect the confidentiality of their employers or clients irrespective of whether or not a formal confidentiality agreement has been signed.
<br> <br>
Competence 
Engineers should not misrepresent their level of competence. They should not knowingly accept work which is outwith their competence.
<br>

Intellectual property rights  <br>
Engineers should be aware of local laws governing the use of intellectual property such as patents, copyright, etc. They should be careful to ensure that the intellectual property of employers and clients is protected.
<br> <br>
Computer misuse <br>
Software engineers should not use their technical skills to misuse other people’s computers. Computer misuse ranges from relatively trivial (game playing on an employer’s machine, say) to extremely serious (dissemination of viruses). 
<br> <br> <br>

Code of ethics - principles
<br> <br>
PUBLIC  <br>
Software engineers shall act consistently with the public interest. <br> <br>
CLIENT AND EMPLOYER <br>
Software engineers shall act in a manner that is in the best interests of their client and employer consistent with the public interest. <br> <br>
PRODUCT <br>
Software engineers shall ensure that their products and related modifications meet the highest professional standards possible
<br> <br>

COLLEAGUES <br>
Software engineers shall be fair to and supportive of their colleagues.
<br> <br>
SELF <br> 
Software engineers shall participate in lifelong learning regarding the practice of their profession and shall promote an ethical approach to the practice of the profession.
<br> <br> <br>

Ethical dilemmas
<br> <br>
Disagreement in principle with the policies of senior management. <br>
Your employer acts in an unethical way and releases a safety-critical system without finishing the testing of the system. <br>
Participation in the development of military weapons systems or nuclear systems.
<br> <br> <br>
Emergent Properties
<br><br>


Volume:	            The volume of a system (the total space occupied) varies depending on how the component assemblies are arranged and connected. <br> <br>
Reliability:	System reliability depends on component reliability but unexpected interactions can cause new types of failure and therefore affect the reliability of the system. <br> <br>
Security:	The security of the system (its ability to resist attack) is a complex property that cannot be easily measured. Attacks may be devised that were not anticipated by the system designers and so may defeat built-in safeguards. <br> <br>
Repairability:	This property reflects how easy it is to fix a problem with the system once it has been discovered. It depends on being able to diagnose the problem, access the components that are faulty and modify or replace these components. <br> <br>
Usability:	This property reflects how easy it is to use the system. It depends on the technical system components, its operators and its operating environment.


            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      Emergent System Properties
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/ZCBaQpEq1U8">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='se'";
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
              $query = "select question from questions_se where question_no like \"se$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_se where option_no like \"se$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"se".$i."\" value=\"se".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"se".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"se.se.5\">";
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
