<?php
    session_start();
?>
<?php
    include '../includes/dbh.inc.php';
    include '../includes/functions.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/solid/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/profile.css" type="text/css">
    <link rel="stylesheet" href="../css/home.css" type="text/css">
    <link rel="stylesheet" href="../css/nairobi.css" type="text/css">  
    <link rel="stylesheet" href="../css/search.css" type="text/css">
    <link rel="stylesheet" href="../css/chat.css" type="text/css">
    <link rel="stylesheet" href="../slideshow.css" type="text/css">
    <link rel="stylesheet" href="../css/maps.css" type="text/css">
    <title>Talii Kenya</title>
</head>

<body>
<div class="heading" alt="home">
    <div class="logo" >

        <link rel="stylesheet" href="../css/logo.css" type="text/css">
        <div class="circ1"></div>
        <div class="circ2"></div>

    </div>    
    <h1>Talii Kenya</h1>
</div>   

<div class="nav"  rel="stylesheet" href="../css/home.css" type="text/css">
        <div class="left">            
            <a href="home.php">Home</a>
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
                <li><a>Accommodation</a>
                    <ul>
                    <li><a href="../book-nairobi.php">Nairobi</a></li>
                    <li><a href="../book-kisumu.php">Kisumu</a></li>
                       <li><a href="../book-mombasa.php">Mombasa</a></li>
                       <li><a href="../book-lamu.php">Lamu</a></li>
                       <li><a href="../book-diani.php">Diani</a></li>
                       <li><a href="../book-malindi.php">Malindi</a></li>
                       <li><a href="../book-taita.php">Taita</a></li>
                       <li><a href="../book-centralkenya.php">Central Kenya</a></li>           
                    <li><a href="../book-riftvalley.php">Rift Valley</a></li>  
                    </ul>
                    <li>
                    <li><a href="../flights.php">Flights</a></li>                       
                     
                </div>
            </div>
            <a href="../maps.php">Maps</a>
            <a href="javascript:void(0); " class="icon " onclick="myFunction() ">
                <i class="fa fa-bars "></i>
            </a>

            <form action="../search.php" method="POST" rel="stylesheet" href="../css/search.css" type="text/css">
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
            echo "<a href='dashboard.php'>Admin Panel</a>";
            echo "<a href='../includes/logout.inc.php'>Log Out</a>";
        }
        else{
            echo "<a href='../login.php'>Log in</a>";
            echo "<a href='../signup.php'>Create Account</a>";
        }
    ?>
    </div>

</div>

    <div class="slideshow" rel="stylesheet" href="../slideshow.css" type="text/css">
        <li><span>1</span></li>
        <li><span>2</span></li>
        <li><span>3</span></li>
        <li><span>4</span></li>
        <li><span>5</span></li>
        <li><span>6</span></li>
        <li><span>7</span></li>
        <li><span>8</span></li>
        <li><span>9</span></li>
        <li><span>10</span></li>
    </div>

    <div class=" content ">
        <div class="flag">
            <span>Discover Kenya's greatest destinations!</span>
        </div>
    </div>
    <hr>
    <br>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="../project_images/culture.jpg" alt="photo" style="width:100%">
                <div class="card-container">
                   <a href="../history.php"><h4><b>History & Culture</b></h4></a>                    
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="../project_images/beaches2.jpg" alt="photo" style="width:100%">
                <div class="card-container">
                <a href="../beaches.php"><h4><b>Beaches</b></h4></a>   
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="../project_images/wildlife2.jpg" alt="photo" style="width:100%">
                <div class="card-container">
                <a href="../wildlife.php"><h4><b>Wildlife</b></h4></a>   
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="../project_images/Karura forest.jpg" alt="photo" style="width:100%">
                <div class="card-container">
                <a href="../adventures.php"><h4><b>Hikes & Other Adventures</b></h4></a>   
                </div>
            </div>
        </div>
    </div>
    <br>
    
    <div class="information">
        <h5>OUR SERVICES</h5>
        <p>We offer a wide range of services from local and international flight tickets to hotel accomodation, transfers and excursions. We make sure to follow through on our promises to clients all the while maintaining confidentiality of sensitive information and not compromising on quality.
        </p>
    </div>
    <br>
   
    <!--chat box-->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="chat-content">
            <div class="full-chat-block">
                <!-- message container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- message -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- user input -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</body>

<script src="../scripts/responses.js"></script>
<script src="../scripts/chat.js"></script>




</html>