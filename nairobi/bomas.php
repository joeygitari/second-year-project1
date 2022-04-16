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

<title>Bomas Of Kenya</title>

    <div class="container">
        <img src="../project_images\bomass.jpg">
        <div class="centered" style="color:black;">BOMAS OF KENYA</div>
</div>
<div class="information">
        <h2>Bomas Of Kenya</h2>
        <p>Bomas of Kenya was started by the Government of Kenya in 1971 as wholly owned subsidiary of the Tourism Finance Corporation (TFC) the Company was established to Preserve, Maintain and Promote the Rich Diverse cultural values of various ethnic groups of Kenya and to act as a tourist attraction centre thus Bomas of Kenya is expected to preserve the authenticity of the Kenya’s Cultural values and to portray them in the pure form.
With the current growing interest in cultural heritage, growth in cultural tourism has increased a positive worldview of the importance of cultural resources as a tool for creating economic development while preserving cultural resources. As the premier institution in cultural resources preservation and management, Bomas of Kenya is bound to play a bigger role in the development and promotion of cultural tourism in Kenya.</p>
        <p>Bomas Of Kenya's Official Website: <a href="https://www.bomasofkenya.co.ke/">Bomas of Kenya Website</a></p>
</div>
    <br>
    <div class="row">
    <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>ACTIVITIES</b></h4>
                    <br>
                    <p><li>Cultural Performances</li></p>
                    <br>
                    <p><li>Conferencing</li></p>
                    <br> 
                    <p><li>Utamaduni Restaurant</li></p>  
                    <br>
                    <p><li>Cultural Homesteads</li></p>
                    <br> 
                    <p><li>Daily Shows</li></p>
                    <br>
                    <br>              
               </div>
        </div>
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>FEES</b></h4>
                    <p><li>KSHS 200 For Kenyan Adult Citizens</li>
                        
                        <li>KSHS 50 For Kenyan Child Citizens</li>
                        
                        <li>KSHS 50 For Kenyan Citizens; for School Parties (Nursery to Secondary)</li>
                        
                        <li>KSHS 50 For Kenyan Citizens; for University & College Students</li>
                        <br>
                        <li>KSHS 300 For East African Adult Residents</li>
                        
                        <li>KSHS 200 For East African Child & Student Residents</li>
                        <br>
                        <li>KSHS 1000 For Adult Non-Residents</li>
                        <li>KSHS 500 For Child Non-Residents</li>
                        <li>KSHS 500 For Non-Residents; College Students </li>
                     </li></p>        
               </div>
        </div>
</div>
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>CONTACTS</b></h4>
                   <p>Bomas of Kenya,</p> <p> P.O. Box 40689-00100</p> <p>Nairobi, Kenya.</p>
                    <p> Telephone:
                <p><a href="tel: +254208891802">Call +254208891802</a></p>
                <p><a href="tel: 0208068400">Call 0208068400</a></p>
                <p><a href="tel: 0208891575">Call 0208891575</a></p>
                </p>
               <p>Email:
                <p><a href="mailto:info@bomasofkenya.co.ke">info@bomasofkenya.co.ke</a></p>    
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