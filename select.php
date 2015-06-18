<?php

  include('connect.php'); 
  
  // Create connection
  $conn = new mysqli($Host, $Username, $Password, $Database);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 

  if (! $_GET['id'])  {
    $sql = "SELECT id, firstname, lastname FROM Users where id = '". $_GET['id'] ."'";  
  } else {
    $sql = "SELECT * FROM Users";
  }
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }
  } else {
      echo "0 results";
  }
  $conn->close();
?>
