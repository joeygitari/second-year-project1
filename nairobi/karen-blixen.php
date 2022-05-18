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
            <div class="places">
                <button class="dropbtn">Book
                  <i class="fa fa-caret-down"></i>
                </button>
                
                <div class="places-content">
                <li><a>Accomodation</a>
                    <ul>
                    <li><a href="../book-nairobi.php">Nairobi</a></li>
                    <li><a href="../book-kisumu.php">Kisumu</a></li>
                       <li><a href="../book-mombasa.php">Mombasa</a></li>
                       <li><a href="../book-lamu.php">Lamu</a></li>
                       <li><a href="../book-diani.php">Diani</a></li>
                       <li><a href="../book-malindi.php">Malindi</a></li>
                       <li><a href="../book-taita.php">Taita</a></li>
                       <li><a href="../book-centralkenya.php">Central Kenya</a></li>           
                    <li><a href="../book-riftvalley.php">Rift</a></li>  
                    </ul>
                    <li>
                    <li><a href="../flights.php">Flights</a></li>                       
                     
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

<title>Karen Blixen Museum</title>

    <div class="container">
        <img src="../project_images\kb.jpg">
        <div class="centered" style="color:black;">THE KAREN BLIXEN MUSEUM</div>
</div>
<div class="information">
        <h2>The Karen Blixen Museum</h2>
        <p>Karen Blixen Museum was once the centre piece of a farm at the foot of the Ngong Hills owned by Danish Author Karen and her Swedish Husband, Baron Bror von Blixen Fincke. Located 10km from the city centre, the Museum belongs to a different time period in the history of Kenya. The farm house gained international fame with the release of the movie ‘Out of Africa’ an Oscar winning film based on Karen’s an autobiography by the same title.</p>
        <p>Karen Blixen Museum's Official Website: <a href="https://www.museums.or.ke/karen-blixen/">Karen Blixen Website</a></p>
</div>
    <br>
    <div class="row">
    <div class="column">
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
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>CONTACTS</b></h4>
                   <p>The Curator, Karen Blixen Museum</p> <p>P.O Box 40658- 00100 GPO</p> <p>Nairobi, Kenya.</p>
                    <p> Telephone:
                <p><a href="tel:  020- 8002139">Call  020- 8002139</a></p>
                <p><a href="tel: +254 746725300">Call +254 746725300</a></p>
                </p>
               <p>Email Senior Curator:
                <p><a href="mailto:jkinyanjui@museums.or.ke">jkinyanjui@museums.or.ke</a></p>    
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