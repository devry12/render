<?php
require_once 'core/init.php';

if(!session::exists('username'))
{
header('Location:login.php');
}


require_once 'template/header.php';

if (Input::get('username')== 1) {
  $level = "Admin";
}else {
  $level = "Member";
}
?>

<h3>Welcome <?php echo session::get('username'); ?></h3><br>
<p><?php echo $level ?></p>

<a href="logout.php">Logout</a>

<!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
<title>Profile Page - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

</style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<div class="container" style="margin-top:20px;">
    <div class="row-fluid">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
         <div class="panel panel-info">
            <div class="panel-heading"><h3 class="panel-title">Sheena Shrestha</h3>
            <div class="span2" style="margin-top:-25px; float:right;">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                <ul class="dropdown-menu">

                    <li style="align:justify;"><a href="#"><span class="icon-cog"></span> Modify</a></li>
                    <li style="align:justify;"><a href="#"><span class="icon-log-out"></span>Sign Out</a></li>

                </ul>
            </div>
            </div>
        </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                    <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                </div>
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information"><tbody><tr><td>Department:</td><td>Programming</td></tr><tr><td>Department:</td><td>Programming</td></tr></tbody></table>
                  <a href="#" class="btn btn-primary">Sales Performance</a>
                  <a href="#" class="btn btn-primary">Team Performance</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>


<?php
require_once 'template/footer.php';
 ?>
