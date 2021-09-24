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
  <script src="css/Semantic/semantic.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>Create Table</title>
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
  <a class="item" href="dbms.php">
    Database Management
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
    Create Table
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
      <a class="item" target="_blank" id="list">
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
      CREATE TABLE statement is used to create a new table in the database.
<br><br>
To create a table, you have to name that table and define its columns and datatype for each column.
      </div>
      
      <div id="pre" style="display: none;">
        <div class="ui bulleted list">
          <div class="item">
          table_name: It specifies the name of the table which you want to create. <br><br>
column1, column2, ... column n: It specifies the columns which you want to add in the table.<br> <br>Every column must have a datatype. Every column should either be defined as "NULL" or "NOT NULL". In the case, the value is left blank; it is treated as "NULL" as default.<br>
          <div class="GrayBlock">
          CREATE TABLE table_name  
           (   
                  column1 datatype [ NULL | NOT NULL ],  
                  column2 datatype [ NULL | NOT NULL ],  
                  ...  
                  column_n datatype [ NULL | NOT NULL ]  
           );  
            </div></div>
            <br>
            
            <br>
            <div class="item">
             For Example: Here we are creating a table named customers. This table doesn't have any primary key.<br>
             <div class="GrayBlock">
             CREATE TABLE customers  
               (   customer_id number(10) NOT NULL,  
                   customer_name varchar2(50) NOT NULL,  
                city varchar2(50)  
               );  
            </div>
            This table contains three columns<br><br>

customer_id: It is the first column created as a number datatype (maximum 10 digits in length) and cannot contain null values. <br><br>
customer_name: it is the second column created as a varchar2 datatype (50 maximum characters in length) and cannot contain null values.<br><br>
city: This is the third column created as a varchar2 datatype. It can contain null values.
            </div>
          </div>
          <br>
      </div>
      
      <div id="lis" style="display: none;">
      <iframe height="400px" width="100%" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/W3RGQcdrIRY" frameborder="0">
</iframe> 
          </div>

      
      
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
        $query = "select * from user_scores where usn='$usn' and topic_name='ct'";
        $res=$conn->query($query);
        
        if ($res->num_rows == 1)
        { 
          $row = $res->fetch_assoc();
          echo "Quiz already attemped!<br><br>Your score: ".$row["quiz_score"];
        }
        else{
        $a= [1,2,3,4,5,6,7,8];
        $opt = ['a','b','c','d'];
        $questionno = 1;
        shuffle($a);
        foreach($a as $i)
        {
          $query = "select question from questions_dbms where question_no like \"ct$i\"";
          $question_name = $conn->query($query);
          $row = $question_name->fetch_assoc();
          echo "<p>".$questionno.". ".$row['question']."<br>";
          shuffle($opt);
          foreach($opt as $j)
          {
            $option_name = $conn->query("select options_name from answer_dbms where option_no like \"ct$i$j\"");
            $row =$option_name->fetch_assoc();
            echo "<label><input type=\"radio\" name=\"ct".$i."\" value=\"ct".$i.$j."\">".$row['options_name']."</label><br>";
          }
          echo "<span id=\"ct".$i."\"></span></p><br>";
          $questionno += 1;
        }
        
        echo "<input type=\"hidden\" name=\"quizID\" value=\"dbms.ct.8\">";
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
</div>
  </div>
  
</body>
</html>