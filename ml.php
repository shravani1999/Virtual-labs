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
  <title>Machine Learning</title>
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
    Machine Learning
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="prereq">
        Objective
      </a>
      <a class="item" id="list">
        List of Tutorials
      </a>
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">
      
      <div id="int" align="justify">
     
    
1.	To learn how to asses the model accuracy. 
<br><br>

2.	To estimate the co efficients of simple linear regression.
<br> <br>

3.	To learn basic concepts of Classification. 
<br> <br>

4.	Understand the concepts of cluster analysis. 
<br> <br>
5.	To gain knowledge about the itoduction of nueral networks. 
<br> <br>


      </div>
      
      <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="ml_learning.php">Learning Problems</a>
          <a class="item" href="ml_regression.php">Linear Regression</a>
          <a class="item" href="cloud_network.php">Classification</a>
          <a class="item" href="cloud_storage.php">Cluster Analysis</a>
          <a class="item" href="cloud_resource.php">Introduction to Neural Networks</a>
        </div>
      </div>
      
      
      <div id="pre" style="display: none;">To make students understand the concepts of Machine Learning.<br></div>
      
      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What is Machine Learning?
          </div>
          <div class="content">
            <p class="transition hidden">Machine learning (ML) is the study of computer algorithms that improve automatically through experience. It is seen as a subset of artificial intelligence. Machine learning algorithms build a mathematical model based on sample data, known as "training data".</p>
          </div>
          
          <div class="title" >
            <i class="dropdown icon"></i>What are the types of ML algorithms? </div>
          <div class="content">
            <p class="transition hidden"> Supervised ML Algorithms. <br>
Unsupervised ML Algorithms. <br> 
Semi-supervised ML Algorithms. <br> 
Reinforcement ML Algorithms.
            </p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is a perceptron? </div>
          <div class="content">
            <p class="transition hidden">In machine learning, the perceptron is an algorithm for supervised learning of binary classifiers. A binary classifier is a function which can decide whether or not an input, represented by a vector of numbers, belongs to some specific class.
            </p> </div>

          <div class="title" >
            <i class="dropdown icon"></i>What are the applications of clustering? </div>
          <div class="content">
            <p class="transition hidden">Some common applications for clustering include market segmentation, social network analysis, search result grouping, medical imaging, image segmentation, anomaly detection</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i> What is the difference between Entropy and Information Gain?
</div>
          <div class="content">
            <p class="transition hidden">Entropy is an indicator of how messy your data is. It decreases as you reach closer to the leaf node. <br>
The Information Gain is based on the decrease in entropy after a dataset is split on an attribute. It keeps on increasing as you reach closer to the leaf node.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What is the difference between supervised and unsupervised machine learning?
</div>
          <div class="content">
            <p class="transition hidden">Supervised learning requires training labeled data. For example, in order to do classification (a supervised learning task), you’ll need to first label the data you’ll use to train the model to classify data into your labeled groups. Unsupervised learning, in contrast, does not require labeling data explicitly.</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
  </div>
  <script language='javascript'>
             $(document).ready(function(){
                $('.ui.accordion').accordion();
             });
</script>
</body>
</html>
