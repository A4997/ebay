<?php
include_once('functions/all.php');
function customers()
{
global $conn;
  $q="SELECT customers.*,cities.cityname FROM customers,cities WHERE cities.cityid=customers.ccityid";
  $return=mysqli_query($conn,$q);
  return $return;
}
function add_customer()
{
  global $conn;
  if (isset($_POST["cname"])) {

    $cn=$_POST["cname"];
    $cphone=$_POST["cphone"];
    $cmail=$_POST["cemail"];
    $caddress=$_POST["caddress"];
    $ccity=$_POST["ccityid"];
    $q="INSERT INTO customers (cname,cphone,cemail,caddress,ccityid)VALUES ('$cn','$cphone','$cmail','$caddress','$ccity')";
    $cust_data=mysqli_query($conn,$q);
    Header("Location:customers.php");
  }
}
function remove($id)
{
global $conn;
  $cid=$id;
  $q="DELETE from customers WHERE cid='$cid'";
  mysqli_query($conn,$q);
  Header ("Location:customers.php");
}
function view($id)
{
  global $conn;
  $cid=$id;
  $q="SELECT customers.*,cities.cityname FROM customers,cities WHERE  cities.cityid=customers.ccityid AND cid='$cid'";
  $cust_data=mysqli_query($conn,$q);
  return $cust_data;
}
function update($cust_data=[])
{
global $conn;
  $cid=$cust_data["cid"];
  $cname=$cust_data["cname"];
  $cphone=$cust_data['cphone'];
  $cemail=$cust_data['cemail'];
  $caddress=$cust_data['caddress'];
  $ccityid=$cust_data['ccityid'];
  $q="UPDATE customers SET cid='$cid',cname='$cname',cphone='$cphone',cemail='$cemail',caddress='$caddress',ccityid='$ccityid' WHERE cid='$cid' ";
  mysqli_query($conn,$q);
  Header("Location:customers.php");
}
function search_by_name()
{
  global $conn;
  $cname=$_POST["cname"];
    $q = "SELECT customers.*, cities.cityname FROM customers, cities WHERE cities.cityid = customers.ccityid AND cname LIKE '%$cname%'";
  $cust_data=mysqli_query($conn,$q);
  return $cust_data;
}
function search_by_field()
{
global $conn;
  $field=$_POST["field"];
  $sc=$_POST['sc'];
  $q = "SELECT customers.*, cities.cityname FROM customers, cities WHERE cities.cityid = customers.ccityid AND $sc LIKE '%$field%'";
  $cust_data=mysqli_query($conn,$q);
  return $cust_data;
}
 ?>
