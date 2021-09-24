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
  <title>Cloud Computing</title>
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
    Cloud Computing
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

      Cloud Computing- Applications and Paradigms       <br>
      <br>  <br>
      Challenges for cloud application development <br> <br>

      Performance isolation - nearly impossible to reach in a real system, especially when the system is heavily loaded. <br>

Reliability - major concern; server failures expected when a large number of servers cooperate for the computations. <br>

Cloud infrastructure exhibits latency and bandwidth fluctuations which affect the application performance. <br>

Performance considerations limit the amount of data logging; the ability to identify the source of unexpected results and errors is helped by frequent logging.
<br> <br> <br>

Architectural styles for cloud applications
<br> <br>
Based on the client-server paradigm. <br>
Stateless servers - view a client request as an independent transaction and respond to it;  the client is not required to first establish a connection to the server. <br>
Often clients and servers communicate using Remote Procedure Calls (RPCs). <br>
Simple Object Access Protocol (SOAP) - application protocol for web applications; message format based on the XML. Uses TCP or UDP transport protocols. <br>
Representational State Transfer (REST) - software architecture for distributed hypermedia systems. Supports client communication with stateless servers, it is platform independent, language independent, supports data caching, and can be used in the presence of firewalls. <br>
<br><br>
Workflows
<br> <br>
Process description - structure describing the  tasks to be executed and the order of their execution. Resembles a flowchart.
<br>
Case - an instance of a process description.
<br>
State of a case at time t - defined in terms of tasks already completed at that time. 
<br>
Events - cause transitions between states.
<br>
The life cycle of a workflow -  creation, definition, verification, and enactment; similar to the life cycle of a traditional program (creation, compilation, and execution).
<br> <br> 
<img src="images/workflow.jpg" height="400px" alt="">

<br> <br> <br>
Safety and liveness 
<br> <br>
Desirable properties of workflows.
<br>
Safety  nothing “bad” ever happens.
 <br>
Liveness  something “good” will eventually happen.
<br> <br> 
<img src="images/safe.jpg" alt="">

<br> <br> <br>
Basic workflow patterns
<br> <br>
Workflow patterns - the temporal relationship among the tasks of a process <br>
Sequence - several tasks have to be scheduled one after the completion of the other. <br>
AND split - both tasks B and C are activated when task A terminates. <br>
Synchronization - task C can only start after tasks A and B terminate. <br>
XOR split - after completion of task A, either B or C can be activated. <br>
XOR merge - task C is enabled when either A or B terminate. <br>
OR split - after completion of task  A one could activate either B, C, or both. <br>
Multiple Merge - once task A terminates,  B and C execute concurrently; when the first of them, say B, terminates, then D is activated; then, when C terminates, D is activated again. <br>
Discriminator – wait for a number of incoming branches to complete before activating the subsequent activity; then wait for the remaining branches to finish without taking any action until all of them have terminated. Next, resets itself. <br>
<br> <br>
<img src="images/pattern.jpg" alt="">





 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            Virtualization <br> <br>

            Simulates the interface to a physical object by: <br>
Multiplexing:  creates multiple virtual objects from one instance of a physical object.  Example - a processor is multiplexed among a number of processes or threads. <br>
Aggregation:  creates one virtual object from multiple physical objects. Example - a number of physical disks are aggregated into a RAID disk. <br>
Emulation:  constructs a virtual object from a different type of a physical object. Example - a physical disk emulates a Random Access Memory (RAM). <br>
Multiplexing and emulation. Examples - virtual memory with paging multiplexes real memory and disk; a virtual address emulates a real address. <br>

<br> <br>

Layering
<br> <br>
Layering – a common approach to manage system complexity. <br>
Minimizes the interactions among the subsystems of a complex system. <br>
 Simplifies the description of the subsystems;  each subsystem is abstracted through its interfaces with the other subsystems. <br>
We are able to design, implement, and modify the individual subsystems independently. <br>
Layering in a computer system. <br> <br>
Hardware. <br>
Software. <br>
Operating system. <br>
Libraries. <br>
Applications. <br>
<br><br>

Interfaces
<br> <br>
Instruction Set Architecture (ISA) – at the boundary between hardware and software. <br>

Application Binary Interface (ABI) – allows the ensemble consisting of the application and the library modules to access the hardware; the ABI does not include privileged system instructions, instead it invokes system calls.
<br>
Application Program Interface (API) - defines the set of instructions the hardware was designed to execute and gives the application access to the ISA; it includes HLL library calls which often invoke system calls.
<br> <br>
<img src="images/api.jpg" height="300px" alt="">

<br> <br> <br>

Code portability
<br> <br>
Binaries created by a compiler for a specific ISA and a specific operating systems are not portable. 
<br>
It is possible, though, to compile a HLL program for a virtual machine (VM) environment where portable code is produced and distributed and then converted by binary translators to the ISA of the host system. <br>

     A dynamic binary translation converts blocks of guest instructions from the portable code to the host instruction and leads to a significant performance improvement, as such blocks are cached and reused. <br> <br> 
     <img src="images/hll.jpg" height="400px" alt="">

<br> <br> <br>
Virtual machine monitor  (VMM / hypervisor)
<br> <br>
Partitions the resources of computer system into one or more virtual machines (VMs). Allows several operating systems to run concurrently on a single hardware platform. 
<br> <br>
A  VMM allows <br>
Multiple services to share the same platform. <br>
Live migration - the movement of a server from one platform to another. <br>
System modification while maintaining backward compatibility with the original system. <br>
Enforces isolation among the systems, thus security. <br>
<br> <br>

VMM virtualizes the CPU and the memory <br> <br>
A  VMM <br>
Traps the privileged instructions executed by a guest OS and enforces the correctness and safety of the operation. <br>
Traps interrupts and dispatches them to the individual guest operating systems. <br>
Controls the virtual memory management. <br>
Maintains a shadow page table for each guest OS and replicates any modification made by the guest OS in its own shadow page table. This shadow page table points to the actual page frame and it is used by the Memory Management Unit (MMU) for dynamic address translation. <br>
Monitors the system performance and takes corrective actions to avoid performance degradation.  For example, the VMM may swap out a Virtual Machine  to avoid thrashing. <br>
<br> <br>

Virtual machines (VMs)
<br> <br>
VM - isolated environment that appears to be a whole computer, but actually only has access to a portion of the computer resources. <br>
Process VM -  a virtual platform created for an individual process and destroyed once the process terminates. <br>
System VM - supports an operating system together with many user processes. <br>
Traditional VM - supports multiple virtual machines and runs directly on the hardware. <br>
Hybrid VM - shares the hardware with a host operating system and supports multiple virtual machines. <br> \
Hosted VM - runs under a host operating system. <br> <br> <br>

Computer architecture and virtualization
<br> <br>
Conditions for efficient virtualization: <br>
A program running under the VMM should exhibit a behavior essentially identical to that demonstrated when running on an equivalent machine directly. <br>
The VMM should be in complete control of the virtualized resources. <br>
A statistically significant fraction of machine instructions must be executed without the intervention of the VMM. <br> <br>
Two classes of machine instructions: <br>
 Sensitive - require special precautions at execution time: <br>
Control sensitive - instructions that attempt to change either the memory allocation or the privileged mode. <br>
Mode sensitive - instructions whose behavior is different in the privileged mode. <br>
Innocuous - not sensitive. <br> <br> <br>

Full virtualization and paravirtualization
<br> <br>
Full virtualization – a guest OS can run unchanged under the VMM as if it was running directly on the hardware platform.
Requires a virtualizable architecture. 
Examples: Vmware.
<br> <br>
Paravirtualization - a guest operating system is modified to use only instructions that can be virtualized. Reasons for paravirtualization:
Some aspects of the hardware cannot be virtualized.
 Improved performance.
 Present a simpler interface.
Examples: Xen, Denaly
<br> <br>
<img src="images/para.jpg" height="400px" alt="">

          </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/gifeThkqHjg">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='cld'";
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
              $query = "select question from questions_cloud where question_no like \"cld$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_cloud where option_no like \"cld$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"cld".$i."\" value=\"cld".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"cld".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"cloud.cld.5\">";
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
