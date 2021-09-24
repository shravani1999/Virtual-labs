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
  <script src="js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>How to Speak English Fluently</title>
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
 <a href="english.php" class="item">
    English Speaking
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
     How to Speak English fluently
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
      
      <div id="int" align="justify">
        The problem with thinking in your native language and translating is that it results in sentences that are not correct in English, because the grammar and sentence structure is often different in English and your native language. <br> <br>
Also, it takes too much time to think and translate when you’re in a conversation – leading to pauses, hesitations, and the inability to speak fast and fluently. <br> <br>
Many students believe that thinking in English is too difficult, but I’m going to teach you how to succeed. You can learn this skill with practice, whether you’re beginner, intermediate, or advanced.
      </div>
      
      <div id="pre" style="display: none;">
       <div class="item">
         <div id="inti" align="justify">
            1. Start with believing in yourself
“I was afraid to speak. I was scared people would make fun of me. Will they judge me?
One day, I thought if so many people can, even I can. So I spoke in English and my confidence increased.” – Rin Career Ready Academy participant, 2015

<br><br>
2. Listen. Speak. Read. Write. Repeat.
Listen a little. Speak a little. Read a little. Write a little. Then, listen a little more. Speak a little more. Read a little more. Write a little more. Do this, till it becomes a habit.
like a native. Remember that only a small fraction of English speakers know more than 20% of all the grammar rules
<br><br>
 3. Keep your ears open.
English is everywhere. It’s in online videos, news channels, on radio. So listen and build your vocabulary.

<br> <br>

4. Find the answer in the question
Questions are like mirrors. Reverse the question, and find the answer.

<br><br>          
5. Make the mirror your best friend
Speak to it in English, and it will make you feel confident about the way you are speaking.

<br><br>
6. Read full sentences
You learnt Hindi, Tamil or Telugu in full sentences. Then why should learning English be any different. Read full sentences, speak in sentences.
            
<br> <br>       
 7. Keep calm and do not worry about grammar.
Remember, even those who speak English fluently make grammatical mistakes. But, what they do right, is communicate without worrying about them.
<br><br>

8. Find an English newspaper and learn a word a day
Keep your fear of new English words away.
<br><br>

9. Use the word before it leaves you.
Use the new word immediately to feel confident about it’s usage.

<br><br>
10. Practice. Practice. Practice. Till it makes you perfect.
There are no shortcuts in life. Definitely, no shortcuts to learn English.
<br><br>
         </div>  
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">  
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/O0qT4cK-wtk">
</iframe>       </div>
      
      <div id="faqs" style="display: none;">
      <form name="quiz" id="quiz" action="quizProcess.php" method="POST">
      <?php
            $servername = "localhost:3306";
            $db_username = "root";
            $password = "1234";
            $dbname = "virtuallabsdsce";

            // Create connection
            $conn = new mysqli($servername, $db_username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $usn=$_SESSION["usn"];
            $query = "select * from user_scores where usn='$usn' and topic_name='hts'";
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
              $query = "select question from questions_eng where question_no like \"hts$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_eng where option_no like \"hts$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"hts".$i."\" value=\"hts".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"hts".$i."\"></span></p><br>";
              $questionno += 1;
            }
        echo "<input type=\"hidden\" name=\"quizID\" value=\"eng.hts.5\">";
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
