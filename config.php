<?php

$host = "";    /* Host name */
$user = "";         /* User */
$password = "";         /* Password */
$dbname = "";   /* Database name */


// Create connection
$con = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

function execute($con, $sql)
{
	$res = mysqli_query($con, $sql);
	return $res;
}