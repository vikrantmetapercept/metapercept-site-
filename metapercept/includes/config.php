<?php
	
	$dbcon = mysqli_connect("localhost","root","")or die("Server not Connected..");
	
	mysqli_select_db($dbcon,"db_meta")or die("database not found..");
	
	require_once("includes/validations.php");
	
	session_start();
	
	session_name('user');

?>