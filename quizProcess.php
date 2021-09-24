<?php 
session_start();
if($_POST)
{
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

  list($sub,$name,$a)=explode(".",$_POST["quizID"]);
  $num=$a;
  $total=0;
  while($a!=0)
  {
    $sql = "select answer_no from questions_$sub where question_no = \"$name$a\";";
    $result = $conn->query($sql);
    $row =$result->fetch_assoc();
    if($_POST["$name$a"]==$row["answer_no"])
    {
      $total += 1;
      echo "<script>$(\"#$name$a\").html(\"<code style='color:green;'>Correct Answer!</code><br>\");</script>";
    }
    else
    {
      $sql="select options_name from answer_$sub where option_no = '".$row["answer_no"]."';";
      $result=$conn->query($sql);
      $row=$result->fetch_assoc();
      echo "<script>$(\"#$name$a\").html(\"<code style='color:red;'>Incorrect answer.</code><br><code style='color:red;'>Correct answer: ".$row["options_name"]."</code><br>\");</script>";
    } 

    $a = $a - 1;
    $thing=$_POST['$name$a'];
  }
  $percent = round(($total*100/$num), 1);
  echo "<script>document.getElementById('result').innerHTML = \"Correct:  $total / $num<br>Score: $percent%\";</script>";
  $stmt = $conn->prepare("INSERT INTO user_scores (usn, quiz_score, topic_name) VALUES (?, ?, ?)");
  $stmt->bind_param("sds",$usn, $quiz_score, $topic_name);
  $usn=$_SESSION["usn"];
  $quiz_score=$percent;
  $topic_name=$name;
  
  $stmt->execute();
  $conn->close();
}
else
{
  header("Location: titles.php");
  exit;
}
?>