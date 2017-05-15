<?php require_once 'core/init.php';


$error = "";

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];



if (!empty(trim($username)) && !empty(trim($email)) && !empty(trim($password))) {
if (strlen($username)>=6) {
if (strlen($password)>=6) {
if($confirm == $password){
if(register_cek_nama($username)){
  if(register_cek_email($email)){
  //database register
  if(register_user($username,$email,$password)){
    header('location: login.php');
  }else {
    $error = "ada masalah hubungi administrator";
  }
}else {
  $error = "email sudah ada";
}
}else {
  $error = "Nama Sudah Ada";
}
}else{
  $error = "Maaf password tidak sama";
}
}else {
  $error = "Password minimal 6 karakter";
}
}else {
  $error = "username Minimal 6 karakter";
}

}else {
  $error = "semua harus di isi";

}
}
 ?>



<?php require_once 'server/template/header.php' ?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Trendy Signup Forms Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="server/template/css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.login-form').fadeOut('slow', function(c){
	  		$('.login-form').remove();
		});
	});
});
</script>
 <!--SIGN UP-->


		<div class="login-form">
					<div class="head">
					</div>
					<div class="head-info">
						<h1>SIGN UP</h1>

						<h2>Hello and Welcome! Tell us a bit about you</h2>
					</div>


				<form method="post" action="register.php">
          <?php if($error){ ?>
          <div class="alert alert-warning">
            <strong >Warning!</strong> <?php echo $error; ?></div>
            <?php } ?>
					<li>
						<input type="text" class="text" name="username" placeholder="Username"  ><a class=" icon user"></a>
					</li>
					<li>
						<input type="text" class="text " name="email"  placeholder="Email" ><a  class=" icon mail"></a>
					</li>
					<li>
						<input type="password" name="password"  placeholder="********"><a class=" icon lock"></a>
					</li>
          <li>
            <input type="password" name="confirm"  placeholder="Confirm"><a class=" icon lock"></a>
          </li>
					<div class="p-container">
								<input type="submit" name="submit" onclick="myFunction()" value="SIGN UP" >
							<div class="clear"> </div>
					</div>
				</form>
				<div class="social-icons">
							<div class="but-bottom">
							<a href="login.php" class="account"><p>Already have an account?</p></a>
							<a href="index.php" class="trouble"><p>Trouble signing in?</p></a><div class="clear"> </div></div>
							<a href="#" class="social-account"><h3>or sign in with social account</h3></a>
							<a href="#"><ul class="facebook">
								<li><img src="server/template/images/fb.png" />Facebook</li>
							</ul></a>
							<a href="#"><ul class="twitter">
								<li><img src="server/template/images/tw.png" />Twitter</li>
							</ul></a>
							<div class="clear"> </div>
				</div>
				<div class="social-icons-1">
							<a href="#"><ul class="google-plus">
								<li><img src="server/template/images/gp.png" />Google +</li>
							</ul></a>
							<a href="#"><ul class="linkedIn">
								<li><img src="server/template/images/ln.png" />LinkedIn</li>
							</ul></a>
							<div class="clear"> </div>
				</div>
			</div>
