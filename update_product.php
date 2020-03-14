<?php
include_once('functions/products_functions.php');
include_once('functions/category_functions.php');
include_once('functions/models_functions.php');
include_once('functions/brands_functions.php');
if (isset($_POST['pname'])) {
  update($_POST);
}
if (isset($_GET['pid'])) {
  $product=view($_GET['pid']);
  $categories=category_name();
  $models=model_name();
  $brands=brand_name();
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update Product</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
  </head>
  <body>
    <div class="container">
      <h1>Update Products</h1>
      <form  action="update_product.php" method="post">
        <input type="hidden" name="pid"class="form-control" value="<?php echo $product["pid"]?>">
        <label for="pname">Product Name</label>
        <input type="text" name="pname"class="form-control" value="<?php echo $product["pname"]?>">
        <label for="pstock">Product Stock</label>
        <input type="text" name="pstock"class="form-control" value="<?php echo $product["pstock"]?>">
        <label for="pcolor">Product Color</label>
        <input type="text" name="pcolor"class="form-control" value="<?php echo $product["pcolor"]?>">
        <label for="pcost">Product Cost</label>
        <input type="text" name="pcost"class="form-control" value="<?php echo $product["pcost"]?>">
        <label for="pprice">Product Price</label>
        <input type="text" name="pprice"class="form-control" value="<?php echo $product["pprice"]?>">
        <label for="pname">Product Category</label>
        <select class="form-control" name="catid">
          <?php while ($category=mysqli_fetch_assoc($categories)) {?>
            <option value="<?php echo $category["catid"]?>"><?php echo $category["catname"]; ?></option>
          <?php  } ?>
        </select>
        <label for="pname">Product Model</label>
        <select class="form-control" name="modelid">
          <?php while ($model=mysqli_fetch_assoc($models)) {?>
            <option value="<?php echo $model["modelid"]?>"><?php echo $model["modelname"]; ?></option>
          <?php  } ?>
        </select>
        <label for="pname">Product Brand</label>
        <select class="form-control" name="brandid">
          <?php while ($brand=mysqli_fetch_assoc($brands)) {?>
            <option value="<?php echo $brand["brandid"]?>" ><?php echo $brand["brandname"]; ?></option>
          <?php  } ?>
        </select>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="products_list.php" class="btn btn-dark">Back</a>
      </form>
    </div>
  </body>
</html>
