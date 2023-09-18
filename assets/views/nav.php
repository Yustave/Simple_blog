<?php
// session_start();
include_once ('db_data.php');
include_once ('session.php');
?>

<div class="container-fluid bg-primary">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="index.php">Home</a>
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
          <?php
              if(checksession("username")){
                echo "<li><a class='dropdown-item english' href='logout.php'>log out</a></li>";
              }else{
                echo "
                <li><a class='dropdown-item english' href='register.php'>Register</a></li>
                <li><a class='dropdown-item english' href='login.php'>log in</a></li> ";
              }
            ?>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
</div>