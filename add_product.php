<?php
include_once('functions/products_functions.php');
include_once('functions/category_functions.php');
include_once('functions/models_functions.php');
include_once('functions/brands_functions.php');
if (isset($_POST["pname"])) {
  add_product($_POST);
}
$category=category_name();
$model=model_name();
$brand=brand_name();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>ADD Product</title>
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="js/bootstrap.js">
     <link rel="stylesheet" href="js/jquery-3.4.1.min.js">
   </head>
   <body>
     <?php include_once('header.php'); ?>
     <div class="container">
       <h1 class="display-3">Add Product</h1>
       <form class="" action="add_product.php" method="post">
         <label for="pname">Product name</label>
         <input type="text" name="pname"  class="form-control">
         <label for="pstock">Product Stock</label>
         <input type="text" name="pstock"  class="form-control">
         <label for="pcolor">Product Color</label>
         <input type="text" name="pcolor"  class="form-control">
         <label for="pcost">Product Cost</label>
         <input type="text" name="pcost"  class="form-control">
         <label for="pprice">Product price</label>
         <input type="text" name="pprice"  class="form-control">
         <label for="pname">Product category</label>
         <select class="form-control" name="catid">
            <?php while ($cat=mysqli_fetch_assoc($category)) {?>
                <option value="<?php echo $cat["catid"]?>"><?php echo $cat["catname"]; ?></option>
          <?php   } ?>
         </select>
         <label for="pname">Product Modell</label>
         <select class="form-control" name="modelid">
            <?php while ($models=mysqli_fetch_assoc($model)) {?>
                <option value="<?php echo $models["modelid"]?>"><?php echo $models["modelname"]; ?></option>
          <?php   } ?>
         </select>
         <label for="pname">Product Brand</label>
         <select class="form-control" name="brandid">
           <?php while ($brands=mysqli_fetch_assoc($brand)) {?>
              <option value="<?php echo $brands["brandid"]?>"><?php echo $brands["brandname"]; ?></option>
          <?php  } ?>
         </select>
         <button type="submit" class="btn btn-primary">Add</button>
         <a href="Product_list.php" class="btn btn-dark">Back</a>
       </form>
     </div>
   </body>
 </html>
