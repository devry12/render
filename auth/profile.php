<?php require_once 'header.php';



 ?>



  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <img class="profile-img" src="profile/<?php echo $img?>">
          <div class="app-title">
            <div class="title"><span class="highlight"><?php echo "$nama_user"; ?></span></div>
            <div class="description">Bio</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-tab">
        <div class="card-header">
          <ul class="nav nav-tabs">
            <li role="tab1" class="active">
              <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Profile</a>
            </li>
          </ul>
        </div>
        <div class="card-body no-padding tab-content">
          <div role="tabpanel" class="tab-pane active" id="tab1">
            <div class="row">
              <div class="col-2">

              <form action="" method="post">
    <div class="form-group">
      <input type="hidden" name="id" class value="<?php echo $data['id'] ?>">
      <label for="">Nama Depan</label>
      <input type="text" name="namadepan"class="form-control"value="<?php echo $users['nama_depan']?>" aria-describedby="nama">
    </div>
    <div class="form-group">
      <label for="">Nama Belakang</label>
      <input type="text" name="namabelakang"class="form-control" value="<?php echo $users['nama_belakang']?>" aria-describedby="nama">
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="email" name="email"class="form-control" disabled value="<?php echo $data['email']?>">
    </div>
    <div class="form-group">
      <label >Gender</label>
      <select class="form-control" name="jekel">
        <option value="<?php echo $users['jenis_kelamin']?>">Male</option>
        <option value="<?php echo $users['jenis_kelamin']?>">Female</option>
      </select>
    </div>
    <br>
    <div class="form-group">
      <label for="">Telephone</label>
      <input type="text" name="tlp" value="<?php echo $users['no_tlp']?>" class="form-control">
    </div>
    <div class="form-group">
      <label for="">address</label>
    <textarea class="form-control" name="alamat"rows="3"><?php echo $users['alamat']?></textarea>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>

                </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="tab3">

          <div role="tabpanel" class="tab-pane" id="tab4">
            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>

  <script type="text/javascript" src="assets/js/vendor.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>
