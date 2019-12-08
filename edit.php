<?php include("includes/database.php"); ?>

<?php

if(isset($_POST['id'])){

$id = $_POST['id'];

$query = "SELECT * FROM clients WHERE clientid=$id ";
$result = mysqli_query($connection, $query);


$response = array();


while($row = mysqli_fetch_assoc($result)){

$response = $row;

}

echo json_encode($response);

}

?>
