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
  <title>Introduction to Finite Automata</title>
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
    Introduction to Finite Automata
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

      Automata theory is the study of abstract machines and automata, as well as the computational problems that can be solved using them. It is a theory in theoretical computer science. The word automata (the plural of automaton) comes from the Greek word αὐτόματα, which means "self-making".




<br> <br> <br>
Automata theory is closely related to formal language theory. An automaton is a finite representation of a formal language that may be an infinite set. Automata are often classified by the class of formal languages they can recognize, typically illustrated by the Chomsky hierarchy, which describes the relations between various languages and kinds of formalized logics.

<br><br><br>
An automaton is a construct made of states designed to determine if the input should be accepted or rejected. It looks a lot like a basic board game where each space on the board represents a state. Each state has information about what to do when an input is received by the machine (again, rather like what to do when you land on the Go To Jail spot in a popular board game). As the machine receives a new input, it looks at the state and picks a new spot based on the information on what to do when it receives that input at that state. When there are no more inputs, the automaton stops and the space it is on when it completes determines whether the automaton accepts or rejects that particular set of inputs.



<br> <br> <br>

definition of finite state automata
<br>
A deterministic finite automaton is represented formally by a 5-tuple <Q, Σ, δ,q0,F>, where:
<br>
Q is a finite set of states.
<br>
Σ is a finite set of symbols, called the alphabet of the automaton.
<br>
δ is the transition function, that is, δ: Q × Σ → Q.
<br>
q0 is the start state, that is, the state of the automaton before any input has been processed, where q0∈ Q.
<br>
F is a set of states of Q (i.e. F⊆Q) called accept states.

 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            Finite Automaton can be classified into two types − <br>
<br>
Deterministic Finite Automaton (DFA) <br>
Non-deterministic Finite Automaton (NDFA / NFA) <br> <br> <br>
Deterministic Finite Automaton (DFA) <br> <br>
In DFA, for each input symbol, one can determine the state to which the machine will move. Hence, it is called Deterministic Automaton. As it has a finite number of states, the machine is called Deterministic Finite Machine or Deterministic Finite Automaton.
<br> <br>
Formal Definition of a DFA <br>
A DFA can be represented by a 5-tuple (Q, ∑, δ, q0, F) where − <br>

Q is a finite set of states. <br>

∑ is a finite set of symbols called the alphabet. <br>

δ is the transition function where δ: Q × ∑ → Q <br>

q0 is the initial state from where any input is processed (q0 ∈ Q). <br>

F is a set of final state/states of Q (F ⊆ Q). <br> <br> <br>

Graphical Representation of a DFA 

<br> <br>
A DFA is represented by digraphs called state diagram.
<br> <br>
The vertices represent the states. <br>
The arcs labeled with an input alphabet show the transitions. <br>
The initial state is denoted by an empty single incoming arc. <br>
The final state is indicated by double circles. <br> <br>
Example <br>
Let a deterministic finite automaton be → <br> <br>

Q = {a, b, c}, <br>
∑ = {0, 1}, <br>
q0 = {a}, <br>
F = {c}, and <br>

<br> <br>


Graphical representation of the dfa is shown below
<br> <br>
<img src="images/dfa.jpg" alt="">


<br><br>

<br>

In NDFA, for a particular input symbol, the machine can move to any combination of the states in the machine. In other words, the exact state to which the machine moves cannot be determined. Hence, it is called Non-deterministic Automaton. As it has finite number of states, the machine is called Non-deterministic Finite Machine or Non-deterministic Finite Automaton.
<br> <br>
Formal Definition of an NDFA <br> <br>
An NDFA can be represented by a 5-tuple (Q, ∑, δ, q0, F) where − <br>

Q is a finite set of states. <br>

∑ is a finite set of symbols called the alphabets. <br>

δ is the transition function where δ: Q × ∑ → 2Q <br>

(Here the power set of Q (2Q) has been taken because in case of NDFA, from a state, transition can occur to any combination of Q states)
<br>
q0 is the initial state from where any input is processed (q0 ∈ Q).
<br>
F is a set of final state/states of Q (F ⊆ Q).
nsapi_request_headers <br>
Graphical Representation of an NDFA: (same as DFA)  <br>
An NDFA is represented by digraphs called state diagram. <br> 

The vertices represent the states. <br>
The arcs labeled with an input alphabet show the transitions. <br>
The initial state is denoted by an empty single incoming arc. <br>
The final state is indicated by double circles. <br>
<br> <br>
Example <br> <br>

Let a non-deterministic finite automaton be → <br> <br>

Q = {a, b, c} <br> 
∑ = {0, 1} <br>
q0 = {a} <br>
F = {c} <br>
<br><br>
 Graphical represemtation of the NDFA
 <img src="images/nfa.jpg" alt="">



            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/syjJutOdLnI">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='flt'";
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
              $query = "select question from questions_flt where question_no like \"flt$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_flt where option_no like \"flt$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"flt".$i."\" value=\"flt".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"flt".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"flt.flt.5\">";
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
