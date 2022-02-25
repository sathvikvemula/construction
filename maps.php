<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shops near you</title>
    <?php
    include 'header.php';
    include 'Config.php';
    ?>
</head>
<body onload="getLocation()" style="background-image: url('https://media.istockphoto.com/photos/map-pin-icon-with-network-polygon-graphic-abstract-background-picture-id1251263484?k=20&m=1251263484&s=612x612&w=0&h=w2jOTqIzrQEdQ-AZM0ovrS77KnMzWUI4i0mJ21IS9C0='); background-repeat: no-repeat; background-size:1228px 600px;">
<script>
    function getLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);

        }
    }

    function showPosition(position){
        document.getElementById("lats").value=+position.coords.latitude;
        document.getElementById("longs").value=+position.coords.longitude;
    }
</script>
<form action="maps.php" method="POST">

<input type="hidden" name="lats"  id="lats">
<input type="hidden" name="longs" id="longs">

<div class="text-center p-5">
<button type="submit" class="btn btn-success" name="subm" id="subm">Shops near me</button>
</div>
</form>

<?php
if(isset($_POST['subm'])){

   $l1 = $_POST['lats'];
   $l2 = $_POST['longs'];

   header("Location: near.php?lat=$l1&long=$l2");
   

}

?>

</body>
</html>