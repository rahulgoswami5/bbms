<?php
include 'db_connection.php';
$B_id=$_REQUEST['B_id'];
$query = "SELECT * from bloodbank where B_id='".$B_id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
</head>
<body>
<div class="form">
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$B_contact =$_REQUEST['B_contact'];
$B_address =$_REQUEST['B_address'];
$M_id =$_REQUEST['M_id'];
$update="update bloodbank set B_id='".$id."',
B_contact='".$B_contact."', B_address='".$B_address."',
M_id='".$M_id."' where B_id='".$B_id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. <a href='bank.php'>View Updated Record</a> </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
    <input type="hidden" name="new" value="1" />
<p><input type="text" name="id" placeholder="Enter Hospital ID" 
required value="<?php echo $row['B_id'];?>" /></p>
<p><input type="text" name="B_contact" placeholder="Enter Hospital Name" 
required value="<?php echo $row['B_contact'];?>" /></p>
<p><input type="number" name="B_address" placeholder="Enter Hospital Contact" 
required value="<?php echo $row['B_address'];?>" /></p>
<p><input type="text" name="M_id" placeholder="Enter Hospital Address" 
required value="<?php echo $row['M_id'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>