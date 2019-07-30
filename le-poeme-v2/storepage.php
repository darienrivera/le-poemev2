


<?php
include 'connection.php';
SESSION_START();
/*$cnum='1111-2222-3333-4444';
$expm="01";
$expy="2023";
$c="789";*/

 echo $cardnumber=$_POST['cardnumber'];
echo $expmonth=$_POST['expmonth'];
echo $expyear=$_POST['expyear'];
echo $cvv=$_POST['cvv'];


  
                  echo $uname=$_SESSION['username'];
                  echo $name=$_POST['name'];
                  echo $address=$_POST['address'];
                  echo $email=$_POST['email'];
                  echo $city=$_POST['city'];
                  echo $state=$_POST['state'];
                  echo $postalcode=$_POST['zip'];
                
                  $run="INSERT INTO order(uid,name,address,email,city,state,postalcode) value('$uname','$name','$address','$email','$city','$state','$postalcode')";
                  if(mysqli_query($link,$run))
                /*  if(mysqli_query($link,"insert into order(uid,name,address,email,city,state,postalcode) value('$uname','$name','$address','$email','$city','$state','$postalcode')"))*/
                  {
                    echo "<script>alert('data inserted')</script>";
                  }   
                  else 
                  {
                      echo "<script>alert('Invalid card')</script>";
                                          
                  }                              
                    
                                        
            


?>
