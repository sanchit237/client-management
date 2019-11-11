<?php 


$connection = mysqli_connect('localhost','root','','client');
if(!$connection){
    
    
    die('connection failed'.mysqli_error($connection));
}


?>