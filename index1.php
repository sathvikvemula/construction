    <?php

if(isset($_POST['submit'])){
  include 'Config.php';
  $cadd1=$_POST['add1'];
  $cadd2=$_POST['add2'];
  $cadd3=$_POST['add3'];
  $cadd4=$_POST['add4'];
  $cadd5=$_POST['add5'];
  $cadd6=$_POST['add6'];
  //$cadd7=$_POST['imgdes'];
  //echo "<h1>Helloooo</h1>";
  //$imgdes="uploads/filename.jpeg";
  mysqli_query($con,"INSERT INTO payment(`add1`,`add2`, `add3`, `add4`, `add5`,`add6`) 
VALUES ('$cadd1','$cadd2','$cadd3','$cadd4','$cadd5','$cadd6')");
header("location:index.php");
}
    
?>
