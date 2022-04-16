<?php

function emptyInput($firstName, $lastName, $email, $password){

    if( empty ($firstName) || empty($lastName) || empty($email) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emailExists($conn, $email){
    $sql = "SELECT * FROM user_reg WHERE Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result ($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $firstName, $lastName, $email, $phoneNumber, $password){
    $hashedpsw = password_hash($password, PASSWORD_DEFAULT); 

    $sql = "INSERT INTO user_reg (FirstName, LastName, Email, PhoneNumber, Pass) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $phoneNumber, $hashedpsw);
    mysqli_stmt_execute($stmt);


    mysqli_stmt_close($stmt);

    header("location: ../login.php?error=none");
    exit();
}

function emptyInputLogin($email, $password){

    if(empty($email) || empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password){
    $emailExists = emailExists($conn, $email);
    // $stmt = mysqli_stmt_init($conn);
    
    if ($emailExists === false){
        header("location: ../login.php?error=wronglogin1");
        exit();
    }
    $checkpsw = password_verify($password, $emailExists["Pass"]);

    if ($checkpsw === false) {
        session_start();
        $_SESSION["firstname"] = $emailExists["FirstName"];
        $_SESSION["lastname"] = $emailExists["LastName"];
        header("location: ../home.php");
        exit();
        
    }
    else {        
        header("location: ../login.php?error=wronglogin2");

    }
}