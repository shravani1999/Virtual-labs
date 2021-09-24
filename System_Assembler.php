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
  <title></title>
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
    Introduction to Machine Architecture and Assemblers
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
      Introduction
      <br> <br>
      Machine-Independent features:
      <br> <br>
      These are the features which do not depend on the architecture of the machine. These are: <br>
 Literals <br>
 Expressions <br>
 Program blocks <br>
 Control sections <br>
<br> <br>
Literals:
<br> <br>
A literal is defined with a prefix = followed by a specification of the literal value.
<br> <br>
Example: <br>
45 001A ENDFIL LDA =C’EOF’ 032010 <br>
- <br>
- <br>
93 LTORG <br>
002D * =C’EOF’ 454F46 <br> 
<br> <br>

The example above shows a 3-byte operand whose value is a character string EOF.
The object code for the instruction is also mentioned. It shows the relative displacement
value of the location where this value is stored. In the example the value is at location (002D)
and hence the displacement value is (010). As another example the given statement below
shows a 1-byte literal with the hexadecimal value ‘05’.
<br> <br> 
215 &nbsp; &nbsp; 1062 &nbsp;&nbsp;WLOOP &nbsp;&nbsp; TD =X’05’&nbsp;&nbsp; E32011  
<br> <br> <br>
It is important to understand the difference between a constant defined as a literal and
a constant defined as an immediate operand. In case of literals the assembler generates the
specified value as a constant at some other memory location In immediate mode the operand
value is assembled as part of the instruction itself. Example <br> <br>
55&nbsp;&nbsp; 0020&nbsp;&nbsp; LDA&nbsp;&nbsp; #03&nbsp;&nbsp; 010003
<br><br> <br>
All the literal operands used in a program are gathered together into one or more
literal pools. This is usually placed at the end of the program. The assembly listing of a
program containing literals usually includes a listing of this literal pool, which shows the
assigned addresses and the generated data values. In some cases it is placed at some other
location in the object program. An assembler directive LTORG is used. Whenever the
LTORG is encountered, it creates a literal pool that contains all the literal operands used
since the beginning of the program. The literal pool definition is done after LTORG is
encountered. It is better to place the literals close to the instructions. 
<br><br> <br>
A literal table is created for the literals which are used in the program. The literal
table contains the literal name, operand value and length. The literal table is usually created
as a hash table on the literal name.
<br> <br> <br>


 

</div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            ASSEMBLER DESIGN OPTIONS
            <br> <br> 
            Here we are discussing <br>
The structure and logic of one-pass assembler. These assemblers are used when it is
necessary or desirable to avoid a second pass over the source program. <br>
Notion of a multi-pass assembler, an extension of two-pass assembler that allows an
assembler to handle forward references during symbol definition.
<br> <br> <br>
One-Pass Assembler <br> <br>
The main problem in designing the assembler using single pass was to resolve forward
references. We can avoid to some extent the forward references by:
<br> <br>
Eliminating forward reference to data items, by defining all the storage reservation
statements at the beginning of the program rather at the end. <br>
 Unfortunately, forward reference to labels on the instructions cannot be avoided.
(forward jumping). <br> 
To provide some provision for handling forward references by prohibiting forward
references to data items. <br>
<br>
There are two types of one-pass assemblers: <br>
One that produces object code directly in memory for immediate execution (Loadand-go assemblers).
<br>
 The other type produces the usual kind of object code for later execution. <br>
Load-and-Go Assembler <br>
Load-and-go assembler generates their object code in memory for immediate
execution. <br>
 No object program is written out, no loader is needed. <br>
 It is useful in a system with frequent program development and testing
The efficiency of the assembly process is an important consideration. <br>
Programs are re-assembled nearly every time they are run; efficiency of the assembly
process is an important consideration.






            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/pjBZ6zkzhkI">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='SSa'";
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
              $query = "select question from questions_SysSoft where question_no like \"SSa$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo " <p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_SysSoft where option_no like \"SSa$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"SSa".$i."\" value=\"SSa".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"SSa".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"SysSoft.SSa.5\">";
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









