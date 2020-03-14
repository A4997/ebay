<?php
function city_name()
{
  $conn=mysqli_connect('localhost','root','','amazon');
  $q1="SELECT * from cities";
  $cities=mysqli_query($conn,$q1);
  return $cities;
}
 ?>
