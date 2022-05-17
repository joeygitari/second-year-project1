<?php
    include 'header.php';
    require 'includes/dbh.inc.php';
	$emailuser = $_SESSION["email"];
?>

<link rel="stylesheet" href="css\ticket.css" type="text/css">
<title>Flight Ticket</title>

<div class="box">
  <div class="ticket">
  <span class="airline">
    <?php

    if(isset($_SESSION["firstname"])) {
        $stmt= $conn->query("SELECT * FROM tour_guide.flights WHERE flights.Email = Email;");
        $row = $stmt->fetch_assoc();
        echo"". $row['Airline'] ."";
        } 
    ?>
  </span>
    <span class="boarding">Boarding pass</span>
    <div class="flight-content">

    <?php

        if(isset($_SESSION["firstname"])) {
            $stmt= $conn->query("SELECT * FROM tour_guide.flights WHERE flights.Email = Email;");
            $row = $stmt->fetch_assoc();
            echo"<p>FROM:: ". $row['FromAirport'] ."  <i class='fas fa-plane'></i>  ";            
            echo"  TO:: ". $row['ToAirport'] ."</p>";
        }  
    ?>

      
    <div class="flight-sub-content">
    <span class="watermark">
            <?php

               if(isset($_SESSION["firstname"])) {
                 $stmt= $conn->query("SELECT * FROM tour_guide.flights WHERE flights.Email = Email;");
                 $row = $stmt->fetch_assoc();
                 echo"". $row['Airline'] ."";
                } 
            ?>

        </span>
        

        <span class="boardingtime"> 
        <?php

            if(isset($_SESSION["firstname"])) {
                $stmt= $conn->query("SELECT * FROM tour_guide.flights WHERE flights.Email = Email;");
                $row = $stmt->fetch_assoc();
                echo"<p>DEPARTURE DATE::  ". $row['DepartureDate'] ."</p>";
            } 
        ?>
       </span>
            
         <span class="name"> 

         <?php

            if(isset($_SESSION["firstname"])) {
                 $stmt= $conn->query("SELECT * FROM tour_guide.flights WHERE flights.Email = Email;");
                 $row = $stmt->fetch_assoc();
                 echo"<p>PASSENGER'S NAME::  ". $row['FullName'] ."</p>";
            } 
         ?>
         </span>
      </div>
    </div>

    <div class="barcode"></div>
    <div class="barcode slip"></div>

  </div>
</div>

</body>
</html>