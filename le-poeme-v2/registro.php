<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>

<body>
	<?php include 'header.php';?>
	<div class="container padding">
        <div class="row register-form">
        <div class="col-xs-6">
        	<div class="panel text-center">
        		<div class="panel-heading">
					<br>
					<h2> Registro</h2>
					<br>
			 			</div>
			 			<div class="panel-body">
			    		<form action="" role="form" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Nombre">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Apellido">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Correo Electrónico">
							</div>
							
							<div class="form-group">
			    				<input type="text" name="tel" id="tel" class="form-control input-sm" placeholder="Telefono">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirmar contraseña">
			    					</div>
								</div>
								
			    			</div>
			    			
							<input type="submit" name="submit-register"value="Registrarse" class="btn btn-info btn-block">
							
							<br><br>
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
      <?php
							if (isset($_POST['submit-register'])) {
									$firstname=$_POST['first_name'];
									$lastname=$_POST['last_name'];
									$email=$_POST['email'];
									$pass=$_POST['password'];
									$tel=$_POST['tel'];

									if(mysqli_query($link,"insert into users(firstname,lastname,email,password,tel) value('$firstname','$lastname','$email','$pass','$tel')"))
									{
										echo "<script>alert('Registro con exito')</script>";
										
									}   
									else 
									{
									    echo "<script>alert('Verificar datos')</script>";                          	# code...
									}                              
								    }                         
							?> 
	<?php include 'footer.php';?>

</body>
</html>