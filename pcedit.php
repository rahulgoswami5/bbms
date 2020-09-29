<?php
include 'db_connection.php';
$P_id=$_REQUEST['P_id'];
$P_contact=$_REQUEST['P_contact'];
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
$P_contact =$_REQUEST['P_contact'];
$update="update p_contact set P_id='".$id."',
P_contact='".$contact."' where P_id='".$P_id."' and P_contact='".$P_contact."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. <a href='pcontact.php?P_id=$P_id'>View Updated Record</a> </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
    <input type="hidden" name="new" value="1" />
<p><input type="text" name="id" placeholder="Enter Patient ID" 
required value="<?php echo $P_id;?>" /></p>
<p><input type="text" name="contact" placeholder="Enter Patient Contact" 
required value="<?php echo $P_contact;?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>