<?php
include 'db_connection.php';
?>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Hospital Information</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>

    <!-- <link rel="stylesheet" href="css/style.css" /> -->
  </head>

  <body>
    
    <!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Go Back</a>
    <a href="hinsert.php" class="w3-bar-item w3-button w3-padding-large">Add Information</a>
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w2-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w2-large">
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Go Back</a>
    <a href="hinsert.php" class="w3-bar-item w3-button w3-padding-large">Add Information</a>
    
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:20px 2px">

  <h5 class="w3-margin w3-jumbo">Hospital Information</h5>

</header>


    <table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th style="background-color:#FF0000"><strong>Hospital ID</strong></th>
<th style="background-color:#FF0000"><strong>Hospital Name</strong></th>
<th style="background-color:#FF0000"><strong>Hospital Contact</strong></th>
<th style="background-color:#FF0000" ><strong>Hospital Address</strong></th>
<th style="background-color:#FF0000"><strong>Edit</strong></th>
<th style="background-color:#FF0000"><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$sel_query="Select * from hospital;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["H_id"]; ?></td>
<td align="center"><?php echo $row["H_name"]; ?></td>
<td align="center"><?php echo $row["H_contact"]; ?></td>
<td align="center"><?php echo $row["H_address"]; ?></td>
<td align="center">
<a href="hedit.php?H_id=<?php echo $row["H_id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="hdelete.php?H_id=<?php echo $row["H_id"]; ?>">Delete</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
  </body>
</html>