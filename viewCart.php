<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
</head>

<body style="background-image: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190620/ourmid/pngtree-gradient-geometric-silhouette-creative-safety-production-theme-poster-background-material-image_143999.jpg'); background-repeat: no-repeat; background-size:1228px 600px;">

<?php
include 'header.php';
?>

   
            <h1 class="text-center">My Cart</h1>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
            <div id="capture">
            <div class="bg-white">
                <table class="table table-bordered text-center">
                    <thead class="bg-danger text-white fs-5">
                        <th>index no.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Delete</th>
                    </thead>
                    
                    <tbody class="bg-white text-dark">
                        <?php
                       
                        $total=0;
                        $ptotal=0;
                        $i=0;
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                                $ptotal= $value['productPrice'] * $value['productQuantity'];
                                $total+= $value['productPrice'] * $value['productQuantity'];
                                $i= $key+1;
                                echo "
                                <form action='Insertcart.php' method='POST'>
                                <tr>
                                <td>$i</td>
                                <td><input type='hidden' name='PName' value='$value[productName]'>$value[productName]</td>
                                <td><input type='hidden' name='PPrice' value='$value[productPrice]'>$value[productPrice]</td>
                                <td><input type='hidden' name='PQuantity' value='$value[productQuantity]'>$value[productQuantity]</td>
                                <td>$ptotal</td>
                                
                                <td><button name='remove'>Delete</button></td>
                                <input type='hidden' name='item' value='$value[productName]'>
                                </tr>
                                </form>
                                ";
                                
                            }
                        }
                        ?>
                    </tbody>  
                </table>
                <div class='text-center bg-white text-dark'>
                <h3>Grand Total</h3>
                <h2><?php
                 echo number_format($total,2); 
                 ?></h2>
                </div>
                </div>
                </div>
                 <!-- Button trigger modal -->
                 <form action="Insertcart.php">
                   <div class="text-center">
<button type="button" name="ord" onclick="screenshot()" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Proceed
</button></div>

<script>
  function screenshot(){
  html2canvas(document.querySelector("#capture")).then(canvas => {
    
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "save-capture.php",true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("image=" + canvas.toDataURL("image/jpeg",0.9));

});
  }
</script>

</form>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Delivery Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="PaytmKit/pgRedirect.php" method="POST">

      <table>
			<tbody>
				<tr>
					<td><input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td><input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td><input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td><input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td><input type="hidden" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value= "<?php echo $total; ?>">
					</td>
				</tr>
			</tbody>
		</table>


        <input type="text" name="add1" id="add1" placeholder="Enter Name" require>
        <input type="text" name="add2" id="add2" placeholder="Address Line " require><br><br>
        <input type="text" name="add3" id="add3" placeholder="LandMark" require>
        <input type="text" name="add4" id="add4" placeholder="City" require><br><br>
        <input type="text" name="add5" id="add5" placeholder="District" require>
        <input type="text" name="add6" id="add6" placeholder="pincode" require><br><br>
        <input type="submit" value="Pay Now" class="btn btn-primary" name="submit" >
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
</div>
               
            </div>
        </div>
    </div>
</body>
</html>