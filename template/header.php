<?php require_once 'core/init.php';


$user = false;
if (!isset($_SESSION['user'])) {
  $user = false;
}else {
  $user = true;
}

if(isset($_SESSION['user'])){
  $users = $_SESSION['user'];

  $idusers = getidusersforcart($users);

}

  $getproduct = get_data_perproduct();


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Render</title>
    <link rel="icon" href="./template/css/img/favicon.ico" type="image/x-icon"/>

    <!--css Start-->
    <link rel="stylesheet" href="./template/css/style.css">
    <!--css end-->

    <!--Framework Start-->
    <link rel="stylesheet" href="./template/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./template/css/bulma/css/bulma.css">
    <link rel="stylesheet" href="./template/css/ionicons/css/ionicons.css">
    <!--Framework end-->
  </head>
  <body class="badan">

    <nav class="nav">
      <div class="nav-left nav-menu">


        <div class="nav-item">
          <div class="field is-grouped">
            <p class="control">
              <a href="index.php" class="button is-info is-outlined" href="#" >
                Product
              </a>
            </p>
           <ion-icon ios="ios-cart" md="md-cart"></ion-icon>
          </div>
        </div>
      </div>

      <div class="nav-center">

        <a class="nav-item" href="#">
          <img src="./template/css/img/logo.png" alt="render">
        </a>
      </div>

      <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
      <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
      <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>

      <!-- This "nav-menu" is hidden on mobile -->
      <!-- Add the modifier "is-active" to display it on mobile -->
      <div class="nav-right nav-menu">

<div class="user">
  <?php if ($user == false){ ?>

        <div class="nav-item">
          <div class="field is-grouped">
            <p class="control">
              <a href="register.php" class="button is-info is-outlined" >
                Register
              </a>
            </p>
            <p class="control">
              <a href="login.php" class="button is-info is-outlined">
              Login
              </a>
            </p>

          </div>
          </div>
  <?php }else{ ?>
            <div class="nav-item">
              <div class="field is-grouped">
                <p class="control">
                  <a href="auth/profile.php" class="button is-info is-outlined" >
                    Profile
                  </a>
                </p>
              </div>
              </div>
              <?php } ?>
        </div>
      </div>
    </nav>
