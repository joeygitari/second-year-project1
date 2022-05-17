<?php

if (isset($_POST["submit"])) {
    echo "Successful";
    
    $airline = $_POST["airline"];
    
    require_once '../../includes/dbh.inc.php';
    require_once '../../includes/functions.inc.php';

    $sql = "INSERT INTO airlines (airline) VALUES (?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../add-airline.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $airline);
    mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);

    header("location: ../flights-reports.php");


}
else{
    header("location: ../add-airline.php");
    exit();
}

?>