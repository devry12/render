<?php

require_once '../core/init.php';
$kode = $_GET['kode'];
if (isset($kode)) {

  if (hapus_data($kode)){
     ob_start(header('location: product.php'));
}else{
  echo "data tidak dapat di hapus";
}
}

?>
