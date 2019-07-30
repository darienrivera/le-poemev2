<!DOCTYPE html>
<html>
<head>
	<title>Finalizar Compra</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link href="./css/style.css" rel="stylesheet">
</head>
<?php include 'header.php';?>

<?php
  if(isset($_SESSION['username'])){
    $uid= $_SESSION["username"];
  ?>

<body>


<br><br>
	<form action="" method="post">
		<div class="container container-checkout">
		
        <div class="row row-checkout">
          <div class="col-50">
            <h3>Derección de Envío</h3>
            <br>
            <label for="fname"><i class="fa fa-user"></i> Nombre Completo</label>
            <input type="text" id="name" name="uname" placeholder="Fernanda Rios" required>
            <label for="email"><i class="fa fa-envelope"></i> Correo Electrónico</label><br>
            <input type="text" id="name" name="umail" placeholder="fernandarios_21@gmail.com" required>
            <label for="adr"><i class="fa fa-location-arrow"></i> Address</label>
            <input type="text" id="address" name="address" placeholder="Calle Los Tulipanes #21 Col.  Jardines" required>
            <label for="adr"><i class="fa fa-mobile"></i> Foto del recibo de pago</label>
            <input type="file" name="file_img" vaue="file_img"/>
            
        </div>
        <br><br>
        <input type="submit" value="Realizar pedido" name="finalizar-pedido" class="btn btn-primary btn-check">
      </form>
    </div>
  </div>


  <br><br>

<div class="col-25">
    <div class="container">
      <h4>Carrito
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i> 
          <b></b>
        </span>
        </h4>
        <br>

        <?php 
   $uidquery="select * from cart where uid=$uid";
    $run=mysqli_query($link,$uidquery);
    
  while($row=mysqli_fetch_array($run)){
     
     $pid=$row['pid'];
     $quantity=$row['quantity'];
     $pname=$row['pname'];
     $price=$row['price'];


    $productquery= "select * from product where id=$pid";
    $productrun=mysqli_query($link,$productquery);

    while($productrow=mysqli_fetch_array($productrun)){
      
      $productname = $productrow["name"];
      $producttotalprice = $productrow["price"];
      $productcode = $productrow["id"];
      $pic=$productrow['img'];
      
      $pr=$productrow['price'];

      $producttotalpricetotal = $producttotalprice * $quantity;
      @$cartTotal = $producttotalpricetotal + $cartTotal;

?>
        
      
      <p><?php echo $productname;?><span class="price"><?php echo $producttotalprice; ?></span></p>
      
	
<?php
  				if (isset($_POST['finalizar-pedido'])) {
                  $uname=$_POST['uname'];
                  $email=$_POST['umail'];
                  $addr=$_POST['address'];
                  
                // $image_tmp=$_FILES['file_img']['tmp_name'];
								// $image=$_FILES['file_img']['name'];
								// 	$filetype=$_FILES["file_img"]["type"];
                //   $imagepath="product-img/".$image;
                  
								// 	move_uploaded_file($image_tmp,$imagepath);



                  $delivery='pendiente';
                  $image='imagen';
                  
                  if(mysqli_query($link,"insert into checkout(uid,pid,pname,name,email,address,quantity,price,delivery,uimg) value('$uid','$pid','$pname','$uname','$email','$addr','$quantity','$price','$delivery','$image')"))
                  {
                    echo "<script>alert('Pedido en proceso de entrega')</script>";
                    if(mysqli_query($link,"delete from cart where uid=$uid")){
                      
                    echo "<script>window.location='mispedidos.php'</script>";
                }
                  }   
                  else 
                  {
                      echo "<script>alert('Verifica los datos por favor')</script>";                           
                  }                              
                    } 
                    } 
                }
                
?>

 <hr>
      <p>Total <span class="price" style="color:black"><b><?php echo number_format($cartTotal); ?></b></span></p>
      <p>No.Cuenta BBVA <span class="price" style="color:black"><b>86587598769 </b></span></p>
    </div>
  </div>
</div>
</div>



<?php } ?>
<?php include 'footer.php';?>
</body>
</html>