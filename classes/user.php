<?php

class user{

 public function __construct(){
   $this->_db = db::getInstance();

 }

public function register_user($data = array())
{
    if($this->_db->insert('users',$data)) return true;
    else return false;
}


public function login_user($username,$password)
{

    $data = $this->_db->get_info('users', 'username', $username);

    if(password_verify($password,$data['password'])){
      return true;
    }else {
      return false;
    }
}


public function check_nama ($username)
{
    $data = $this->_db->get_info('users','username',$username);
    if( empty($data)) return false;
    else return true;
}


}


 ?>
