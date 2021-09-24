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
   Learning Problem
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
      WELL-POSED LEARNING PROBLEMS 
      <br> <br>
      Definition: A computer program is said to learn from experience E with respect
to some class of tasks T and performance measure P, if its performance at tasks in
T, as measured by P, improves with experience E.
  <br>
<br> <br> 
DESIGNING A LEARNING SYSTEM 
<br>
<br>
Choosing the Training Experience 

<br>
The first design choice we face is to choose the type of training experience from
which our system will learn. The type of training experience available can have a
significant impact on success or failure of the learner. One key attribute is whether
the training experience provides direct or indirect feedback regarding the choices
made by the performance system.
<br> <br> 

<br>
Choosing the Target Function 
<br> <br>
The first design choice we face is to choose the type of training experience from
which our system will learn. The type of training experience available can have a
significant impact on success or failure of the learner. One key attribute is whether
the training experience provides direct or indirect feedback regarding the choices
made by the performance system. For example, in learning to play checkers, the
system might learn from direct training examples consisting of individual checkers
board states and the correct move for each. Alternatively, it might have available
only indirect information consisting of the move sequences and final outcomes
of various games played. 
<br> <br> <br>

Choosing a Representation for the Target Function 
<br> <br>
Now that we have specified the ideal target function V, we must choose a representation that the learning program will use to describe the function c that it will
learn. As with earlier design choices, we again have many options. We could,
for example, allow the program to represent using a large table with a distinct
entry specifying the value for each distinct board state. Or we could allow it to
represent using a collection of rules that match against features of the board
state, or a quadratic polynomial function of predefined board features, or an artificial neural network. In general, this choice of representation involves a crucial
tradeoff.  <br> <br>
xl: the number of black pieces on the board <br>
x2: the number of red pieces on the board <br>
 xs: the number of black kings on the board <br>
 x4: the number of red kings on the board  <br>
 x5: the number of black pieces threatened by red (i.e., which can be captured
on red's next turn)
X6: the number of red pieces threatened by black <br>

<br> <br> <br>

Choosing a Function Approximation Algorithm 
<br> <br>
In order to learn the target function f we require a set of training examples, each
describing a specific board state b and the training value Vtrain(b) for b. In other
words, each training example is an ordered pair of the form (b, V',,,i,(b)). For
instance, the following training example describes a board state b in which black
has won the game (note x2 = 0 indicates that red has no remaining pieces) and
for which the target function value VZrain(b) is therefore +100. 
<br> <br> <br>
ESTIMATING TRAINING VALUES 
<br><br>
every board state along the game path was necessarily good or bad.
For example, even if the program loses the game, it may still be the case that
board states occurring early in the game should be rated very highly and that the
cause of the loss was a subsequent poor move.
Despite the ambiguity inherent in estimating training values for intermediate
board states, one simple approach has been found to be surprisingly successful.
This approach is to assign the training value of Krain(b) for any intermediate board
state b to be ?(~uccessor(b)), where ? is the learner's current approximation to
V and where Successor(b) denotes the next board state following b for which it
is again the program's turn to move (i.e., the board state following the program's
move and the opponent's response). This rule for estimating training values can
be summarized as <br>
~ulk for estimating training values.
V,,,i. (b) c c(~uccessor(b)) <br> <br> <br>
ADJUSTING THE WEIGHTS <br> <br>
All that remains is to specify the learning algorithm for choosing the weights wi to^
best fit the set of training examples {(b, Vtrain(b))}. As a first step we must define
what we mean by the bestfit to the training data. One common approach is to
define the best hypothesis, or set of weights, as that which minimizes the squarg
error E between the training values and the values predicted by the hypothesis V.
<br> <br> <br>
The Final Design 
<br> <br>
The final design of our checkers learning system can be naturally described by four
distinct program modules <br> <br>
The Performance System is the module that must solve the given performance task, in this case playing checkers, by using the learned target
function(s). It takes an instance of a new problem (new game) as input and
produces a trace of its solution (game history) as output. <br> <br>

 The Critic
 <br> takes as input the history or trace of the game and produces as
output a set of training examples of the target function. As shown in the
diagram, each training example in this case corresponds to some game state
in the trace, along with an estimate Vtrai, of the target function value for this
example. In our example, the Critic corresponds to the training rule given
by Equation (1.1).
<br> <br>
The Generalizer
<br> takes as input the training examples and produces an output
hypothesis that is its estimate of the target function. It generalizes from the
specific training examples, hypothesizing a general function that covers these
examples and other cases beyond the training examples. In our example, the
Generalizer corresponds to the LMS algorithm, and the output hypothesis is
the function f described by the learned weights wo, . . . , W6.
<br> <br>
The Experiment Generator
<br> takes as input the current hypothesis (currently
learned function) and outputs a new problem (i.e., initial board state) for the
Performance System to explore. Its role is to pick new practice problems that
will maximize the learning rate of the overall system. In our example, the
Experiment Generator follows a very simple strategy: It always proposes the
same initial game board to begin a new game.

<img src="images/partial1.jpg" alt="">
</div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
                 
    Together, the design choices we made for our checkers program produce
specific instantiations for the performance system, critic; generalizer, and experiment generator. Many machine learning systems can-be usefully characterized in
terms of these four generic modules
These design choices have constrained the learning task in a
number of ways. We have restricted the type of knowledge that can be acquired
to a single linear evaluation function. Furthermore, we have constrained this evaluation function to depend on only the six specific board features provided. If the
true target function V can indeed be represented by a linear combination of these
particular features, then our program has a good chance to learn it. If not, then the
best we can hope for is that it will learn a good approximation, since a program
can certainly never learn anything that it cannot at least represent. 
<br> <br> <br>

<img src="images/partial.jpg" alt="">
<br> <br> <br>

Issues in Machine Learning 
<br> <br>
What algorithms exist for learning general target functions from specific
training examples? In what settings will particular algorithms converge to the
desired function, given sufficient training data? Which algorithms perform
best for which types of problems and representations?
<br> <br>
How much training data is sufficient? What general bounds can be found
to relate the confidence in learned hypotheses to the amount of training
experience and the character of the learner's hypothesis space?
When and how can prior knowledge held by the learner guide the process
of generalizing from examples? Can prior knowledge be helpful even when
it is only approximately correct?
<br> <br>
What is the best strategy for choosing a useful next training experience, and
how does the choice of this strategy alter the complexity of the learning
problem?
<br> <br>
What is the best way to reduce the learning task to one or more function
approximation problems? Put another way, what specific functions should
the system attempt to learn? Can this process itself be automated? <br> <br>
How can the learner automatically alter its representation to improve its
ability to represent and learn the target function? 
<br> <br> <br>


            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/dQNpSa-bq4M">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='ml'";
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
              $query = "select question from questions_ML where question_no like \"ml$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo " <p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_ML where option_no like \"ml$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"ml".$i."\" value=\"ml".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"ml".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"ML.ml.5\">";
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
