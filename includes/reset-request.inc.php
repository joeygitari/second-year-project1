<?php
if (isset($_POST["reset-request-submit"])){

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "../create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
    
    $expires = date("U") + 1800;

    require 'dbh.inc.php';

    $userEmail = $_POST["email"];

    $sql = "DELETE FROM pswReset WHERE pswResetEmail=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();
    } else{
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pswReset(pswResetEmail, pswResetSelector, pswResetToken, pswResetExpires) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
    
    $to = $userEmail;

    $subject = 'Reset your password';

    $message = '<p>We received a password reset request. Find the link to reset your password below.
    If you did not make this request, you can ignore this email</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a href="' . $url . '">'. $url .'</a></p>';

    $headers = "From: Talii <gitarijoanne@gmail.com>\r\n";
    $headers = "Reply-to: gitarijoanne@gmail.com\r\n";
    $headers = "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: ../forgot-password.php?reset=success");


} else{
    header("Location: ../home.php");
}