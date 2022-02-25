<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body  style="background-image: url('https://wi.wallpapertip.com/wsimgs/197-1972272_pastel-rainbow-wallpaper-pastel-rainbow-background-vertical.jpg'); background-repeat: no-repeat; background-size:1228px 620px;">
  
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">

           
    <form action="insert.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
    <a href="../mystore.php" class="text-right text-decoration-none"><--Back</a>
 <p class="text-center fw-bold fs-3 text-warning">Product Detail</p>
</div>
<div class="mb-3">
  <label class="form-label">Product Name:</label>
  <input type="text" name="Pname" class="form-control" placeholder="Enter product name">
</div>

<div class="mb-3">
  <?php
  include 'Config.php';
  $res=mysqli_query($con,'select max(Id) from admin1');
  $tab = mysqli_fetch_array($res);
  $t=$tab[0];
  $t=$t+1;
  echo "<input type='hidden' name='Id' class='form-control' value='$t'>";
  ?>
</div>

<div class='mb-3'>
  <label class='form-label'>Product Price:</label>
  <input type='text' name='Pprice' class='form-control' placeholder='Enter product price'>
</div>
<div class='mb-3'>
  <label class='form-label'>Add Product Image</label>
  <input type='file' name='Pimage' class='form-control'>
</div>
<div class='mb-3'>
  <label class='form-label'>Product Details:</label>
  <textarea name='Pdetails' cols='30' rows='2' class='form-control' placeholder='Enter product details like size,length,width...'></textarea>
</div>
<div class="mb-3">
<label class="form-label">Select page category</label>
<select class='form-select' name='Pages' onchange='checkvalue(this.value)'>
  <?php 
  include 'Config.php';
  //$con=mysqli_connect('localhost','root','','products');
  $result = mysqli_query($con,"select * from admin2");
  while($table = mysqli_fetch_array($result)) {
      echo "<option value='$table[1]'>$table[1]</option>";
          }
          echo "<option value='other'>other</option>";
  ?>
</select>
  <input type='text' name='newcategory' Id='newc' class='form-control' placeholder='Enter the new category name' style='display:none;'>
  <script>
    function checkvalue(val)
{
    if(val==="other")
       document.getElementById('newc').style.display='block';
    else
       document.getElementById('newc').style.display='none';
}
    </script>
</div>
<div class='mb-3'>
<button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
</div>
    </form>
    </div>
</div>
</div>
<!--fetch data
<div class="container">
  <div class="row">
    <div class="col-md-8 m-auto">

   
<table class="table border border-warning table-hover border my-5">

<thead class="bg-dark text-white fs-5 font-monospace text-center">
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Category</th>
    <th>Delete</th>
</thead>

<tbody class="text-center">
  <?php
  //include "Config.php";
  //$Record = mysqli_query($con, "SELECT * FROM `product`");

    //   while($row=mysqli_fetch_array($Record))

      // echo"
       
       //<tr>
      //<td>$row[Id]</td>
      //<td>$row[PName]</td>
      //<td>$row[PPrice]</td>
      //<td><img src='$row[Pimage]' height='90px' width='200px'></td>
      //<td>$row[PCategory]</td>
      //<td><a href='' class='btn btn-danger'>Home</a></td>
      //</tr>
       //";
       
  ?>
</tbody>


</table>
</div>
  </div>
</div>-->
</body>
</html>