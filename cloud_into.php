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
  <title>Introduction</title>
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
    Introduction to Cloud Infrastructure
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

      Cloud Computing uses Internet technologies to offer scalable and  elastic services. <br>
     The term “elastic computing” refers to the ability of dynamically acquiring computing resources and  supporting a variable workload.
     <br>
     

The resources used for these services can be metered and 
     the users can be charged only for the resources they used.
<br>
The maintenance and security are ensured by service providers.
<br>
The service providers can operate more efficiently due to 
     specialization and centralization.

<br>

 <br>

<br>
Economical Advantages
<br> <br>
Data Centre
<br>
Large Data Centres are more economical than medium sized
<br>
Data Centres consume very large amount of energy to Keep servers cool
<br>
Data Centres to be placed in sites with low energy cost 
<br>
The data storage strategy can increase reliability, as well as security, and can lower communication costs
<br>
<br>
<br>

The good about cloud computing
<br> <br>
Resources, such as CPU cycles, storage, network bandwidth, are shared.
<br>
When multiple applications share a system, their peak demands for resources are not synchronized thus, multiplexing leads to a higher resource utilization.
<br>
Resources can be aggregated to support data-intensive applications.
<br>
Data sharing facilitates collaborative activities. Many applications require multiple types of analysis of shared data sets and multiple decisions carried out by groups scattered around the globe.
<br>
Eliminates the initial investment costs for a private computing infrastructure and the maintenance and operation costs.
<br>
Cost reduction:  concentration of resources creates the opportunity to pay as you go for  computing.
<br>
Elasticity:  the ability to accommodate workloads with very large peak-to-average ratios.
<br>
User convenience:  virtualization allows users to operate in familiar environments rather than in idiosyncratic ones.
<br>
<br>
<br>




 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            Cloud delivery models
            <br> <br> 

Software as a Service (SaaS)
<br> <br>
Platform as a Service (PaaS)
<br> <br>
Infrastructure as a Service (IaaS)
<br><br>
<br>
NIST cloud reference model
<br>
<br>
<img src="images/nist.png" width="750px">

<br> <br> <br>

Software-as-a-Service (SaaS)
<br> <br>

Applications are supplied by the service provider.
<br> 
The user does not manage or control the underlying cloud infrastructure or individual application capabilities. 
<br>
Services offered include: <br>
Enterprise services such as: workflow management, group-ware and collaborative, supply chain, communications, digital signature, customer relationship management (CRM), desktop software, financial management, geo-spatial, and search. <br>
Web 2.0 applications such as: metadata management, social networking, blogs, wiki services, and portal services. <br>
Not suitable for real-time applications or for those where data is not allowed to be hosted externally. <br>
Examples: Gmail, Google search engine.

<br> <br> 
<br>
Platform-as-a-Service (PaaS)
<br> <br>
Allows a cloud user  to deploy consumer-created or acquired applications using programming languages and tools supported by the service provider.
<br> The user: <br>
Has control over the deployed applications and, possibly, application hosting environment configurations.
<br> Does not manage or control the underlying cloud infrastructure including network, servers, operating systems, or storage. 
Not particularly useful when: <br>
The application must be portable.
<br> Proprietary programming languages are used. <br>
The hardware and software must be customized to improve the performance of the application.

<br> <br> <br>

Infrastructure-as-a-Service (IaaS)
<br> <br>
The user is able to deploy and run arbitrary software, which can include operating systems and applications.
<br>
The user does not manage or control the underlying cloud infrastructure but has control over operating systems, storage, deployed applications, and possibly limited control of some networking components, e.g., host firewalls. 
<br>
Services offered by this delivery model include:  server hosting, Web servers, storage, computing hardware, operating systems, virtual instances, load balancing, Internet access, and bandwidth provisioning. 
<br> <br>
<br>

Ethical issues
<br> <br>
Paradigm shift with  implications on computing ethics:  <br>
The control is relinquished to third party services. <br>
The data is stored on multiple sites administered by several organizations. <br>
Multiple services interoperate across the network. <br>
Implications (The risks due to relinquishing) <br>
Unauthorized access. <br>
Data corruption. <br>
Infrastructure failure, and service unavailability.
<br><br> <br>
Privacy issues
<br>
<br>
Cloud service providers have already collected petabytes of sensitive personal information stored in data centers around the world. The acceptance of cloud computing therefore will be determined by privacy issues addressed by these companies and the countries where the data centers are located. 
<br>
Privacy is affected by cultural differences; some cultures favor privacy, others  emphasize community. This leads to an ambivalent attitude towards privacy in the Internet which is a global system.
<br>
Unwanted dependency on a cloud service provider which is called the Vendor lock-in is a serious concern
<br> <br> <br>

Cloud vulnerabilities
<br> <br>
Clouds are affected by malicious attacks and failures of the infrastructure, e.g., power failures. 
<br> 
Such events can affect the Internet domain name servers and prevent access to a cloud or can directly affect the clouds: <br>
in 2004 an attack at Akamai caused a domain name outage and a major blackout that affected Google, Yahoo, and other sites. <br>
in 2009, Google was the target of a denial of service attack which took down Google News and Gmail for several days. <br>
in 2012 lightning caused a prolonged down time at Amazon. <br>
<br> <br>
Challenges for cloud computing
<br> <br>
Availability of service; what happens when the service provider cannot deliver? 

Diversity of  services, data organization, user interfaces available at different service providers limit user mobility; once a customer is hooked to one provider it is hard to move to another. Standardization efforts at NIST!
<br>
Data confidentiality and auditability, a serious problem.
<br>
Data transfer bottleneck; many applications are data-intensive.
<br> 
Performance unpredictability, one of the consequences of resource sharing. <br>
How to use resource virtualization and performance isolation for QoS guarantees? <br>
How to support elasticity, the ability to scale up and down quickly? <br>

Resource management;  are self-organization and self-management  the solution? <br>

Security and confidentiality;  major concern. <br>

Addressing these  challenges provides good research opportunities!! <br> <br> <br>







            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/n24OBVGHufQ">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='cl'";
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
              $query = "select question from questions_cloud where question_no like \"cl$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_cloud where option_no like \"cl$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"cl".$i."\" value=\"cl".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"cl".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"cloud.cl.5\">";
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
