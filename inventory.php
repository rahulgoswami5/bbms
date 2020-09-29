<?php
include 'db_connection.php';
?>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Blood Inventory</title>

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <h1><center>Blood Inventory</center></h1>
    <center><a href="iinsert.php"><strong>Add Information</strong></a><br><br></center> 
    <center><a href="bank.php"><strong>Go Back</strong></a><br><br></center>
    <center><a href="index.php"><strong>Home</strong></a><br><br><br></center>
    
    <table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Stock ID</strong></th>
<th><strong>Blood Group</strong></th>
<th><strong>Cost</strong></th>
<th><strong>B ID</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$sel_query="Select * from bloodinventory;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["Blood_stockid"]; ?></td>
<td align="center"><?php echo $row["Bl_bloodgroup"]; ?></td>
<td align="center"><?php echo $row["Bl_cost"]; ?></td>
<td align="center"><?php echo $row["B_id"]; ?></td>
<td align="center">
<a href="iedit.php?Blood_stockid=<?php echo $row["Blood_stockid"]; ?>">Edit</a>
</td>
<td align="center">
<a href="idelete.php?Blood_stockid=<?php echo $row["Blood_stockid"]; ?>">Delete</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
  </body>
</html>