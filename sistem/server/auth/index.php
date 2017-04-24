
<?php require_once '../../core/init.php';


if (isset($_SESSION['user'])) {
  header("location:user/index.php");
}

//validation

if (isset($_POST["submit"])) {
	$email = $_POST["email"];
	$pass = $_POST["password"];

if (!empty(trim($email)) && !empty(trim($pass))) {

	if(cek_email_login($email)){
	cek_data($email,$pass);
	$_SESSION['user'] = $email;
	header("Location: user/index.php");
}else {
	echo "email Tidak Ada";
}

}else {
	echo "kosng";
}

}




 ?>


<?php require_once 'template/header.php'; ?>



<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Trendy Signup Forms Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="template/css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<script>$(document).ready(function(c) {
	$('.close-2').on('click', function(c){
		$('.login-form-1').fadeOut('slow', function(c){
	  		$('.login-form-1').remove();
		});
	});
});
</script>

 <!--SIGN IN-->
		<div class="login-form-1">
			<div class="close-2"> </div>
					<div class="head">
					</div>
					<div class="head-info">
						<h1>SIGN IN</h1>
						<h2>Welcome back! Nice to see you</h2>
					</div>
				<form method="post" action="">
					<li>
						<input type="text" class="text"  name="email" placeholder = "Email" ><a href="#" class=" icon mail"></a>
					</li>
					<li>
						<input type="password" name="password" placeholder ="*******"><a href="#" class=" icon lock"></a>
					</li>
					<div class="p-container">
								<input type="submit" name="submit" onclick="myFunction()" value="SIGN IN" >
							<div class="clear"> </div>
					</div>
				</form>
				<div class="social-icons">
							<div class="but-bottom">
							<a href="#" class="account"><p>Forgot your password?</p></a>
							<a href="#" class="trouble"><p>Need to sign up?</p></a><div class="clear"> </div></div>
							<a href="#" class="social-account"><h3>or sign in with social account</h3></a>
							<a href="#"><ul class="facebook">
								<li><img src="template/images/fb.png" />Facebook</li>
							</ul></a>
							<a href="#"><ul class="twitter">
								<li><img src="template/images/tw.png" />Twitter</li>
							</ul></a>
							<div class="clear"> </div>
				</div>
				<div class="social-icons-1">
							<a href="#"><ul class="google-plus">
								<li><img src="template/images/gp.png" />Google +</li>
							</ul></a>
							<a href="#"><ul class="linkedIn">
								<li><img src="template/images/ln.png" />LinkedIn</li>
							</ul></a>
							<div class="clear"> </div>
				</div>
			</div>
 <!--/SIGN IN-->
