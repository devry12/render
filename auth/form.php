<?php require_once 'header.php'; ?>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Form Horizontal
        </div>
        <div class="card-body">
          <form class="form form-horizontal" method="post" action="product_process.php">
  <div class="section">
    <div class="section-title">Information</div>
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-3 control-label">Kode Product</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="kode" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Name</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="nama" placeholder="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-3">
          <label class="control-label">Description</label>
        </div>
        <div class="col-md-9">
          <textarea class="form-control" name="deskripsi"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label">Price</label>
        <div class="col-md-9">
          <div class="input-group">
            <span class="input-group-addon">Rp</span>
            <input type="text" class="form-control" name="harga" aria-label="Amount (to the nearest Rupiah)">
            <span class="input-group-addon">K</span>
          </div>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label class="col-md-3 control-label">Cover</label>
        <div class="col-md-9">
          <input type="file" class="form-control" accept = "image/jpg,image/png,image/jpeg" name="foto">
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
            <input type="text" class="form-control" name="stock" placeholder="0">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
        <button type="submit" class="btn btn-primary">Save</button>
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
