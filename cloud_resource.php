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
  <title>Resource management and scheduling</title>
</head>
<body>
<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
  <a href="titles.php">Virtual Labs</a>
</h1>
  <div id="toTop"><i class="chevron up icon"></i></div>
  <div>
  <div class="ui  light blue inverted secondary huge menu">
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
    Resource management and scheduling
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

      Resource management and scheduling
      <br>
      <br>
      Critical function  of any man-made system. 
      <br>
It affects the three basic criteria for the evaluation of a system: <br>
Functionality. <br>
Performance. <br>
Cost. <br>
Scheduling in a computing system  deciding how to allocate  resources of a system, such as CPU cycles, memory, secondary storage space, I/O and network bandwidth, between users and tasks. <br>
Policies and mechanisms for resource allocation. <br>
Policy  principles guiding decisions. <br>
Mechanisms  the means to implement policies. <br>
<br> <br>
Cloud resource management (CRM) policies
<br> <br>
Admission control prevent the system from accepting workload in violation of high-level system policies.
<br>
Capacity allocation allocate resources for individual activations of a service.
<br>
Load balancing distribute the workload evenly among the servers.
<br>
Energy optimization minimization of energy consumption.
<br>
Quality of service (QoS) guarantees  ability to satisfy timing or other conditions specified by a Service Level Agreement.
<br> <br> <br>

Mechanisms for the implementation of resource management policies
<br> <br>
Control theory uses the feedback to guarantee system stability and predict transient behavior.
<br>
Machine learning  does not need a performance model of the system.
<br>
Utility-based require a performance model and a mechanism to correlate user-level performance with cost.
<br>
Market-oriented/economic do not require a model of the system, e.g., combinatorial auctions for bundles of resources.
<br> <br> <br>

Control theory application to cloud resource management (CRM)
<br> <br>
The main components of a control system: 
<br>
The inputs the offered workload and the policies  for admission control, the capacity allocation, the load balancing, the energy optimization, and the QoS guarantees in the cloud.
<br>
The control system components sensors used to estimate relevant measures of performance and controllers which implement various policies.
<br>
The outputs the resource allocations to the individual applications.
<br> <br> <br>

 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            Feedback and Stability <br> <br>

            Control granularity the level of detail of the information used to control the system.  <br> 
Fine control very detailed information about the parameters controlling the system state is used. <br>
Coarse control the accuracy of these parameters is traded for the efficiency of implementation. <br>
The controllers use the feedback provided by sensors to stabilize the system.  Stability is related to the change of the output. <br>
Sources of instability in any control system: <br>
The delay in getting the system reaction after a control action. <br>
The granularity of the control, the fact that a small change enacted by the controllers leads to very large changes of the output. <br>
Oscillations, when the changes of the input are too large and the control is too weak,  such that the changes of the input propagate directly to the output. <br>

<br> <br>

Lessons from the two-level experiment
<br> <br>
The actions of the control system should be carried out in a rhythm that does not lead to instability. <br>
Adjustments should only be carried out after the performance of the system has stabilized. <br>
If upper and a lower thresholds are set, then instability occurs when they are too close to one another if the variations of the workload are large enough and the time required to adapt does not allow the system to stabilize.  <br>
The actions consist of allocation/deallocation of one or more virtual machines.  Sometimes allocation/dealocation of a single VM required by one of the threshold may cause crossing of the other, another source of instability. <br>
<br> <br>

Control theory application to CRM
<br> <br>
Regulate the key operating parameters of the system based on measurement of the system output. <br>
 The feedback control assumes a linear time-invariant system model, and a closed-loop controller. <br>
The system transfer function satisfies stability and sensitivity constraints. <br>
A threshold the value of a parameter related to the state of a system that triggers a change in the system behavior.  <br>
Thresholds  used to keep critical parameters of a system in a predefined range. <br>
Two types of policies: <br>
 threshold-based   upper and lower bounds on performance trigger adaptation through resource reallocation; such policies are simple and intuitive but require setting per-application thresholds. <br>
 sequential decision based on Markovian decision models. <br>
<br> <br>
Design decisions
<br> <br>
Is it beneficial to have two types of controllers:  <br>
application controllers  determine if additional resources are needed. <br> 
cloud controllers  arbitrate requests for resources and  allocates the physical resources. <br>

Choose fine versus coarse control. <br>

Dynamic thresholds based on time averages better versus static ones. <br>

Use a high and a low threshold versus a high threshold only. <br>
<br> <br>
Proportional thresholding
<br> <br>
Algorithm <br>
Compute the integral value of the  high and the low threshold as averages of the maximum and, respectively, the minimum of the processor utilization over the process history. <br>
Request additional VMs when the average value of the CPU utilization over the current time slice exceeds the high threshold. <br>
Release a VM when the average value of the CPU utilization over the current time slice falls below the low threshold. <br>
<br> <br>
Conclusions <br> <br>
Dynamic thresholds perform better than the static ones. <br>
Two thresholds are better than one. <br>





            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/r-JBU0q-WNg">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='clr'";
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
              $query = "select question from questions_cloud where question_no like \"clr$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_cloud where option_no like \"clr$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"clr".$i."\" value=\"clr".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"clr".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"cloud.clr.5\">";
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
