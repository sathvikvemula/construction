<?php
if(isset($_POST['submit'])){
    include 'Config.php';
//$con=mysqli_connect('localhost','root','','products');
    $product_name=$_POST['Pname'];
    $product_price=$_POST['Pprice'];
    $product_image=$_FILES['Pimage'];
    $product_details=$_POST['Pdetails'];
    $product_id=$_POST['Id'];
    
    $image_loc=$_FILES['Pimage']['tmp_name'];
    $image_name=$_FILES['Pimage']['name'];
    $img_des="Uploadimage/".$image_name;
    move_uploaded_file($image_loc,"Uploadimage/".$image_name);

    $product_category=$_POST['Pages'];
    echo "<h1>$product_category</h1>";
    if($product_category==='other'){
        
        $product_newc=$_POST['newcategory'];
        //echo "<h1>$product_newc</h1>";
        //$sql="CREATE TABLE `$product_newc`(Id INT(11), PName VARCHAR(50), PPrice VARCHAR(50), Pimage VARCHAR(200), PCategory VARCHAR(50), Pdetails VARCHAR(200),primary key (Id))";
       // if(mysqli_query($con,$sql))
        //{
          //  $product_name='';
            mysqli_query($con,"INSERT INTO `cement`(`Id`,`PName`, `PPrice`, `Pimage`, `PCategory`,`Pdetails`) 
            VALUES ('$product_id','$product_name','$product_price','$img_des','$product_newc','$product_details')");
            mysqli_query($con,"INSERT INTO `admin2`(`tname`) VALUES ('$product_newc')");
            mysqli_query($con,"INSERT INTO `admin1`(`Id`,`tname`) VALUES ('$product_id','$product_newc')");
            header("location:index.php");
    }
    else{
//insert product
//echo "<h1>Helloooo</h1>";
mysqli_query($con,"INSERT INTO `cement`(`Id`,`PName`, `PPrice`, `Pimage`, `PCategory`,`Pdetails`) 
VALUES ('$product_id','$product_name','$product_price','$img_des','$product_category','$product_details')");
mysqli_query($con,"INSERT INTO `admin1`(`Id`,`tname`) VALUES ('$product_id','$product_category')");
header("location:index.php");
    }
}


?>