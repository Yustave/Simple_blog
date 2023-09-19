<?php
include_once"post_generator.php";
?>

<div class="container">
    <div class="row">
        <?php include_once("slideshow.php") ?>
        <section class=""col-md-9>
            <div class="row">
                <?php
                $result= "";
                if (checksession("username")){
                    $result = getAllpost(2);
                }else{
                    $result = getAllpost(1);
                }foreach($result as $post){
                $pid = $post['id'];    
                echo  ' <div class="col-md-6">
                            <div class="card">
                            <div class="card-block">
                            <h1>'.$post["title"].'</h1>
                            <p>'.substr($post["content"],0,100).'</p>
                            <a href="detail.php?pid='.$pid.'" class="btn btn-info btn-sm float-right">Details</a>
                                </div>
                        </div>
                        </div>';
                };
                ?>
            </div> 
        </section>   
    </div>
</div>
    