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
  <title>Context Free Grammar</title>
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
    Context Free Grammar
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

      Definition − A context-free grammar (CFG) consisting of a finite set of grammar rules is a quadruple (N, T, P, S) where
<br>
N is a set of non-terminal symbols.
<br>
T is a set of terminals where N ∩ T = NULL.
<br>
P is a set of rules, P: N → (N ∪ T)*, i.e., the left-hand side of the production rule P does have any right context or left context.
<br>
S is the start symbol.
<br> <br> <br>
Generation of Derivation Tree <br> <br>
A derivation tree or parse tree is an ordered rooted tree that graphically represents the semantic information a string derived from a context-free grammar.
<br> <br>
Representation Technique <br> <br>
Root vertex − Must be labeled by the start symbol.
<br>
Vertex − Labeled by a non-terminal symbol.
<br>
Leaves − Labeled by a terminal symbol or ε.
<br>
If S → x1x2 …… xn is a production rule in a CFG, then the parse tree / derivation tree will be as follows −
<br><br>
<img src="images/derivation_tree.jpg" alt="">
<br> <br> <br>
Ambiguity in Grammar
<br><br>
If a context free grammar G has more than one derivation tree for some string w ∈ L(G), it is called an ambiguous grammar. There exist multiple right-most or left-most derivations for some string generated from that grammar.
<br><br>
Problem
<br><br>
Check whether the grammar G with production rules − <br>

X → X+X | X*X |X| a

is ambiguous or not.
<br><br>
Solution
Let’s find out the derivation tree for the string "a+a*a". It has two leftmost derivations.

Derivation 1 − X → X+X → a +X → a+ X*X → a+a*X → a+a*a

Parse tree 1 −
<br>
<br>
<img src="images/parse_tree1.jpg" alt="">
<br><br>

Derivation 2 − X → X*X → X+X*X → a+ X*X → a+a*X → a+a*a
<br> <br>
Parse tree 2 −<br>
<br>
<img src="images/parse_tree2.jpg" alt="">
<br> <br>


Since there are two parse trees for a single string "a+a*a", the grammar G is ambiguous.

 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            A CFG is in Chomsky Normal Form if the Productions are in the following forms −
<br> <br>
A → a <br>
A → BC <br>
S → ε <br>
where A, B, and C are non-terminals and a is terminal.
<br> <br>

Algorithm to Convert into Chomsky Normal Form − <br> <br>
Step 1 − If the start symbol S occurs on some right side, create a new start symbol S’ and a new production S’→ S. <br>

Step 2 − Remove Null productions. (Using the Null production removal algorithm discussed earlier) <br>

Step 3 − Remove unit productions. (Using the Unit production removal algorithm discussed earlier) <br>

Step 4 − Replace each production A → B1…Bn where n > 2 with A → B1C where C → B2 …Bn. Repeat this step for all productions having two or more symbols in the right side. <br>

Step 5 − If the right side of any production is in the form A → aB where a is a terminal and A, B are non-terminal, then the production is replaced by A → XB and X → a. Repeat this step for every production which is in the form A → aB. <br>
<br> <br>
Problem <br>
Convert the following CFG into CNF <br>

S → ASA | aB, A → B | S, B → b | ε
<br> <br>

Solution: <br> <br>
(1) Since S appears in R.H.S, we add a new state S0 and S0→S is added to the production set and it becomes −
<br> <br>
S0→S, S→ ASA | aB, A → B | S, B → b | ∈
<br> <br>
(2) Now we will remove the null productions −
<br> <br>
B → ∈ and A → ∈
<br> 
After removing B → ε, the production set becomes −
<br> 
S0→S, S→ ASA | aB | a, A → B | S | ∈, B → b
<br> 
After removing A → ∈, the production set becomes −
<br> 
S0→S, S→ ASA | aB | a | AS | SA | S, A → B | S, B → b
<br> <br>
(3) Now we will remove the unit productions.
<br>
After removing S → S, the production set becomes −
<br>
S0→S, S→ ASA | aB | a | AS | SA, A → B | S, B → b
<br>
After removing S0→ S, the production set becomes −
<br>
S0→ ASA | aB | a | AS | SA, S→ ASA | aB | a | AS | SA
<br>
A → B | S, B → b
<br>
After removing A→ B, the production set becomes −
<br>
S0 → ASA | aB | a | AS | SA, S→ ASA | aB | a | AS | SA
<br>
A → S | b
<br>
B → b
<br>
After removing A→ S, the production set becomes −
<br>
S0 → ASA | aB | a | AS | SA, S→ ASA | aB | a | AS | SA
<br>
A → b |ASA | aB | a | AS | SA, B → b
<br>
<br>
(4) Now we will find out more than two variables in the R.H.S
<br>
Here, S0→ ASA, S → ASA, A→ ASA violates two Non-terminals in R.H.S.
<br>
Hence we will apply step 4 and step 5 to get the following final production set which is in CNF −
<br> <br>
S0→ AX | aB | a | AS | SA
<br>
S→ AX | aB | a | AS | SA
<br>
A → b |AX | aB | a | AS | SA
<br>
B → b
<br>
X → SA
<br><br>
(5) We have to change the productions S0→ aB, S→ aB, A→ aB
<br>
And the final production set becomes −
<br>
S0→ AX | YB | a | AS | SA
<br>
S→ AX | YB | a | AS | SA
<br>
A → b A → b |AX | YB | a | AS | SA
<br>
B → b
<br>
X → SA
<br>
Y → a

            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/UAha3jfS7iE">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='flc'";
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
              $query = "select question from questions_flt where question_no like \"flc$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_flt where option_no like \"flc$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"flc".$i."\" value=\"flc".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"flc".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"flt.flc.5\">";
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
