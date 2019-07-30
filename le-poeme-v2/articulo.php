
<!DOCTYPE html>
<html>
<head>
	<title>
		Ver Articulo
	
	</title>
	<meta charset="utf-8">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link href="./css/style.css" rel="stylesheet">
	
	
	
	<link href="./css/style.css" rel="stylesheet">

	<title></title>
</head>
<body>
	<?php include 'header.php';?>

	<?php
		$productid=$_GET['product'];
	?>
	

<div class="container">
	


		<?php 
						

							$q="select * from product where id like '%$productid%'";
							$run=mysqli_query($link,$q);
							while($row=mysqli_fetch_array($run))
							{
								$id=$row['id'];
								$name=$row['name'];
								$img=$row['img'];
								$price=$row['price'];
								$descr=$row['descr'];

						?>
						<form id="form1" name="form1" method="post" action="carrito.php">	
						<input type="hidden" name="pid" id="pid" value="<?= $productid ?>" />
						<div class="card">
						<div class="row">


						<aside class="col-sm-5 border-right">


						<article class="gallery-wrap"> 


						<div class="img-big-wrap"><?php echo"


  						<div> 
  							<img src='product-img/$img'></div>
						</div>";?> 
</article> 


		</aside>
		<aside class="col-sm-6">

<article class="card-body p-5">


	<h3 class="title mb-3" style="color: #0074ff;"><?php echo $name;?></h3>

	

	

<p class="price-detail-wrap"> 
	<span class="price h2" style="color: #020021;"> 
		<span class="currency">MXN</span><span class="num"><?php echo $price;?></span>
	</span> 
	<span></span> 
</p><?php
}

?> 

<br><br>
<dl class="item-property">
  <dt>Descripción</dt>
  <dd><p> <?php echo $descr;?> </p></dd>
</dl>

<dl class="param param-feature">
  <dt>Entrega a partir de</dt>
  <dd>03/09/19</dd>
</dl> 
  

<hr>
	<div class="row">
		<div class="col-sm-3">
			<dl class="param param-inline">
			 
		<div class="col-sm-7">
			<dl class="param param-inline">
				
			</dl>  
		</div> 
	</div> 
	<hr>
	<!--<input type='submit' class="btn btn-lg btn-primary  margin-left" value="Comprar Ahora" />-->
	<br>
	<button class="btn btn-primary " style=" margin-left: 15px" type="submit"><i class="fa fa-shopping-cart"></i> Al Carrito</a>
            </button>
</article> 
		</aside>
		
 
	</div> 
</div> 

<?php include 'footer.php';?>
</div>
</form>
</body>
</html>
	
	














