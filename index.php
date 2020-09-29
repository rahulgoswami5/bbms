<!--<!DOCTYPE html>
<?php
    include 'db_connection.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Blood Bank Management System</title>

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <h1><center>Blood Bank Management System</center></h1>
    <center>
        <a href="hospital.php"><strong>Hospital Information</strong></a><br><br>
        <a href="bank.php"><strong>Blood Bank Information</strong></a><br><br>
        <a href="donor.php"><strong>Donor Information</strong></a><br><br>
        <a href="patient.php"><strong>Patient Information</strong></a><br><br>
    </center>
      
      
  </body> 
  
</html> -->

<!DOCTYPE html>
<html lang="en">
<title>Blood Bank Management System</title>
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
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="hospital.php" class="w3-bar-item w3-button w3-padding-large">Hospital Information</a>
    <a href="bank.php" class="w3-bar-item w3-button w3-padding-large">Blood Bank Information</a>
    <a href="donor.php" class="w3-bar-item w3-button w3-padding-large">Donor Information</a>
    <a href="patient.php" class="w3-bar-item w3-button w3-padding-large">Patient Information</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="hospital.php" class="w3-bar-item w3-button w3-padding-large">Hospital Information</a>
    <a href="bank.php" class="w3-bar-item w3-button w3-padding-large">Blood Bank Information</a>
    <a href="donor.php" class="w3-bar-item w3-button w3-padding-large">Donor Information</a>
    <a href="patient.php" class="w3-bar-item w3-button w3-padding-large">Patient Information</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Blood Bank Management System</h1>

</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Become a Donor,Save life</h1>
      <h5 class="w3-padding-32">Blood is the most essential fluids of human body that helps in the smooth functioning of our body. If the body loses blood in excessive amounts, people to get deadly diseases and even die. Thus, we see how blood donation is literally life-saving which helps people. It is also a sign of humanity that unites people irrespective of caste, creed, religion and more..</h5>

      <p class="w3-text-grey">Donating blood is very beneficial for the donor as well as the acceptor. It saves lives and helps people overcome their critical situation. The blood donor’s body gets revitalized and generates new cells which freshen it up</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Become a Life Saver</h1>
      <h5 class="w3-padding-32">Your gift of blood, time or money saves lives.</h5>

      <p class="w3-text-grey">The Red Cross says that every blood donation can save up to three lives. “This drive will probably end up saving over 200 lives</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h3 class="w3-margin w3-xlarge">it's safe, it's simple and saves other life.</h3>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  

</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>