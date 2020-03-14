<?php
include_once('functions/all.php');
if (isset($_POST["cname"])) {
$cust_data=search_by_name();
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
    <div class="container-fluid">
      <div class="row">
        <div class="col col-4">
          <?php include_once('aside.php');
            $aside=assi()
          ?>
        </div>
        <div class="col col-7">
              <h1 class="display-4">Search By Name</h1>
          <form class="" action="search_by_name.php" method="post" style="text-align:center">
            <label for="cname">Csuatomer Name </label>
            <input type="text" class="form-control" name="cname" value="<?php if(isset($_POST['cname'])){echo $_POST['cname'];}?>" placeholder="Enter Name">
            <button type="submit" name="" class="btn btn-primary mt-4 mb-4">Search</button>
            <a href="customers.php" class="btn btn-dark  mt-4 mb-4">Back</a>
          </form>

    <?php
    if (isset($_POST['cname'])) {?>
      <table class="table-dark">
        <tr>
          <th>Customer ID</th>
          <th>Customer Name</th>
          <th>Customer Phone</th>
          <th>Customer Address</th>
          <th>Customer Email</th>
          <th>Customer City</th>
          <th>Actions</th>
        </tr>
        <?php while($customers=mysqli_fetch_assoc($cust_data)) {?>
          <tr>
              <td><?php echo $customers["cid"]; ?></td>
              <td><?php echo $customers["cname"]; ?></td>
              <td><?php echo $customers["cphone"]; ?></td>
              <td><?php echo $customers["caddress"]; ?></td>
              <td><?php echo $customers["cemail"]; ?></td>
              <td><?php echo $customers["cityname"]; ?></td>
              <td>
                <a href="#"class="btn btn-primary">View</a>
                <a href="#"class="btn btn-secondary">Update</a>
                <a href="#"class="btn btn-danger">Remove</a>
              </td>
          </tr>
      <?php  } ?>
    </table>
    <?php  }else {?>
      <p class="alert-primary">There is No records yet applied</p>
    <?php  }?>
        </div>
      </div>

    </div>
  </body>
</html>
