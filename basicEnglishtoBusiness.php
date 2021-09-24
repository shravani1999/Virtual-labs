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
  <title>Basic English to Business English</title>
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
    How to change Basic English into Business English
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
         English is the language of science, of aviation, computers, diplomacy, and tourism. Knowing English increases your chances of getting a good job in a multinational company within your home country or for finding work abroad. 
        <br>  <br> 
        It’s also the language of international communication, the media and the internet, so learning English is important for socialising and entertainment as well as work!
      </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            There are tons of ways to improve your English speaking skills for business matters. The key is to always keep practicing—and to find the perfect resources for your business purposes!
            <br><br> Get Some Basic Conversation Skills
Being good at English is about more than just talking. You have to be able to listen and comprehend what people are saying as well.
<br>
In the workplace, this means talking with colleagues, clients and vendors.
<br><br>
Here are some basic conversation skills that will help you improve your business English when speaking with people at work:
<br><br>
Listen before you respond. A lot of people start thinking about their responses before another person is finished speaking. This is distracting, particularly when you are a beginner. You might stop paying attention to the person who is speaking, because you are too busy thinking about what to say! So, do not start stressing about what you will say until you hear everything that the other person has to say. Doing this will allow you to focus on what is being said and, hopefully, this will help you learn from the vocabulary and grammar they use. Try to understand their message completely. By understanding completely, it will be easier to think of an answer.<br><br>
Go slow. Now that it is your turn to talk, do not feel in a rush to speak. Think through what you are going to say, and try to include any newly learned vocabulary words and phrases for good practice.<br><br>
Ask for help. Most likely, the person you are speaking with is aware that you are not a native English speaker. Politely ask for help when you need it. Ask a colleague to clarify things you do not understand. Clarify means to explain something so it is clearly understood. You can also ask the person to help correct you when you make a mistake.<br><br>
Practice at Home
If you want to improve your business English, you are going to have to spend time outside of your office hours doing so. This usually means practicing at home in your free time. There are many ways to do this:

            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">  
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/_2ZDNgtAsbw">
</iframe>      </div>
      
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
            $query = "select * from user_scores where usn='$usn' and topic_name='en'";
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
              $query = "select question from questions_eng where question_no like \"en$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_eng where option_no like \"en$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"en".$i."\" value=\"en".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"en".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"eng.en.5\">";
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
