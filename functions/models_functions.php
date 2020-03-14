<?php
include_once('functions/basics.php');
function model_name()
{
  global $conn;
  $q="SELECT * FROM models";
  $model_name=mysqli_query($conn,$q);
  return $model_name;
}
 ?>
