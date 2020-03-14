<?php
include_once('functions/all.php');
if (isset($_POST["cname"])) {
update($_POST);
}
if (isset($_GET["cid"])) {
  $cust_set=view($_GET["cid"]);
$customer = mysqli_fetch_assoc($cust_set);
$cities=city_name();
}

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Update</title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="js/bootstrap.js">
     <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
   </head>
   <body>
     <div class="container">
       <form  action="update.php" method="post">
         <input type="hidden" name="cid" class="form-control" value="<?php echo $customer["cid"]; ?>">
         <label for="cname">Customer Name</label>
         <input type="text" name="cname" class="form-control" value="<?php echo $customer["cname"] ;?>">
         <label for="cphone">Customer Phone</label>
         <input type="text" name="cphone" class="form-control" value="<?php echo $customer["cphone"]; ?>">
         <label for="cemail">Customer Mail</label>
         <input type="text" name="cemail" class="form-control" value="<?php echo $customer["cemail"]; ?>">
         <label for="caddress">Customer Address</label>
         <input type="text" name="caddress" class="form-control" value="<?php echo $customer["caddress"]; ?>">
         <label for="ccityid">Customer City</label>
         <select class="form-control" name="ccityid" >
           <?php while ($city=mysqli_fetch_assoc($cities)) {
             ?>
           <option value="<?php echo $city['cityid']; ?>"><?php echo $city['cityname']; ?></option>
         <?php } ?>
         </select>
         <button type="submit" name="button"class="btn btn-primary">Save</button>
         <a href="customers.php"class="btn btn-dark">Back</a>
       </form>
     </div>
   </body>
 </html>
