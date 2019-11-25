 <?php include("includes/database.php"); ?>
 <?php //session_start(); ?>

 <?php

$query = "SELECT * FROM clients";
$result = mysqli_query($connection , $query);
if(!$result){


	die("Query failed " . mysqli_error($connection));
}



   while ($row = mysqli_fetch_assoc($result)){
      $clientid = $row['clientid'];
      $clientname = $row['cname'];
      $clientmobile = $row['cmobile'];
      $clientwork = $row['cwork'];
      $clientbudget = $row['cbudget'];

 

	echo "<tr>";
	echo "<td> $clientid </td>";
    echo "<td> $clientname </td>";
    echo "<td> $clientmobile </td>";
    echo "<td> $clientwork </td>";
    echo "<td> $clientbudget </td>";
    echo "</tr>";

}
  

?>



