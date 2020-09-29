<?php
include 'db_connection.php';
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $B_id=$_REQUEST['B_id'];
    $B_contact =$_REQUEST['B_contact'];
    $B_address =$_REQUEST['B_address'];
    $M_id =$_REQUEST['M_id'];
    $ins_query="insert into bloodbank
    (`B_id`,`B_contact`,`B_address`,`M_id`)values
    ('$B_id','$B_contact','$B_address','$M_id')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='bank.php'>View Inserted Record</a>";
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
<p><input type="text" name="B_id" placeholder="Enter Blood Bank ID" required /></p>
<p><input type="number" name="B_contact" placeholder="Enter Blood Bank Contact" required /></p>
<p><input type="text" name="B_address" placeholder="Enter Blood Bank Address" required /></p>
<p><input type="text" name="M_id" placeholder="Enter Manager ID" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>