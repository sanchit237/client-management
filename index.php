<?php include("includes/database.php"); ?>
<?php session_start(); ?>
<?php 



if (isset($_POST['submit'])){

   $username = mysqli_real_escape_string($connection,$_POST['username']);
   $password = mysqli_real_escape_string($connection,$_POST['password']);
  
  $query = "SELECT * FROM users WHERE username='{$username}' && password='{$password}' ";
  $result = mysqli_query($connection,$query);
  if(!$result){

   die("query failed". mysqli_error($connection));

  }

  while($row = mysqli_fetch_assoc($result)){

     $dbusername = $row['username'];
     $dbpassword = $row['password'];
  }

  if ($username !== $dbusername || $password !== $dbpassword){

    $error = "credentials not matching";
  	header("Location:index.php");
  }

  else if ($username == $dbusername && $password == $dbpassword){

  	header("Location:clients.php");
  }

}


?>


<?php include("includes/header.php"); ?>
    
<div class="container-fluid">
    
<div class="row">
<div class="col-sm-3 py-3 px-5">
    
    <h2>Nidhish Interior</h2>
    
</div>            
</div> 
   
<div class="row">
<div class="col-sm-8 py-3 px-5">
    
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/image1.jpg" class="d-block w-100" alt="image1">
    </div>
    <div class="carousel-item">
      <img src="./images/image2.jpg" class="d-block w-100" alt="image2">
    </div>
    <div class="carousel-item">
      <img src="./images/image3.jpg" class="d-block w-100" alt="image3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
                            
</div>    
    
<div class="col-sm-4 py-3 px-5">

	

    <h3>LOGIN</h3>

   <form class="py-3 was-validated" action="" method="post">
 <div class="form-group">
<label for="username">Enter username</label>
<input type="text" class="form-control" placeholder="Enter username" name="username" id="text" required>
<div class="valid-feedback">
valid.
</div>
<div class="invalid-feedback">
please enter the required fields
</div>              
 </div>  
       
 <div class="form-group">
<label for="password">Enter Password</label>
<input type="password" class="form-control" placeholder="Enter username" name="password" required>  
<div class="valid-feedback">
valid.
</div>
<div class="invalid-feedback">
please enter the required fields
</div>                    
 </div>
                       
<div class="form-group">
    
<input type="submit" class="btn btn-primary" value="login" id="button" name="submit">    
    
</div>            
        
</form>                
    
</div>    
    
</div>         
    
    
</div>
  
  
  
   
  
 <?php include("includes/footer.php"); ?>