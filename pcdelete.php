<?php
include 'db_connection.php';
$P_id=$_REQUEST['P_id'];
$P_contact=$_REQUEST['P_contact'];
$query = "DELETE FROM p_contact WHERE P_id='$P_id' and P_contact='$P_contact'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: pcontact.php?P_id=$P_id");
?>