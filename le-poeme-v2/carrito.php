<!DOCTYPE html>
<html>
<head>

	<link href="./css/style.css" rel="stylesheet">
	
	<title>Cart</title>
	
</head>
<body>		

	<body>
	<header>
		<?php
			include('header.php');
		?>
	</header>


	<?php
	if(isset($_SESSION['username'])){
		 $uname= $_SESSION["username"];

	}
	else{
		echo "<script>window.location='registrologin.php'</script>";
	}
	?>


	<?php

		if (isset($_POST['pid'])) {
    	 @$productid = $_POST['pid'];
    	 }
    	 else{
    	 	
    	 }

    $q="select * from cart ";
    $run=mysqli_query($link,$q);
    
    
	while($row=mysqli_fetch_array($run)){
    $uid=$row['uid'];
    $pid=$row['pid'];
     $quantity=$row['quantity'];
}

    if($_SESSION["username"]==@$uid && @$productid==@$pid ){

    	$quantity=$quantity+1;

    	$quantityup ="UPDATE cart SET quantity='$quantity' WHERE uid='$uid' AND pid='$pid'";
    	$quantityupdate=mysqli_query($link,$quantityup);
    	

    }

    else{
    	$quantity=1;
    	@$pidquery="select * from product where id=$productid";
    	$run=mysqli_query($link,$pidquery);

    	while(@$row=mysqli_fetch_array($run)){

     	echo $pname=$row['name'];
     	echo $price=$row['price'];
     	if(mysqli_query($link,"insert into cart(uid,pid,pname,quantity,price) value('$uname','$productid','$pname','$quantity','$price')"))
                  {
                   
                    /*echo "<script>window.location='thankyou.php'</script>";*/
                  }   
                  else 
                  {
                      echo "<script>alert('Data not saved')</script>";                            # code...
                  }
    	
    	
    }
    }


    

   


    $uidquery="select * from cart where uid=$uname";
    $run=mysqli_query($link,$uidquery);
    $num=mysqli_num_rows($run);
    $b=0;
    if($num>0){
    	?>


    <div class="container-fluid">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Articulo</th>
							<th style="width:10%">Precio</th>
							<th style="width:5%">Cantidad</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>

					</thead>

					<?php 
   
    
	while($row=mysqli_fetch_array($run)){
     $uid=$row['uid'];
     $pid=$row['pid'];
     $quantity=$row['quantity'];


    $productquery= "select * from product where id=$pid";
    $productrun=mysqli_query($link,$productquery);

    while($productrow=mysqli_fetch_array($productrun)){
    		@$productid=$productrow["id"];
			$productname = $productrow["name"];
			$productdescr = $productrow["descr"];
			$producttotalprice = $productrow["price"];
			$productcode = $productrow["id"];
			$pic=$productrow['img'];
			
			$pr=$productrow['price'];

			$producttotalpricetotal = $producttotalprice * $quantity;

			@$cartTotal = $producttotalpricetotal + $cartTotal;

?>					
					<tbody>
							<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs">
									<div class='img-wrap'> 
										<?php
							echo "<figure class='card card-product'>
								
									<img src='product-img/$pic' class='img-thumbnail'>
								";?>
								</div>
									</div>
									<div class="col-sm-10 ">
										<h3><?php echo $productname;?></h3>
										<p><?php echo $productdescr;?></p>
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo $producttotalprice;?></td>
			<form action="carrito.php" method="post">
							<td data-th="Quantity">
								<input name="quantity" id="quantity" type="text" value="<?php echo $quantity?>"/>
							</td>	
							</form>
							<td data-th="Subtotal" class="text-center"><?php echo number_format($producttotalprice*$quantity);?></td>
							<td class="actions" data-th="">
			<form action="eliminararticulocarrito.php?del=<?php echo @$productid?>" method="post">
			<input name="deleteBtn" type="submit" value="X" class="btn btn-danger btn-sm" >			
		</form>


							</td>
						</tr>

					</tbody>
					<?php 
					}
				}
				
						?>
					<tfoot>
						<tr>
							<td><a href="index.php" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continuar Comprando</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong><?php echo number_format($cartTotal);?></strong></td>

							<form action="newcheckout.php" method="post">
							<td>
								<a href="finalizarpedido.php" type="submit" class="btn btn-success btn-block">Hacer Pedido <i class="fa fa-angle-right"></i></button>
								<a href="eliminartodocarrito.php"<button class="btn btn-danger">Borrar Todo</button></a>
							</td>
							<input name="productname" type="hidden" value="<?php echo '$productname' ?>"/>
							<input name="cardTotal" type="hidden" value="<?php echo'$cardTotal'?>" />
						</form>


														
						</tr>
						
					</tfoot>
				</table>
				<?php
}
else{
	echo '
	<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
		<br>
			<h1 class="display-4">No hay artículos aquí :(</h1>
			<br>
		<div class="col-12"><a href="index.php" type="submit" class="btn btn-success ">Ver Productos </button></a></div>';
}
				?>
			
</div>

</body>
</html>