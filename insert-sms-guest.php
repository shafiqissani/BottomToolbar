<?php 

	include("include/session.php");

	include ("connectdb.php");
 
	$message = $_POST['message'];
	$duration = $_POST['repeat'];
	$twebsite = $_POST['twebsite'];

    $query = "INSERT INTO `smsmessages` (`username`, `message`, `duration`) VALUES ('$twebsite', '$message', '-".$duration."')";
	
	mysql_query($query) or die(mysql_error());
	
?>
