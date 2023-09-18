<?php
require_once "db_data.php";
function registerUser($username,$email,$pass){
      if(check_Username($username) &&  check_email($email) && check_pass($pass)){
        return insertdata($username,$email,$pass);
      }else{
      return "Fail";
      }
};

function loginuser($email,$pass){
  if(check_email($email) && check_pass($pass)){
     return login($email,$pass);
  }else{
    return 'auth fail';
  }
};
function check_Username($username){
      if(strlen($username) >= 6){
        $nameC = preg_match("/^[\w]+$/ ",$username);
        return $nameC;
      }else{
        return false;
      }
};
function check_email($email){
    if(strlen($email) >= 15){
        $emailC = preg_match("/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}+$/ ",$email);
        return $emailC;
      }else{
        return false;
      }

};

function check_pass($pass){
  if(strlen($pass)>= 8){
    $passC = preg_match('/(?=.*[A-Z])+(?=.*[a-z])+(?=.*[\d])+(?=.*[^\w])/',$pass);
    return $passC;
  }else{
    return false;
  }
};


?>