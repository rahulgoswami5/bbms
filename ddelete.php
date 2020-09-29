<?php
include 'db_connection.php';
$D_id=$_REQUEST['D_id'];
$query = "DELETE FROM blooddonor WHERE D_id='$D_id'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: donor.php");
?>