<?php include("includes/database.php"); ?> 
 

<?php


$query = "SELECT * FROM clients";
$result = mysqli_query($connection, $query);

if(!$result){

	die("query failed" . mysqli_error($connection));
}

$no=1;
while($row = mysqli_fetch_assoc($result)){

   $clientid = $row['clientid'];
   $cname = $row['cname'];
   $cmobile = $row['cmobile'];
   $cwork = $row['cwork'];
   $cbudget = $row['cbudget'];
   
   echo "<tr>";
   echo "<td>$no</td>";
   echo "<td>$cname</td>";
   echo "<td>$cmobile</td>";
   echo "<td>$cwork</td>";
   echo "<td>$cbudget</td>";
   echo "<td><input type='button' value='Edit' class='btn btn-dark' onclick='edi($clientid)'></td>";
   echo "<td><input type='button' value='Delete' class='btn btn-danger' onclick='deli($clientid)'></td>";
   echo "</tr>";
   $no++;

}

?>