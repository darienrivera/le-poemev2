
<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>

	<link href="./css/style.css" rel="stylesheet">
	<title>Login</title>
</head>
<?php include 'header.php';?>

<body id="LoginForm">
			<div class="container padding">
            <div class="row login-form text-center">
             <div class="col-sm-6">
		      <div class="panel panel-default ">
			     <div class="main-div">
    	<br><br>
   					<h2>Login de  Administrador</h2>
   					<p>Introduce tu usuario y contraseña privada</p>
   				</div>
    			<form id="Login" action="" method="post">

        		<div class="form-group">


            		<input type="text" class="form-control" name="username"  placeholder="usuario" >

        		</div>

        		<div class="form-group">

            		<input type="password" class="form-control" name="password"  placeholder="Contraseña" >

        		</div>
        	
        		<input type="submit" name="sub" class="btn btn-primary" value="Entrar">

                <br>
               
           

</div>
 </form>
 <?php
    if (isset($_POST['sub']));
 {
    @$username=$_POST['username'];
    @$password=$_POST['password'];

    $q="select * from admin";
    $run=mysqli_query($link,$q);
    while($row=mysqli_fetch_array($run)){
       $id=$row['id'];
       $u=$row['username'];
       $p=$row['password'];
      
    
      if ($username==$u && $password==$p) {
        $_SESSION['username']=$username;
        echo'
        <script>
            window.location="index.php";
        </script>';
    }
    }
  
}
?>
    </div>
</div>
            </div>
            <br>
            <br>
<?php include 'footer.php';?>

</body>
</html>
