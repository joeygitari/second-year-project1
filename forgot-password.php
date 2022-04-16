<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\login.css" />
    <title>Reset Password</title>
</head>

<body>
<section class="form-container">
<div class="heading">Reset your password</div>
<p>An email will be sent to you with instructions on how to reset your password</p>
<form action="includes/reset-request.inc.php" method="post">
     <input type="text" name="email" placeholder="Enter your email address....">
    <button type="submit" name="reset-request-submit">Receive new password by email</button>
</form>
<?php
    if(isset($_GET["reset"])){
        if($_GET["reset"] == "success"){
            echo '<p class="loginsuccess">Email Sent!</p>';
        }
    }

?>

</section>
    <script src="scripts\login.js"></script>
 
</body>

</html>