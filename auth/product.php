<?php require_once 'header.php';

$product = getproduct();

?>
  <div class="row">
    <div class="col-lg-12">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-tab">
        <div class="card-header">
          <ul class="nav nav-tabs">
            <li role="tab1" class="active">
              <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Activity</a>
            </li>
            <li role="tab3">
              <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Edit</a>
            </li>
            <li role="tab4">
              <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Stats</a>
            </li>
          </ul>
        </div>
        <div class="card-body no-padding tab-content">
          <div role="tabpanel" class="tab-pane active" id="tab1">
            <div class="row">
              <div class="col-12">
<h2>Hover Rows</h2>
<p>The .table-hover class enables a hover state on table rows:</p>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Kode Product</th>
      <th>Nama Produk</th>
      <th>Stock</th>
      <th>Edit</th>
      <th>delete</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($data = mysqli_fetch_assoc($product)){ ?>

    <tr>
      <td><?=$data['kode_produk'] ?></td>
      <td><?=$data['nama_produk'] ?></td>
      <td><?=$data['stok'] ?></td>
      <td><a href="edit_produk.php?kode=<?=$data['kode_produk']?>">Edit</a></td>
      <td><a href="delete_produk.php?kode=<?=$data['kode_produk']?>">Delete</a></td>

    </tr>
        <?php }; ?>
  </tbody>
</table>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab3">


            </div>

          </div>
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
