<?php

// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpoopcrud";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "SELECT * FROM student";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . " - Name: " . $row["student_name"] . " - Age: " . $row["age"] . " - City: " . $row["city"];
  }
} else {
  echo "0 results found";
}

//close connection
$conn->close();