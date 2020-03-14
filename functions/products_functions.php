<?php
include_once('functions/basics.php');
function Product_list()
{
  global $conn;
  $q="SELECT products.*,categories.catname,brands.brandname,models.modelname FROM categories ,products,brands,models WHERE categories.catid=products.catid And brands.brandid=products.brandid And models.modelid=products.modelid";
  $product_data=mysqli_query($conn,$q);
  return  $product_data;
}
function add_product($product_data)
{
  global $conn;
  $pname=$product_data["pname"];
  $pstock=$product_data["pstock"];
  $pcolor=$product_data["pcolor"];
  $pcost=$product_data["pcost"];
  $pprice=$product_data["pprice"];
  $catid=$product_data["catid"];
  $modelid=$product_data["modelid"];
  $brandid=$product_data["brandid"];
  $q="INSERT INTO products (pname,pstock,pcolor,pcost,pprice,catid,modelid,brandid) VALUES ('$pname','$pstock','$pcolor','$pcost','$pprice','$catid','$modelid','$brandid')";
  mysqli_query($conn,$q);
  header('Location:products_list.php');
}
function view($id)
{
global $conn;
$pid=$id;
$q="SELECT products.*,categories.catname,brands.brandname,models.modelname FROM categories ,products,brands,models WHERE pid='$pid'And (categories.catid=products.catid And brands.brandid=products.brandid And models.modelid=products.modelid)";
$product_data=mysqli_query($conn,$q);
$product=mysqli_fetch_assoc($product_data);
return $product;
}
function remove($id)
{
  global $conn;
  $pid=$id;
  $q="DELETE FROM products WHERE pid='$pid'";
  mysqli_query($conn,$q);
  header('Location:products_list.php');
}
function update($product_data)
{
  global $conn;
  $pid=$product_data["pid"];
  $pname=$product_data["pname"];
  $pstock=$product_data["pstock"];
  $pcolor=$product_data["pcolor"];
  $pprice=$product_data["pprice"];
  $pcost=$product_data["pcost"];
  $catid=$product_data["catid"];
  $modelid=$product_data["modelid"];
  $brandid=$product_data["brandid"];
  $q="UPDATE products SET pid='$pid',pname='$pname',pstock='$pstock',pcolor='$pcolor',pprice='$pprice',pcolor='$pcost',catid='$catid',modelid='$modelid',brandid='$brandid' WHERE pid='$pid'";
  mysqli_query($conn,$q);
  header('Location:products_list.php');
}
function search_by_name($name)
{
global $conn;
$pname=$name;
$q="SELECT products.*,categories.catname,brands.brandname,models.modelname FROM categories ,products,brands,models WHERE pname='$pname'AND (categories.catid=products.catid And brands.brandid=products.brandid And models.modelid=products.modelid)";
$Product_list=mysqli_query($conn,$q);
return $Product_list;
}
 ?>
