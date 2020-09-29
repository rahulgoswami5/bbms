<?php
include 'db_connection.php';
$B_id=$_REQUEST['B_id'];
$query = "DELETE FROM bloodbank WHERE B_id='$B_id'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: bank.php"); 
?>