<?php
class db{
  private static $INSTANCE = null;
  private $mysqli,
          $HOST   = 'localhost',
          $USER   = 'root',
          $PASS   = '',
          $DBNAME = 'render';

    public function __construct()
    {
      $this->mysqli = new mysqli($this->HOST,$this->USER,$this->PASS,$this->DBNAME);
      if(mysqli_connect_error()){
        die("gagal koneksi");
      }

    }
  /*singleton patten, menguji konekasi agar tidak double*/
 public static function getInstance(){
   if(!isset( self::$INSTANCE)){
     self::$INSTANCE = new db();
   }
   return self::$INSTANCE;
 }

 public function insert($table,$data = array())
 {


   //mengambil kolom

   $kolom = implode(",", array_keys($data));

   //mengambil nilai
   $nilaiarray = array();
   $i = 0;
   foreach ($data as $key => $nilai) {
     if(is_int($nilai) ){
       $nilaiarray[$i] = $this->escape($nilai);
     }else{
      $nilaiarray[$i] = "'" . $this->escape($nilai) . "'";
    }
     $i++;
   }
   $nilai = implode(",", $nilaiarray);


      $query = "INSERT INTO $table ($kolom) values ($nilai)";

      return $this->run_query($query,'gagal mendaftar');
 }


public function get_info($table, $kolom,$nilai)
{
   if(!is_int($nilai) ) $nilai ="'".$nilai."'";
  $query  = "SELECT * FROM $table WHERE $kolom = $nilai";
  $result = $this->mysqli->query($query);

  while ($row = $result->fetch_assoc( )){
     return $row;
      }

}

public function get_level($tabel,$kolom,$nilai)
{
  $query ="SELECT level FROM $tabel WHERE $kolom = '$nilai' ";
  $result = $this->mysqli->query($query);
  while ($row = $result->fetch_assoc( )){
     return $row;
      }
}

public function ambildata($tabel,$kolom,$nilai)
{
  $query ="SELECT * FROM $tabel WHERE $kolom = '$nilai' ";
  $result = $this->mysqli->query($query);
  while ($row = $result->fetch_assoc( )){
     return $row;
      }
}

public function cek_data_profile($table, $kolom,$nilai)
{
  $query ="SELECT * FROM $table WHERE $kolom = $nilai";
  $result = $this->mysqli->query($query);
  if ($result->num_rows>0) {
    return true;
  }else {
    return false;
  }
}

public function edit($data = array())
{
$depan = $data['namadepan'];
$belakang = $data['namabelakang'];
$email = $data['email'];
$jekel = $data['jekel'];
$tlp = $data['tlp'];
$alamat = $data['alamat'];
$id_users = $data['id'];


$query = "UPDATE profile SET nama_depan = '$depan',nama_belakang = '$belakang',jenis_kelamin = '$jekel',alamat = '$alamat',no_tlp = '$tlp' WHERE id_users = $id_users";

$result = $this->mysqli->query($query);

}

public function tambah($data = array())
{
$depan = $data['namadepan'];
$belakang = $data['namabelakang'];
$jekel = $data['jekel'];
$tlp = $data['tlp'];
$alamat = $data['alamat'];
$id_users = $data['id'];


$query = "INSERT INTO profile (nama_depan, nama_belakang, jenis_kelamin, alamat, no_tlp, id_users) values ('$depan','$belakang','$jekel','$alamat','$tlp','$id_users')";
$result = $this->mysqli->query($query);
}
public function ambilprofile($data)
{
    $query = "SELECT * FROM profile WHERE id_users = $data";
    $result = $this->mysqli->query($query);

    while ($row = $result->fetch_assoc()) {
      return $row;
    }

}


//memasukan avatar

public function avatar($data,$id)
{
  $query = "UPDATE profile SET avatar = '$data' WHERE id_users = $id";
  $result = $this->mysqli->query($query);
  return $result;
}
public function run_query($query,$msg)
{
  if($this->mysqli->query($query)) return true;
  else die($msg);
}

 public function escape($name)
 {
     return $this->mysqli->real_escape_string($name);
 }

}
 ?>
