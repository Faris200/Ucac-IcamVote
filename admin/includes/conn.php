<?php
	$conn = new mysqli('localhost', 'aifa', 'aifa', 'elect');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>