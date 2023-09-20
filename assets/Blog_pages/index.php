<?php
include_once("../views/top.php");
include_once ('../views/header.php');

$start =0;
if(isset($_GET['start'])){
    $start = $_GET['start'];
}
$row = getPostCount();

include_once ('../views/body.php');
?>

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
