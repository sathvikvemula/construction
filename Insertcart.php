<?php
session_start();
//session_destroy();
include 'Config.php';
if(isset($_SESSION['user'])){
    
    //$Name=$_SESSION['user'];
    //$sql="CREATE TABLE `$Name`(Id Int(11) AUTO_INCREMENT,PName VARCHAR(50), PPrice VARCHAR(50), PQuantity VARCHAR(50), primary key (Id))";
    //if(mysqli_query($con,$sql)){
      //  echo "
       //<script>
       //alert('successfull');
       //window.location.href='viewCart.php';
       //</script>
      //";
    

$product_name=$_POST['PName'];
$product_price=$_POST['PPrice'];
$product_quantity=$_POST['PQuantity'];
if(isset($_POST['addcart'])){
    //$check_product= array_column($_SESSION['cart'],'productName');
    //if(in_array($product_name, $check_product)){
    //    echo "
    //    <script>
     //   alert('product already added');
     //   window.location.href='index.php';
     //   </script>
    //    ";
    //}

   // else{
   //    $sql1="INSERT INTO `$Name`(`PName`, `PPrice`, `PQuantity`,) 
     //  VALUES ('$product_name','$product_price','$product_quantity')";
       //if(mysqli_query($con,$sql1))
      // {
       // echo "
       //<script>
       //alert('successfull');
       //window.location.href='index.php';
       //</script>
      //";
       // }}
    
    $_SESSION['cart'][]=array('productName'=> $product_name, 
                         'productPrice' => $product_price, 
                        'productQuantity'=> $product_quantity);
                         header("location:viewCart.php");

    //}   

}
    //remove product

    if(isset($_POST['remove'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['productName'] === $_POST['item'] ){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                header('location:viewCart.php');
            }
        }
    }

    //update product
    //if(isset($_POST['update'])){
      //  foreach($_SESSION['cart'] as $key => $value){
        //    if($value['productName'] === $_POST['item'] ){
          //      $_SESSION['cart'][$key]=array('productName'=> $product_name, 
            //                           'productPrice' => $product_price, 
              //                         'productQuantity'=> $product_quantity);
                //                        header("location:viewCart.php");
            //}
        //}
    //}
}
else{
    header("location:form/login.php");
}

?>