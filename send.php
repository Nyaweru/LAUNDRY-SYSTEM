<?php
$host = "localhost";
$dbname = "postgres";
$user = "postgres";
$password = "nyamweru";
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=nyamweru");

$name = $_POST['name'];
$email = $_POST['email'];
$Name1 = $_POST['name'];
$Email1 = $_POST['email'];
$item = $_POST['item'];
$quantity=$_POST['quantity'];

$query = "INSERT INTO stockorder (name, email, Name1, Email1, item, quantity) VALUES ('$name', '$email', '$Name1', '$Email1', '$item', $quantity)";
$result = pg_query($conn, $query);
if ($result) {
    echo "Data entered successfully!";
  } else {
    echo "Error: Data not entered.";
  }
  header('Location: order.php');
exit;

?>