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
            echo "<a href='profile.php'>Profile Page</a>";
            echo "<a href='../includes/logout.inc.php'>Log Out</a>";
        }
        else{
            echo "<a href='../login.php'>Log in</a>";
            echo "<a href='../signup.php'>Create Account</a>";
        }
    ?>
    </div>

</div>

<title>Kazuri Beads Factory</title>

    <div class="container">
        <img src="../project_images\kaz.jpg">
        <div class="centered">THE KAZURI BEADS FACTORY</div>
</div>
<div class="information">
        <h2>The Kazuri Beads Factory</h2>
        <p>Kazuri, which means “small and beautiful” in Swahili, began in 1975 as a tiny workshop experimenting in hand crafted ceramic beads.
Its founder started with two single motherhood women and soon discovered that there were many others in the villages around Nairobi, most of who were disadvantaged and were in great need of regular employment.
Today Kazuri has grown tremendously and now has a large workforce of over 340 women skilled in the crafting of ceramic beads, strung into beautifully and artistically jewelry.
The flair has taken us to a different dimension of making our own unique range of pottery which reflects the culture and wildlife of Kenya. Each piece, like our beads, is handmade and hand painted in rich colors.</p>
        <p>Kazuri Beads Factory's Official Website: <a href="https://kazuri.com/">Kazuri Beads Factory Website</a></p>
</div>
    <br>
    <div class="row">
    <!-- <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>FEATURES</b></h4>
                    <br>
                    <p><li>Guided tours</li></p>
                    <br>
                    <p><li>Museum shop</li></p>
                    <br> 
                    <br>
                    <br>
                    <br>   
                    <br> 
                    <br>   
                    <br> 
                    <br>          
               </div>
        </div>
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                <h4><b>ENTRY FEES</b></h4>
                    <p><li>KSHS 200 For Kenyan Adult Citizens</li>
                        <br>
                        <li>KSHS 100 For Kenyan Child Citizens</li>
                        <br>
                        <li>KSHS 600 For East African Adult Residents</li>
                        <br>
                        <li>KSHS 400 For East African Child Residents</li>
                        <br>
                        <li>KSHS 1200 For Adult Non-Residents</li>
                        <br>
                        <li>KSHS 600 For Child Non-Residents</li>
                     </li></p>           
               </div>
        </div>
</div> -->
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>CONTACTS</b></h4>
                   <p>P.O Box 24276-00502,Mbagathi Ridge</p> <p>Karen-Nairobi, Kenya.</p>
                    <p> Telephone:
                <p><a href="tel: +254 (20) 2328905">Call +254 (20) 2328905</a></p>
                <p><a href="tel:  +254 720 953298">Call  +254 720 953298</a></p>
                </p>
               <p>Email:
                <p><a href="mailto:info@kazuri.co.ke">info@kazuri.co.ke</a></p>    
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