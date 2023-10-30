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
        $item = $_POST["item"];
$quantity = $_POST["quantity"];
$checkbox= $_POST["checkbox"];

// Insert data into the timecard table
$query = "INSERT INTO stock(item, quantity, checkbox) VALUES ('$item', '$quantity', '$checkbox')";

$result = pg_query($conn, $query);

// Check if the query was successful
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
// Redirect the user back to the timecard.php form
header('Location: ADD.php');
exit;
      
?>