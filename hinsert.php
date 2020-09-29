<?php
include 'db_connection.php';
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $H_id=$_REQUEST['H_id'];
    $H_name =$_REQUEST['H_name'];
    $H_contact =$_REQUEST['H_contact'];
    $H_address =$_REQUEST['H_address'];
    $ins_query="insert into hospital
    (`H_id`,`H_name`,`H_contact`,`H_address`)values
    ('$H_id','$H_name','$H_contact','$H_address')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='hospital.php'>View Inserted Record</a>";
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
<p><input type="text" name="H_id" placeholder="Enter Hospital ID" required /></p>
<p><input type="text" name="H_name" placeholder="Enter Hospital Name" required /></p>
<p><input type="number" name="H_contact" placeholder="Enter Hospital Contact" required /></p>
<p><input type="text" name="H_address" placeholder="Enter Hospital Address" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>