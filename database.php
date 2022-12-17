<?php
$name = $_POST['name'];
$phone = $_POST['tel'];
$guests =  $_POST ['guests'];
$data =  $_POST ['data'];
$time =  $_POST ['time'];
$details = $_POST['details'];


$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "contacts";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Ошибка: " . $conn->connect_error);
}
$sql = "INSERT INTO contacts (name,tel,guests,data,time,details)
VALUES ($name, $phone, $guests, $data, $time, $details)";

if ($conn->query($sql) === TRUE) {
  echo "данные отправлены";
} else {
  echo "Error" . $sql . $conn->error;
}
header("Location: booking.html");

$conn->close();
?>