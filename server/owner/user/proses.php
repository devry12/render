<?php session_start();





/* Ambil variabel */
$user_id = $_REQUEST['email'];
$pass = $_REQUEST['password'];

/* Validasi */
$error = 0;
if( empty( $user_id ) || empty( $pass ) ) {
 echo 'Tidak boleh ada kolom yang kosong.<br>';
 $error++;
} else {
 $sql = 'SELECT * FROM user where email="' . $user_id . '"';
 $query = mysqli_query( $link,$sql );
 $row = mysql_fetch_row( $query );

 if( empty( $row[0] ) ) {
  echo 'User tidak dikenal.<br>';
  $error++;
 } else {
  if( $row[1] != $pass ) {
  echo 'Password salah.<br>';
  $error++;
 } else {
  /*Daftarkan ke server sbg variabel global*/
  /* session_register() Sebaiknya tdk digunakan (Deprecated Function)
  session_register( 'ID', 'PASS' );
  */
  $_SESSION['ID'] = $user_id;
  $_SESSION['PASS'] = $pass;
 } //end else
 } //end else
}

if( $error == 0 ) {
 /* Redirect jika tidak ada error */
 header( 'Location:login_lanjut.php' );
 exit();
} else {
 echo '<a href="login.php">Kembali</a>';
 exit();
}
?>
