<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
// change local host to your host address which u want to connect 
$con = mysqli_connect("3.93.145.174","saheed","saheed","saheed");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
