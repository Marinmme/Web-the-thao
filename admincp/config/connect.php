<?php
$mysqli = mysqli_connect("localhost","root","","web_mysqli");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	  // Change character set to utf8
	mysqli_set_charset($mysqli,"utf8");

	
?>