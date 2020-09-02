<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("corporate-website-db.cltatgui7bo5.ap-south-1.rds.amazonaws.com","root_fai","H0o1a8DD9","firstadvisorsinsurance");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
