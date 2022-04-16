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

<title>The Travelling Telescope</title>

    <div class="container">
        <img src="../project_images\planetarium1.jpeg">
        <div class="centered">THE TRAVELLING TELESCOPE- NAIROBI PLANETARIUM</div>
</div>
<div class="information">
        <h2>The Travelling Telescope - Nairobi Planetarium</h2>
        <p>The Travelling Telescope is a social enterprise dedicated to promoting social change using astronomy educational and entertaining tools. Whether you are a school, a lodge/hotel or an individual, we have a range of astronomy services for you.
They are the only astronomy company in the Eastern African region with globally competitive services.
The planetarium is a very inspiring and enjoyable immersive environment for you to get entertained as you learn about the celestial realm. 
Enjoy the views and feel like you are actually travelling through space and landing on the Moon, or navigating through the different planets and stars. 
Their fixed bamboo planetarium is in the heart of Nairobi and is a great way to be immersed in space from the city. -Nairobi Planetarium
        </p>
        <p>The Nairobi Planetarium's Official Website: <a href="https://travellingtelescope.co.uk/the-nairobi-planetarium/">Nairobi Planetarium Website</a></p>
</div>
    <br>
    <div class="row">
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>SHOWS</b></h4>
                    
                    <p>Thursdays and Fridays at 6pm and Saturdays at 11am
                        
             
                    <li>The Hot and Energetic Universe</li>
                   <br>
               
                    <li>From Earth to the Universe</li>
                    <br>
                 
                    <li>Cosmix</li>   
                    <br>
                    <li>Space Opera</li></p>     
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
                    <p><li>KSHS 500 per person. </li>
                        <br>
                        <br>
                        <li>Private booking at KSHS 25,000 (35pax)</li>
                        <br>
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
                   <p> 105 Riverside Lane, Off Riverside Drive</p> <p>Nairobi, Kenya.</p>
        <p> Telephone:
            <p><a href="tel: 0113 719096">Call 0113 719096</a></p>
        </p>
        <p>Email:
            <p><a href="mailto:info@travellingtelescope.co.uk">info@travellingtelescope.co.uk</a></p>            
            <p>Advanced Booking:
            <p><a>Till no. 5324773</a></p>     
               </div>
        </div>
</div>
</div>
<br>
   

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MLVBITv9h_tnIgriqGo_yRssldeF4423&ehbc=2E312F" width="640" height="480">
        </iframe>


</body>

</html>