<?php
include_once("../views/top.php");

if(isset($_GET['sid'])){
    $sid = $_GET['sid'];
};
if(isset($_GET['start'])){
    $start = $_GET['start'];
}
$row = getPostCount();
?>

<div class="container">
    <div class="row">
        <?php include_once("../views/slideshow.php") ?>
        <section class=""col-md-9>
            <div class="row">
            <?php
                $result= "";
                if (checksession("username")){
                    $result = filteringPost($sid,2);
                }else{
                    $result = filteringPost($sid,1);
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
include_once ('../views/base.php');
?>
