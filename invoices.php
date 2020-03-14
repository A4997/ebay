<?php
include_once('functions/invoices.php');

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Invoices List</title>
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
          <table class="table table-stripped table-hover">
            <tr>
              <td>Invoice Products ID</td>
              <td>Invoice ID</td>
              <td>Product ID</td>
              <td>Product Price</td>
              <td>Produt Quantty</td>
              <td>PRoduct Total</td>
            </tr>
            <tr>

            </tr>

          </table>
        </div>
      </div>
  </body>
</html>
