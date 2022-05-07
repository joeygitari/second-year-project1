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
$Tickets = $_POST['Tickets'];
$Price = $_POST['Price'];
$FullName  = $_POST['FullName'];
$PhoneNumber = $_POST['PhoneNumber'];
$Email = $_POST['Email'];


$sqli ="INSERT INTO tour_guide.flights (FromAirport, ToAirport, Airline, Seating, DepartureDate, ReturnDate, Fare, Tickets, Price, FullName, PhoneNumber, Email) VALUES ('$FromAirport', '$ToAirport', '$Airline', '$Seating', '$DepartureDate', '$ReturnDate', '$Fare', '$Tickets', '$Price', '$FullName', '$PhoneNumber', '$Email')";
if ($con->query($sqli) === TRUE) {
    echo "New record created successfully";
    header("location: ../ticket.php");
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); 
?>