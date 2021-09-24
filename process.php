<?php
session_start();
if($_POST)
{
  if($_POST['session_type']=="register")
  {
   require_once("process/registerprocess.php");
  }
  else if($_POST['session_type']=="login")
  {
    require_once("process/loginprocess.php");
  }
  else echo("ERROR SESSION TYPE MISMATCH in titles.php");
  
  $_SESSION["username"]=$_POST['name'];
  $_SESSION["usn"]=$_POST['usn'];

  echo session_status();
  echo $_SESSION["username"];

  header("Location: titlesvi.php");
  exit;

}
else
{
  header("Location: index.php");
  exit;
}
?>