<?php

if (isset($_POST["submit"])) {
    echo "Successful";
    
    $hotel = $_POST["hotel"];
    $county = $_POST["county"];
    
    require_once '../../includes/dbh.inc.php';
    require_once '../../includes/functions.inc.php';

    $sql = "INSERT INTO hotels (name, county) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../add-hotel.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $hotel, $county);
    mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);

    header("location: ../accommodations-reports.php");


}
else{
    header("location: ../add-hotel.php");
    exit();
}

?>
