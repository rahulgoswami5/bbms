<?php
include 'db_connection.php';
$P_id=$_REQUEST['P_id'];
?>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Patient Contact</title>

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
      
    <h1><center>Patient Contact</center></h1>
    
    <center><a href="pcinsert.php">Add Information</a><br><br></center> 
    <center><a href="patient.php"><strong>Go Back</strong></a><br><br></center>
    <center><a href="index.php"><strong>Home</strong></a><br><br><br></center>
    
    <table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Patient ID</strong></th>
<th><strong>Patient Contact</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$sel_query="Select * from p_contact where P_id='$P_id';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["P_id"]; ?></td>
<td align="center"><?php echo $row["P_contact"]; ?></td>
<td align="center">
<a href="pcedit.php?P_id=<?php echo $row["P_id"]; ?>&P_contact=<?php echo $row["P_contact"]; ?>">Edit</a>
</td>
<td align="center">
<a href="pcdelete.php?P_id=<?php echo $row["P_id"]; ?>&P_contact=<?php echo $row["P_contact"]; ?>">Delete</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
  </body>
</html>