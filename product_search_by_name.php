<?php
include_once('functions/products_functions.php');
if (isset($_POST['pname'])) {
  $products=search_by_name($_POST['pname']);
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search By Name</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
  </head>
  <body>
    <?php include_once('header.php'); ?>
    <?php include_once('aside.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col col-4">
          <?php include_once('aside.php');
            $aside=assi()
          ?>
        </div>
        <div class="col col-7">
          <h1 class="display-3">Search For Name</h1>
          <form  action="product_search_by_name.php" method="post">
            <label for="pname">Product Name</label>
            <input type="text" name="pname"class="form-control">
            <button type="submit" class="btn btn-success form-control">Search</button>
          </form>
          <?php
          if (isset($_POST['pname'])) {
            while ($product=mysqli_fetch_assoc($products)) {?>
              <table class="table table-striped table-bordered table-hover">
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
                </tr>
              </table>
            <?php  }?>
            <?php  }?>
        </div>

      </div>

    </div>

  </body>
</html>
