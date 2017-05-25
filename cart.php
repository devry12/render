  <?php

require_once 'template/header.php';
$cart = getdatacart($_SESSION['cart']);

$size = $_SESSION['size'];



 ?>

<style media="screen">
  #title{
    text-align: center;
    font-size: 40px;
    font-weight: 900;
  }

  .order{
    margin-left: 93%;
  }
</style>

 <div class="container">
   <br>
   <h1 id=title>Cart</h1>
   <br>
   <table class="table table-hover">
     <thead>
       <tr>
         <th>Product</th>
         <th>Price</th>
         <th>Quantity</th>

       </tr>
     </thead>
     <tbody>
       <form class="" action="" method="post">

<?php while ($row = mysqli_fetch_assoc($cart)) {?>

       <tr>
         <td><?=$row['nama_produk']?></td>
         <td><?=$row['harga']?><span><b> K</b></span></td>
         <td></td>
       </tr>
<?php } ?>
     </tbody>

   </table>
   <button type="submit" class="order btn btn-primary" name="button">Order</button>
 </form>
 </div>
