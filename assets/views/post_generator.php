<?php
require_once("db_data.php");

function uploadPost($title,$type,$writer,$content,$imglink){
      $created_at = get_time();
      $db = dbconnect();
      $qry = "INSERT INTO post (title,type,content,writer,imglink,created_at)
                VALUES('$title','$type','$writer','$content','$imglink','$created_at')";
      $result = mysqli_query($db,$qry);
      return $result;
}

function getAllpost($type){
    $db=dbconnect();
    if($type == 1){
        $qry = "SELECT * FROM post WHERE type=$type";
    }else{
        $qry = "SELECT * FROM post";
    }
    $result = mysqli_query($db,$qry);
    return $result;
}

function getSinglepost($pid){
    $db = dbconnect();
    $qry = "SELECT * FROM post WHERE id=$pid";
    $result = mysqli_query($db,$qry);
    return $result;
}
?>