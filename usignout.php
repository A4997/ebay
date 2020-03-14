<?php
include_once('functions/all.php');
//Unsets a single Value
unset($_SESSION["uname"]);
unset($_SESSION["uid"]);
//Unsets the entire Session
session_unset();
session_destroy();
header("Location: usignin.php");
 ?>
