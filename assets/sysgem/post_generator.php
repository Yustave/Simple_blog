<?php
require_once("db_data.php");

function uploadPost($title,$type,$writer,$content,$imglink,$subject){
      $created_at = get_time();
      $db = dbconnect();
      $qry = "INSERT INTO post (title,type,subject,content,writer,imglink,created_at)
                VALUES('$title','$type','$subject','$content','$writer','$imglink','$created_at')";
      $result = mysqli_query($db,$qry);
      return $result;
}

function getAllpost($type,$start){
    $db=dbconnect();
    if($type == 1){
        $qry = "SELECT * FROM post WHERE type=$type LIMIT $start,10";
    }else{
        $qry = "SELECT * FROM post LIMIT $start,10";
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

function updatePost($epid,$title,$type,$writer,$content,$imglink,$subject){
    $db = dbconnect();
    $qry = "UPDATE post SET title='$title', type='$type', subject='$subject', writer='$writer',content='$content',imglink='$imglink'
    WHERE id= $epid";
    $result = mysqli_query($db,$qry);
    if($result){
        header("Location:allpost.php");
    }else{
        echo "post insert fail";
    };
}

function filteringPost($subject,$type){
    $db=dbconnect();

    // if($type == 1){
    //     $qry = "SELECT * FROM post WHERE subject=$subject && type=$type";
    // }else{
    //     $qry = "SELECT * FROM post subject=$subject";
    // }
    
    $qry = "SELECT * FROM post WHERE subject=$subject AND type=$type";
    $result = mysqli_query($db,$qry);
    return $result;
}

function getallsubject(){
    $db = dbconnect();
    $qry =" SELECT * FROM subject";
    $result = mysqli_query($db,$qry);
    return $result;
}

function getPostCount(){
    $db = dbconnect();
    $qry = "SELECT * FROM post";
    $result = mysqli_query($db,$qry);

    return mysqli_num_rows($result);
}
?>