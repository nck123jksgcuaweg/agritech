<?php
$servername = "localhost";  // Change if needed
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "users";       // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get JSON from ESP8266
$json = file_get_contents('php://input');
$data = json_decode($json, true);

if ($data) {
    $soil = $data['soil'];
    $seed = $data['seed'];
    $water = $data['water'];
    $solar = $data['solar'];

    $sql = "INSERT INTO sensor_data (soil, seed, water, solar) VALUES ('$soil', '$seed', '$water', '$solar')";

    if ($conn->query($sql) === TRUE) {
        echo "Data Inserted Successfully";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "No JSON Received";
}

$conn->close();
?>
