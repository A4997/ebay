<?php
include_once('functions/basics.php');
function category_name()
{
  global $conn;
  $q="SELECT * FROM categories";
  $cat_name=mysqli_query($conn,$q);
  return $cat_name;
}
 ?>
