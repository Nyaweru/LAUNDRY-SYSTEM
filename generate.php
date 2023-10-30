<?php
$host = "localhost";
$dbname = "postgres";
$user = "postgres";
$password = "nyamweru";
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=nyamweru");
set_include_path(get_include_path() . PATH_SEPARATOR . "fpdf.php");

require('fpdf.php');

$name = $_POST['name'];
$email = $_POST['email'];
$day = $_POST['day'];
$timein = $_POST['timein'];
$timeout = $_POST['timeout'];

$hourly_rate = 300;

$total_hours = (strtotime($timeout) - strtotime($timein)) / 3600;
$total_pay = $total_hours * $hourly_rate;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Name: '.$name);
$pdf->Ln();
$pdf->Cell(40,10,'Email: '.$email);
$pdf->Ln();
$pdf->Cell(40,10,'Day: '.$day);
$pdf->Ln();
$pdf->Cell(40,10,'Time in: '.$timein);
$pdf->Ln();
$pdf->Cell(40,10,'Time out: '.$timeout);
$pdf->Ln();
$pdf->Cell(40,10,'Total hours: '.$total_hours);
$pdf->Ln();
$pdf->Cell(40,10,'Total pay: KES '.$total_pay);
$pdf->Output();

$query = "INSERT INTO payslips (name, email, day, timein, timeout, total_hours, total_pay) VALUES ('$name', '$email', '$day', '$timein', '$timeout', $total_hours, $total_pay)";
$result = pg_query($conn, $query);
pg_close($conn);
?>


