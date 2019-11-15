
<?php include("includes/database.php"); ?>
<?php session_start(); ?>
<?php 

if (isset($_POST['logout'])){

  session_destroy();
  header("location:index.php");
}


?>




<?php include("includes/header.php"); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">NIDHISH INTERIOR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Clients</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Work</a>
      </li>
     
    </ul>
  </div>
  <div class="logout">
  <form action="" method="post">
  <input type="submit" value="Logout" name="logout" class="btn-primary">
</form>
</div>
</nav>


<div class="container-fluid">
<div class="row">
<div class="col-sm-3 d-flex justify-content-center py-3">
 
 <h4>Welcome  <?php echo $_SESSION['username']; ?></h3>

</div>	


<button id="j">click</button>


</div>	
</div>

<?php include("includes/footer.php"); ?>