<?php

session_start();
include_once ('views/session.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Bllog System</title>
<link rel="stylesheet" href="css/bootstap.min.css">
<link rel="stylesheet" href="css/custom.css">
</head>
<body>

<div class="container-fluid bg-primary">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link active text-white english" aria-current="page" href="#">News</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white english" href="#">Esport</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white english">Politic</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white english">IT</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white english" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
              if(checksession("username")){
                echo getsession("username");
              }else{
                echo "Member";
              }

            ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item english" href="views/register.php">Register</a></li>
            <li><a class="dropdown-item english" href="views/login.php">log in</a></li>
            <li><hr class="dropdown-divider english"></li>
            <li><a class="dropdown-item english" href="views/logout.php">log out</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
</div>

<?php
include_once("views/header.php");
?>
<div class="container">
    <div class="row">   
<div class="row">
    <?php include_once("views/slideshow.php") ?>
    <col-md-6> 
       <div class="card">
            <div class="card-block">
                <h1>Title</h1>
                    <p>
                        A card is a flexible and extensible content container.
                        It includes options for headers and footers, 
                        a wide variety of content, contextual background 
                        colors, and powerful display options. If you’re                        
                    </p>
                    <a href="#" class="btn btn-info btn-sm float-right">Details</a>
            </div>
        </div>
    </col-md-6>
    <col-md-6> 
       <div class="card">
            <div class="card-block">
                <h1>Title</h1>
                    <p>
                        A card is a flexible and extensible content container.
                        It includes options for headers and footers, 
                        a wide variety of content, contextual background 
                        colors, and powerful display options. If you’re                         
                    </p>
                 <a href="#" class="btn btn-info btn-sm float-right">Details</a>
            </div>
        </div>
    </col-md-6>
</div>
     </section>
    </div>
</div>
<?php 

include_once("views/footer.php")
?>
<script src= "js/jquery.js"></script>
    <script src= "js/tether.min.js"></script>
    <script src= "js/bootstrap.min.js"></script>
</body>
</html>
 