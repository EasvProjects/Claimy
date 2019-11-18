<?php

echo "Testing deployment. This is another test from phpstorm";

$servername = "localhost";
$username = "claimy-dev";
$password = "Eav89zms";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

