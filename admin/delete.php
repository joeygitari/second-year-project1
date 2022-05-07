<?php
    session_start();
    include '\xampp\htdocs\project_ws\project1\includes\dbh.inc.php';
    if(isset($_GET['delete'])){
        $email = $_GET['delete'];

        $sql="DELETE FROM `user_reg` WHERE Email = '$email';";
        $result = mysqli_query($conn,$sql);
        if ($result){
            echo "Record Deleted Successfully";
            header("Location:user-reports.php");
        }else{
            die(mysqli_error($conn));
        }
    }