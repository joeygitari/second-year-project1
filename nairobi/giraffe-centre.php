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

<title>Giraffe Centre</title>

    <div class="container">
        <img src="../project_images\giraffecenterimg1.jpg">
        <div class="centered">GIRAFFE CENTRE</div>
</div>
<div class="information">
        <h2>Giraffe Centre</h2>
        <p>The Giraffe Centre is the creation of the African Fund for Endangered Wildlife (A.F.E.W. Kenya), a Kenyan non-profit organisation. Our main purpose is to educate Kenyan school children and youth on their country’s wildlife and environment, as well as give local and international visitors an opportunity to come into close contact with the world’s tallest species, the giraffe.</p>
        <p>Giraffe Centre's Official Website: <a href="https://www.giraffecentre.org/">Giraffe Centre Website</a></p>
</div>
    <br>
    <div class="row">
    <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>FEATURES</b></h4>
                    <br>
                    <p><li>Browsing Area</li></p>
                    <br>
                    <p><li>Information Centre</li></p>
                    <br> 
                    <p><li>Nature Sanctuary</li></p>  
                    <br>
                    <p><li>Tea House</li></p>
                    <br> 
                    <p><li>The Gift Shop</li></p>
                    <br>
                    <br>              
               </div>
        </div>
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>FEES</b></h4>
                    <p>
                        <br>
                        <li>KSHS 400 For Adult Residents</li>
                        <br>
                        <br>
                        <li>KSHS 200 For Child Residents (3-12 years)</li>
                        <br>
                        <br>
                        <li>KSHS 1500 For Adult Non-Residents</li>
                        <br>
                        <br>
                        <li>KSHS 750 For Child Non-Residents (3-12 years)</li>
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
                   <p>AFEW (K) Ltd. – Giraffe Centre,</p> <p>P.O. Box 15124-00509</p> <p>Nairobi, Kenya.</p>
                    <p> Telephone:
                <p><a href="tel:  +254-20-8070804">Call  +254-20-8070804</a></p>
                <p><a href="tel: +254-734-890952">Call +254-734-890952</a></p>
                <p><a href="tel: +254-723-786165">Call +254-723-786165</a></p>
                </p>
               <p>Email:
                <p><a href="mailto:info@giraffecentre.org">info@giraffecentre.org</a></p>    
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