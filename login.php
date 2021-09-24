<?php
if(session_status()==PHP_SESSION_NONE)
{
  session_start();
  if(isset($_SESSION['username']))
  {
    header("Location: titles.php");
    exit;
  }
  if(isset($_SESSION["login_error"]))
  {
    echo "<script>alert(\"Incorrect credentials!\")</script>";
    unset($_SESSION["login_error"]);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Virtual Lab</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="css/Semantic/semantic.min.css">
        <script src="css/Semantic/semantic.min.js"></script>
        <link rel="stylesheet" href="css/home.css">
        <link rel="icon" href="images\dscelogo.png">
        <title>Login</title>
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
             <!-- <a class="item">
              Item
            </a>
            <a class="item">
              Item
            </a> -->
          </div>
    <div class="ui container" style="padding-bottom: 20px;">
            <h2 class="ui header" style="font-size:35px; margin-left:10px;">
                    Login
                  </h2>
        <div style="padding-right: 100px; padding-left: 100px;">
        <form class="ui form" action="process.php" method="POST">
            <div class="field">
              <label>USN</label>
              <input type="text" name="usn" placeholder="type your USN number" style="width: 300px;" required>
            </div>
            <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" style="width: 300px;" required>
            </div>
            <input type="hidden" name="session_type" value="login">
            <button class="ui button" type="submit" style="float: none;">Login</button>
          </form>
          <div>
            <br>
            <span>Or if you've not registered register here</span>
            <a class="ui button" href="register.php" style="float: none; width: 120px; margin-top: 20px;">Register</a>
          </div>
        </div>
    </div>
</body>
</html>
