<?php
class product{

 public function __construct(){
   $this->_db = db::getInstance();
 }





public function insert_product($data = array())
{
    $data = $this->_db->insert_goods($data);
}

public function insert_data_product()
{
    $data = $this->_db->data_insert_product($kode,$nama,$deskripsi,$harga,$path);

    return $data;
}
 }
 ?>
