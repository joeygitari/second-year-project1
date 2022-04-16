<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\login.css" />
    <title>New Password</title>
</head>

<body>
<section class="form-container">
<div class="heading">New Password</div>

<?php

    $selector = isset($_GET['selector']);
    $validator = isset($_GET['validator']);

    if(empty($selector) || empty($validator)){
        echo "Could not validate your request";
    } else{
        if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
            
            
?>

            <form action="includes/reset-password.inc.php" method="post">
                <input type="hidden" name="selector" value="<?php echo $selector?>">
                <input type="hidden" name="validator" value="<?php echo $validator?>">
                <input type="password" name="psw" placeholder="Enter new password...">
                <input type="password" name="psw-repeat" placeholder="Repeat new password...">
                <button type="submit" name="reset-password-submit">Reset Password</button>

        </form>

            <?php
        }
    }


?>

</section>
    <script src="scripts\login.js"></script>
</body>

</html>