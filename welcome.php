<?php
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("login_database2", $con);


$result = mysql_query("SELECT * FROM Persons
WHERE FirstName='$_POST[firstname]' and Lastname='$_POST[lastname]' and password='$_POST[password]'");

if($row = mysql_fetch_array($result))
  {
  echo "WELCOME IN YOUR HOMEPAGE";
  echo"<br />";
  }
  else
  {
  echo "ur password is wrong or u r not sign up yet.";
  echo"<br />";
  }
 
mysql_close($con)
?>