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

public function level ($user)
{
    $data = $this->_db->get_level('users','username',$user);
    $level = $data['level'];

    if($level == 1) return true;
    else return false;
}


public function iduser ($user)
{
    $data = $this->_db->ambildata('users','username',$user);

  return $data;

}

public function profile ($user)
{
  $data = $this->_db->cek_data_profile('profile','id_users',$user);

  return $data;

}

//upload avatar

public function avatar($data,$id)
{
  $data = $this->_db->avatar($data,$id);
}




public function edit_profile($data=array())
{
    $datas = $this->_db->edit($data);
}

public function insert_profile($data = array())
{
    $data = $this->_db->tambah($data);
}

public function data_user($data)
{
    $data = $this->_db->ambilprofile($data);
    return $data;
}

}
 ?>
