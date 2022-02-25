<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>details</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body style="background-image: url('https://wi.wallpapertip.com/wsimgs/197-1972272_pastel-rainbow-wallpaper-pastel-rainbow-background-vertical.jpg'); background-repeat: no-repeat; background-size:1228px 600px;">
<?php
include 'Config.php';
$Id=$_GET['id'];
//$Record=mysqli_query($con,"select tname from admin1 where Id=$Id");
//$row1=mysqli_fetch_array($Record);
//echo "$row1[tname]";
$Record1=mysqli_query($con,"select * from cement where PName='$Id'");
$row=mysqli_fetch_array($Record1);
    echo "<div class='col-md-6 col-lg-4 m-auto mt-5 mb-3 border border-primary rounded p-2' style='width: 35rem;' >";
    echo "<div class='row no-gutters'>";    
    echo "<div class='col-md-4'>";
    echo "<img src='admin/product/$row[Pimage]' class='card-img' style='width: 180px; height: 450px;'>";
    echo "</div>";
    echo "<div class='col-md-8'>";
    echo "<div class='card-body'>";
    echo "<form action='Insertcart.php' method='POST'>";
echo "<h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>";
echo "<p class='card-text text-danger fs-4 fw-bold'>RS: $row[PPrice]</p>";
echo "<p class='card-text text-danger fs-4 fw-bold'><pre>$row[Pdetails]</pre></p>";
echo "<input type='hidden' name='PName' value ='$row[PName]'>";
echo "<input type='hidden' name='PPrice' value ='$row[PPrice]'>";
echo "<input type='number'name='PQuantity' value= min='1' max='20' placeholder='quantity'><br><br>";
echo "<input type='submit' name='addcart' class='btn btn-warning text-white w-100' value='Add To Cart'>";
echo "<a href='index.php' class='text-center text-decoration-none'><-back</a>";
echo "</form>";
echo  "</div>";
    echo  "</div>";   
        echo "</div>";
                echo  "</div>";
?>
</body>
</html>