<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\login.css" />
    <title>Login form</title>
</head>

<body>
<section class="form-container">
<div class="heading">Welcome, Kindly Log In!</div>
    <form action="includes\login.inc.php" method="POST" class="form" id="form" onSubmit="validate();">

                <div class="container">
                    <label for="email"><b>Email<span class="required">*</span></b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" required>

                    <label for="psw"><b>Password<span class="required">*</span></b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="myInput" required>
                    <input type="checkbox" onclick="myFunction()"> Show Password

                    <button type="submit" name="submit">Login</button>

                    <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                </div>

                <div class="container">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="psw"><a href="forgot-password.php">Forgot password?</a></span>
                </div>

    </form>
    <?php 
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
           echo "<p>Fill in all fields!</p>" ;
        }
        if ($_GET["error"] == "wronglogin"){
            echo "<p>Incorrect Login!</p>" ;
         }

    }
    ?>
    <?php 
    if (isset($_GET["newpsw"])){
        if ($_GET["newpsw"] == "passwordupdated"){
           echo '<p class="loginsuccess">Your password has been reset!</p>';
        }

    }
    ?>
</section>
    <script src="scripts\login.js"></script>
</body>

</html>