<?php

function register_user($nama, $email, $pass)
{
global $link;

$nama = mysqli_real_escape_string($link,$nama);
$email = mysqli_real_escape_string($link,$email);
$pass = mysqli_real_escape_string($link,$pass);


$pass = password_hash($pass,PASSWORD_DEFAULT);
$query = "INSERT INTO users (name,email,password) values('$nama' , '$email' , '$pass')";

if (mysqli_query($link,$query)) {
  return true;
}else {
  return false;
}

  }


//cek email Sama


function register_cek_email($email){
global $link;
$email = mysqli_real_escape_string($link,$email);
$query = "SELECT * FROM users WHERE email = '$email'";

if( $result = mysqli_query($link,$query)){
  if(mysqli_num_rows($result) == 0) return true;
  else return false;
}
}


//system login

function cek_data($email, $pass)
{
global $link;

$email = mysqli_real_escape_string($link,$email);
$pass = mysqli_real_escape_string($link,$pass);

$query = "SELECT password FROM users WHERE email = '$email'";
$result = mysqli_query($link,$query);
$hash= mysqli_fetch_assoc($result);

die("print_r($result)");

if(password_verify($pass == $hash['password'])){
  return true;
}else {
 return flase;
}
}


//cek email
function cek_email_login($email){
global $link;
$email = mysqli_real_escape_string($link,$email);
$query = "SELECT * FROM users WHERE email = '$email'";

if( $result = mysqli_query($link,$query)){
  if(mysqli_num_rows($result) != 0) return true;
  else return false;
}
}

 ?>
