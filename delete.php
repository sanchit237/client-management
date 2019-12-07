<?php include("includes/database.php"); ?>


<?php 

if(isset($_POST['id'])){

	$id = $_POST['id'];

	$query = " DELETE FROM clients WHERE clientid=$id";
	$result = mysqli_query($connection, $query);

    if(!$result){

    	die("Query failed" . mysqli_error($connection));
    }else {


    	echo "records deleted";
    }

}

?>