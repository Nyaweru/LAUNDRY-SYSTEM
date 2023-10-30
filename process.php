<?php
// Connect to the database
$host = "localhost";
$dbname = "postgres";
$user = "postgres";
$password = "nyamweru";

// Connect to the PostgreSQL database
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=nyamweru");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Get the data from the login form
$accesstype = $_POST['accesstype'];
$username = $_POST['username'];
$password = $_POST['password'];

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert the data into the "users" table
$sql = "INSERT INTO users (accesstype, username, password) VALUES ('$accesstype', '$username', '$hashed_password')";
$result = pg_query($conn, $sql);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . pg_last_error());
}
header('Location: login2.php');
exit;


