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
  <title>Storage System</title>
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
    Storage System
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

      Data storage on a cloud
      <br>
      <br>
      Storage and processing on the cloud are intimately tied to one another. <br>
Most cloud applications process very large amounts of data. Effective data replication and storage management strategies are critical to the computations performed on the cloud. <br>
Strategies to reduce the access time and to support real-time multimedia access are necessary to satisfy the requirements of content delivery. <br>
Sensors feed a continuous stream of data to cloud applications.  <br>
An ever increasing number of cloud-based services collect detailed data about their services and information about the users of these services. The service providers use the clouds to analyze the data. <br>

Humongous amounts of data - in 2013  <br>
The Internet video will generate over 18 EB/month. <br>
Global mobile data traffic will reach 2 EB/month. <br>
(1 EB = 1018 bytes, 1 PB = 1015 bytes, 1 TB = 1012 bytes, 1 GB = 1012 bytes) <br>
<br> <br> <br>
Big data
<br> <br>
New concept reflects the fact that many applications use data sets that cannot be stored and processed using local resources. <br>
Applications  in genomics, structural biology, high energy physics, astronomy, meteorology, and the study of the environment carry out complex analysis of data sets often of the order of TBs (terabytes). Examples: <br>
In 2010, the four main detectors at the Large Hadron Collider (LHC) produced 13 PB of data.  <br>
The Sloan Digital Sky Survey (SDSS) collects about 200 GB of data per night. <br>
Three-dimensional phenomena. <br>
Increased volume of data. <br>
Requires increased processing speed to process more data and produce more results. <br>
Involves a diversity of data sources and data types. <br>
<br> <br>
Storage and data models
<br> <br>
A storage model describes the layout of a data structure in a physical storage -  a local disk, a removable media, or storage accessible via the network. <br>
 A data model captures the most important logical aspects of a data structure in a database. <br>
Two abstract models of storage are used. <br>
 Cell storage assumes that the storage consists of cells of the same size and that each object fits exactly in one cell. This model reflects the physical organization of several storage media; the primary memory of a computer is organized as an array of memory cells and a secondary storage device, e.g., a disk, is organized in sectors or blocks read and written as a unit. <br>
Journal storage system that keeps track of the changes that will be made in a journal (usually a circular log in a dedicated area of the file system) before committing them to the main file system. In the event of a system crash or power failure, such file systems are quicker to bring back online and less likely to become corrupted. <br>
<br> <br>

Data Base Management System (DBMS)
<br> <br>
Database  a collection of logically-related records. <br>
Data Base Management System (DBMS)  the software that controls the access to the database. <br>
Query language  a dedicated programming language used to develop database applications. <br>
Most cloud application do not interact directly with the file systems, but through a DBMS. <br>
Database models  reflect the limitations of the hardware available at the time and the requirements of the most popular applications of each period. <br>
 navigational model of the 1960s. <br>
relational model of the 1970s.  <br>
object-oriented model of the 1980s. <br>
NoSQL model of the first decade of the 2000s. <br>

<br> <br>
Requirements of cloud applications
<br> <br>
Most cloud applications are data-intensive and test the limitations of the existing infrastructure. Requirements: <br>
Rapid application development and short-time to the market.  <br>
Low latency. <br>
Scalability. <br>
High availability. <br> 
Consistent view of the data. <br>
These requirements cannot be satisfied simultaneously by existing database models; e.g., relational databases are easy to use for application development but do not scale well. <br>
The NoSQL model is useful when the  structure of the data does not require a relational model and the amount of data is very large. <br>
Does not support SQL as a query language. <br>
May not guarantee the ACID (Atomicity, Consistency, Isolation, Durability) properties of traditional databases; it usually guarantees the eventual consistency for transactions limited to a single data item.  <br>
<br> <br>
Logical and physical organization of a file
<br> <br>
File a linear array of cells stored on a persistent storage device. Viewed by an application as a collection of logical records; the file is stored on a physical device as a set of physical records, or blocks, of size dictated by the physical media. <br>
 File pointer identifies a cell used as a starting point for a read or write operation. <br>
The logical organization of a file  reflects the data model, the view of the data from the perspective of the application. <br>
The physical organization of a file  reflects the storage model and describes the manner the file is stored on a given storage media. <br>
<br> <br>
 </div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
            File systems
            <br> <br>
            File system collection of directories; each directory provides information about a set of files. <br>
Traditional – Unix File System. <br>
Distributed file systems. <br> nsapi_request_headers
Network File Systems (NFS) <br> very popular, have been used for some time, but do not scale well and have reliability problems; an NFS server could be a single point of failure. <br> <br>
Storage Area Networks (SAN) <br> allow cloud servers to deal with non-disruptive changes in the storage configuration. The storage in a SAN can be pooled and then allocated based on the needs of the servers. A SAN-based implementation of a file system can be expensive, as each node must have a Fibre Channel adapter to connect to the network. <br> <br>
Parallel File Systems (PFS) <br>- scalable, capable of distributing files across a large number of nodes, with a global naming space. Several I/O nodes serve data to all computational nodes; it includes also a metadata server which contains information about the data stored in the I/O nodes. The interconnection network of a PFS could be a SAN. 
<br> <br> <br>
Unix File System (UFS)
<br> <br>
Parallel I/O implies concurrent execution of multiple input/output operations. Support for parallel I/O is essential for the performance of many applications. <br>
Concurrency control is a critical issue for parallel file systems. Several semantics for handling the shared access are possible. For example, when the clients share the file pointer successive reads issued by multiple clients advance the file pointer; another semantics is to allow each client to have its own file pointer.
GPFS.  <br>
Developed at IBM in the early 2000s as a successor of the TigerShark multimedia file system. <br>
Designed for optimal performance of large clusters; it can support a file system of up to 4 PB consisting of up to 4,096 disks of 1 TB each. <br>
Maximum file size is (263 -1) bytes.  <br>
A file consists of blocks of equal size, ranging from 16 KB to 1 MB, stripped across several disks. <br>
<br> <br>
GPFS reliability
<br> <br>
To recover from system failures, GPFS records all metadata updates in a write-ahead log file. <br>
Write-ahead  updates are written to persistent storage only after the log records have been written. <br>
The log files are maintained by each I/O node for each file system it mounts;  any I/O node can initiate recovery on behalf of a failed node. <br>
Data striping allows concurrent access and improves performance, but can have unpleasant side-effects. When a single disk fails, a large number of files are affected. <br>
The system uses RAID devices with the stripes equal to the block size and dual-attached RAID controllers. <br>
To further improve the fault tolerance of the system, GPFS data files as well as metadata are replicated on two different physical disks. <br>


<br> <br>
GPFS distributed locking
<br>
<br>
In GPFS, consistency and synchronization are ensured by a distributed locking mechanism.  A central lock manager grants lock tokens to local lock managers running in each I/O node. Lock tokens are also used by the cache management system. <br>
Lock granularity has important implications on the performance. GPFS uses a variety of techniques for different types of data. <br>
Byte-range tokens  used for read and write operations to data files as follows: the first node attempting to write to a file acquires a token covering the entire file; this node is allowed to carry out all reads and writes to the file without any need for permission until a second node attempts to write to the same file; then, the range of the token given to the first node is restricted. <br>
Data-shipping an alternative to byte-range locking, allows fine-grain data sharing. In this mode the file blocks are controlled by the I/O nodes in a round-robin manner. A node forwards a read or write operation to the node controlling the target block, the only one allowed to access the file. <br>
<br> <br>

Google File System (GFS)
<br>
GFS developed in the late 1990s; uses thousands of storage systems built from inexpensive commodity components to provide petabytes of storage to a  large user community with diverse needs. <br>
Design considerations. <br>
Scalability and reliability are critical features of the system;  they must be considered from the beginning, rather than at some stage of the design. <br>
The  vast majority of files range in size from a few GB to hundreds of TB. <br>
The most common operation is to append to an existing file; random write operations to a file are extremely infrequent. <br>
Sequential read operations are the norm. <br>
The users process the data in bulk and are less concerned with the response time. <br>
The consistency model should be relaxed to simplify the system implementation but without placing an additional burden on the application developers. <br>
<br> <br>
GFS – design decisions
<br> <br>
Segment a file in large chunks. <br>
Implement an atomic file append operation allowing  multiple applications operating concurrently to append to the same file. <br>
Build the cluster around a high-bandwidth rather than low-latency interconnection network. Separate the flow of control from the data flow. Pipeline data transfer over TCP connections. Exploit network topology by sending data to the closest node in the network. <br>
Eliminate caching at the client site. Caching increases the overhead for maintaining consistency among cashed copies. <br>
Ensure consistency by channeling critical file operations through a master, a component of the cluster which controls the entire system. <br>
Minimize the involvement of the master in file access operations to avoid hot-spot contention and to ensure scalability. <br>

Support efficient checkpointing and fast recovery mechanisms. <br>
Support an efficient garbage collection mechanism. <br>
<br> <br>

GFS chunks
<br>
<br>
GFS files are collections of fixed-size segments called chunks. <br>
The chunk size is 64 MB; this choice is motivated by the desire to optimize the performance for large files and to reduce the amount of metadata maintained by the system.  <br>
A large chunk size increases the likelihood that multiple operations will be directed to the same chunk thus, it reduces the number of requests to locate the chunk and, at the same time,  it allows the application to maintain a persistent network connection with the server where the chunk is located. <br>
A chunk consists of 64 KB blocks and each block has a 32 bit checksum. <br>
Chunks are stored on Linux files systems and are replicated on multiple sites; a user may change the number of the replicas, from the standard value of three, to any desired value. <br>
At the time of file creation each chunk is assigned a unique chunk handle.  <br>
<br> <br>

Apache Hadoop
<br> <br>
Apache Hadoop an open source, Java-based software, supports distributed applications handling extremely large volumes of data.  <br>
Hadoop  is used by many organization from industry, government, and research; major IT companies e.g., Apple, IBM, HP, Microsoft, Yahoo, and Amazon, media companies e.g., New York Times and Fox, social networks including, Twitter, Facebook, and Linkedln, and government agencies such as Federal Reserve. <br>
A Hadoop system has two components, a  MapReduce engine and a database. The database could be the Hadoop File System (HDFS), Amazon’s S3, or CloudStore, an implementation of GFS. <br>
 HDFS is a distributed file system written in Java; it is portable, but it cannot be directly mounted on an existing operating system. HDFS is not fully POSIX compliant, but it is highly performant. <br>
<br> <br> <br>
Transaction processing
<br> <br>
Online Transaction Processing (OLTP)  widely used by many cloud applications. <br>
Major requirements: <br> <br>
Short response time. <br>
Scalability.  <br>
Vertical scaling data and workload are distributed to systems that share resources, e.g., cores/processors, disks, and possibly RAM <br>
Horizontal scaling the systems do not share either primary or secondary storage. <br>
The search for alternate models to store the data on a cloud is motivated by the needs of OLTP applications: <br>
decrease the latency by caching frequently used data in memory. <br>
allow  multiple transactions to occur at the same time and decrease the response time by distributing the data on a large number of servers. <br>
<br> <br>
Sources of OLTP overhead <br> <br>
Four sources with equal contribution: <br>
Logging -  expensive because traditional databases require transaction durability thus, every write to the database can only be completed after the log has been updated. <br>
Locking -  to  guarantee atomicity, transactions lock every record and this requires access to a lock table. <br>
Latching –  many operations require multi-threading and the access to shared data structures, such as lock tables, demands short-term latches for coordination. A latch is a counter that triggers an event when it reaches zero; for example a master thread initiates a counter with the number of worker threads and waits to be notified when all of them have finished. <br>
Buffer management. <br>
The breakdown of the instruction count for these operations in existing DBMS is: 34.6% for buffer management, 14.2% for latching, 16.2 % for locking, 11.9% for logging, and 16.2 % for manual optimization. <br>
<br> <br>
NoSQL databases
<br> <br>

The name  NoSQL  is misleading. Stonebreaker notes that “blinding performance depends on removing overhead. Such overhead has nothing to do with SQL, it revolves around traditional implementations of ACID transactions, multi-threading, and disk management.” <br>
The soft-state approach allows data to be inconsistent and transfers the task of implementing only the subset of the ACID properties required by a specific application to the application developer.  <br>
NoSQL systems ensure that data will be eventually consistent at some future point in time, instead of enforcing consistency at the time when a transaction is committed. <br>
Attributes: <br>
Scale well. <br>
Do not exhibit a single point of failure. <br>
Have built-in support for consensus-based decisions. <br>
Support partitioning and replication as basic primitives. <br>
<br> <br>

Bigtable
 <br> <br>
 Distributed storage system developed by Google to  <br>
store massive amounts of data. <br>
scale up to thousands of storage servers. <br>
<br>
The system uses <br>
Google File System  to store user data and system information. <br>
Chubby distributed lock service  to guarantee  atomic  read and write operations; the directories and the files in the namespace of Chubby are used as locks. <br>
Simple and flexible data model a multidimensional array of cells. <br>
A row key  an arbitrary string of up to 64 KB and a row range is partitioned into tablets serving as units for load balancing. The timestamps used to index different versions of the data in a cell are 64-bit integers; their interpretation can be defined by the application, while the default is the time of an event in microseconds. <br>
A column key  consists of a string, a set of printable characters, and an arbitrary string as qualifier. <br>
<br> <br>
            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/0lw4KU5wHsk">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='cls'";
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
              $query = "select question from questions_cloud where question_no like \"cls$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo "<p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_cloud where option_no like \"cls$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"cls".$i."\" value=\"cls".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"cls".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"cloud.cls.5\">";
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
