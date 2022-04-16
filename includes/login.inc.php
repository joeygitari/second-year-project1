<?php

if (isset($_POST['submit'])){
    echo "Successful";

    $email = $_POST["email"];
    $password = $_POST["psw"];

    echo $_POST["email"];
    echo $_POST["psw"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($email, $password) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $password);
}
else{
    header("location: ../login.php");
    exit();
}