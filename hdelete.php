<?php
include 'db_connection.php';
$H_id=$_REQUEST['H_id'];
$query = "DELETE FROM hospital WHERE H_id='$H_id'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: hospital.php"); 
?>