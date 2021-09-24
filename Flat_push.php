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
  <title>Push Down Automata</title>
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
    Push Down Automata
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

      Basic Structure of PDA
      <br><br>
A pushdown automaton is a way to implement a context-free grammar in a similar way we design DFA for a regular grammar. A DFA can remember a finite amount of information, but a PDA can remember an infinite amount of information.
<br> <br>
Basically a pushdown automaton is −
<br>
"Finite state machine" + "a stack"
<br>
A pushdown automaton has three components −
<br> <br>
an input tape, <br>
a control unit, and <br>
a stack with infinite size. <br>
The stack head scans the top symbol of the stack. <br> <br>

A stack does two operations − <br><br>

Push − a new symbol is added at the top.
<br>
Pop − the top symbol is read and removed.
<br>
A PDA may or may not read an input symbol, but it has to read the top of the stack in every transition.
 <br> <br>
 <img src="images/pda.jpg" alt="">

 <br> <br>
 <br>

 A PDA can be formally described as a 7-tuple (Q, ∑, S, δ, q0, I, F) −
 <br> <br>

Q is the finite number of states <br>

∑ is input alphabet <br>

S is stack symbols <br>

δ is the transition function: Q × (∑ ∪ {ε}) × S × Q × S* <br>

q0 is the initial state (q0 ∈ Q) <br>

I is the initial stack top symbol (I ∈ S) <br>

F is a set of accepting states (F ∈ Q) <br>
<br> <br>



The following diagram shows a transition in a PDA from a state q1 to state q2, labeled as a,b → c −
<br> <br>

<img src="images/pda2.jpg" alt="">


<br> <br> <br>
This means at state q1, if we encounter an input string ‘a’ and top symbol of the stack is ‘b’, then we pop ‘b’, push ‘c’ on top of the stack and move to state q2.
<br> <br>
Terminologies Related to PDA <br>
Instantaneous Description <br>
The instantaneous description (ID) of a PDA is represented by a triplet (q, w, s) where <br>
<br>

q is the state <br>

w is unconsumed input <br>

s is the stack contents <br>
<br> <br>

Turnstile Notation <br> <br>
The "turnstile" notation is used for connecting pairs of ID's that represent one or many moves of a PDA. The process of transition is denoted by the turnstile symbol "⊢".
 <br> <br>
Consider a PDA (Q, ∑, S, δ, q0, I, F). A transition can be mathematically represented by the following turnstile notation −
<br><br>
(p, aw, Tβ) ⊢ (q, w, αb)
<br> <br>
This implies that while taking a transition from state p to state q, the input symbol ‘a’ is consumed, and the top of the stack ‘T’ is replaced by a new string ‘α’.
<br> <br>
Note − If we want zero or more moves of a PDA, we have to use the symbol (⊢*) for it.
 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            There are two different ways to define PDA acceptability.
            <br> <br>

Final State Acceptability <br> <br>
In final state acceptability, a PDA accepts a string when, after reading the entire string, the PDA is in a final state. From the starting state, we can make moves that end up in a final state with any stack values. The stack values are irrelevant as long as we end up in a final state.
 <br> <br>
For a PDA (Q, ∑, S, δ, q0, I, F), the language accepted by the set of final states F is −
<br> <br>
L(PDA) = {w | (q0, w, I) ⊢* (q, ε, x), q ∈ F}
<br> <br>
for any input stack string x.
<br><br> <br>
Empty Stack Acceptability
<br><br>
Here a PDA accepts a string when, after reading the entire string, the PDA has emptied its stack.
<br> <br>
For a PDA (Q, ∑, S, δ, q0, I, F), the language accepted by the empty stack is −
<br> <br>
L(PDA) = {w | (q0, w, I) ⊢* (q, ε, ε), q ∈ Q}
<br> <br><br>
Example
<br> <br>
Construct a PDA that accepts L = {0n 1n | n ≥ 0}
<br> <br> <br>
Solution
<br>
PDA for L

<img src="images/pdae1.jpg" alt="">
<br> <br>
This language accepts L = {ε, 01, 0011, 000111, ............................. }
<br>
Here, in this example, the number of ‘a’ and ‘b’ have to be same.
<br>
Initially we put a special symbol ‘$’ into the empty stack.
<br>
Then at state q2, if we encounter input 0 and top is Null, we push 0 into stack. This may iterate. And if we encounter input 1 and top is 0, we pop this 0.
<br>
Then at state q3, if we encounter input 1 and top is 0, we pop this 0. This may also iterate. And if we encounter input 1 and top is 0, we pop the top element.
<br>
If the special symbol ‘$’ is encountered at top of the stack, it is popped out and it finally goes to the accepting state q4.
<br><br><br>
Example
<br><br>
Construct a PDA that accepts L = { wwR | w = (a+b)* }
<br> <br>
Solution
<br><br>
<img src="images/pdae2.jpg" alt="">
<br> 
PDA for L1
<br><br>
Initially we put a special symbol ‘$’ into the empty stack. At state q2, the w is being read. In state q3, each 0 or 1 is popped when it matches the input. If any other input is given, the PDA will go to a dead state. When we reach that special symbol ‘$’, we go to the accepting state q4.
<br><br>
            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/TEQcJybMMFU">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='flp'";
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
              $query = "select question from questions_flt where question_no like \"flp$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_flt where option_no like \"flp$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"flp".$i."\" value=\"flp".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"flp".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"flt.flp.5\">";
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
