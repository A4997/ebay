<?php
include_once('functions/all.php');
include_once('functions/users_functions.php');
add_customer();
$cities=city_name();
 //$cust_data=add_customer();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add New Customer</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
  </head>
  <body>

    <h1 class="display-4">Add Customer form </h1>
    <div class="container">
      <form class="" action="add_customer.php" method="post">
        <label for="cname">Customer Name</label>
        <input type="text" name="cname" class="form-control">
        <label for="cphone">Customer Phone</label>
        <input type="text" name="cphone" class="form-control">
        <label for="caddress">Customer Address</label>
        <input type="text" name="caddress" class="form-control">
        <label for="cemail">Customer Mail</label>
        <input type="text" name="cemail" class="form-control">
        <label for="ccityid">Customer City</label>
        <select class="form-control" name="ccityid">
          <?php while($city = mysqli_fetch_assoc($cities)){  ?>
             <option value="<?php echo $city["cityid"]; ?>"><?php echo $city["cityname"]; ?></option>
            <?php } ?>
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="customers.php"class="btn btn-dark">Back</a>

      </form>
    </div>
  </body>
</html>
