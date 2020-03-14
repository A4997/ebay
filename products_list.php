<?php
include_once('functions/products_functions.php');
$product_data=Product_list();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
    <title>Products List</title>
  </head>
  <body>
<?php include_once('header.php'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col col-4">
      <?php include_once('aside.php');
        $aside=assi()
      ?>
    </div>
    <div class="col col-6">
      <a href="add_product.php" class="btn btn-outline-primary">Add New Product</a>
      <table class="table table-striped table-bordered table-hover" style="">
        <tr class="thead-dark">
          <th>Product Id</th>
          <th>Product Name</th>
          <th>Product Stock</th>
          <th>Product Color </th>
          <th>Product Cost</th>
          <th>Product Price</th>
          <th>Product Category</th>
          <th>Product Model</th>
          <th>Product Brand</th>
          <th>Actions</th>
        </tr>
        <?php while ($products=mysqli_fetch_assoc($product_data)) {?>
        <tr>
            <td><?php echo $products["pid"]; ?></td>
            <td><?php echo $products["pname"]; ?></td>
            <td><?php echo $products["pstock"]; ?></td>
            <td><?php echo $products["pcolor"]; ?></td>
            <td><?php echo $products["pcost"]; ?></td>
            <td><?php echo $products["pprice"]; ?></td>
            <td><?php echo $products["catname"]; ?></td>
            <td><?php echo $products["modelname"]; ?></td>
            <td><?php echo $products["brandname"]; ?></td>
            <td>
              <a href="view_product.php?pid=<?php echo $products["pid"]?>" class="btn btn-outline-success">View</a>
              <a href="update_product.php?pid=<?php echo $products["pid"]?>" class="btn btn-outline-primary">Update</a>
              <a href="remove_product.php?pid=<?php echo $products["pid"]?>" class="btn btn-outline-danger">Remove</a>
            </td>
                </tr>
          <?php  } ?>

      </table>
    </div>
  </div>

</div>
  </body>
</html>
