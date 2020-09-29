<?php
include 'db_connection.php';
$M_id=$_REQUEST['M_id'];
$query = "SELECT * from bloodbankmanager where M_id='".$M_id."'"; 
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
$M_name =$_REQUEST['M_name'];
$M_contact =$_REQUEST['M_contact'];
$update="update bloodbankmanager set M_id='".$id."',
M_name='".$M_name."', M_contact='".$M_contact."' where M_id='".$M_id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. <a href='manager.php'>View Updated Record</a> </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
    <input type="hidden" name="new" value="1" />
<p><input type="text" name="id" placeholder="Enter Manager ID" 
required value="<?php echo $row['M_id'];?>" /></p>
<p><input type="text" name="M_name" placeholder="Enter Manager Name" 
required value="<?php echo $row['M_name'];?>" /></p>
<p><input type="number" name="M_contact" placeholder="Enter Manager Contact" 
required value="<?php echo $row['M_contact'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>