<?php
include 'db_connection.php';
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $P_id=$_REQUEST['P_id'];
    $P_name =$_REQUEST['P_name'];
    $P_dob =$_REQUEST['P_dob'];
    $P_gender =$_REQUEST['P_gender'];
    $P_bloodgroup =$_REQUEST['P_bloodgroup'];
    $P_address =$_REQUEST['P_address'];
    $H_id =$_REQUEST['H_id'];
    $ins_query="insert into patient
    (`P_id`,`P_name`,`P_dob`,`P_gender`,`P_bloodgroup`,`P_address`,`H_id`)values
    ('$P_id','$P_name','$P_dob','$P_gender','$P_bloodgroup','$P_address','$H_id')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='patient.php'>View Inserted Record</a>";
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
<p><input type="text" name="P_id" placeholder="Enter Patient ID" required /></p>
<p><input type="text" name="P_name" placeholder="Enter Patient Name" required /></p>
<p><input type="date" name="P_dob" placeholder="Enter Patient DOB" required /></p>
<p><input type="text" name="P_gender" placeholder="Enter Patient Gender" required /></p>
<p><input type="text" name="P_bloodgroup" placeholder="Enter Patient Blood Group" required /></p>
<p><input type="text" name="P_address" placeholder="Enter Patient Address" required /></p>
<p><input type="text" name="H_id" placeholder="Enter Hospital ID" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>