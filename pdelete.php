<?php
include 'db_connection.php';
$P_id=$_REQUEST['P_id'];
$query = "DELETE FROM patient WHERE P_id='$P_id'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: patient.php");
?>