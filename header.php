<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
</head>
<body>
    <?php
    session_start();
    $count=0;
    if(isset($_SESSION['cart'])){
        $count=count($_SESSION['cart']);
    }
    ?>
<nav class="navbar navbar-light bg-danger sticky-top">
  <div class="container-fluid">
      <img src="logo.jpg" alt="" style="width:50px; height:40px;">
    <!--<a class="navbar-brand">Logo</a>-->
    
    <div class="d-flex">
    <a href="index.php" class="text-white text-decoration-none pe-2"><i class="fas fa-home"></i>Home</a>
    <a href="viewCart.php" class="text-white text-decoration-none pe-2"><i class="fas fa-cart-plus"></i>Cart(<?php echo $count; ?>) |</a>
    <a href="services.php" class="text-white text-decoration-none pe-2"><i class="fab fa-servicestack"></i>Services</a>
    <a href="maps.php" class="text-white text-decoration-none pe-2"><i class="fas fa-map-marker-alt"></i>Shops near me</a> 
    <span class="text-white pe-2">
<i class="fas fa-user"></i> Hello
    <?php
    if(isset($_SESSION['user'])){
    
   echo $_SESSION['user'];
    echo "
    <a href='form/logout.php' class='text-white text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>Logout</a>
    ";
    }
    else{
        echo "
    <a href='form/login.php' class='text-white text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>Login</a>
    ";

    }
    ?>
    
   <a href="admin/form/login.php" class="text-white text-decoration-none pe-2">Admin</a>
    </span>
  
</nav>
</div></div>

</body>
</html>