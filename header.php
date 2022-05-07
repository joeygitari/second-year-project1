<?php
    session_start();
?>
<?php
    include 'includes\dbh.inc.php';
    include 'includes\functions.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/solid/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css\profile.css" type="text/css"> -->
    <link rel="stylesheet" href="css\home.css" type="text/css">
    <link rel="stylesheet" href="css\nairobi.css" type="text/css">  
    <link rel="stylesheet" href="css\search.css" type="text/css">
    <link rel="stylesheet" href="css\chat.css" type="text/css">
    <!-- <link rel="stylesheet" href="css\flights.css" type="text/css"> -->
</head>

<body>
    
<div class="nav"  rel="stylesheet" href="css\home.css" type="text/css">
        <div class="left">
            
            <a href="home.php">Home</a>
            <div class="places">
                <button class="dropbtn">Places
                  <i class="fa fa-caret-down"></i>
                </button>
                
                <div class="places-content">
                    <li><a href="nairobi.php">Nairobi</a></li>
                    <li><a href="kisumu.php">Kisumu</a></li>

                    <li><a>Coastal Kenya</a>
                    <ul>
                       <li><a href="mombasa.php">Mombasa</a></li>
                       <li><a href="lamu.php">Lamu</a></li>
                       <li><a href="diani.php">Diani</a></li>
                       <li><a href="malindi.php">Malindi</a></li>
                       <li><a href="taita.php">Taita</a></li>
                    </ul>
                    <li>     
                    <li><a href="centralkenya.php">Central Kenya</a></li>           
                    <li><a href="riftvalley.php">Rift Valley</a></li>   
                </div>
            </div>

            <div class="activities">
                <button class="dropbtn">Activities
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="activities-content">
                    <a href="wildlife.php">Wildlife & Nature</a>
                    <a href="history.php">History & Culture</a>
                    <a href="beaches.php">Beaches</a>
                    <a href="adventures.php">Hikes & Other Adventures</a>
                </div>
            </div>
            <div class="places">
                <button class="dropbtn">Book
                  <i class="fa fa-caret-down"></i>
                </button>
                
                <div class="places-content">
                <li><a>Accomodation</a>
                    <ul>
                    <li><a href="book-nairobi.php">Nairobi</a></li>
                    <li><a href="book-kisumu.php">Kisumu</a></li>
                       <li><a href="book-mombasa.php">Mombasa</a></li>
                       <li><a href="book-lamu.php">Lamu</a></li>
                       <li><a href="book-diani.php">Diani</a></li>
                       <li><a href="book-malindi.php">Malindi</a></li>
                       <li><a href="book-taita.php">Taita</a></li>
                       <li><a href="book-centralkenya.php">Central Kenya</a></li>           
                    <li><a href="book-riftvalley.php">Rift Valley</a></li>  
                    </ul>
                    <li>
                    <li><a href="flights.php">Flights</a></li>                       
                     
                </div>
            </div>
            <a href="maps.php">Maps</a>
            <a href="javascript:void(0); " class="icon " onclick="myFunction() ">
                <i class="fa fa-bars "></i>
            </a>

            <form action="search.php" method="POST" rel="stylesheet" href="css\search.css" type="text/css">
            <div class="wrap">
            <div class="search">
                <input type="text" name="search" class="searchTerm" placeholder="search...">
                <button type="submit" name="submit-search" class="searchButton">
                <i class="fa fa-search"></i>
                </button>
            </div>
            </div>
            </form>
        </div> 

    <div class="right">
    <?php
        if(isset($_SESSION["firstname"])){
            echo "<p>Hello " .$_SESSION["firstname"]. "!</p>";
            echo "<a href='profile.php'>Profile Page</a>";
            echo "<a href='includes\logout.inc.php'>Log Out</a>";
        }
        else{
            echo "<a href='login.php'>Log in</a>";
            echo "<a href='signup.php'>Create Account</a>";
        }
    ?>
    </div>

</div>
