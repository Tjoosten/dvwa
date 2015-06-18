<?php 

	require('connect.php');
	
	// Create connection
	$conn = new mysqli($Host, $Username, $Password, $Database);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO Users (firstname, lastname)
			VALUES ('". $_POST['firstname'] ."', '". $_POST['lastname'] ."')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	sleep(3);
	header("Location: http://localhost:8080");
?>
