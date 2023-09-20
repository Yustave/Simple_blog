<?php 
include_once("../views/top.php");

if(isset($_POST['submit'])){
    $username= $_POST["username"];
    $email= $_POST["email"];
    $password= $_POST["pass"];

    $ret = registerUser($username,$email,$password);
    $message = "";
switch($ret){
    case "success";
    $message = "Register success";
    setsession("username",$username);
    setsession("email",$email);
    if($username == 'Yustave' AND $email == 'yustavelavan@gmail.com'){
        header('Location:admin.php');
    }else{
        header('Location:index.php');
    }
    ;break; 
    case "Email is already in used";
        $message = "Email is already in used";break;
    case "fail";
        $message = "Register Fail";break;
    case "Fail";
        $message = "authetication fail";break;
    default :
    break;    
}
echo " <div 'class=alert alert-warning alert-dismissible fade show' role='alert'>".
$message.
"</div>";
}
?>


<style>
    .form{ 
        width: 40vw;
        margin: 0 auto;
        border: 0.5px solid;
        padding: 20px 40px;
    }


</style>
<br><br><br>
<form action="" method="post" >
 <section class="form">
    <h3>Register To Be A Consalation</h3><br><br>
    <div>
    <input type="text" class="form-control" name="username" id="InputUsername" placeholder="Username"><br>
    <input type="email" class="form-control" name="email" id="InputEmail1" placeholder="Email address"><br>
    <input type="password" class="form-control" name="pass" id="Password" placeholder="Password"><br>
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div><br>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
 </section>
</form>
<br><br><br>


<?php 
include_once("../views/footer.php");
include_once("../views/base.php")
?>

 