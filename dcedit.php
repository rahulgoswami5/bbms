<?php
include 'db_connection.php';
$D_id=$_REQUEST['D_id'];
$D_contact=$_REQUEST['D_contact'];
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
$contact=$_REQUEST['contact'];
$D_contact =$_REQUEST['D_contact'];
$update="update d_contact set D_id='".$id."',
D_contact='".$contact."' where D_id='".$D_id."' and D_contact='".$D_contact."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. <a href='dcontact.php?D_id=$D_id'>View Updated Record</a> </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
    <input type="hidden" name="new" value="1" />
<p><input type="text" name="id" placeholder="Enter Donor ID" 
required value="<?php echo $D_id;?>" /></p>
<p><input type="text" name="contact" placeholder="Enter Donor Contact" 
required value="<?php echo $D_contact;?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>