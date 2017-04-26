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

      return $this->run_query($query,'gagal memasukan data');
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
