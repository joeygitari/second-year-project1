<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/signup.css" />
    <title>New airline</title>
</head>

<body>
    <section class="form-container">
        <div class="heading">Add Airline!</div>

        <form action="includes/airline.inc.php" method="post" class="form" id="form">
            <div class="container">
                <label for="airline"><b>Airline:<span class="required">*</span></b></label>
                <input type="text" placeholder="Enter airline name" name="airline" autocomplete="off" required>

                <button type="submit" name="submit">Add</button>
            </div>

            <div class="container ">
                <button type="button " class="cancelbtn ">Cancel</button>
            </div>

        </form>
</section>
</body>

</html>