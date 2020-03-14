<?php
include_once('functions/all.php');
if (isset($_POST["field"])) {
$cust_data=search_by_field();
}
//sc for select criteria
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search By Field</title>
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
              <h1 class="display-4">Search By Field</h1>
              <form class="" action="search_by_field.php" method="post" style="text-align:center">
                <label for="field">Search by field : </label>
                <input type="text" class="form-control" name="field" value="<?php if(isset($_POST['field'])){echo $_POST['field'];}?>" placeholder="Enter What You want to search">
                <select class="form-control" name="sc">
                  <option value="cname"
                  <?php if (isset($_POST["sc"])&& $_POST['sc']=="cname") {
                    echo "SELECTED";} ?>>Name</option>
                  <option value="cphone"<?php if(isset($_POST["sc"]) && $_POST["sc"] == "cphone") { echo "SELECTED";} ?>>Phone</option>
                  <option value="cemail"<?php if (isset($_POST["sc"])&& $_POST['sc']=="cemail") {
                    echo "SELECTED";} ?>>Mail</option>
                  <option value="caddress"<?php if (isset($_POST["sc"])&& $_POST['sc']=="caddress") {
                    echo "SELECTED";} ?>>Address</option>
                  <option value="cityname"<?php if (isset($_POST["sc"])&& $_POST['sc']=="cityname") {
                    echo "SELECTED";} ?>>City</option>
                </select>
                <button type="submit" name="" class="btn btn-primary mt-4 mb-4">Search</button>
                <a href="customers.php" class="btn btn-dark  mt-4 mb-4">Back</a>
              </form>

        <?php
        if (isset($_POST['field'])) {?>
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
