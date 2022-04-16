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

<title>The Kenya National Archives</title>

    <div class="container">
        <img src="../project_images\archives3.jpg">
        <div class="centered" style="color:black;" >THE KENYA NATIONAL ARCHIVES</div>
</div>
<div class="information">
        <h2>The Kenya National Archives</h2>
        <p>The Kenya National Archives was established in 1965 and it holds 40,000 volumes of public records and archives.

Its mission is to offer consultative records management services to the public service; acquire and preserve valuable public as well as private records as part of the national documentary heritage; and ensure timely accessibility of records and archives to users.</p>
        <p>The Kenya National Archives' Official Website: <a href="https://artsandculture.google.com/partner/kenya-national-archives?date=1970">The Kenya National Archives Website</a></p>
</div>
    <br>
    <div class="row">
    <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>FEATURES</b></h4>
                    <br>
                    <p><li>Exhibitions</li></p>
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
                <h4><b>ENTRY FEES(advance booking for Nursery visit)</b></h4>
                    <p>                       
                        <li>KSHS 50 For Kenyan Citizens and Residents</li>
                        <br>
                        <br>
                        <li>KSHS 200 For Non-residents</li>
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
                   <p>Kenya National Archives and Documentation Service</p> <p>PO BOX 49210 0010</p> <p>Nairobi, Kenya.</p>
                    <p> Telephone:
                <p><a href="tel:  +254 02 228 959">Call  +254 02 228 959</a></p>
                <p><a href="tel: +254 20 2228020">Call +254 20 2228020</a></p> </p>
                <p>Email:
                <p><a href=" mailto:info@archives.go.ke"> info@archives.go.ke</a></p>    
                <br>               
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