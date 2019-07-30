<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
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
	

	<!--Deslizador de imagenes-->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="margin-top:-200px;">
      <img class="d-block w-100" src="images/familia2.jpg" alt="First slide">
    </div>
    
  </div>
  


</div>

<br><br>

<!--Articulos-->
<div class="lepoeme-content">
	<div class="container-fluid">
		<div class="row">
			
		

				<div class="col-lg">
					<div class="row">

						<?php 

							$q="select * from product where cat='familia'";
							$run=mysqli_query($link,$q);
							while($row=mysqli_fetch_array($run))
							{
								$id=$row['id'];
								$name=$row['name'];
								$img=$row['img'];
								$price=$row['price'];

							

						?>
						<div class="col-md-3"><?php
							echo "<figure class='card card-product'>
								<div class='img-wrap'> 
									<img src='product-img/$img'>
									
								</div>";?>
								<figcaption class='info-wrap'>
									<?php echo"<h6 class='title text-dots'><a href='articulo.php?product=$id'>$name</a></h6>";?>
									<div class='action-wrap'>
										<a href='articulo.php?product=<?php echo $id;?>' class='btn btn-dark btn-sm float-right'> Ver </a>
										<div class='price-wrap h6'>
											<?php echo"<span class='price-new'>$ $price</span>";?>
											
										</div>
									</div> 
								</figcaption>
							</figure> 
						</div> 
					<?php
				}

				?>	
</div> 
					
				</div>
			</div>
		
	</div>
</div>


<?php include 'footer.php';?>

</body>
</html>