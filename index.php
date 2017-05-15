<?php require_once 'template/header.php';

?>


    <h2 id="head">All Product</h2>
<div class="container">
  <div class="row ">
    <?php while ($data = mysqli_fetch_assoc($getproduct)) {?>
    <div class="col-4">
      <div class="img-thumbnail-">
        <div class="img">
        <a href="product.php?kode=<?=$data['kode_produk']?>"><img src="product/<?=$data['cover']?>"></a>
        <p class="theme"><?=$data['nama_produk']?></p>
        <hr id="garis">
        <p class="theme" ><span class="harga"><b><?=$data['harga']?></b><b>K</b></span></p>
        </div>
      </div>
    </div>
<?php } ?>
  </div>
</div>


<?php require_once 'template/footer.php'; ?>
