<!DOCTYPE html>
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
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sixth Sem</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/Semantic/semantic.min.css">
        <script src="css/Semantic/semantic.min.js"></script>
        <link rel="stylesheet" href="css/home.css">
        <link rel="icon" href="images\dscelogo.png">
        <title>Virtual-Labs</title>
        <style>
#Card1,#Card2,#Card3,#Card4,#Card5,#Card6,#Card7,#Card8{
  background-color:black;
  color:white;
}
#CardGrid{
  background-color:#e6f3ff;
}
#toTop{
  background-color:blue;
}
.ees{
  color:white;

  
}
.hover:Card1{
  color:blue;
}

        </style>
</head>
<body>

<h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
  <a href="titles.php">Virtual Labs</a>
</h1>
<div id="toTop"><i class="chevron up icon"></i></div>
<div id="toTop"><i class="chevron up icon"></i></div>
  <div class="ui  light blue inverted secondary huge menu">
  <a class="header item" href="index.php" >
    Home
  </a>
 <a class="item">
    About Us
  </a> 
  <a class="item">
    Contact Us
  </a> 
   <a class="item">
   <?php echo $_SESSION["username"]; ?>
  </a>
  <a class="item" href="logoutprocess.php">
    Logout
  </a>
</div>
</div>
<div id="toTop"><i class="chevron up icon"></i></div>
<div class="ui container" id="CardGrid">
  <div class="ui stackable grid">
    <div class="four wide column">
      <div class="ui raised card" id="car1">
       <div class="content" id="Card1">
      <div class="header" >
            <a href="datastructures.php" class="ees">
            Engineering Economics 
            </a></div>
       </div>
         <div class="content">
           <span class="CardBody">
            Contains Concepts of Economics Engineering
           </span>
           <br><br>
           <a class="ui button" href="datastructures.php" id="Card1">Go</a>
         </div>
      </div> 
    </div>
      
    <div class="four wide column">
        <div class="ui raised card" id="car2">
       <div class="content" id="Card2">
       <div class="header" id="ees">
         <a href="Cloud.php" class="ees">
             Cloud <br> Computing
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains concepts Of Cloud Computing
           </span>
           <br><br>
           <a class="ui button" href="Cloud.php" id="Card1">Go</a>
         </div>
    </div>
  </div>

    

      <div class="four wide column">
        <div class="ui raised card" id="car4">
       <div class="content" id="Card4">
       <div class="header" id="ees">
         <a href="ld.php" class="ees" >
             System <br> Software
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
           Contains educational videos on System Software
                        </span>
           <br><br>
           <a class="ui button" href="SystemSoftware.php" id="Card1" >Go</a>
         </div>
  
      </div>
      </div>
      
    <div class="four wide column">
        <div class="ui  raised card" id="car5">
       <div class="content" id="Card5">
       <div class="header" id="ees">
         <a href="cn.php" class="ees" >
         Machine Learning
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
           Contains educational videos on Machine Learning
           </span>
           <br><br>
           <a class="ui button" href="ml.php" id="Card1">Go</a>
         </div>
  
      </div>
      </div>
      
      <div class="four wide column">
        <div class="ui raised card" id="car6">
       <div class="content" id="Card6">
       <div class="header" id="ees">
         <a href="dbms.php" class="ees" >
             Internet of Things
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains educational videos on iot
           </span>
           <br><br>
           <a class="ui button" href="dbms.php" id="Card1" >Go</a>
         </div>
  
      </div>
      </div>
  
      <div class="four wide column">
        <div class="ui raised card">
       <div class="content" id="Card7">
       <div class="header" id="ees">
         <a href="english.php" class="ees">
             Infomation security
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains educational videos on Information Security
           </span>
           <br><br>
           <a class="ui button" href="english.php" id="Card1">Go</a>
         </div>
  
      </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card">
       <div class="content" id="Card8">
       <div class="header" id="ees">
         <a href="placement.php" class="ees">
            Machine Learning Lab
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains editor to execute lab programs
           </span>
           <br><br>
           <a class="ui button" href="placement.php" id="Card1">Go</a>
         </div>
  
      </div>
      </div>

      <div class="four wide column">
        <div class="ui raised card">
       <div class="content" id="Card7">
       <div class="header" id="ees">
         <a href="english.php" class="ees" >
             System Software Lab
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains a compiler to execute  lab programs           </span>
           <br><br>
           <a class="ui button" href="ADA.php" id="Card1">Go</a>
         </div>
  
      </div>
      </div>
      
      <div class="four wide column">
        <div class="ui raised card">
       <div class="content" id="Card7">
       <div class="header" id="ees">
         <a href="english.php"  class="ees">
             Software Engineering
         </a>
      </div>
       </div>
         <div class="content">
           <span class="CardBody">
             Contains Educational videos which help students to understand the concepts better.
           </span>
           <br><br>
           <a class="ui button" href="SE.php" id="Card1" >Go</a>
         </div>
  
      </div>
      </div>


      

      
    
  </div>
    </div>
  </div>
  </div>
</body>
</html>