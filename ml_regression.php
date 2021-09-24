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
  <title></title>
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
Regression
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
      Introduction
      <br> <br>
      Simple Linear Regression
      <br>
      Simple linear regression lives up to its name: it is a very straightforward simple linear
approach for predicting a quantitative response Y on the basis of a sin- regression
gle predictor variable X. It assumes that there is approximately a linear
relationship between X and Y . Mathematically, we can write this linear
relationship as <br> <br>
Y ≈ β0 + β1X.
      <br>
<br> <br> 
Estimating the Coefficients
<br> 

Let ˆyi = βˆ0 + βˆ1xi be the prediction for Y based on the ith value of X.
Then ei = yi −yˆi represents the ith residual—this is the difference between residual
the ith observed response value and the ith response value that is predicted
by our linear model. We define the residual sum of squares (RSS) as residual sum
of squares
RSS = e2
1 + e2
2 + ··· + e2
n,
or equivalently as
RSS = (y1 −βˆ0−βˆ1x1)^2 + (y2 −βˆ0−βˆ1x2)^2 +...+ (yn−βˆ0−βˆ1xn)^2


<br> <br> <br>

Assessing the Accuracy of the Model
<br> <br>

Residual Standard Error
<br>

One way to assess strength of fit is to consider how far off the model is for a typical case. That is, for some observations, the fitted value will be very close to the actual value, while for others it will not. The magnitude of a typical residual can give us a sense of generally how close our estimates are.

However, recall that some of the residuals are positive, while others are negative. In fact, it is guaranteed by the least squares fitting procedure that the mean of the residuals is zero. Thus, it makes more sense to compute the square root of the mean squared residual, or root mean squared error (RMSE). R calls this quantity the residual standard error.

To make this estimate unbiased, you have to divide the sum of the squared residuals by the degrees of freedom in the model. Thus,
<br> <br>
RMSE=√∑ie2i/√d.f  =  √SSE/√d.f
<br> <br>
You can recover the residuals from mod with residuals(), and the degrees of freedom with df.residual().

<br> <br>
R-squared Statistics
<br> <br>
R-squared (R2) is a statistical measure that represents the proportion of the variance for a dependent variable that's explained by an independent variable or variables in a regression model. Whereas correlation explains the strength of the relationship between an independent and dependent variable, R-squared explains to what extent the variance of one variable explains the variance of the second variable. So, if the R2 of a model is 0.50, then approximately half of the observed variation can be explained by the model's inputs.
<br> <br> <br>

Multiple Linear Regression
<br> <br>
Multiple linear regression (MLR), also known simply as multiple regression, is a statistical technique that uses several explanatory variables to predict the outcome of a response variable. The goal of multiple linear regression (MLR) is to model the linear relationship between the explanatory (independent) variables and response (dependent) variable.


In essence, multiple regression is the extension of ordinary least-squares (OLS) regression that involves more than one explanatory variable.
<br>
<br>

Simple linear regression is a function that allows an analyst or statistician to make predictions about one variable based on the information that is known about another variable. Linear regression can only be used when one has two continuous variables—an independent variable and a dependent variable. The independent variable is the parameter that is used to calculate the dependent variable or outcome. A multiple regression model extends to several explanatory variables.
The multiple regression model is based on the following assumptions:
There is a linear relationship between the dependent variables and the independent variables.
The independent variables are not too highly correlated with each other.
yi observations are selected independently and randomly from the population.
Residuals should be normally distributed with a mean of 0 and variance σ.










</div>
      
      <div id="pre" style="display: none;">
        
          <div class="item">       
            <div id="inti" align="justify">
                 
<pre>Other Considerations in the Regression Model
             
Qualitative Predictors 

In our discussion so far, we have assumed that all variables in our linear
regression model are quantitative. But in practice, this is not necessarily
the case; often some predictors are qualitative. 

Predictors with Only Two Levels

Suppose that we wish to investigate differences in credit card balance between 
males and females, ignoring the other variables for the moment. If a
qualitative predictor (also known as a factor) only has two levels, or 
possi- factorable values, then incorporating it into a regression model 
is very simple.
We level simply create an indicator or dummy variable that takes
on two possible dummy numerical values.
For example, based on the gender variable, we can create variable
a new variable that takes the form
xi =
1 if ith person is female
0 if ith person is male, (3.26)
and use this variable as a predictor 
in the regression equation. This resultsin the model

yi = β0 + β1xi + i 
 = β0 + β1 + i if ith person is female
= β0 + i if ith person is male.      
</pre>

<pre>
Potential Problems
When we fit a linear regression model to a particular data set,
many problems may occur. Most common among these are the following:
1. Non-linearity of the response-predictor relationships.
2. Correlation of error terms.
3. Non-constant variance of error terms.
4. Outliers.
5. High-leverage points.
6. Collinearity.
</pre>


            </div>
        </div>
      </div>
      
      <div id="lis" style="display: none; padding: 15px; height: 400px;">
      
<br>
      <iframe style="width:100%; height:100%;" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/dQNpSa-bq4M">
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
            $query = "select * from user_scores where usn='$usn' and topic_name='ml'";
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
              $query = "select question from questions_ML where question_no like \"ml$i\"";
              $question_name = $conn->query($query);
              $row = $question_name->fetch_assoc();
              echo " <p>".$questionno.". ".$row['question']."<br>";
              shuffle($opt);
              foreach($opt as $j)
              {
                $option_name = $conn->query("select options_name from answer_ML where option_no like \"ml$i$j\"");
                $row =$option_name->fetch_assoc();
                echo "<label><input type=\"radio\" name=\"ml".$i."\" value=\"ml".$i.$j."\">".$row['options_name']."</label><br>";
              }
              echo "<span id=\"ml".$i."\"></span></p><br>";
              $questionno += 1;
            }
            
        echo "<input type=\"hidden\" name=\"quizID\" value=\"ML.ml.5\">";
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
