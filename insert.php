<?php
    $host = "localhost";
    $user = "postgres";
    $password = "";
    $dbname = "postgres";

    // Connect to the database
    $conn = pg_connect("host=$host dbname=$dbname user=$user password=$password") or die("could not connect to server \n");

    if (!$conn) {
        echo "Error: unable to open database \n";
    } else 
        // Retrieve data from the POST request
      

        $text = $_POST['Names'];
$email = $_POST['Email'];
$telephone = $_POST['Telephone'];
$address = $_POST['Address'];
$apartment = $_POST['Apartment'];
$dateOfPick = $_POST['DateOfPick'];
$dateOfReturn = $_POST['DateOfReturn']; 

        echo "Names: $text\n";
echo   "Email: $email\n";
echo "Telephone: $telephone\n";
echo "Address: $address\n";
echo "Apartment: $apartment\n";
echo "Date of pick: $dateOfPick\n";
echo "Date of return: $dateOfReturn\n";

        // Insert the data into the database
        $query = "INSERT INTO booking (\"Names\", \"Email\", \"Telephone\", \"Address\", \"Apartment\", \"DateOfPick\", \"DateOfReturn\") VALUES ('$text', '$email', '$telephone', '$address', '$apartment',   TO_DATE('2023-05-09', 'YYYY-MM-DD'),  TO_DATE('2023-05-09', 'YYYY-MM-DD'))";
        $result = pg_query($conn, $query) ;

       if ($result) {
          header("location: BOOK.php");
       } else {
           echo "Error: " . pg_last_error($conn);
        }
    

    // Close the database connection
    pg_close($conn);
?>



