<?php
include_once('functions/products_functions.php');
$product=view($_GET['pid']);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>View</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
  </head>
  <body style="text-align:center">
    <?php include_once('header.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col col-4">
          <?php include_once('aside.php');
            $aside=assi()
          ?>
        </div>
        <div class="col col-7">
          <table class="table table-striped table-bordered table-hover mt-5">
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
            <tr>
                <td><?php echo $product["pid"]; ?></td>
                <td><?php echo $product["pname"]; ?></td>
                <td><?php echo $product["pstock"]; ?></td>
                <td><?php echo $product["pcolor"]; ?></td>
                <td><?php echo $product["pcost"]; ?></td>
                <td><?php echo $product["pprice"]; ?></td>
                <td><?php echo $product["catname"]; ?></td>
                <td><?php echo $product["modelname"]; ?></td>
                <td><?php echo $product["brandname"]; ?></td>
                <td>
                  <a href="update_product.php?pid=<?php echo $product["pid"]?>" class="btn btn-outline-primary">Update</a>
                  <a href="remove_product.php?pid=<?php echo $product["pid"]?>" class="btn btn-outline-danger">Remove</a>
                  <a href="products_list.php" class="btn btn-outline-success">Back</a>
                </td>
                    </tr>
          </table>
        </div>
      </div>

    </div>
  </body>
</html>
