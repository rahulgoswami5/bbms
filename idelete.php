<?php
include 'db_connection.php';
$Blood_stockid=$_REQUEST['Blood_stockid'];
$query = "DELETE FROM bloodinventory WHERE Blood_stockid=$Blood_stockid"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: inventory.php"); 
?>