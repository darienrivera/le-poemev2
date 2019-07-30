<?php include'connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Subir Producto</title>
</head>
<?php include 'header.php';?>

	<body id="LoginForm">
		
           
 </form>
	
		
 	 <?php
      if(isset($_SESSION['username'])){
      $q="select * from admin";
    	$run=mysqli_query($link,$q);
    	while($row=mysqli_fetch_array($run)){
    # code...
      echo $u=$row['username'];
  }

    		if ($_SESSION['username']==$u ) {?>
		
	
	<div class="container padding">
        
        	<div class="panel text-center">
        		<div class="panel-heading">
        			<h3> Subir Articulo</h3>

					<br><br>
			 			</div>
			 			
			 			
			    		<form action="" role="form" method="post" enctype="multipart/form-data">
			    				
			    					<h6>Nombre:</h6>
									
									<div class="form-group">
			                			<input type="text" name="name"  placeholder="Nombre" required="required">	
			    					
			    				</div>

								<div class="form-group"><h6>Descripción:</h6>
			    						<input type="text" name="descr" placeholder="Descripción" required="required">
			    					
			    				</div>
								
								<div class="form-group"><h6>Precio</h6>
			    						<input type="text" name="price" placeholder="Precio" required="required">
			    					
			    				</div>

			    				<div class="form-group"><h6>Stock</h6>
			    						<input type="text" name="stock" placeholder="Stock" required="required">
			    					
			    				</div>

								<h6>Categoria</h6>
								

			    			
			    					<div class="form-group">

			    						<select name="cat" placeholder="cat" required="required">
			    							<option name="Amor">Amor</option>
			    							<option name="Familia">Familia</option>
											<option name="Interiores">Interiores</option>
											<option name="Eventos">Eventos</option>
			    						</select>

										<br><br>

										<input type="file" name="file_img" vaue="file_img"/>

										<br><br><br>

			    					
			    			
			    			<input type="submit" name="submit-product" value="Subir" class="btn btn-info btn-block">
			    		
                        </form>

						<br><br>
                        

                        <?php 
                    }
}

                        else{
                        	echo "invalid username/password";
                        }
                    
                        ?>


                            <?php
							if (isset($_POST['submit-product'])) {
									$name=$_POST['name'];
									$descr=$_POST['descr'];
									$cat=$_POST['cat'];
									$price=$_POST['price'];
									$stock=$_POST['stock'];
									
									
									
									$image_tmp=$_FILES['file_img']['tmp_name'];
									$image=$_FILES['file_img']['name'];
									$filetype=$_FILES["file_img"]["type"];
									$imagepath="product-img/".$image;
									move_uploaded_file($image_tmp,$imagepath);

									if(mysqli_query($link,"insert into product(name,descr,img,price,cat,stock) value('$name','$descr','$image','$price','$cat','$stock')"))
									{
										echo "<script>alert('Articulo Subido')</script>";
									}   
									else 
									{
									    echo "<script>alert('Problemas al subir articulo')</script>";                          	
									}                              
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