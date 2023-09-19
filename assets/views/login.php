<?php 
// session_start();
include_once("top.php");
include_once("nav.php");
include_once("membership.php");

if(isset($_POST['submit'])){
    $email= $_POST["email"];
    $password= $_POST["pass"];
    
$ret = loginuser($email,$password);
$message = "";
switch($ret){
    case "login success";
        $message = "Login Success";
        setsession("email",$email);     
       if(getsession('username') === "Yustave" && $email == 'yustavelavan@gmail.com'){
        header('Location:admin.php');
        }else{ 
        header('Location:admin.php'); 
    };
        break;
    case "log in fail";
        $message = "log in Fail";break;
    case "Auth Fail";
        $message = "email and password donesn't meeet requirment";break;
    default :
    break;  
}
echo " <div 'class=alert alert-warning alert-dismissible fade show' role='alert'>".
$message.
"</div>";
};
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
<form action="" method="post">
 <section class="form">
    <h3>Log in to your account</h3><br><br>
    <div>
    <input type="email" class="form-control" name="email" id="InputEmail1" placeholder="Email address"><br>
    <input type="password" class="form-control" name="pass" id="Password" placeholder="Password"><br>
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div><br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
 </section>
</form>
<br><br><br>


<?php 
include_once("footer.php");
include_once("base.php")
?>

 