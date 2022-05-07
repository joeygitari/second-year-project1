<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Talii Kenya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css\home.css" type="text/css">
    <link rel="stylesheet" href="slideshow.css" type="text/css">
    <link rel="stylesheet" href="css\maps.css" type="text/css">
    <link rel="stylesheet" href="css\chat.css" type="text/css">
</head>

<body>
    <div class="heading" alt="home">

        <div class="logo" >

            <link rel="stylesheet" href="css\logo.css" type="text/css">
            <div class="circ1"></div>
            <div class="circ2"></div>

        </div>
        <h1>Talii Kenya</h1>
    </div>

    <?php
        include 'header.php';
    ?> 

    <div class="slideshow" rel="stylesheet" href="slideshow.css" type="text/css">
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
                <img src="project_images\culture.jpg" alt="photo" style="width:100%">
                <div class="card-container">
                <a href="history.php"><h4><b>History & Culture</b></h4></a>                    
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="project_images\beaches2.jpg" alt="photo" style="width:100%">
                <div class="card-container">
                <a href="beaches.php"><h4><b>Beaches</b></h4></a>   
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="project_images\wildlife2.jpg" alt="photo" style="width:100%">
                <div class="card-container">
                <a href="wildlife.php"><h4><b>Wildlife</b></h4></a>   
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="project_images\Karura forest.jpg" alt="photo" style="width:100%">
                <div class="card-container">
                <a href="adventures.php"><h4><b>Hikes & Other Adventures</b></h4></a>   
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
    <!-- <footer id="footer">
    <p>&copy Copyright</p>
</footer> -->
</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="scripts\responses.js"></script>
<script src="scripts\chat.js"></script>




</html>