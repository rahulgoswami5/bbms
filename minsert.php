<?php
include 'db_connection.php';
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $M_id=$_REQUEST['M_id'];
    $M_name =$_REQUEST['M_name'];
    $M_contact =$_REQUEST['M_contact'];
    $ins_query="insert into bloodbankmanager
    (`M_id`,`M_name`,`M_contact`)values
    ('$M_id','$M_name','$M_contact')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='manager.php'>View Inserted Record</a>";
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
<p><input type="text" name="M_id" placeholder="Enter Manager ID" required /></p>
<p><input type="text" name="M_name" placeholder="Enter Manager Name" required /></p>
<p><input type="number" name="M_contact" placeholder="Enter Manager Contact Number" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>