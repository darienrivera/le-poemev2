<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Entrar</title>
    <link href="./css/style.css" rel="stylesheet">

</head>

<body >
<style>
            .heading{
    font-weight:bold;
    color:white;
}
        </style>

	<?php include 'header.php';?>
    
	<div class="container-fluid">
		<div class="container">
            <br>
			<h2 class="text-center" id="title">Bienvenido a LePoeme</h2>
			 
             <hr>
             
             	<!--registro-->
			<div class="row">
				<div class="col-md-5">
                <form action="" role="form" method="post">
						<fieldset>							
                            <p class="text-uppercase pull-center"> Registrate </p>	
                            
 							<div class="form-group">
								<input type="text" name="nombre" id="username" class="form-control input-lg" placeholder="Nombre">
                            </div>
                            
                            <div class="form-group">
								<input type="text" name="apellido" id="username" class="form-control input-lg" placeholder="Apellido">
							</div>

							<div class="form-group">
								<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Correo Electrónico">
                            </div>

                            <div class="form-group">
								<input type="text" name="tel" id="tel" class="form-control input-lg" placeholder="Telefono">
                            </div>
                            
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña">
                            </div>
                            
								
							
 							<div>
                             <input type="submit" name="registro"value="Registrarse" class="btn  btn-dark">
                             </div>
                             <br><br>
                             
						</fieldset>
					</form>
                </div>
                
					<!--login-->
				<div class="col-md-2">
				
				</div>
				
				<div class="col-md-5">
                     <form id="Login" action="" method="post">
						<fieldset>							
							<p class="text-uppercase"> Inicia Sesión </p>	
 								
							<div class="form-group">
								<input type="email" name="email" id="username" class="form-control input-lg" placeholder="Correo Electrónico">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Contraseña">
							</div>
							<div>
                            <input type="submit" name="login"value="Entrar" class="btn  btn-dark">
							</div>
								 
 						</fieldset>
				</form>	
				</div>
			</div>
		</div>
		
	</div>
	



<!--Regisro-->

      <?php
							if (isset($_POST['registro'])) {
									$firstname=$_POST['nombre'];
									$lastname=$_POST['apellido'];
									$email=$_POST['email'];
									$pass=$_POST['password'];
									$tel=$_POST['tel'];

									if(mysqli_query($link,"insert into users(firstname,lastname,email,password,tel) value('$firstname','$lastname','$email','$pass','$tel')"))
									{
										echo "<script>alert('Registro con exito')</script>";
										echo "<script>window.location='login.php'</script>";
									}   
									else 
									{
									    echo "<script>alert('Verificar datos')</script>";                          	# code...
									}                              
								    }                         
                            ?> 
                            
    <!--login-->         
    
    <?php
if (isset($_POST['login']))
{	
	@$email=$_POST['email'];
	@$pwd=$_POST['password'];
	
	$q="select * from users where email='$email' && password='$pwd'";
	$run=mysqli_query($link,$q);
    while($row=mysqli_fetch_array($run))
	{
		$id=$row['id'];
		$_SESSION['username']=$id;
		
	}
	$numrows=mysqli_num_rows($run);
	if($numrows>=1)
	{
			echo'
			<script type="text/javascript">
			window.location.href = "index.php";
			</script>';
	}
	else
	{
        echo "<script>alert('Verificar datos')</script>"; 
	}
}
				  
?>         
    </div>


	<?php include 'footer.php';?>

</body>
</html>