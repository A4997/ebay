<?php
include_once('functions/users_functions.php');
if(isset($_SESSION["uname"]) && $_SESSION["uname"] != ""){
  header("Location: customers.php");
}
if (isset($_POST['uname'])) {
  $view=view_user($_POST);
  if ($view==1) {
    $record=checkpass($_POST['uname']);
    if (password_verify($_POST['upass'],$record['upass'])) {
      $_SESSION["uname"] = $record["uname"];
      $_SESSION["upass"] = $record["upass"];
        Header("Location:customers.php");
    }
    else {
      $error= "The username or password isn't correct";
    }
  }
  else {
    $error ="the Username Or password is not correct";
  }


}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign in</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
  </head>
  <body>
    <div class="container">
      <h1 class="display-3">Sign in </h1>
      <form class="form-group" action="usignin.php" method="post">
        <label for="uname">User Name</label>
        <input type="text" name="uname" class="form-control"value="<?php if (isset($_POST['uname'])){echo $_POST['uname'];} ?>">
        <label for="upass">User Password</label>
        <input type="password" name="upass" class="form-control">
        <?php if (isset($error)) {?>
          <p class="alert-danger">The username or password is not corect !</p>
        <?php } ?>
        <button type="submit" class="btn btn-success">Log in</button>
        <p>Create One !<a href="ulogin.php">Log in</a></p>
      </form>
    </div>
  </body>
</html>
