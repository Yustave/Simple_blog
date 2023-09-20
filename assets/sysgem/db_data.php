<?php
session_start();
define('DB_HOST','localhost');
define('DB_NAME','simple_blog');
define('DB_USER','root');
define('DB_PASS','');

function dbconnect(){
      $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
      if(mysqli_connect_errno()){
        echo "Database connection fail";
      }else{
        return $db;
      }
}

function insertdata($username,$email,$pass){
    $db = dbconnect();
    $curTime = get_time();
    $qry = "SELECT * FROM member WHERE email='$email'";
    $result = mysqli_query($db,$qry);
    if(mysqli_num_rows($result)>0){
        return "Email is already in used";
    }else{ 
    $qry = "INSERT INTO member (name,email,password,created_at,updated_at) 
            VALUES
            ('$username','$email','$pass','$curTime','$curTime')";
             $result = mysqli_query($db,$qry);
             if($result==1){
                return 'success';
             }else{
                return 'fail';
             }
    }   
}

// function encodePass($pass){
//     $cryptpass  = md5($pass);
//     $cryptpass  = sha1($cryptpass );
//     $cryptpass = crypt($cryptpass ,$cryptpass);   
//     return $cryptpass;
// }

function login($email,$password){

  // $encpass =encodePass($password);
  $db = dbconnect();
  $qry = "SELECT name FROM member WHERE email='$email' AND password='$password'";
  $result = mysqli_query($db,$qry);
  if($result){
    foreach($result as $str){
      $username = $str['name'];
      setsession('username',$username);
      setsession('email',$email);
      return 'login success';
    }
  }else{
    return 'login fail';
  }
}


function get_time(){
    return date("Y-m-d H:m:s", time());
}




?>