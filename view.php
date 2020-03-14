<?php
include_once('functions/all.php');
$cust_data=view($_GET['cid']);
$customer=mysqli_fetch_assoc($cust_data);
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
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col col-4">
          <?php include_once('aside.php');
            $aside=assi()
          ?>
        </div>
        <div class="col col-7">
          <h1 class="display-2">View</h1>
          <table class="table-dark" border="2"style="text-align:center;">
            <tr>
              <td>Customer Id</td>
              <td>Customer Name</td>
              <td>Customer phone</td>
              <td>Customer Mail</td>
              <td>Customer Adreess</td>
              <td>Customer City</td>
              <td>Actions</td>
            </tr>
            <tr>
              <td><?php echo $customer["cid"]; ?></td>
              <td><?php echo $customer["cname"]; ?></td>
              <td><?php echo $customer["cphone"]; ?></td>
              <td><?php echo $customer["cemail"]; ?></td>
              <td><?php echo $customer["caddress"]; ?></td>
              <td><?php echo $customer["cityname"] ?></td>
              <td>
                  <a href="update.php?pid=<?php echo $customer["cid"]?>"class="btn btn-secondary">Update</a>
                  <a href="update.php?pid=<?php echo $customer["cid"]?>"class="btn btn-danger">Remove</a>
                  <a href="customers.php"class="btn btn-dark">Back</a>
              </td>
            </tr>
          </table>
        </div>
      </div>

    </div>

  </body>
</html>
