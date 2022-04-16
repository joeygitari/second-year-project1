<?php

if(isset($_POST["reset-password-submit"])){

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["psw"];
    $passwordRepeat = $_POST["psw-repeat"];

    if(empty($password) || empty($passwordRepeat)){
        header("Location: ../create-new-password.php?newpsw=empty");
        exit();
    }else if($password != $passwordRepeat){
        header("Location: ../create-new-password.php?newpsw=pswnotsame");
        exit();
    }

    $currentDate = date("U");

    require 'dbh.inc.php';
    
    $sql = "SELECT * FROM pswReset WHERE pswResetSelector=? AND pswResetExpires >= $currentDate";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();
    } else{
        mysqli_stmt_bind_param($stmt, "s", $selector, $currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if(!$row = mysqli_fetch_assoc($result)){
            echo "You need to re-submit your reset request.";
            exit();
        }else{

            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pswResetToken"]);

            if ($tokenCheck === false){
                echo "You need to re-submit your reset request.";
                exit();
            }else if ($tokenCheck === true){

                $tokenEmail = $row['pswResetEmail'];

                $sql = "SELECT * FROM user_reg WHERE Email=?;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    echo "There was an error!";
                    exit();
                } else{
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if(!$row = mysqli_fetch_assoc($result)){
                       echo "There was an error!";
                       exit();
                    }else{
                        $sql = "UPDATE user_reg SET Pass=? WHERE Email=?;";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)){
                            echo "There was an error!";
                            exit();
                        } else{
                            $newPswHash = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $newPswHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM pswReset WHERE pswResetEmail=?;";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)){
                                echo "There was an error!";
                                exit();
                            } else{
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../login.php?newpsw=passwordupdated");
                            }
                        }

                    }
                }

            }

        }
    }

}
else{
    header("Location: ../home.php");
}