<?php

function getdatacart($kode){
 global $con;
$where = implode("','",$_SESSION['cart']);

  $query = "SELECT * FROM product WHERE kode_produk in ('$where')";

  return runcart($query);

}

//get id user for cart

function getidusersforcart($users){
global $con;
$query = "SELECT id FROM users WHERE username = '$users'";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_assoc($result);
return $data;
}


//add to cart

function addcart($quan,$kode,$id){
  global $con;

$query = "INSERT INTO cart-detail (id_product,id_users,quantity) VALUES ($kode,$id,$quan)";
die($query);
$result = mysqli_query($con,$query);
  return $result;
}

function runcart($query){
  global $con;
  $result = mysqli_query($con,$query) or die(mysqli_error() . $query);
  return $result;
}

 ?>
