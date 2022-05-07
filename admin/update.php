<?php
require_once '../includes/dbh.inc.php';
if (isset($_POST["submit"])) {
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $phoneNumber = $_POST["pnum"];
    $password = $_POST["psw"];

    $hashedpsw = password_hash($password, PASSWORD_DEFAULT); 
    
    $sql = "UPDATE user_reg SET FirstName='$firstName', LastName='$lastName', Email='$email1', PhoneNumber='$phoneNumber', Pass='$hashedpsw' WHERE Email='$email1'";
    $result = mysqli_query($conn,$sql);

    if($result) {
        echo "Updated successfully";
        header("Location:user-reports.php");
    }else{
        die(mysqli_error($conn));
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/signup.css" />
    <title>Update user form</title>
</head>

<body>
    <section class="form-container">
        <div class="heading">Update Account!</div>

        <form action="" method="post" class="form" id="form">
            <div class="container">
                <label for="fname"><b>First Name<span class="required">*</span></b></label>
                <input type="text" placeholder="Enter first name" name="fname" autocomplete="off"  required>

                <label for="lname"><b>Last Name<span class="required">*</span></b></label>
                <input type="text" placeholder="Enter last name" name="lname" autocomplete="off"  required>

                <label for="email"><b>Email<span class="required">*</span></b></label>
                <input type="text" placeholder="Enter email" name="email" autocomplete="off" required>

                <label for="pnum"><b>Phone number</b></label>
                <input type="text" placeholder="Enter phone number" name="pnum" autocomplete="off" >

                <label for="psw"><b>Password<span class="required">*</span></b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="myInput" autocomplete="off"  required>
                <input type="checkbox" onclick="myFunction()"> Show Password

                <button type="submit" name="submit">Update</button>
                <!-- <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label> -->
            </div>

            <div class="container ">
                <button type="button " class="cancelbtn ">Cancel</button>
            </div>

        </form>
</section>
    <script src="../scripts/login.js "></script>
</body>

</html>