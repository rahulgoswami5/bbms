<?php
include 'db_connection.php';
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $D_id=$_REQUEST['D_id'];
    $D_contact =$_REQUEST['D_contact'];
    $ins_query="insert into d_contact
    (`D_id`,`D_contact`)values
    ('$D_id','$D_contact')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='dcontact.php?D_id=$D_id'>View Inserted Record</a>";
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
<p><input type="readonnly" name="D_id" placeholder="Enter Donor ID" required /></p>
<p><input type="number" name="D_contact" placeholder="Enter Donor Contact" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>