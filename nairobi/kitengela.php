<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/profile.css" type="text/css"> -->
    <link rel="stylesheet" href="../css/home.css" type="text/css">
    <link rel="stylesheet" href="../css/nairobi.css" type="text/css">  
    <link rel="stylesheet" href="../css/search.css" type="text/css">
</head>

<body>
<div class="nav"  rel="stylesheet" href="css\home.css" type="text/css">
        <div class="left">
            
            <a href="../home.php">Home</a>
            <div class="places">
                <button class="dropbtn">Places
                  <i class="fa fa-caret-down"></i>
                </button>
                
                <div class="places-content">
                    <li><a href="../nairobi.php">Nairobi</a></li>
                    <li><a href="../kisumu.php">Kisumu</a></li>

                    <li><a>Coastal Kenya</a>
                    <ul>
                       <li><a href="../mombasa.php">Mombasa</a></li>
                       <li><a href="../lamu.php">Lamu</a></li>
                       <li><a href="../diani.php">Diani</a></li>
                       <li><a href="../malindi.php">Malindi</a></li>
                       <li><a href="../taita.php">Taita</a></li>
                    </ul>
                    <li>     
                    <li><a href="../centralkenya.php">Central Kenya</a></li>           
                    <li><a href="../riftvalley.php">Rift Valley</a></li>   
                </div>
            </div>

            <div class="activities">
                <button class="dropbtn">Activities
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="activities-content">
                    <a href="../wildlife.php">Wildlife & Nature</a>
                    <a href="../history.php">History & Culture</a>
                    <a href="../beaches.php">Beaches</a>
                    <a href="../adventures.php">Hikes & Other Adventures</a>
                </div>
            </div>

            <a href="../maps.php">Maps</a>
            <a href="javascript:void(0); " class="icon " onclick="myFunction() ">
                <i class="fa fa-bars "></i>
            </a>

            <form action="../search.php" method="POST" rel="stylesheet" href="css\search.css" type="text/css">
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
            echo "<a href='../profile.php'>Profile Page</a>";
            echo "<a href='../includes/logout.inc.php'>Log Out</a>";
        }
        else{
            echo "<a href='../login.php'>Log in</a>";
            echo "<a href='../signup.php'>Create Account</a>";
        }
    ?>
    </div>

</div>

<title>Kitengela Hot Glass</title>

    <div class="container">
        <img src="../project_images\hot glass.jpg">
        <div class="centered" style="color:black;">KITENGELA HOT GLASS</div>
</div>
<div class="information">
        <h2>Kitengela Hot Glass</h2>
        <p>Distinctive in spirit and design, Kitengela Hot Glass is located on the edge of Kenyan wilderness, 50 minutes from Nairobi city centre. People come from all over the world to visit, drawn by the magical and antique art of glassblowing.
Travel down onto the plains across rutted roads through scrubland & a ravine and you will be transported into another space and time. 
Step into the workshops to discover art and watch the magic of glassblowing as it happens. Sip cappuccino at a funky, chunky mosaic table in the outdoor café. Surround yourself in a secret garden of sculpture and furniture and living designs that enchant and inspire. -Anselm
        </p>
        <p>Kitengela Hot Glass's Official Website: <a href="https://www.kitengela.com/">Kitengela Hot Glass Website</a></p>
</div>
    <br>
    <div class="row">
    <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>ACTIVITIES</b></h4>
                    <br>
                    <p><li>Blowing Bubbles</li></p>
                    <br>
                    <p><li>Glassblowing demos</li></p>
                    <br> 
                    <p><li>Glasstronomique Café</li></p>  
                    <br>
                    <p><li>Art Exhibitions</li></p>
                    <br> 
                    <p><li>Art Exhibitions</li></p>
                    <br>
                    <br>              
               </div>
        </div>
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>FEES</b></h4>
                    <p><li>KSH 500 for Blowing bubbles (on request) - 3 minutes standing up to blow a giant bubble</li>
                        <br>
                        <li>KSHS 2,500 for Touching fire (one hours notice) - 15 minutes at a bench, shaping a paperweight. </li>
                        <br>
                        <li>KSHS 5,000 Blown to life (two hours notice) - 30 minutes, making a glass from start to finish, or 2 smaller objects. Can be shared with one other person.</li>
                        <br>
                        <li>KSHS 10,000 Catching light (two hours notice) - 60 minutes, 2 to 4 objects. Can be shared with up to three other people.  </li>
                        <br>
                        <br>
                    </p>                    
               </div>
        </div>
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>CONTACTS</b></h4>
                    <br>
                    <p> Telephone:
                <p><a href="tel: +254 (0)11 0001499">Call +254 (0)11 0001499</a></p>
                <br>
                <p><a href="tel: +254 (0)720 330887">Call +254 (0)720 330887</a></p>
                </p>
                <br>
               <p>Email:
                <p><a href="mailto:office@kitengela.com">office@kitengela.com</a></p>    
                <br>
                <br> 
                <br>
                <br>
                <br>
               </div>
        </div>
        
</div>
</div>
<br>
   

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MLVBITv9h_tnIgriqGo_yRssldeF4423&ehbc=2E312F" width="640" height="480">
        </iframe>


</body>

</html>