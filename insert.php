<?php 

	require('connect.php');
	
	// Create connection
	$conn = new mysqli($Host, $Username, $Password, $Database);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO persons (firstname, lastname)
				VALUES ('". $_POST['naam'] ."', '". $_POST['lastname'] ."')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
