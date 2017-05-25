<?php require_once 'template/header.php';
$kode = $_GET['kode'];
$product = data_perproduct($kode);




$product = mysqli_fetch_assoc($product);



?>



<div class="container">
  <div class="row">
      <div class="img-thumbnail-">
        <div class="coverper">
        <img src="product/<?php echo $product['cover'] ?>"></a>
        </div>
    </div>

    <div class="box_product">


    <h1 class="judul"><?php echo $product['nama_produk']; ?></h1>

    <h1 class="hargaper"><?php echo $product['harga']; ?><span>K</span></h1>

    <?php if ($product['stok'] >= 20) {?>
      <div class="alert alert-success" role="alert">
        <strong>Well done!</strong> Many stock
      </div>

  <?php  }elseif ($product['stok'] >= 10 && $product['stok'] < 20 ) {?>

          <div class="alert alert-info" role="alert">
            <strong>Heads up!</strong> Medium stock.
          </div>
  <?php  }elseif ($product['stok'] >= 1 && $product['stok'] < 10 ) {?>
    <div class="alert alert-warning" role="alert">
      <strong>Warning!</strong> Low Stock
    </div>
  <?php }else {?>
  <div class="alert alert-danger" role="alert">
    <strong>Oh snap!</strong> Sold Out
  </div>

  <?php }?>

    <br>
      <hr class="garis">
      <label class="label" for="size">Quantity</label>
      <form class="buy" action="actioncart.php" method="post">
        <input type="hidden" name="kode" value="<?=$product['id_product']?>">
        <input type="number" class="quantity form-group" name="quantity" value="1">
        <input type="hidden" name="id" value="<?=$idusers['id']?>">

        <br>
        <button type="submit" class="btn btn-primary add" name="add">Add to cart</button>
      </form>
      <br>
<hr class="garis">




    </div>

  </div>
</div>




<?php require_once 'template/footer.php'; ?>
