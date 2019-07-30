<!DOCTYPE html>
<html>
<head>
	<title>Le Poeme</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Le Poeme</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link href="./css/style.css" rel="stylesheet">

	<title></title>
</head>
<body>
	<?php include 'header.php';?>
	
	<!--Carrusel de imagenes-->
	
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


</div>

<br>


<!--Categorias-->
<div class="lepoeme-content">
	<div class="container-fluid">
		<div class="row">

				<div class="col-sm-1">
				</div>

				<figure>
				<div class="col-sm-5">
					<a href="amor-products.php"><img class="center img-responsive" src="./images/amor.jpg"></a>
					<div class="carousel-caption">
				</div>
				</div>
			</figure>
					<figure>
				<div class="col-sm-6">
					<a href="familia-products.php"><img class="center img-responsive" src="./images/familia.jpg" ></a>
					<div class="carousel-caption">
					
				</div>
			</div>
		</figure>

		
						
						
		</div>				
</div> 

<div class="Epparels-content">
	<div class="container-fluid">
		<div class="row">

				<div class="col-sm-1">
				</div>

				<figure>
				<div class="col-sm-5">
					<a href="interiores-products.php"><img class="center img-responsive" src="./images/interiores.jpg"></a>
					<div class="carousel-caption">				
				</div>
				</div>
			</figure>
					<figure>
				<div class="col-sm-6">
					<a href="eventos-products.php"><img class="center img-responsive" src="./images/eventos.jpg" ></a>
					<div class="carousel-caption">
				</div>
			</div>
		</figure>

		
						
						
		</div>				
</div> 
					
				
			


<?php include 'footer.php';?>

</body>
</html>