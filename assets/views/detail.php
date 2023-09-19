<?php

include_once ('session.php');
include_once ('top.php');
include_once ('nav.php');
include_once ('header.php');
include_once ('post_generator.php');

if(isset($_GET['pid'])){
    $pid = $_GET["pid"];
    $result = getSinglepost($pid);
}
?>
<div class="container my-3">
    <div class="card col-md-8 offset-md-2">     
        <?php
          $result = getSinglepost($pid);
          foreach($result as $data){
            echo '<div class="card-header">'.$data["title"].'<span class=float-right>'.$data["created_at"].'</span> </div>';
            echo '<img src="../uploads/'.$data["imglink"].'" alt="">';
            echo '<div class="card-block">'.$data["content"].'</div>';
            echo '<div class="card-footer">'.$data["writer"].'</div>';
          };
        ?>
    </div>
</div>

<?php
include_once ('footer.php');
include_once ('base.php');

?>