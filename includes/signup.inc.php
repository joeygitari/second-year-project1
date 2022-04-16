<?php

if (isset($_POST["submit"])) {
    echo "Successful";
    
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["pnum"];
    $password = $_POST["psw"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInput($firstName, $lastName, $email, $password) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    
    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if(emailExists($conn, $email) !== false){
        header("location: ../signup.php?error=emailalreadyexists");
        exit();
    }

    createUser($conn, $firstName, $lastName, $email, $phoneNumber, $password);
    

}
else{
    header("location: ../signup.php");
    exit();
}

?>
