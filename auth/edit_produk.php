<?php require_once 'header.php';

$info= "";
$error= "";
$kode = $_GET['kode'];
if (isset($_GET['kode'])) {
  $products = data_perproduct($kode);

while($data = mysqli_fetch_assoc($products)) {

  $kode = $data['kode_produk'];
  $nama = $data['nama_produk'];
  $deskripsi = $data['deskripsi'];
  $harga = $data['harga'];
  $stok = $data['stok'];
  $cover = $data['cover'];

}
}


$info= "";
$error= "";

if (isset($_POST['edit'])) {

  $kode         = $_POST['kode'];
  $nama         = $_POST['nama'];
  $deskripsi    = $_POST['deskripsi'];
  $harga          = $_POST['harga'];
  $stock       = $_POST['stock'];
  $file = $_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  $folder = "../product/";
  $file = $kode."-".$file;
  $file = strtolower($file);
if (!empty(trim($kode)) && !empty(trim($nama)) && !empty(trim($deskripsi)) && !empty(trim($harga)) && !empty(trim($stock)) && !empty(trim($file))) {
    if(edit_product($kode,$nama,$deskripsi,$harga,$stock,$file)){
      if (move_uploaded_file($file_loc,$folder.$file)) {
          $info= "Add  product  berhasil";
      }else {
          $info= "Add  product  gagal";
      }
    }else {
      $info= "Add product  gagal";
    }
}else {
  $error = "Data Product harus di isi semua";
}
}



 ?>



    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Add product
        </div>

        <?php if ($info){ ?>
          <div class="alert alert-info">
            <strong>Info!</strong> <?php echo $info; ?>
          </div>
        <?php }?>

        <?php if ($error){ ?>
          <div class="alert alert-danger">
            <strong>Danger!</strong> <?php echo $error; ?>
          </div>
        <?php }?>
        <div class="card-body">
          <form class="form form-horizontal" enctype="multipart/form-data" method="post" action="">
  <div class="section">
    <div class="section-title">Information</div>
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Kode Product</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="kode" value="<?=$kode?>" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Name</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="nama"value="<?=$nama?>" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">Description</label>
        </div>
        <div class="col-md-9">
          <textarea class="form-control" name="deskripsi"><?=$deskripsi?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Price</label>
        <div class="col-md-9">
          <div class="input-group">
            <span class="input-group-addon">Rp</span>
            <input type="number" class="form-control" name="harga"value="<?=$harga?>" aria-label="Amount (to the nearest Rupiah)">
            <span class="input-group-addon">K</span>
          </div>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label class="col-md-3 control-label">Cover</label>
        <div class="col-md-9">
          <input type="file" accept="image/jpg,image/png,image/jpeg" name="file">
          <img src="../product/<?=$cover?>" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="section-title">stock</div>
    <div class="section-body">
      <div class="form-group">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Stock</label>
        <div class="col-md-4">
          <div class="input-group">
            <input type="number" class="form-control" value="<?=$stok?>" name="stock" placeholder="0">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" name="edit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-default">Cancel</button>
      </div>
    </div>
  </div>
</form>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>

  <script type="text/javascript" src="../assets/js/vendor.js"></script>
  <script type="text/javascript" src="../assets/js/app.js"></script>

</body>
</html>
