<?php
include_once("top.php");
include_once("nav.php");
include_once("membership.php");
include_once("post_generator.php");

if(isset($_POST['submit'])){
    $posttitle =  $_POST["posttitle"];
    $posttype =  $_POST["posttype"];
    $content =  $_POST["postcontent"];
    $writer =  $_POST["postwriter"];
    $file = $_FILES['file'];

    $imglink = mt_rand(time(),time()). "_". $_FILES['file']['name'].mt_rand(time(),time());
    move_uploaded_file($_FILES['file']['tmp_name'],'../uploads/'.$imglink);


    $bol = uploadPost( $posttitle,$posttype,$content,$writer,$imglink);
    echo $bol ? "true":"false";
}

?>

<div class="container">
<div class="row">
    <?php include_once("slideshow.php") ?>
    <section class="col-md-9">
        <div class="row">
            <?php
                $result = getAllpost(2);
                foreach($result as $post){
                    echo  ' <div class="col-md-6">
                            <div class="card">
                                <div class="card-block">
                                    <h1>'.$post["title"].'</h1>
                                    <p>'.substr($post["content"],0,100).'</p>
                                    <a href="postedit.php?pid='.$post["id"].'" class="btn btn-danger btn-sm float-right">Edit</a>
                                </div>
                            </div>
                        </div>';
                }    
            ?>
        </div>
    </section>
   
</div>
     </section>
    </div>
</div>

<?php
include_once ('footer.php');
include_once("base.php")
?>