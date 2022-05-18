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

<title>The Maasai Mara National Reserve</title>

    <div class="container">
        <img src="../project_images\Maasaimara.jpg" >
        <div class="centered" style="color:black;">THE MAASAI MARA</div>
</div>
<div class="information">
        <h2>The Maasai Mara</h2>
        <p>“The World Cup of Wildlife”
        From the Great Migration to close encounters with African big cats, to the crystal blue skies for a birds-eye-view of the golden African plains and its many inhabitants.The Masai Mara is a must-see for every safari traveller.
        <p>The Maasai Mara National Reserves's Official Website: <a href="https://www.maasaimarakenyapark.com/">Maasai Mara Website</p>
        </a></p>
</div>
    <br>
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="card-container">
                    <h4><b>FEATURES</b></h4>
                    <br>
                    <p><li>The Masai Mara is known for the highest concentration of wild animals in the world. More than 40% of Africa’s larger mammals can be found here. However, there’s more to the Masai Mara than endless plains. </li>
                        <br>
                        <br>
                        <br>
                    <li>Aside from the main Masai Mara National Reserve proper there are a dozen community conservancies, several group ranches and quite a few Maasai villages in the area.</li></p>                    
                    <br>
                </div>
            </div>
        </div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>PARK ACTIVITIES</b></h4>
                    <br>
                    <p><li>Camping</li>
                        <br>
                        <br>
                    <li>Safari</li>
                    <br>
                    <br>
                    <li>Seeing the wildebeast migration</li>
                    <br>
                    <br>
                    <li>Hot air balloon safaris</li></p>     
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
                    <p><li>KSHS 1000 For East African Adult Residents</li>
                        <br>
                        <li>KSHS 200 For East African Children Residents</li>
                        <br>
                        <li>KSHS 200 For East African Students</li>
                        <br>
                        <li>USD 70 For Adult Non-Citizens</li>
                        <br>
                        <li>USD 40 For Child Non-Citizens</li>
                        <br>
                        <li>USD 40 For Student Adult Non-Citizens</li>
                        <br>
                        <li>USD 20 For Student Children Non-Citizens</li>
                     </li></p>                    
               </div>
        </div>
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>CONTACTS</b></h4>
                    <p>The Maasai Mara National Reserve,</p><p></p>
        <p>
        </p>
        <p>Email:
            <p><a href="mailto:INFO@MASAIMARA.COM">INFO@MASAIMARA.COM</a></p>               
               </div>
        </div>
</div>
</div>
<br>
   

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MLVBITv9h_tnIgriqGo_yRssldeF4423&ehbc=2E312F" width="640" height="480">
        </iframe>


</body>

</html>