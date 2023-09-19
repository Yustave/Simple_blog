<?php
include_once("top.php");
include_once("nav.php");
include_once("membership.php");
include_once("post_generator.php");
if(isset($_GET['pid'])){
    $pid = $_GET['pid'];
    $result = getSinglepost($pid);
    $posts = [];
    foreach($result as $item){ 
        $posts['title'] = $item['title'];
        $posts['writer'] =$item['writer'];
        $posts['imglink'] =$item['imglink'];
        $posts['content'] =$item['content'];
    };
    // if(isset('submit')){
    //     $file = $_FILES["file"];
    //     if($_FILES["file"]["$name"] != null ){

            
    //     }

    // }
}
?>
<div class="container">
<div class="row">
    <?php include_once("sideshow_admin.php") ?>
    <section class="col-md-9">
        <form action="" method="post" enctype="multipart/form-data" class="md-5 table-boardded p-5">
        <h2>Post Edit</h2>
        <div class="form-group">
            <label for="posttitle" class="english">Post Title</label>
            <input type="text" name="posttitle" id="posttitle" class="form-control english"
             value="<?php echo $posts['title']; ?>">
        </div><br>

        <div class="form-group">
            <label for="posttype" class="english">Post Type</label>
            <select type="text" name="posttype" id="posttype" class="form-control english" 
            value="<?php echo $posts['type']; ?>">
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
            <?php echo $posts['content']; ?>
            </textarea>      
        </div><br>

        <div class="form-group">
            <label for="postwriter" class="english">Post Writer</label>
            <input type="text" name="postwriter" id="postwriter" class="form-control english"
            value="<?php echo $posts['writer']; ?>">
        </div><br>

        <img src="../uploads/<?php echo $posts['imglink']; ?>" alt="" class="fluid>

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