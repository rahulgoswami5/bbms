<?php
include 'db_connection.php';
$D_id=$_REQUEST['D_id'];
?>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Blood Donor Contact</title>

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
      
    <h1><center>Blood Donor Contact</center></h1>
    
    <center><a href="dcinsert.php">Add Information</a><br><br></center> 
    <center><a href="donor.php"><strong>Go Back</strong></a><br><br></center>
    <center><a href="index.php"><strong>Home</strong></a><br><br><br></center>
    
    <table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Donor ID</strong></th>
<th><strong>Donor Contact</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$sel_query="Select * from d_contact where D_id='$D_id';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["D_id"]; ?></td>
<td align="center"><?php echo $row["D_contact"]; ?></td>
<td align="center">
<a href="dcedit.php?D_id=<?php echo $row["D_id"]; ?>&D_contact=<?php echo $row["D_contact"]; ?>">Edit</a>
</td>
<td align="center">
<a href="dcdelete.php?D_id=<?php echo $row["D_id"]; ?>&D_contact=<?php echo $row["D_contact"]; ?>">Delete</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
  </body>
</html>