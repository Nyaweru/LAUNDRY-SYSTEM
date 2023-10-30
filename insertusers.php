<?php
    $host = "localhost";
    $user = "postgres";
    $password = "nyamweru";
    $dbname = "postgres";

    // Connect to the database
    $conn = pg_connect("host=$host dbname=$dbname user=$user password=$password") or die("could not connect to server \n");

    if (!$conn) {
        echo "Error: unable to open database \n";
    } else 
        // Retrieve data from the POST request
        $name= $_POST["name"];
$password = $_POST["password"];
if (empty($name)) {
  $name = NULL;
}

// Insert data into the timecard table
$query = "INSERT INTO employee(name, password) VALUES ('$name', '$password')";

$result = pg_query($conn, $query);

// Check if the query was successful
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
// Redirect the user back to the timecard.php form
header('Location: ADD.php');
exit;