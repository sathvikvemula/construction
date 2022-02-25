<html>
<head>
    <title>View Orders</title>
</head>
<body style="background-image: url('https://wi.wallpapertip.com/wsimgs/197-1972272_pastel-rainbow-wallpaper-pastel-rainbow-background-vertical.jpg'); background-repeat: no-repeat; background-size:1228px 600px;">
<?php
$dir_name = "../uploads/";
$images = glob($dir_name."*.jpeg");
$con=mysqli_connect('localhost','root','','ecommerce');
$sql="select * from payment";
$rs=mysqli_query($con,$sql);
$i=0;
while($row = mysqli_fetch_array($rs))
    {
       
      echo "<h2 style='text-align: center;'> Customer Name: $row[add1]</h2>";
      echo "<p style='text-align: center;'> Customer Address: $row[add2] $row[add3] $row[add4] $row[add5] $row[add6]</p>";
      //echo $row["imgdes"];
      echo "<br>";
      //foreach($images as $image) {
         echo "<img src=$images[$i] style='padding-left: 140px;'>";
         echo "<br>";
         $i++;
         echo "<hr>";
         //echo "<p>----------------------------------------------------------------------------------------------------------------------------------------</p>";
     // }
     
    }
    echo "<p style='text-align: center;'><a href='mystore.php' style='text-decoration: none;'><-back</a></p>";

?>
</body>
</html>