<?php require_once 'header.php';

if(isset($_POST['btn-upload']))
{

	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="profile/";

	// new file size in KB
	$new_size = $file_size/1024;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case

	$final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		avatar($final_file,$users['id']);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='avatar.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='avatar.php?fail';
        </script>
		<?php
	}
}

 ?>



  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <img class="profile-img" src="profile/<?php echo $img?>">
          <div class="app-title">
            <div class="title"><span class="highlight"><?php echo "$user"; ?></span></div>
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
                	<form action="" method="post" enctype="multipart/form-data">
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
