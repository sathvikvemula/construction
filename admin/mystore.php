<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<?php
session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");


}

?>

<body style="background-image: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190625/ourmid/pngtree-building-construction-safety-publicity-image_259702.jpg'); background-repeat: no-repeat; background-size:1228px 600px;">
<nav class="navbar navbar-light bg-danger">
  <div class="container-fluid text-white">
    
    <a class="navbar-brand text-white"><img src="../logo.jpg" alt="" style="width:50px; height:40px;"></a>

    <span>
    <i class="fas fa-user-shield"></i>
    Hello <?php
    echo $_SESSION['admin'];   ?>|
    <i class="fas fa-sign-out-alt"></i>
    <a href="form/logout.php" class="text-decoration-none text-white">Logout  </a>|
   <a href="../index.php" class="text-decoration-none text-white">Userpanel</a>
    </span>
  </div>
</nav>
<br>
    <div>
        <h2 class="text-center">Dashboard</h2><br><br>
    </div>
    <div class=" col-md-4 bg-danger text-center m-auto rounded">
        <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a><br>
    </div><br>
    <div class=" col-md-4 bg-danger text-center m-auto rounded">
        <a href="vieworders.php" class="text-white text-decoration-none fs-4 fw-bold px-5">View Orders</a>
        </div>
</body>
</html>