<?php


//cek kode product
function cek_kode_product($id){
  global $con;
  $query = "SELECT kode_produk FROM Product WHERE kode_produk = '$id'";
  $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result)>0) {
      return false;
    }else {
      return true;
    }
}
//masukan data product
function add_product($kode,$nama,$deskripsi,$harga,$stock,$final_file){
$query = "INSERT INTO product (kode_produk,nama_produk,deskripsi,cover,harga,stok) values ('$kode','$nama','$deskripsi','$final_file','$harga','$stock')";
return run($query);
}

//menampilkan data product
function getproduct(){
  global $con;
  $query ="SELECT * FROM product";
      return run($query);


}

//tampil per id product
function data_perproduct($kode){
    global $con;
    $query ="SELECT * FROM product WHERE kode_produk= '$kode'";

    $result = mysqli_query($con,$query);

    return $result;


  }

  function edit_product($kode,$nama,$deskripsi,$harga,$stock,$file){
    global $con;
    $query = "UPDATE product SET kode_produk ='$kode', nama_produk ='$nama',deskripsi = '$deskripsi',cover = '$file',harga = '$harga' stok ='$stock' WHERE kode_produk = '$kode'";
    $result = mysqli_query($con,$query);
    if ($result ==$kode or$result ==$nama or$result ==$deskripsi or $result ==$harga or $result ==$stock or $result ==$file ) {
      return true;
    }else {
      return false;
    }
  }

//delete data_perproduct

function hapus_data($kode){
    $query ="DELETE FROM product WHERE kode_produk= '$kode'";
    return run($query);
}

//menampilkan product di index
function get_data_perproduct(){
    $query ="SELECT * FROM product";
    return run($query);
}
//run query

function run($query){
  global $con;
  $result = mysqli_query($con,$query);
  return $result;
}
 ?>
