<?php
include_once("../views/top.php");

if(isset($_POST['submit'])){
    $posttitle =  $_POST["posttitle"];
    $posttype =  $_POST["posttype"];
    $content =  $_POST["postcontent"];
    $writer =  $_POST["postwriter"];
    $file = $_FILES['file'];

    $imglink = mt_rand(time(),time()). "_". $_FILES['file']['name'].mt_rand(time(),time());
    move_uploaded_file($_FILES['file']['tmp_name'],'../uploads/'.$imglink);


    $bol = uploadPost( $posttitle,$posttype,$content,$writer,$imglink);
}
$start = 0;
if(isset($_GET['start'])){
    $start = $_GET['start'];
}
$row = getPostCount();

?>

<div class="container">
<div class="row">
    <?php include_once("../views/slideshow.php") ?>
    <section class="col-md-9">
        <div class="row">
            <?php
                $result = getAllpost(2,$start);
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
    

<div class="container">
    <div class="col-4 offset-md-4">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php
                $t=0;
                for($i=0;$i<$row;$i+=10){
                $t++;
                echo '<li class="page-item"><a href="index.php?start='.$i.'" class="page-link">'.$t.'</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </div>
</div>

<?php
include_once ('../views/footer.php');
include_once("../views/base.php")
?>