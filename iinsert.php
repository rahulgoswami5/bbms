<?php
include 'db_connection.php';
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $Blood_stockid=$_REQUEST['Blood_stockid'];
    $Bl_bloodgroup =$_REQUEST['Bl_bloodgroup'];
    $Bl_cost =$_REQUEST['Bl_cost'];
    $B_id =$_REQUEST['B_id'];
    $ins_query="insert into bloodinventory
    (`Blood_stockid`,`Bl_bloodgroup`,`Bl_cost`,`B_id`)values
    ('$Blood_stockid','$Bl_bloodgroup','$Bl_cost','$B_id')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='inventory.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
</head>
<body>
<div class="form">
    
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="Blood_stockid" placeholder="Enter Blood Stock ID" required /></p>
<p><input type="text" name="Bl_bloodgroup" placeholder="Enter Blood Group" required /></p>
<p><input type="number" name="Bl_cost" placeholder="Enter Cost" required /></p>
<p><input type="text" name="B_id" placeholder="Enter Bank ID" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>