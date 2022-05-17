<?php

if (isset($_POST["submit"])) {
    echo "Successful";
    
    $region = $_POST["region"];
    $county = $_POST["county"];
    
    require_once '../../includes/dbh.inc.php';
    require_once '../../includes/functions.inc.php';

    $sql = "INSERT INTO places (region, county) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../add-place.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $region, $county);
    mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);

    header("location: ../place-reports.php");


}
else{
    header("location: ../add-place.php");
    exit();
}

?>
