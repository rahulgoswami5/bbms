<?php
include 'db_connection.php';
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $D_id=$_REQUEST['D_id'];
    $D_name =$_REQUEST['D_name'];
    $D_dob =$_REQUEST['D_dob'];
    $D_gender =$_REQUEST['D_gender'];
    $D_bloodgroup =$_REQUEST['D_bloodgroup'];
    $D_address =$_REQUEST['D_address'];
    $ins_query="insert into blooddonor
    (`D_id`,`D_name`,`D_dob`,`D_gender`,`D_bloodgroup`,`D_address`)values
    ('$D_id','$D_name','$D_dob','$D_gender','$D_bloodgroup','$D_address')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='donor.php'>View Inserted Record</a>";
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
<p><input type="text" name="D_id" placeholder="Enter Donor ID" required /></p>
<p><input type="text" name="D_name" placeholder="Enter Donor Name" required /></p>
<p><input type="date" name="D_dob" placeholder="Enter Donor DOB" required /></p>
<p><input type="text" name="D_gender" placeholder="Enter Donor Gender" required /></p>
<p><input type="text" name="D_bloodgroup" placeholder="Enter Donor Blood Group" required /></p>
<p><input type="text" name="D_address" placeholder="Enter Donor Address" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>