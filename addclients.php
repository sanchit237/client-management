<?php include("includes/database.php"); ?>
<?php session_start(); ?>



<?php

 $cname = $_POST['cname']; 
 $cmobile = $_POST['cmobile'];
 $cwork = $_POST['cwork'];
 $cbudget = $_POST['cbudget'];


 $query = "INSERT INTO clients (cname,cmobile,cwork,cbudget) VALUES('$cname','$cmobile','$cwork','$cbudget')";
 $result = mysqli_query($connection,$query);




  ?>