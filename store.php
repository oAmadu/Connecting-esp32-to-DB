<?php
// Retrieve the moisture, temperature, and humidity values from the GET request
$moisture = $_GET['moisture'];
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];

// Database credentials
$servername = "localhost";
$username = "id21175236_amu";
$password = "aA123:45";
$dbname = "id21175236_moisturedb";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['moisture'])) {
    $moisture = $_POST['moisture'];

    // Rest of your code
} else {
    print("Index is not set");
}

// Store the moisture, temperature, and humidity values in the database
$query = "INSERT INTO moisture_readings (moisture, temperature, humidity) VALUES ('$moisture', '$temperature', '$humidity')";

if ($conn->query($query) === TRUE) {
    echo "Moisture, temperature, and humidity values stored in the database";
} else {
    echo "Error storing the values: " . $conn->error;
}

// Close the database connection
$conn->close();
?>