<?php
include 'db_connection.php';
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $P_id=$_REQUEST['P_id'];
    $P_contact =$_REQUEST['P_contact'];
    $ins_query="insert into p_contact
    (`P_id`,`P_contact`)values
    ('$P_id','$P_contact')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='pcontact.php?P_id=$P_id'>View Inserted Record</a>";
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
<p><input type="readonnly" name="P_id" placeholder="Enter Patient ID" required /></p>
<p><input type="number" name="P_contact" placeholder="Enter Patient Contact" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>