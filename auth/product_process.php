<?php
// Load file koneksi.php
require_once '../core/init2.php';

// Ambil Data yang Dikirim dari Form

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
if (isset($_FILES['foto']['name'])) {
$_FILES['foto']['tmp_name'];
}

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = $kode.$foto;

// Set path folder tempat menyimpan fotonya
$path = "../product/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $product_data = $product->insert_data_product($kode,$nama,$deskripsi,$harga,$path);

  if($product_data){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
