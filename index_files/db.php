<?php
// Establish database connection
$servername = "server_gajane";
$username = "gajane";
$password = "2000";
$dbname = "db_gaja";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert project details
function insertProject($title, $description, $image) {
    global $conn;
    // Perform INSERT query here
}

// Retrieve project data
function getProjects() {
    global $conn;
    // Perform SELECT query here
}

// Add more functions as needed
?>

