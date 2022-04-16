<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "tour_guide";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Could not connect to server: ".mysqli_connect_error());
}