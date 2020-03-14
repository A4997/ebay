<?php
include_once('functions/basics.php');
function view_user($udata)
{
  global $conn;
  $uname=$udata['uname'];
  $q="SELECT * FROM users WHERE uname ='$uname'";
  $record=mysqli_query($conn,$q);
  $row=mysqli_num_rows($record);
  return $row;
}
function checkpass($uname)
{
  global $conn;
  $q="SELECT * FROM users WHERE uname = '$uname'";
  $result=mysqli_query($conn,$q);
  $record=mysqli_fetch_assoc($result);
  return $record;
}
function add_user($udata)
{
  global $conn;
  $uname=$udata['uname'];
  $upasss=$udata['upass'];
  $upass=password_hash($upasss,PASSWORD_DEFAULT);
  $q="INSERT INTO users (uname,upass) VALUES ('$uname','$upass')";
  mysqli_query($conn,$q);
}
function is_logged_in(){
  if(!isset($_SESSION["uname"]) || $_SESSION["uname"] == ""){
    $_SESSION["current_page"] = $_SERVER["PHP_SELF"];
    header("Location: usignin.php");
  }
}

 ?>
