<?php
include 'db_connection.php';
$D_id=$_REQUEST['D_id'];
$query = "SELECT * from blooddonor where D_id='".$D_id."'"; 
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
$D_name =$_REQUEST['D_name'];
$D_dob =$_REQUEST['D_dob'];
$D_gender =$_REQUEST['D_gender'];
$D_bloodgroup =$_REQUEST['D_bloodgroup'];
$D_address =$_REQUEST['D_address'];
$update="update blooddonor set D_id='".$id."',
D_name='".$D_name."', D_dob='".$D_dob."',
D_gender='".$D_gender."' , D_bloodgroup = '".$D_bloodgroup."',
D_address='".$D_address."' where D_id='".$D_id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. <a href='donor.php'>View Updated Record</a> </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
    <input type="hidden" name="new" value="1" />
<p><input type="text" name="id" placeholder="Enter Donor ID" 
required value="<?php echo $row['D_id'];?>" /></p>
<p><input type="text" name="D_name" placeholder="Enter Donor Name" 
required value="<?php echo $row['D_name'];?>" /></p>
<p><input type="date" name="D_dob" placeholder="Enter Donor DOB" 
required value="<?php echo $row['D_dob'];?>" /></p>
<p><input type="text" name="D_gender" placeholder="Enter Donor Gender" 
required value="<?php echo $row['D_gender'];?>" /></p>
<p><input type="text" name="D_bloodgroup" placeholder="Enter Donor Bloodgroup" 
required value="<?php echo $row['D_bloodgroup'];?>" /></p>
<p><input type="text" name="D_address" placeholder="Enter Donor Address" 
required value="<?php echo $row['D_address'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>