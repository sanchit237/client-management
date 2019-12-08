<?php include("includes/database.php"); ?>

<?php


if(isset($_POST['hidden_id'])){

$id = $_POST['hidden_id'];
$cname = $_POST['cname'];
$cmobile = $_POST['cmobile'];
$cwork = $_POST['cwork'];
$cbudget = $_POST['cbudget'];


$query = "UPDATE clients SET cname = '$cname', cmobile = '$cmobile', cwork = '$cwork', cbudget = '$cbudget' WHERE clientid=$id";


$result = mysqli_query($connection, $query);

if($result){

	echo "records updated";
}
else{

	die("query failed". mysqli_error($connection));
}



}
?>