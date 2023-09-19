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
    <?php include_once("sideshow_admin.php") ?>
    <section class="col-md-9">
        <form action="" method="post" enctype="multipart/form-data" class="md-5 table-boardded p-5">
        <h2>Post Upload</h2>
        <div class="form-group">
            <label for="posttitle" class="english">Post Title</label>
            <input type="text" name="posttitle" id="posttitle" class="form-control english">
        </div><br>

        <div class="form-group">
            <label for="posttype" class="english">Post Type</label>
            <select type="text" name="posttype" id="posttype" class="form-control english">
                <option value="1">Free Post</option>
                <option value="2">Paid Post</option>
        </div><br>

        <div class="form-group">        
                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                <input type="file" name="file" class="form-control" id="inputGroupFile01">
        </div>

        <div class="form-group">
            <label for="postcontent" class="english">Post Content</label>
            <textarea type="text" name="postcontent" id="postcontent"  class="form-control english" rows='5'>
            </textarea>      
        </div><br>

        <div class="form-group">
            <label for="postwriter" class="english">Post Writer</label>
            <input type="text" name="postwriter" id="postwriter" class="form-control english">
        </div><br>

        <div class="row no-gutter">
            <button class="btn btn-outline-primary">cancle</button>
            <button class="btn btn-outline-primary" name="submit">upload</button>
        </div>
        </form>

    </section>
   
</div>
     </section>
    </div>
</div>

<?php
include_once ('footer.php');
include_once("base.php")
?>