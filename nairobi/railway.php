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

<title>The Kenya Railway Museum</title>

    <div class="container">
        <img src="../project_images\nairobi-railway-museum.jpg">
        <div class="centered" >THE KENYA RAILWAY MUSEUM</div>
</div>
<div class="information">
        <h2>The Kenya Railway Museum</h2>
        <p>The Railway Museum in Nairobi celebrates the rich history of the railroad in Kenya and its impact on the nation’s development. Among the museum’s fascinating collections are train and ship models, photographs from the original construction of the Uganda Railway, railway magazines, maps and drawings, and a silver service set used on overnight trains to Mombasa.
A collection of steam locomotives and rolling stock are also on display, including a model of the MV Liemba, built by the Germans and still in use along Lake Tanganyika.
        </p>
       
</div>
    <br>
    <div class="row">
        <div class="column">
        <div class="card">
                <div class="card-container">
                    <h4><b>FEATURES</b></h4>
                    <br>
                    <p><li>Kenya-Uganda Railway</li>
                        <br>
                        <br>
                    <li>Tanganyika Railway</li>
                    <br>
                    <br>
                    <li>East African Railways</li>
                    <br>
                    <br>
                    <li>Magadi Soda Company</li></p>     
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
                        <li>KSHS 100 For Kenyan Child/Student Citizens</li>
                        <br>
                        <li>KSHS 500 For Adult Residents</li>
                        <br>
                        <li>KSHS 200 For Child/Student Residents</li>
                        <br>
                        <li>KSHS 600 For Adult Non-Residents</li>
                        <br>
                        <li>KSHS 300 For Student Non-Residents</li>
                        <br>
                        <li>KSHS 100 For Child Non-Residents</li>
                        <br>
                        <li>KSHS 1000 For Research</li>
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
            <p><a href="tel: 0709 388 887">Call  0709 388 887</a></p>
        </p><br> 
        <p>Email:
            <p><a href="mailto:info@krc.co.ke ">info@krc.co.ke </a></p> 
            <br> 
            <br> 
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
</div>
<br>
   

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MLVBITv9h_tnIgriqGo_yRssldeF4423&ehbc=2E312F" width="640" height="480">
        </iframe>


</body>

</html>