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
  <title>Regular Expressions</title>
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
    Regular Expressions
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

      A Regular Expression can be recursively defined as follows − <br> <br>

ε is a Regular Expression indicates the language containing an empty string. (L (ε) = {ε}) <br>

φ is a Regular Expression denoting an empty language. (L (φ) = { }) <br>

x is a Regular Expression where L = {x} <br>

If X is a Regular Expression denoting the language L(X) and Y is a Regular Expression denoting the language L(Y), then

X + Y is a Regular Expression corresponding to the language L(X) ∪ L(Y) where L(X+Y) = L(X) ∪ L(Y). <br>

X . Y is a Regular Expression corresponding to the language L(X) . L(Y) where L(X.Y) = L(X) . L(Y) <br>

R* is a Regular Expression corresponding to the language L(R*)where L(R*) = (L(R))* <br>

If we apply any of the rules several times from 1 to 5, they are Regular Expressions. <br> <br> <br>


Some RE Examples
<br><br>
(0 + 10*) <br>	L = { 0, 1, 10, 100, 1000, 10000, … } <br> <br>
(0*10*)	 <br> L = {1, 01, 10, 010, 0010, …} <br><br>
(0 + ε)(1 + ε) <br>	L = {ε, 0, 1, 01} <br> <br>
(a+b)* <br>	Set of strings of a’s and b’s of any length including the null string. So L = { ε, a, b, aa , ab , bb , ba, aaa…….} <br> <br>
(a+b)*abb <br> 	Set of strings of a’s and b’s ending with the string abb. So L = {abb, aabb, babb, aaabb, ababb, …………..}

<br> <br>
(11)* <br>
Set consisting of even number of 1’s including empty string, So L= {ε, 11, 1111, 111111, ……….}
<br> <br>
(aa)*(bb)*b <br>	
Set of strings consisting of even number of a’s followed by odd number of b’s , so L = {b, aab, aabbb, aabbbbb, aaaab, aaaabbb, …………..}
<br> <br>
(aa + ab + ba + bb)*	
<br>
String of a’s and b’s of even length can be obtained by concatenating any combination of the strings aa, ab, ba and bb including null, so L = {aa, ab, ba, bb, aaab, aaba, …………..}




 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            ε -NFAs add a convenient feature but (in a sense) they bring
us nothing new: they do not extend the class of languages
that can be represented. Both NFAs and ε-NFAs recognize
exactly the same languages.<br>
<br>
<br>

Definition
<br> <br>
A ε-NFA is a quintuple A=(Q,Σ,δ,q0,F) 
where
<br> <br>
– Q is a set of states <br>
– Σ is the alphabet of input symbols <br>
– q0∈Q is the initial state <br>
– F ⊆ Q is the set of final states <br>
– δ: Q × Σε → P(Q) is the transition <br>
function <br>
• Note ε is never a member of Σ <br>
• Σε is defined to be (Σ ∪ ε) <br>

<br> <br>
Pumping Lemma Theorem
<br> <br>
Let L be a regular language. Then there exists a constant ‘c’ such that for every string w in L −
<br>
|w| ≥ c
<br>
We can break w into three strings, w = xyz, such that −
<br> <br>
|y| > 0 <br>
|xy| ≤ c <br>
For all k ≥ 0, the string xykz is also in L. <br>
Applications of Pumping Lemma <br>
Pumping Lemma is to be applied to show that certain languages are not regular. It should never be used to show a language is regular.
<br> <br>
If L is regular, it satisfies Pumping Lemma.
<br>
If L does not satisfy Pumping Lemma, it is non-regular.
<br>
Method to prove that a language L is not regular <br> <br>
At first, we have to assume that L is regular.
<br> <br>
So, the pumping lemma should hold for L.
<br>
Use the pumping lemma to obtain a contradiction −
<br>
Select w such that |w| ≥ c
<br>
Select y such that |y| ≥ 1
<br>
Select x such that |xy| ≤ c
<br>
Assign the remaining string to z.
<br>
Select k such that the resulting string is not in L.
<br>
Hence L is not regular.
<br>
<br> <br>
Problem
<br> <br> <br>
Prove that L = {aibi | i ≥ 0} is not regular.
<br> <br>
Solution −
<br> 
At first, we assume that L is regular and n is the number of states.
<br>
Let w = anbn. Thus |w| = 2n ≥ n.
<br>
By pumping lemma, let w = xyz, where |xy| ≤ n.
<br>
Let x = ap, y = aq, and z = arbn, where p + q + r = n, p ≠ 0, q ≠ 0, r ≠ 0. Thus |y| ≠ 0.
<br>
Let k = 2. Then xy2z = apa2qarbn.
<br>
Number of as = (p + 2q + r) = (p + q + r) + q = n + q
<br>
Hence, xy2z = an+q bn. Since q ≠ 0, xy2z is not of the form anbn.
<br>
Thus, xy2z is not in L. Hence L is not regular.



<br><br>

<br>


refer: <a href="https://www.tutorialspoint.com/automata_theory/constructing_fa_from_re.htm">this</a> for more information."



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
            $query = "select * from user_scores where usn='$usn' and topic_name='fl'";
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
              $query = "select question from questions_flt where question_no like \"fl$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_flt where option_no like \"fl$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"fl".$i."\" value=\"fl".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"fl".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"flt.fl.5\">";
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
