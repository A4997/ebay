<?php
include_once('functions/all.php');
$return=customers();
$rows=mysqli_num_rows($return);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Customers List</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
  </head>
  <body>
    <?php include_once('header.php'); ?>
    <div class="container-fluid">

        <div style=";">
          <h1 class="display-4">Customers List</h1>
          <a href="add_customer.php"class="btn btn-success">Add Customer</a>
          <a href="search_by_name.php"class="btn btn-primary">Search By Name</a>
          <a href="search_by_field.php" class="btn btn-primary">Search By Field</a>
          <table class="table-dark" border="2" style="text-align:center">
            <tr>
              <td>Customer ID</td>
              <td>Cusomer Name</td>
              <td>Customer Phone </td>
              <td>Customer Address</td>
              <td>Customer Mail</td>
              <td>Customer City</td>
              <td>Actions</td>
            </tr>
            <tr>
              <?php  while ($customers=mysqli_fetch_assoc($return)) {?>
                  <td><?php echo $customers["cid"]; ?></td>
                  <td><?php echo $customers["cname"]; ?></td>
                  <td><?php echo $customers["cphone"]; ?></td>
                  <td><?php echo $customers["caddress"]; ?></td>
                  <td><?php echo $customers["cemail"]; ?></td>
                  <td><?php echo $customers["cityname"]; ?></td>
                  <td>
                    <a href="view.php?cid=<?php echo $customers['cid']?>"class="btn btn-primary">View</a>
                    <a href="update.php?cid=<?php echo $customers['cid']?>"class="btn btn-secondary">Update</a>
                    <a href="remove.php?cid=<?php echo $customers['cid']?>"class="btn btn-danger">Remove</a>
                  </td>
                    </tr>
              <?php  }?>
          </table>
          <p class="alert-primary">
            <?php echo "Number of rows : ". $rows; ?>
          </p>
        </div>

      </div>




  </body>
</html>
