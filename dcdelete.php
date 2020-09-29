<?php
include 'db_connection.php';
$D_id=$_REQUEST['D_id'];
$D_contact=$_REQUEST['D_contact'];
$query = "DELETE FROM d_contact WHERE D_id='$D_id' and D_contact='$D_contact'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: dcontact.php?D_id=$D_id");
?>