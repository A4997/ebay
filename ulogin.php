<?php
include_once('functions/users_functions.php');
if (isset($_POST['uname'])) {
  $check=view_user($_POST);
  if ($check >= 1) {
    $error="Enter another name/email as it's used";
  }
  else {
    add_user($_POST);
  }

}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Log in</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
  </head>
  <body>
    <div class="container">
      <h1 class="display-3">Sign in </h1>
      <form class="form-group" action="ulogin.php" method="post">
        <label for="uname">User Name/Email</label>
        <input type="text" name="uname" autocomplete="off" placeholder="Enter a valid username or Email"class="form-control"value="<?php if(isset($error)) {echo $_POST['uname'];}?>">
        <?php if (isset($error)) {?>
          <p class="alert-danger"><?php echo $error; ?></p>
      <?php    } ?>
        <label for="upass">Password</label>
        <input type="password" name="upass" placeholder="Enter a valid password"class="form-control">
        <button type="submit" class="btn btn-primary">Log in</button>
        <p>Already have an account ?<a href="usignin.php" >Sign in</a></p>
      </form>
    </div>
  </body>
</html>
