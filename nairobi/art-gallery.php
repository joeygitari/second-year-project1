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

<title>Nairobi Art Gallery</title>

    <div class="container">
        <img src="../project_images\The-Nairobi-Gallery_entry.png">
        <div class="centered" style="color:black;">THE NAIROBI ART GALLERY</div>
</div>
<div class="information">
        <h2>The Nairobi Art Gallery</h2>
        <p>Located at the intersection of Kenyatta Avenue/ Uhuru Highway in the heart of Nairobi City is the Nairobi Gallery.
Built in 1913, this was the Old PC’s office building fondly referred to as ‘Hatches, Matches and Dispatches’ because of the births, marriages and deaths that were recorded here.
Today, the building is a National Monument and serves as a museum holding temporary art exhibitions. -Nairobi Art Gallery
        </p>
        <p>The Nairobi Art Gallery's Official Website: <a href="https://www.museums.or.ke/nairobi-gallery/">Nairobi Gallery Website</a></p>
</div>
    <br>
    <div class="row">
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>GALLERY ACTIVITIES</b></h4>
                    <br>
                    <p><li>Art Exhibitions</li></p>
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
                    <p><li>KSHS 150 For Kenyan Adult Citizens</li>
                        <br>
                        <li>KSHS 100 For Kenyan Child Citizens</li>
                        <br>
                        <li>KSHS 600 For East African Adult Residents</li>
                        <br>
                        <li>KSHS 400 For East African Child Residents</li>
                        <br>
                        <li>KSHS 1000 For Adult Non-Residents</li>
                        <br>
                        <li>KSHS 500 For Child Non-Residents</li>
                     </li></p>                    
               </div>
        </div>
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>CONTACTS</b></h4>
                   <p>Nairobi Gallery,</p> <p> P.O.Box 40658- 00100</p> <p>Nairobi, Kenya.</p>
                    <p> Telephone:
                <p><a href="tel: +254-020-2216566">Call +254-020-2216566</a></p>
                </p>
               <p>Email:
                <p><a href="mailto:curator.oldpc@museums.or.ke">curator.oldpc@museums.or.ke</a></p>    
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