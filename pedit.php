<?php
include 'db_connection.php';
$P_id=$_REQUEST['P_id'];
$query = "SELECT * from patient where P_id='".$P_id."'"; 
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
$P_name =$_REQUEST['P_name'];
$P_dob =$_REQUEST['P_dob'];
$P_gender =$_REQUEST['P_gender'];
$P_bloodgroup =$_REQUEST['P_bloodgroup'];
$P_address =$_REQUEST['P_address'];
$H_id =$_REQUEST['H_id'];
$update="update patient set P_id='".$id."',
P_name='".$P_name."', P_dob='".$P_dob."',
P_gender='".$P_gender."' , P_bloodgroup = '".$P_bloodgroup."',
P_address='".$P_address."', H_id='".$H_id."' where P_id='".$P_id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. <a href='patient.php'>View Updated Record</a> </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
    <input type="hidden" name="new" value="1" />
<p><input type="text" name="id" placeholder="Enter Patient ID" 
required value="<?php echo $row['P_id'];?>" /></p>
<p><input type="text" name="P_name" placeholder="Enter Patient Name" 
required value="<?php echo $row['P_name'];?>" /></p>
<p><input type="date" name="P_dob" placeholder="Enter Patient DOB" 
required value="<?php echo $row['P_dob'];?>" /></p>
<p><input type="text" name="P_gender" placeholder="Enter Patient Gender" 
required value="<?php echo $row['P_gender'];?>" /></p>
<p><input type="text" name="P_bloodgroup" placeholder="Enter Patient Bloodgroup" 
required value="<?php echo $row['P_bloodgroup'];?>" /></p>
<p><input type="text" name="P_address" placeholder="Enter Patient Address" 
required value="<?php echo $row['P_address'];?>" /></p>
<p><input type="text" name="H_id" placeholder="Enter Hospital ID" 
required value="<?php echo $row['H_id'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>