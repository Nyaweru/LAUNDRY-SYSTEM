<?php
$host = "localhost";
$dbname = "postgres";
$user = "postgres";
$password = "nyamweru";
// Connect to the PostgreSQL database
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=nyamweru");

// Retrieve data from the timecard form
$name = $_POST["name"];
$email = $_POST["email"];
$day = $_POST["day"];
$timein = $_POST["timein"];
$timeout=$_POST["timeout"];

// Insert data into the timecard table
$query = "INSERT INTO timecard (name, email, day, timein, timeout) VALUES ('$name', '$email', '$day', '$timein', '$timeout')";

$result = pg_query($conn, $query);

// Check if the query was successful
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
// Redirect the user back to the timecard.php form
header('Location: TIME CARD.php');
exit;


