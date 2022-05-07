<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\signup.css" />
    <title>New user form</title>
</head>

<body>
    <section class="form-container">
        <div class="heading">Welcome, Create An Account!</div>

        <form action="includes\signup.inc.php" method="post" class="form" id="form">
            <div class="container">
                <label for="fname"><b>First Name<span class="required">*</span></b></label>
                <input type="text" placeholder="Enter first name" name="fname" autocomplete="off" required>

                <label for="lname"><b>Last Name<span class="required">*</span></b></label>
                <input type="text" placeholder="Enter last name" name="lname" autocomplete="off" required>

                <label for="email"><b>Email<span class="required">*</span></b></label>
                <input type="text" placeholder="Enter email" name="email" autocomplete="off" required>

                <label for="pnum"><b>Phone number</b></label>
                <input type="text" placeholder="Enter phone number" name="pnum" autocomplete="off">

                <label for="psw"><b>Password<span class="required">*</span></b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="myInput" autocomplete="off" required>
                <input type="checkbox" onclick="myFunction()"> Show Password

                <button type="submit" name="submit">Create</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
            </div>

            <div class="container ">
                <button type="button " class="cancelbtn ">Cancel</button>
            </div>

        </form>

    <?php 
    if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
           echo "<p>Fill in all fields!</p>" ;
        }
        if ($_GET["error"] == "invalidemail"){
            echo "<p>Choose a proper email!</p>" ;
         }
         if ($_GET["error"] == "emailalreadyexists"){
            echo "<p>Email already exists!</p>" ;
         }
         if ($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong, try again!</p>" ;
         }
         if ($_GET["error"] == "none"){
            echo "<p>You have successfully created an account!</p>" ;
         }
    }
    ?>
</section>


    <script src="scripts\login.js "></script>
</body>

</html>