<?php
include_once('functions/basics.php');
function brand_name()
{
  global $conn;
  $q="SELECT * FROM brands";
  $brand_name=mysqli_query($conn,$q);
  return $brand_name;
}
 ?>
