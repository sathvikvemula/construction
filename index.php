<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home page</title>
    <?php
    include 'header.php';
    ?>
   <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<style>
.mySlides {display:none;}
</style>
</head>
<body style="background-image: url('https://wi.wallpapertip.com/wsimgs/197-1972272_pastel-rainbow-wallpaper-pastel-rainbow-background-vertical.jpg'); background-repeat: no-repeat; background-size:1228px 100%;">
<!--<img src="main.jpg" class="img-fluid" style="width:100%; height:500px;" alt="Responsive image">-->

<div class="w3-content w3-section" style="max-width:1215px; height:500px;">
  <img class="mySlides" src="main.jpg" style="width:100%; height:500px;">
  <img class="mySlides" src="https://www.build-review.com/wp-content/uploads/2019/12/construction-2.jpg" style="width:100%; height:500px;">
  <img class="mySlides" src="https://news.utexas.edu/wp-content/uploads/2020/10/construction-1400px.jpg" style="width:100%; height:500px;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

    <div class="container-fluid">
        <div class="col-md-12">
        <div class="row">
    <h1 class="text-warning font-monospace my-3 text-center"><marquee behavior="scroll" direction="left">Build Your Dream House</marquee>
  </h1>
<?php
    include 'Config.php';
   $result=mysqli_query($con,"select * from admin2");
   $rowcount = mysqli_num_rows( $result );
   for ($x = 1; $x <= $rowcount; $x++){
    $row=mysqli_fetch_array($result);
    $r=mysqli_query($con,"select Pimage from cement where PCategory='$row[tname]'");
    $r1=mysqli_fetch_array($r);
    echo "<div class='col-md-6 col-lg-4 m-auto mb-3 border border-primary rounded p-1' style='width: 24rem;' >";
    echo "<div class='row no-gutters'>";    
   echo "<div class='col-md-4'>";
   //echo "<h2>$row[tname]</h2>";
    echo "<img src='admin/product/$r1[Pimage]' class='card-img-top' style='width: 170px; height: 300px;'>";
    echo "</div>";
    echo "<div class='col-md-8'>";
   echo "<div class='card-body'>";
    $r2=mysqli_query($con,"select * from cement where PCategory='$row[tname]'");
    $rc=mysqli_num_rows( $r2 );
    for ($x1 = 1; $x1 <= $rc; $x1++){
        $r3=mysqli_fetch_array($r2);
        echo "<a href='details.php?id=$r3[PName]' class='card-title'><ul>$r3[PName]</ul></a>";
    }
    echo  "</div>";
    echo  "</div>";   
        echo "</div>";
        echo  "</div>";
    
 }
  // while($table[] = mysqli_fetch_array($result)) {
       // echo "<h2>$rowcount</h2>";
        //$Record = mysqli_query($con,"select * from $table[0]")
    // $Record = mysqli_query($con,"select * from $table[0]");
     //while($row=mysqli_fetch_array($Record)){    
        //echo "<a href='details.php?id={$row['Id']}' class='card-title'><ul>$row[PName]</ul></a>";
       // echo "<ul>$row[PName]</ul>";
         //       }}
    // echo "<div class='col-md-6 col-lg-4 m-auto mb-3 border border-primary rounded p-1' style='width: 24rem;' >";
    //echo "<div class='row no-gutters'>";    
   //echo "<div class='col-md-4'>";
   //$record = mysqli_query($con,"select Pimage from $table[0] where PName=' '");
   //$r=mysqli_fetch_array($record);
   //echo "<h3>$r[Pimage]</h3>";
  // while($r=mysqli_fetch_array($record)){
   
   // echo "<img src='../admin/product/$r[Pimage]' class='card-img-top' style='width: 170px; height: 300px;'>";}
   // echo "</div>";
    //echo "<div class='col-md-8'>";
  // echo "<div class='card-body'>";
   //         while($row=mysqli_fetch_array($Record)){    
    //echo "<a href='details.php?id={$row['Id']}' class='card-title'><ul>$row[PName]</ul></a>";
  //  echo "<ul>$row[PName]</ul>";
     //       }
   //     echo  "</div>";
  //  echo  "</div>";   
   //     echo "</div>";
   //     echo  "</div>";

   //}
?>
</div>
</div>
</div>
</body>
</html>