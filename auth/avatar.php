<?php require_once 'header.php';



 ?>



  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <img class="profile-img" src="profile/<?php echo $users['avatar']?>">
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
              <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Avatar</a>
            </li>
          </ul>
        </div>
        <div class="card-body no-padding tab-content">
          <div role="tabpanel" class="tab-pane active" id="tab1">
            <div class="row">
              <div class="col-2">

                <div id="body">
                	<form action="upload.php" method="post" enctype="multipart/form-data">
                	<input type="file" accept="image/jpg,image/png,image/jpeg" name="file" />
                	<button type="submit"  name="btn-upload">upload</button>
                	</form>
                    <br /><br />
                        <?php

                	?>
                </div>

                </div>
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
