<?php SESSION_START();
?>
<?php include 'connection.php';?>


<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Le Poeme</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	
	<link href="./css/style.css" rel="stylesheet">

	<title></title>
</head>
<body>
	
	<!--Navigation Bar-->
	
	<nav class="navbar navbar-expand-lg navbar-light "  style="background-color: #fff1de;">
		<div class="container  ">
			<div class="navbar navbar-default">
 				<a class="navbar-brand" href="index.php">
				 <img src="images/lepoemelogopng.png" style="max-width:100px; margin-top: -15px; margin-bottom: -15px;"  alt=""> 
				 </a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  				</button>
			</div>
		

		<div class="collapse navbar-collapse " id="navbarSupportedContent">
		
		
			<ul class="nav navbar-nav navbar-right">

			<li class="nav-item ">
		
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-normal" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Arreglos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="all-products.php">Todos</a>
          <a class="dropdown-item" href="amor-products.php">Amor</a>
          <a class="dropdown-item" href="familia-products.php">Familia</a>
		  <a class="dropdown-item" href="interiores-products.php">Interiores</a>
          <a class="dropdown-item" href="eventos-products.php">Eventos</a>
       
        </div>
      </li>
			

	  
	  <li class="nav-item ">
        <a class="nav-link font-weight-normal" href="https://www.facebook.com/Le-Po%C3%A8me-104147533089209/?ref=br_rs" role="button" >
          Contacto
        </a>
      </li>
	  
	  <?php if(isset($_SESSION['username'])) {
    
		} ?>

      <?php
      if(isset($_SESSION['username'])){
      $q="select * from admin";
    	$run=mysqli_query($link,$q);
    	while($row=mysqli_fetch_array($run)){
      $u=$row['username'];
			
			if($_SESSION['username']!=$u) {
echo '<li class="nav-item ">
        <a class="nav-link font-weight-normal" href="mispedidos.php" role="button" >
          Mis Pedidos
        </a>
			</li>';}

			
			if($_SESSION['username']!=$u) {
				echo '<li class="nav-item ">
						<a class="nav-link font-weight-normal" href="carrito.php" role="button" >
						  Carrito
						</a>
							</li>';}


    		if ($_SESSION['username']==$u ) {?>

    			 <li class="nav-item ">
        <a class="nav-link font-weight-normal" href="subir-product.php" role="button" >
          Subir
        </a>
      </li>

	  
	  <li class="nav-item ">
        <a class="nav-link font-weight-normal" href="stock.php" role="button" >
          Stock
        </a>
      </li>
	      			 <li class="nav-item ">
        <a class="nav-link font-weight-normal" href="pedidosadmin.php" role="button" >
          Pedidos
        </a>
	  </li>
	  


	  
	  
  <?php
		
  }
		}
}
  ?>

				 

			 

	</div> 
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<?php

if(isset($_SESSION['username'])) {
    echo '<li><a href="logout.php"><button class="btn btn-dark" style="margin-left:5px; " type="submit">Salir
            </button></a></li>';
    // echo'<li><a href="newcart.php"><button class="btn btn-dark" style="margin-left:5px; " type="submit"><i class="fa fa-shopping-cart"></i>
          //  </button></a></li>';
} 
else {
	echo '<li><a href="registrologin.php"><button class="btn btn-dark " style="margin-left:5px;" type="submit">Entrar
	</button></a></li>';

}


 
      ?>

      
    </ul>
	
	</div>

	</nav>

</body>
</html>