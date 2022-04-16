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

<title>The David Sheldrick Wildlife Trust</title>

    <div class="container">
        <img src="../project_images\davids.jpeg">
        <div class="centered" >THE DAVID SHELDRICK WILDLIFE TRUST</div>
</div>
<div class="information">
        <h2>The David Sheldrick Wildlife Trust</h2>
        <p>Best known for their work to protect elephants, the Sheldrick Wildlife Trust (SWT) operates the most successful orphan elephant rescue and rehabilitation program in the world.</p>
        <p>The David Sheldrick Wildlife Trust's Official Website: <a href="https://www.sheldrickwildlifetrust.org/">The David Sheldrick Wildlife Trust Website</a></p>
</div>
    <br>
    <div class="row">
    <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>FEATURES</b></h4>
                    <br>
                    <p><li>Guided Tours</li></p>
                    <br>
                    <p><li>Art Store</li></p>
                    <br> 
                    <p><li>Adopt an Elephant</li></p>
                    <br>
                    <br>
                    <br>      
               </div>
        </div>
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                <h4><b>ENTRY FEES(advance booking for Nursery visit)</b></h4>
                    <p>
                        
                        <li>KSHS 1500 For Adults</li>
                        <br>
                        <br>
                        <li>KSHS 500 For Children</li>
                    <br> 
                    <br>   
                    <br> 
                    <br>
                    <br>   
                    <br> 
                    <br>   
                    <br> 
                     </li></p>           
               </div>
        </div>
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>CONTACTS</b></h4>
                   <p>Sheldrick Wildlife Trust Kenya</p> <p>P.O. Box 15555 Mbagathi, 00503</p> <p>Nairobi, Kenya.</p>
                    <p> Telephone:
                <p><a href="tel:  +254 (0) 202 301 396 ">Call  +254 (0) 202 301 396 </a></p>
                <p><a href="tel: +254 (0) 111 044 200">Call +254 (0) 111 044 200</a></p>
                </p>
                <br>
                <br> 
                <br>
               </div>
        </div>
        
</div>
</div>
<br>
<br>
   

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MLVBITv9h_tnIgriqGo_yRssldeF4423&ehbc=2E312F" width="640" height="480">
        </iframe>


</body>

</html>