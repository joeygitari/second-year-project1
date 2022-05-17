<?php

if (isset($_POST["submit"])) {
    echo "Successful";
    
    $activity = $_POST["activity"];
    $county = $_POST["county"];
    
    require_once '../../includes/dbh.inc.php';
    require_once '../../includes/functions.inc.php';

    $sql = "INSERT INTO activities (name, county) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../add-activity.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $activity, $county);
    mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);

    header("location: ../activity-reports.php");


}
else{
    header("location: ../add-activity.php");
    exit();
}

?>
