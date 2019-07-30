
<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link href="./css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<title>Inventario</title>
</head>
<body>	
<header>
		<?php
			include('header.php');
		?>
	</header>	
	
 	 <?php
      if(isset($_SESSION['username'])){
      $q="select * from admin";
    	$run=mysqli_query($link,$q);
    	while($row=mysqli_fetch_array($run)){
    # code...
      echo $u=$row['username'];
  }

    		if ($_SESSION['username']==$u ) {?>
	

	<body>
	




 <div class="container-fluid">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:30%">Artículo</th>
							<th style="width:10%">Precio</th>
							<th style="width:8%">Stock</th>
							
							<th style="width:10%"></th>
						</tr>

					</thead>
					<?php

    				 $productquery= "select * from product ";
    				 $productrun=mysqli_query($link,$productquery);

    				while($productrow=mysqli_fetch_array($productrun)){
    				@$productid=$productrow["id"];
    				$productname = $productrow["name"];
					$producttotalprice = $productrow["price"];
					$productcode = $productrow["id"];
					$pic=$productrow['img'];
					$stock=$productrow['stock'];
    				?>

					<tbody>
							<tr>
							<td data-th="Articulo">
								<div class="row">
								
									<div class="col-sm-10 ">
										<h3><?php echo $productname;?></h3>
										<p>xxxxxx</p>
									</div>
								</div>
							</td>
							<td data-th="Price"><?php echo $producttotalprice;?></td>
			<form action="cart.php" method="post">
							<td data-th="Quantity">
								
								<input name="quantity" id="quantity" type="text" value="<?php echo($stock)?>"/>
		  
								
							</td>	
							</form>


							

							<td class="actions" data-th="">

								 <!-- eliminar-->

			<form action="eliminarproductostock.php?del=<?php echo @$productid?>" method="post">
			<input name="deleteBtn" type="submit" value="X" class="btn btn-danger btn-sm" >
			
		</form>

			
      

							</td>
						</tr>

					</tbody>
					<?php }
				}
			}
				else{
					echo '<script>window.location="adminlogin.php"</script>';
				}
				
					?>
				</table>
			</div>
		</body>
		</html>