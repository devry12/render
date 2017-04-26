<?php require_once '../../template/header.php';


if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
}
?>
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="widget_head">Profile</div>

<style media="screen">
.user-row {
  margin-bottom: 14px;
}

.user-row:last-child {
  margin-bottom: 0;
}

.dropdown-user {
  margin: 13px 0;
  padding: 5px;
  height: 100%;
}

.dropdown-user:hover {
  cursor: pointer;
}

.table-user-information > tbody > tr {
  border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
  border-top: 0;
}


.table-user-information > tbody > tr > td {
  border-top: 0;
}
.toppad
{margin-top:20px;
}

</style>
       <div class="container">
             <div class="row">
             <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                  <A href="edit.html" >Edit Profile</A>

               <A href="user/logout.php" >Logout</A>
              <br>
       <p class=" text-info">May 05,2014,03:00 pm </p>
             </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

                 <div class="panel panel-info">
                   <div class="panel-heading">
                     <h3 class="panel-title">Profile</h3>
                   </div>
                   <div class="panel-body">
                     <div class="row">
                       <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

                       <div class=" col-md-9 col-lg-9 ">
                         <table class="table table-user-information">
                           <tbody>
                             <tr>
                               <td>Nama:</td>
                               <td><?php echo $_SESSION['username']?></td>
                             </tr>
                             <tr>
                               <td>Address:</td>
                               <td>sleman,yoyakarta</td>
                             </tr>
                             <tr>
                               <td>Zip Code:</td>
                               <td>17530</td>
                             </tr>

                                <tr>
                                    <tr>
                               <td>Gender</td>
                               <td>Female</td>
                             </tr>
                               <tr>
                               <td>Home Address</td>
                               <td>Kathmandu,Nepal</td>
                             </tr>
                             <tr>
                               <td>Email</td>
                               <td><a href="mailto:<?php echo $_SESSION['username']?>"><?php echo $_SESSION['username']?></a></td>
                             </tr>
                               <td>Phone Number</td>
                               <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                               </td>

                             </tr>

                           </tbody>
                         </table>

                         <a href="#" class="btn btn-primary">My Sales Performance</a>
                         <a href="#" class="btn btn-primary">Team Sales Performance</a>
                       </div>
                     </div>
                   </div>
                        <div class="panel-footer">
                               <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                               <span class="pull-right">
                                   <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                   <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                               </span>
                           </div>

                 </div>
               </div>
             </div>
           </div>
		     <div class="clearfix"> </div>
		   </div>
		   <div class="copy_layout">
            <p>Copyright © 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
           </div>
	  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  var panels = $('.user-infos');
  var panelsButton = $('.dropdown-user');
  panels.hide();

  //Click dropdown
  panelsButton.click(function() {
      //get data-for attribute
      var dataFor = $(this).attr('data-for');
      var idFor = $(dataFor);

      //current button
      var currentButton = $(this);
      idFor.slideToggle(400, function() {
          //Completed slidetoggle
          if(idFor.is(':visible'))
          {
              currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
          }
          else
          {
              currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
          }
      })
  });


  $('[data-toggle="tooltip"]').tooltip();

  $('button').click(function(e) {
      e.preventDefault();
      alert("This is a demo.\n :-)");
  });
});
</script>
</body>
</html>
