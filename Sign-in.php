<?php
if (isset($_POST['cname'])) {
  $connection=mysqli_connect('localhost','root','','ebay');
  $cname=$_POST["cname"];
  $cpass=$_POST["cpass"];
  $cmail=$_POST["cmail"];
  $cphone=$_POST["cphone"];
  $query="INSERT INTO customers(cname,cpass,cmail,cphone) VALUES('$cname','$cpass','$cmail','$cphone')";
  mysqli_query($connection,$query);
}


 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.min.css">
    <script src="js/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
    <script src="js/script.js" charset="utf-8"></script>
    <title>Sign-in</title>
  </head>
  <body>
    <div class="container">
      <h1 class="display-3">Sign In Form</h1>
      <form method="post" action="Sign-in.php">
        <div class="form-group">
          <label for="cname">Name</label>
          <input type="text" class="form-control"  placeholder="Enter Your Name" name="cname">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="cmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="cpass"class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="cphone">Phone Number</label>
          <input type="text" class="form-control"  placeholder="Enter Your Phone"name="cphone">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

  </body>
</html>
