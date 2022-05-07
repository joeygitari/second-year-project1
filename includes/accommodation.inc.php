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

$Place = $_POST['Place'];
$Hotel = $_POST['Hotel'];
$CheckIn  = $_POST['CheckIn'];
$CheckOut = $_POST['CheckOut'];
$Adults  = $_POST['Adults'];
$Children = $_POST['Children'];
$Infants = $_POST['Infants'];
$Price = $_POST['Price'];
$FullName  = $_POST['FullName'];
$PhoneNumber = $_POST['PhoneNumber'];
$Email = $_POST['Email'];


$sqli ="INSERT INTO tour_guide.accommodation (Place, Hotel, CheckIn, CheckOut, Adults, Children, Infants, Price, FullName, PhoneNumber, Email) VALUES ('$Place', '$Hotel', '$CheckIn', '$CheckOut', '$Adults', '$Children', '$Infants', '$Price', '$FullName', '$PhoneNumber', '$Email')";
if ($con->query($sqli) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . $con->error;
}
$con->close(); 
?>