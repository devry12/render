<?php

//register user
function register_user($username,$email,$password){
global $con;

$username = mysqli_real_escape_string($con,$username);
$email = mysqli_real_escape_string($con,$email);
$password = password_hash($password,PASSWORD_DEFAULT);
  $query = "INSERT INTO users (username,email,password) values ('$username','$email','$password')";
  if (mysqli_query($con,$query)  ) {
    return true;
  }else {
    return false;
  }
}

//cek username user
function register_cek_nama($username){
 global $con;
  $username = mysqli_real_escape_string($con,$username);
  $query = "SELECT * FROM users WHERE username = '$username'";

  if ($result = mysqli_query($con,$query)) {
    if (mysqli_num_rows($result) == 0) {
      return true;
    }else {
      return false;
    }
  }
}

  //cek email user
  function register_cek_email($email){
   global $con;
    $email = mysqli_real_escape_string($con,$email);
    $query = "SELECT * FROM users WHERE email = '$email'";

    if ($result = mysqli_query($con,$query)) {
      if (mysqli_num_rows($result) == 0) {
        return true;
      }else {
        return false;
      }
    }
}

//menu login

function cek_data_login($username,$password){
 global $con;
 $username = mysqli_real_escape_string($con,$username);
  $password = mysqli_real_escape_string($con,$password);

  $query = "SELECT password FROM users WHERE username = '$username'";
  $result = mysqli_query($con,$query);
  $result = mysqli_fetch_assoc($result);

  if($password = password_verify($password,$result['password'])){
    return true;
  }else {
    return false;
  }

  }
//cek username
  function login_cek_nama($username){
   global $con;
    $username = mysqli_real_escape_string($con,$username);
    $query = "SELECT * FROM users WHERE username = '$username'";

    if ($result = mysqli_query($con,$query)) {
      if (mysqli_num_rows($result) > 0) {
        return true;
      }else {
        return false;
      }
    }
  }


  //cek id user

function cek_id($data){
  global $con;
  $query = "SELECT * FROM users WHERE username = '$data'";
  $result = mysqli_query($con,$query);
  while ($row = mysqli_fetch_assoc($result)) {
    return $row;
  }
}

//cek data profile

function cek_profile_data($data){
  global $con;
  $query = "SELECT * FROM profile WHERE id_users = $data";
  $result = mysqli_query($con,$query);
  if (mysqli_num_rows($result)>0) {
    return true;
  }else {
    return false;
  }
}

//get data users
function getprofile($data){
  global $con;
  $query = "SELECT * FROM profile WHERE id_users = $data";
  $result = mysqli_query($con,$query);

  $row = mysqli_fetch_assoc($result);
  return $row;

}

//edit data profile

function edit_data($depan,$belakang,$gender,$tlp,$alamat,$users){
  global $con;
  $query = "UPDATE profile SET nama_depan = '$depan',nama_belakang = '$belakang',jenis_kelamin ='$gender',no_tlp ='$tlp',alamat='$alamat' WHERE id_users ='$users'";
  $result = mysqli_query($con,$query);
  return $result;

}
//masukan data profile
function input_data($depan,$belakang,$gender,$tlp,$alamat,$users){
  global $con;
  $query = "INSERT INTO profile (nama_depan,nama_belakang,jenis_kelamin,no_tlp,alamat,id_users) values ('$depan','$belakang','$gender','$tlp','$alamat','$users')";
  $result = mysqli_query($con,$query);
  return $result;

}
//masukan avatar
function avatar($img,$id){
  global $con;
  $query = "UPDATE profile SET avatar = '$img' WHERE id_users ='$id'";
  $result = mysqli_query($con,$query);
  return $result;

}


 ?>
