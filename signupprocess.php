<?php
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("login_database2", $con);

$sql="INSERT INTO Persons (FirstName, LastName,password)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[password]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "complete sign up";



mysql_close($con)
?>