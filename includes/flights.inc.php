<?php

$host = "localhost";
$user = "root";
$pwd = "";
$db = "tour_guide";

$con= new mysqli ($host, $user, $pwd, $db);


if ($con->connect_error){
	die ("Connection failed:". $con->connect_error);
}else {
	echo "Connected successfully <br />";
}

$FromAirport = $_POST['FromAirport'];
$ToAirport = $_POST['ToAirport'];
$Airline  = $_POST['Airline'];
$Seating = $_POST['Seating'];
$DepartureDate  = $_POST['DepartureDate'];
$ReturnDate = $_POST['ReturnDate'];
$Fare = $_POST['Fare'];
$FullName  = $_POST['FullName'];
$PhoneNumber = $_POST['PhoneNumber'];
$Email = $_POST['Email'];


$sqli ="INSERT INTO tour_guide.flights (FromAirport, ToAirport, Airline, Seating, DepartureDate, ReturnDate, Fare, FullName, PhoneNumber, Email) VALUES ('$FromAirport', '$ToAirport', '$Airline', '$Seating', '$DepartureDate', '$ReturnDate', '$Fare', '$FullName', '$PhoneNumber', '$Email')";
if ($con->query($sqli) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); 
?>