<?php
include 'db_connection.php';
$H_id=$_REQUEST['H_id'];
$query = "SELECT * from hospital where H_id='".$H_id."'"; 
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
$H_name =$_REQUEST['H_name'];
$H_contact =$_REQUEST['H_contact'];
$H_address =$_REQUEST['H_address'];
$update="update hospital set H_id='".$id."',
H_name='".$H_name."', H_contact='".$H_contact."',
H_address='".$H_address."' where H_id='".$H_id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. <a href='hospital.php'>View Updated Record</a> </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
    <input type="hidden" name="new" value="1" />
<p><input type="text" name="id" placeholder="Enter Hospital ID" 
required value="<?php echo $row['H_id'];?>" /></p>
<p><input type="text" name="H_name" placeholder="Enter Hospital Name" 
required value="<?php echo $row['H_name'];?>" /></p>
<p><input type="number" name="H_contact" placeholder="Enter Hospital Contact" 
required value="<?php echo $row['H_contact'];?>" /></p>
<p><input type="text" name="H_address" placeholder="Enter Hospital Address" 
required value="<?php echo $row['H_address'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>