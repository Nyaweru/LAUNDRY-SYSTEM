<?php
    $host = "localhost";
    $dbname = "postgres";
    $user = "postgres";
    $password = "nyamweru";

$conn = pg_connect("host=localhost dbname=postgres user=postgres password=nyamweru");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

$accesstype = $_POST['accesstype'];
$username = $_POST['username'];
$password = $_POST['password'];


// Retrieve data from the users table
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = pg_query($conn, $sql);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . pg_last_error());
}

// Check if the user exists in the database
if (pg_num_rows($result) > 0) {
    $row = pg_fetch_assoc($result);
    $hashed_password = $row['password'];

    // Verify the password
    if (password_verify($password, $hashed_password)) {
        // Redirect the user to index.php
        header('Location: index.php');
        exit;
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "User not found.";
}

// Close the database connection
pg_close($conn);
?>

    </body>
</html>

    