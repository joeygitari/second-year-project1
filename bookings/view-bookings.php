<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/solid/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/profile.css" type="text/css">
    <link rel="stylesheet" href="../css/search.css" type="text/css">
    <link rel="stylesheet" href="../css/home.css" type="text/css">
    <link rel="stylesheet" href="../css/view-bookings.css" type="text/css">
</head>

<body>
<div class="nav">
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

<title>Current Bookings</title>

<div class="app">
	<header class="app-header">
		<div class="app-header-logo">
			<div class="logo">
				<h1 class="logo-title">
					<span>PROFILE PAGE</span>
				</h1>
			</div>
		</div>
		<div class="app-header-navigation">
			<div class="tabs">
      <a href="..\profile.php">
					Overview
				</a>
				<a href="view-bookings.php" >
					Current Bookings
				</a> 
				<a href="past-bookings.php" >
        Paid Reservations
				</a>
				
				<a href="view-payments.php">
					Payment Methods
				</a>
				<a href="booking-reports.php">
        Your Interests
				</a>
			</div>
		</div>
		<div class="app-header-actions">
			<button class="user-profile">
			<div class="name">
            <?php
              echo "<p>" .$_SESSION["firstname"]."  ".$_SESSION["lastname"]."</p>";
            ?>    
           </div>
			</button>
			<div class="app-header-actions-buttons">
				<button class="icon-button large">
					<i class="fa fa-fw fa-comments-o"></i>
				</button>
				<button class="icon-button large">
					<i class="fa fa-bell"></i>
				</button>
			</div>
		</div>
		<div class="app-header-mobile">
			<button class="icon-button large">
				<i class="fa fa-list"></i>
			</button>
		</div>

	</header>
<section>
      <div class='tbl-header'>
      <table cellpadding='0' cellspacing='0' border='0'>
          <thead>
          <p style="color:white;">ACCOMMODATIONS</p>
            <tr>
              <th>Place</th>
              <th>Hotel</th>
              <th>Check In Date</th>
              <th>Check Out Date</th>
              <th>Total Amount</th>
              <th>Pay</th>
            </tr>
          </thead>
        </table>
      </div>
     <?php
          require '../includes/dbh.inc.php';
          require '../includes/functions.inc.php';
          $emailuser = $_SESSION["email"];

          if(isset($_SESSION["firstname"])){
          $stmt = "SELECT * FROM tour_guide.accommodation WHERE accommodation.Email = '$emailuser';";
          // $row = $stmt->fetch_assoc();
          $query_run = mysqli_query($conn,$stmt);
          if(mysqli_num_rows($query_run)>0){
            foreach($query_run as $row){
            $subtotal = $row['Price'] * $row['Adults'];
            echo "
              <table cellpadding='0' cellspacing='0' border='0'>
                    <td>" . $row['Place'] . "</td>
                    <td>" . $row['Hotel'] . "</td>
                    <td>" . $row['CheckIn'] . "</td>
                    <td>" . $row['CheckOut'] . "</td>
                    <td>".$subtotal."</td>
                    <td><button class='pay-button'><a href='view-payments.php?id=".$row['HotelId']."'>PAY</a></button></td>
              </table>";
        }
        }
      }
?>
    <div class='tbl-header'>
    <table cellpadding='0' cellspacing='0' border='0'>
        <thead>
        <p style="color:white;">FLIGHTS</p>
          <tr>
            <th>From</th>
            <th>To</th>
            <th>Airline</th>
            <th>Departure Date</th>
            <th>Total Amount</th>
            <th>Pay</th>
          </tr>
        </thead>
      </table>
    </div>
    <?php
          $emailuser = $_SESSION["email"];

          if(isset($_SESSION["firstname"])){
          $stmt = "SELECT * FROM tour_guide.flights WHERE flights.Email = '$emailuser';";
          $query_run = mysqli_query($conn,$stmt);
          if(mysqli_num_rows($query_run)>0){
            foreach($query_run as $row){
            $total = $row['Price'] * $row['Tickets'];
            echo"
              <table cellpadding='0' cellspacing='0' border='0'>
                <tbody>
              <tr>
                    <td>" . $row['FromAirport'] . "</td>
                    <td>" . $row['ToAirport'] . "</td>
                    <td>" . $row['Airline'] . "</td>
                    <td>" . $row['DepartureDate'] . "</td>
                    <td>".$total."</td>
                    <td><button class='pay-button'><a href='view-payments.php?id1=".$row['FlightId']."'>PAY</a></button></td>
                  </tr>
                </tbody>
              </table>";
            }
          }
  }
?>

</section>
			
		</div>
	</div>
</div>
<!-- <script src="https://www.paypal.com/sdk/js?client-id=AYDueCv9Jn15Mcf-t4CYJpEEug1uom8FPNgG3PD0wpS-7Sjpi7Hon8UhCKFEDfMnNKk176secQuMeBnE"></script> -->
<!-- <script src="../scripts/paypal.js"></script> -->
</body>

</html>