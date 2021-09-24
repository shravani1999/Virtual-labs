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
  <title>Network Support</title>
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
    Network Support
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

      Class-Based Queuing (CBQ)
      <br>
      <br>
      The objectives of CBQ are to support: <br>
      <br>
 Flexible link sharing for applications which require bandwidth guarantees such as VoIP, video-streaming, and audio-streaming. <br>
Some balance between short-lived network flows, such as web searches, and long-lived ones, such as video-streaming or file transfers. <br>
CBQ aggregates the connections and constructs a  tree-like hierarchy of classes with different priorities and throughput allocations.  <br> CBQ uses several functional units: <br>
a classifier which uses the information in the packet header to assign arriving packets to classes. <br>
an estimator of the short-term bandwidth for the class. <br>
a selector/scheduler which identifies the highest priority class to send next and, if multiple classes have the same priority, to schedule them on a round-robin base. <br>
 a delayer to compute the next time when a class that has exceeded its link allocation is allowed to send. <br>
<br> <br> 
Class-Based Queuing (CBQ)
<br> <br>
A class is
<br>
 overlimit if over a certain recent period it has used more than its bandwidth allocation (in bytes per second). <br>
 underlimit if it has used less. <br>
atlimit if it has used exactly its allocation. <br>
 <br><br>
A leaf class is <br>
 satisfied if it is underlimit and has a persistent backlog.  <br>
unsatisfied otherwise. <br>

 A non-leaf class is unsatisfied if it is underlimit and has some descendent class with a persistent backlog.
<br><br>




















<br>
<br>




 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            Hierarchical Token Buckets (HTB)
<br> <br>
Hierarchical Token Buckets (HTB) is a link sharing algorithm inspired by CBQ.
<br>

The Linux kernel implements HTB.
<br>
 Each class has <br>
An assured rate (AR). <br>
A ceil rate (CR). <br>


HTB supports borrowing
<br>
 If a class C needs a rate above its AR  it tries to borrow from its parent;  then  the parent examines its children and, if there are classes running at a rate lower that their AR, the parent can borrow from them and reallocate it to class C.
<br> <br>
<br>
Cloud interconnection networks
<br> <br>
While processor and memory technology have followed Moore's law, the interconnection networks have evolved at a slower pace and have become a major factor in determining the overall performance and cost of the system. <br>
The networking infrastructure is organized  hierarchically:  servers are packed into racks and interconnected by a top of the rack router; the rack routers are connected to cluster routers which in turn are interconnected by a local communication fabric. <br>
The networking infrastructure of a cloud must satisfy several requirements: <br> <br>
Scalability. <br>
Low cost. <br>
Low-latency. <br>
High bandwidth. <br> <br> <br>

Provide location transparent communication between servers. <br> 
<br>
Every server should be able to communicate with every other server with similar speed and latency. <br>
Applications need not be location aware. <br>
It also reduces the complexity of the system management. <br>
In a hierarchical organization true location transparency is not feasible and cost considerations ultimately decide the actual organization and performance of the communication fabric. <br>
<br> <br>
Interconnection networks - InfiniBand
<br> <br>
Interconnection network used by supercomputers and computer clouds. <br>
Has a switched fabric topology designed to be scalable. <br>
Supports several signaling rates. <br>
The energy consumption depends on the throughput. <br>
Links can be bonded together for additional throughput. <br> <br>
The data rates. <br>
single data rate (SDR) - 2.5 Gbps in each direction per connection. <br>
double data rate (DDR) - 5 Gbps. <br>
quad data rate (QDR) – 10 Gbps. <br>
fourteen data rate (FDR) – 14.0625 Gbps. <br> 
enhanced data rated (EDR) – 25.78125 Gbps. <br> <br>
Advantages. <br>
high throughput, low latency.  <br>
supports quality of service guarantees and failover - the capability to switch to a redundant or standby system. <br>
<br>

<br>

Routers and switches
<br>
<br>

The cost of routers and the number of cables interconnecting the routers are major components of the cost of interconnection network. <br>
Better performance and lower costs can only be achieved with innovative router architecture  wire density has scaled up at a slower rate than processor speed and wire delay has remained constant. <br>
Router – switch interconnecting several networks. <br>
low-radix routers – have a small number of ports; divide the bandwidth into a smaller number of wide ports. <br>
high-radix routers - have a large number of ports; divide the bandwidth into larger number of narrow ports. <br>
The number of intermediate routers in high-radix networks is reduced; lower latency and reduced power consumption. <br>
The pin bandwidth of the chips used for switching has increased by approximately an order of magnitude every 5 years during the past two decades.
<br> <br> <br>
Network characterization
<br> <br>
The diameter of a network is the average distance between all pairs of nodes.
<br>  
If a network is fully-connected its diameter is equal one.
<br>
When a network is partitioned into two networks of the same size, the bisection bandwidth measures the communication bandwidth between the two.
<br>
The cost. <br>
The power consumption.
<br> <br> <br>
Clos networks
<br> <br>
Butterfly network  the name comes from the pattern of inverted triangles created by the interconnections, which look like butterfly wings.  <br>
Transfers the data using the most efficient route, but it is blocking, it cannot handle a conflict between two packets attempting to reach the same port at the same time. <br>
Clos  Multi­stage non­blocking network with an odd number of stages. <br>
Consists of two butterfly networks. The last stage of the input is fused with the first stage of the output. <br>
All packets overshoot their destination and then hop back to it; most of the time, the overshoot is not necessary and increases the latency, a packet takes twice as many hops as it really needs. <br>
Folded Clos topology  the input and the output networks share switch modules.  Such networks are called fat tree. <br>
Myrinet, InfiniBand, and Quadrics implement a fat-tree topology.
<br> <br><br>
Storage area networks
<br> <br>
Specialized, high-speed network for data block transfers between computer systems and storage elements. <br>
Consists of a communication infrastructure and a management layer. <br>
The Fiber Channel (FC) is the dominant architecture of SANs. <br>
FC it is a layered protocol. <br>
<br> <br>
FC protocol layers
<br> <br>
Three lower-layer protocols: FC-0, the physical interface. <br>
<br> FC-1, the transmission protocol responsible for encoding/decoding. <br>
FC-2, the signaling protocol responsible for framing and flow control. <br>
FC-0 uses laser diodes as the optical source and manages the point-to-point fiber connections. <br>
FC-1 controls the serial transmission and integrates data with clock information. <br>
FC-2 handles the topologies, the communication models, the classes of service, sequence and exchange identifiers, and segmentation and reassembly. <br>
<br> <br>

Two upper-layer protocols:  <br> <br>
FC-3  is common services layer. <br>
FC-4 is the  protocol mapping layer. <br>
<br> <br>
FC classes of service
<br> <br>
Class 1  rarely used blocking connection-oriented service. <br>
Class 2  acknowledgments ensure that the frames are received; allows the fabric to multiplex several messages on a frame-by-frame basis; does not guarantee in-order delivery. <br>
Class 3   datagram connection; no acknowledgments. <br>
Class 4  connection-oriented service for multimedia applications; virtual circuits (VCs) established between ports, in-order delivery, acknowledgment of delivered frames; the fabric is responsible for multiplexing frames of different VCs. Guaranteed QoS, bandwidth and latency. <br>
Class 5  isochronous service for applications requiring immediate delivery, without buffering. <br>
Class 6  supports dedicated connections for a reliable multicast. <br>
Class 7  similar to Class 2, used for the control and management of the fabric;  connectionless service with notification of non-delivery. <br>
<br> <br>
<br>

FC networks
<br> <br>
An FC device has a unique id called the WWN (World Wide Name), a 64 bit address, the equivalent of the MAC address. <br>
Each port in the switched fabric has its own unique 24-bit address consisting of:  the domain (bits 23 - 16), the area (bits 15 - 08), and the port physical address (bits 07-00). <br>
A switch  assigns dynamically and maintains the port addresses. <br>
 When a device with a WWN logs into the switch on a port, the switch assigns the port address to that device and maintains the correlation between that port address and the WWN address of the device using a Name Server. <br>
The Name Server is a component of the fabric operating system, running on the switch. <br>
<br> <br>
Content delivery networks (CDNs) <br> <br>
CDNs are designed to support scalability, to increase reliability and performance, and to provide better security.  In 2013, Internet video is expected to generate over 18 exabytes of data per month. <br>
A CDN receives the content from an origin server, then replicates it to its edge cache servers;  the content is delivered to an end-user from the “closest” edge server. <br>
A CDN can deliver static content and/or live or on-demand streaming media. <br>
Static content -  media that can be maintained using traditional caching technologies as changes are infrequent. Examples:  HTML pages, images, documents, software patches, audio and video files.  <br>
Live media - live events when the content is delivered in real time from the encoder to the media server. <br>
Protocols used by CDNs: Network Element Control Protocol (NECP),  Web Cache Coordination Protocol (WCCP), SOCKS,  Cache Array Routing Protocol (CARP), Internet Cache Protocol (ICP), Hypertext Caching Protocol (HTCP), and Cache Digest. <br>

<br> <br>
CDN design and performance
<br> <br>
Design and policy decisions for a CDNs. <br>
The placement of the edge servers. <br>
The content selection and delivery. <br>
The content management. <br>
The request routing policies. <br> <br>

Critical metrics for CDN performance <br> <br>
Cache hit ratio - the ratio of the number of cached objects versus total number of objects requested. <br>
Reserved bandwidth for the origin server. <br>
Latency - based on the perceived response time by the end users. <br>
Edge server utilization. <br>
Reliability - based on packet-loss measurements. <br>
<br> <br>
Scale-free networks
<br> <br>
The degree distribution of scale-free networks follows a power law. <br>

Many physical and social systems are interconnected by a scale-free network. Empirical data available for power grids, the web, the citation of scientific papers, or social networks  confirm this trend.
<br> <br>
The majority of the vertices of a scale-free network: <br>
Are directly connected with the vertices with the highest degree. <br>
Have a low degree and only a few vertices are connected to a large number of edges. <br>
<br> <br>
Epidemic algorithms
<br> <br>
Epidemic algorithm mimic the transmission of infectious diseases and are often used in distributed systems to accomplish tasks such as: <br>
disseminate information, e.g., topology information. <br>
compute aggregates, e.g., arrange the nodes in a gossip overlay into a list sorted by some attributes in logarithmic time. <br>
manage data replication in a distributed system. <br>
Game of life is a popular epidemic algorithm invented by John Conway. <br> <br>
Several classes of epidemic algorithms exist. The concepts used to classify these algorithms <br>
Susceptible (S), 
Infective (I),
Recovered (R) 
     refer to the state of the  population subject to infectious disease and,
     by extension, to the recipient of information in a distributed system. <br> <br> <br>
     Types of epidemic algorithms
     <br> <br>
     Susceptible-Infective (SI) algorithms  apply when the entire population is susceptible to be infected; once an individual becomes infected it remains in that state until the entire population is infected.
<br> 
Susceptible-Infectious-Recover (SIR)  based on the model developed by Kermack and McKendrik which assumes  <br>
the following transition from one state to another  S  I  R; <br>
that the size of the population is fixed (S(t) + I(t) + R(t) =N. <br>

Susceptible-Infective-Susceptible (SIS) algorithms  are particular cases of SIR models when individuals recover from the disease without immunity. If  p=R(r)/I(r), then the number of newly infected grows until (1-p)/2 are infected and then decreases exponentially    to (1-p).
<br> <br>


            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/pvmIg6Q2juE">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='cln'";
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
              $query = "select question from questions_cloud where question_no like \"cln$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_cloud where option_no like \"cln$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"cln".$i."\" value=\"cln".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"cln".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"cloud.cln.5\">";
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
