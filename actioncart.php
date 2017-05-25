<?php
require_once 'core/init.php';
  $quan = $_POST['quantity'];
  $kode = $_POST['kode'];
  $id = $_POST['id'];


if (addcart($quan,$kode,$id)) {
  echo "berhasil";
}else {
  echo "gagal";
}





  ?>
