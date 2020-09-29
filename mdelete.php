<?php
include 'db_connection.php';
$M_id=$_REQUEST['M_id'];
$query = "DELETE FROM bloodbankmanager WHERE M_id=$M_id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: manager.php"); 
?>