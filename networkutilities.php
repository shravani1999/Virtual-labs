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
  <title>Network Utilities</title>
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
 <a href="cn.php" class="item">
    Computer Network
  </a> 
   <a class="item">
    About Us
  </a>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
    Network Utilities
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
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
      <div id="lis" style="padding: 15px; height: 400px;">  
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/-55X-koiBFg">
</iframe>      </div>
    
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
            $query = "select * from user_scores where usn='$usn' and topic_name='nu'";
            $res=$conn->query($query);
            
            if ($res->num_rows == 1)
            { 
              $row = $res->fetch_assoc();
              echo "Quiz already attemped!<br><br>Your score: ".$row["quiz_score"]."%";
            }
            else{
            $a= [1,2,3,4,5,6,7,8];
            $opt = ['a','b','c','d']; 
            $questionno = 1;
            shuffle($a);
            foreach($a as $i)
            {
              $query = "select question from questions_cn where question_no like \"nu$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_cn where option_no like \"nu$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"nu".$i."\" value=\"nu".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"nu".$i."\"></span></p><br>";
              $questionno += 1;
            }
        echo "<input type=\"hidden\" name=\"quizID\" value=\"cn.nu.8\">";
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