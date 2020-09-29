<?php
include 'db_connection.php';
$Blood_stockid=$_REQUEST['Blood_stockid'];
$query = "SELECT * from bloodinventory where Blood_stockid='".$Blood_stockid."'"; 
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
$Bl_bloodgroup =$_REQUEST['Bl_bloodgroup'];
$Bl_cost =$_REQUEST['Bl_cost'];
$B_id =$_REQUEST['B_id'];
$update="update bloodinventory set Blood_stockid='".$id."',
Bl_bloodgroup='".$Bl_bloodgroup."', Bl_cost='".$Bl_cost."',
B_id='".$B_id."' where Blood_stockid='".$Blood_stockid."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. <a href='inventory.php'>View Updated Record</a> </br></br>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
    <input type="hidden" name="new" value="1" />
<p><input type="text" name="id" placeholder="Enter Blood Stock ID" 
required value="<?php echo $row['Blood_stockid'];?>" /></p>
<p><input type="text" name="Bl_bloodgroup" placeholder="Enter Blood Group" 
required value="<?php echo $row['Bl_bloodgroup'];?>" /></p>
<p><input type="number" name="Bl_cost" placeholder="Enter Cost" 
required value="<?php echo $row['Bl_cost'];?>" /></p>
<p><input type="text" name="B_id" placeholder="Enter Bank ID" 
required value="<?php echo $row['B_id'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>