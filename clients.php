
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
<div class="row justify-content-center">
<div class="col-sm-3 py-3">
 
 <h3 class="text-center">CLIENTS</h3>
 <hr>

</div>

</div>

<div class="row">
 <div class="col-sm-3 px-5">
   <p id="addmsg"></p>
 </div> 
 </div> 

<div class="row d-flex justify-content-end px-3">

<form>
 <input type="text" name="search" id="search"> 
 <input type="submit" name="submit" value="search" class="btn btn-primary" id="submit">	
</form>	
</div>

<div class="row justify-content-center py-3">

<div class="col-sm-8">
<table class="table table-bordered">
<thead>
	<tr>
	<th>s.no</th>
    <th>client name</th>
    <th>contact</th>
    <th>type of work</th>
    <th>budget</th>
    <th>edit</th>
    <th>delete</th>
    <tr>
</thead>
<tbody id="tdata">




</tbody>
</table>
<div class="row justify-content-end">
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  Add 
</button>

</div>
</div>	
</div>	



<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ADD Clients</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <form method="post">
        
        <div class="form-group">
        <label for="">Enter Client Name:</label>
        <input type="text" name="cname" class="form-control" id="cname" >	
        </div>

        <div class="form-group">
        <label for="">Enter Contact No:</label>
        <input type="text" name="cmobile" class="form-control" id="cmobile">	
        </div>

        <div class="form-group">
        <label for="">Enter work type:</label>
        <input type="text" name="cwork" class="form-control" id="cwork">	
        </div>
         
         <div class="form-group">
        <label for="">Enter Client budget:</label>
        <input type="text" name="cbudget" class="form-control" id="cbudget">	
        </div>

       <!-- <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary" value="ADD" id="submit">	
        </div> -->
        </form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="add()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<!-- update model -->
<div class="modal fade" id="up_myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ADD Clients</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <form method="post">
        
        <div class="form-group">
        <label for="">Enter Client Name:</label>
        <input type="text" name="cname" class="form-control" id="up_cname" > 
        </div>

        <div class="form-group">
        <label for="">Enter Contact No:</label>
        <input type="text" name="cmobile" class="form-control" id="up_cmobile">  
        </div>

        <div class="form-group">
        <label for="">Enter work type:</label>
        <input type="text" name="cwork" class="form-control" id="up_cwork">  
        </div>
         
         <div class="form-group">
        <label for="">Enter Client budget:</label>
        <input type="text" name="cbudget" class="form-control" id="up_cbudget">  
        </div>

       <!-- <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary" value="ADD" id="submit"> 
        </div> -->
        </form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="update()">Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="hidden" id="hidden_field">
      </div>

    </div>
  </div>
</div>


<button id="test">test</button>
<h2 id="data"></h2>
</div>

<!-- <script>
    
 $(document).ready(function(){

    $("#test").click(function(){



    alert("hello");


    });
 });


</script>
 -->



<?php include("includes/footer.php"); ?>