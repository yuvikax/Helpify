<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helpify";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the ngo_details table
$sql = "SELECT organisation_name, ngo_type, ngo_address, payment_link, website FROM ngo_details";
$result = $conn->query($sql);

// Generate JSON-formatted response from the retrieved data
$data = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

// Output the JSON-formatted response
header('Content-Type: application/json');
echo json_encode($data);

// Close the database connection
$conn->close();
?>
