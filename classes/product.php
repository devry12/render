<?php
class product{

 public function __construct(){
   $this->_db = db::getInstance();
 }





public function insert_product($data = array())
{
    $data = $this->_db->insert_goods($data);
}

 }
 ?>
